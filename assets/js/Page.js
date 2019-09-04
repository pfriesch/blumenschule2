import Container from "react-bootstrap/Container";

require('../css/main.scss');

import React from 'react';
import ReactDOM from 'react-dom';

import Search from './components/Search';
import ItemDisplay from './components/ItemDisplay';
import MiscDisplay from './components/MiscDisplay';
import Navbar from 'react-bootstrap/Navbar';
import Col from "react-bootstrap/Col";
import Row from "react-bootstrap/Row";
import Spinner from "react-bootstrap/Spinner";
import StockDisplay from "./components/StockDisplay";
import LabelDisplay from "./components/LabelDisplay";
import RequestService from "./RequestService";
import Button from "react-bootstrap/Button";


class LabelPrintingPage extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            amount: 1,

            item: {
                articleId: "",
                variantId: "",
                code: "",
                name: "",
                name_botanic: "",
                description: "",
                labelText: "",
                imgURL: "",
                stock: {
                    storageLocationId: 46,
                    quantity: "",
                }
            },
            withBarcode: false,
            isDinA6Printing: false,
            isGlobalLoading: false,
            dinA6LabelQueue: [],
            storageLocations: [
                {'id': 42, 'label': 'Laden'},
                {'id': 43, 'label': 'Haus-1'},
                {'id': 44, 'label': 'Haus-3'},
                {'id': 45, 'label': 'Staudenbeet1'},
                {'id': 46, 'label': 'Block1'},
                {'id': 47, 'label': 'Sonstige1'},
            ],
            debugImg: null,
            labelPdfURL: "/publicprint/label.pdf",
        };


        this.switchLabelFormat = this.switchLabelFormat.bind(this);
        this.handleAmountChange = this.handleAmountChange.bind(this);
        this.handleStockClick = this.handleStockClick.bind(this);
        this.handleAddtoDinA6Queue = this.handleAddtoDinA6Queue.bind(this);
        this.handleRemoveItemDinA6Queue = this.handleRemoveItemDinA6Queue.bind(this);
        this.handlePrintA6Queue = this.handlePrintA6Queue.bind(this);
        this.handleCreateLabel = this.handleCreateLabel.bind(this);
        this.handleSearchResultSetItem = this.handleSearchResultSetItem.bind(this);
        this.handleAddStock = this.handleAddStock.bind(this);
        this.handleRemoveStock = this.handleRemoveStock.bind(this);
        this.toggleBarcode = this.toggleBarcode.bind(this);

        this.requestService = new RequestService(
            () => this.setState({isGlobalLoading: true}),
            () => this.setState({isGlobalLoading: false}))

    }

    handleAddStock() {
        if (this.state.item.articleId > 1 && this.state.item.variantId > 1 && this.state.amount > 0) {
            this.requestService.addStock(this.state.item.articleId, this.state.item.variantId, this.state.amount).done((response) => {
                if (response.article_id !== this.state.item.articleId ||
                    response.variation_id !== this.state.item.variantId) {
                    alert("Something is wrong: " + response.article_id + "!==" + this.state.item.articleId +
                        " || " + response.variation_id + "!==" + this.state.item.variantId)
                }
                // ["article_id" => $article_id, "variation_id" => $variation_id, "stock" => $resultVariationStock]
                this.setState({
                    item: {
                        ...this.state.item,
                        ['stock']: {
                            ...this.state.item.stock,
                            ['storageLocationId']: response.stock.storageLocationId,
                            ['quantity']: response.stock.quantity,
                        }
                    }
                });
            })
        }

    }


    handleRemoveStock() {
        if (this.state.item.articleId > 1 && this.state.item.variantId > 1 && this.state.amount > 0) {

            this.requestService.removeStock(this.state.item.articleId, this.state.item.variantId,
                this.state.item.stock.quantity - this.state.amount
            ).done((response) => {
                if (response.article_id !== this.state.item.articleId ||
                    response.variation_id !== this.state.item.variantId) {
                    alert("Something is wrong: " + response.article_id + "!==" + this.state.item.articleId +
                        " || " + response.variation_id + "!==" + this.state.item.variantId)
                }
                this.setState({
                    item: {
                        ...this.state.item,
                        ['stock']: {
                            ...this.state.item.stock,
                            ['storageLocationId']: response.stock.storageLocationId,
                            ['quantity']: response.stock.quantity,
                        }
                    }
                });
            })
        }
    }

    handleSearchResultSetItem(_item) {
        this.setState({
            labelPdfURL: "",
        });
        this.setState({
            item: {
                ...this.state.item,
                ['articleId']: _item.article_id,
                ['variantId']: _item.variant_id,
                ['code']: _item.code || "",
                ['name']: _item.name || "",
                ['name_botanic']: _item.name_botanic || "",
                ['description']: _item.description_short || "",
                ['labelText']: _item.label_text || "",
                ['imgURL']: _item.picurl || "",
                ['stock']: {
                    ...this.state.item.stock,
                    ['storageLocationId']: _item.stock.storageLocationId,
                    ['quantity']: _item.stock.quantity,
                }
            }
        });
        this.setState({
            labelPdfURL: "/publicprint/label.pdf",
        })

    }


    switchLabelFormat() {
        this.setState((state) => ({isDinA6Printing: !state.isDinA6Printing}))
    }

    handleAmountChange(e) {

        if (e.target.value != "") {
            this.setState({amount: parseInt(e.target.value)});
        } else {
            this.setState({amount: 0});
        }
    }


    handleStockClick(storageLocationId) {
        if (this.state.item.articleId > 1 && this.state.item.variantId > 1 && this.state.amount > 0) {
            if (this.state.item.stock.storageLocationId !== storageLocationId) {
                this.setState({isGlobalLoading: true});
                return this.requestService.changeStockLocation(this.state.item, storageLocationId).done((newStock) => {
                    this.setState({
                        item: {
                            ...this.state.item,
                            ['stock']: {
                                ...this.state.item.stock,
                                ['storageLocationId']: newStock.storageLocationId,
                                ['quantity']: newStock.quantity,
                            }
                        }
                    });
                    this.setState({isGlobalLoading: false});
                })
            }
        }
    }

    handleAddtoDinA6Queue() {
        this.setState({dinA6LabelQueue: [...this.state.dinA6LabelQueue, this.state.item]})
    }


    handleRemoveItemDinA6Queue(_index) {
        const dinA6LabelQueue = [...this.state.dinA6LabelQueue];
        dinA6LabelQueue.splice(_index, 1);

        this.setState({dinA6LabelQueue: dinA6LabelQueue})

    }

    handlePrintA6Queue() {
        window.frames["printA6"].focus();
        window.frames["printA6"].print();
    }

    handleCreateLabel() {
        if (this.state.item.articleId > 1 && this.state.item.variantId > 1 && this.state.amount > 0) {

            this.setState({
                labelPdfURL: ""
            });
            this.requestService.printItemLabel(this.state.item, this.state.amount, this.state.withBarcode).done((_item) => {

                this.setState({
                    item: {
                        ...this.state.item,
                        ['articleId']: _item.article_id,
                        ['variantId']: _item.variant_id,
                        ['code']: _item.code || "",
                        ['name']: _item.name || "",
                        ['name_botanic']: _item.name_botanic || "",
                        ['description']: _item.description_short || "",
                        ['labelText']: _item.label_text || "",
                        ['imgURL']: _item.picurl || "",
                        ['stock']: {
                            ...this.state.item.stock,
                            ['storageLocationId']: _item.stock.storageLocationId,
                            ['quantity']: _item.stock.quantity,
                        }
                    }
                });
                this.setState({
                    labelPdfURL: "/publicprint/label.pdf",
                })
            })
        }
    }

    toggleBarcode() {
        this.setState({withBarcode: !this.state.withBarcode})
    }

    render() {
        let globalSpinner;
        if (this.state.isGlobalLoading) {
            globalSpinner = (
                <div className="spinner-overlay">
                    <Spinner animation="grow" className="spinner-overlay-spinner"/>
                </div>);
        }
        const item = this.state.item;
        const amount = this.state.amount;
        const storageLocations = this.state.storageLocations;
        const stock = this.state.item.stock;
        return (
            <div>
                {globalSpinner}
                <Container fluid={true} className="main-container">
                    <Navbar bg="light" expand="lg">
                        <Navbar.Brand href="">Etiketten</Navbar.Brand>
                        {/*<Nav.Item onClick={this.switchLabelFormat}>DinA6</Nav.Item>*/}
                        <Button variant="secondary" onClick={this.switchLabelFormat}>DinA6</Button>
                    </Navbar>
                    <Row>
                        <Col>
                            <Search
                                requestService={this.requestService}
                                setItem={this.handleSearchResultSetItem}
                            />
                            <ItemDisplay
                                toggleBarcode={this.toggleBarcode}
                                withBarcode={this.state.withBarcode}
                                isDinA6Printing={this.state.isDinA6Printing}
                                item={item}
                            />
                        </Col>
                        <Col xs="2">
                            <MiscDisplay
                                handleAddStock={this.handleAddStock}
                                handleCreateLabel={this.handleCreateLabel}
                                isDinA6Printing={this.state.isDinA6Printing}
                                amount={amount}
                                articleId={this.state.item.articleId}
                                imgURL={this.state.item.imgURL}
                                handleAmountChange={this.handleAmountChange}
                                handleAddtoDinA6Queue={this.handleAddtoDinA6Queue}
                            />
                        </Col>
                        <Col xs="3">
                            <StockDisplay
                                handleAddStock={this.handleAddStock}
                                handleRemoveStock={this.handleRemoveStock}
                                onClick={this.handleStockClick}
                                storageLocations={storageLocations}
                                stock={stock}
                            />
                        </Col>
                    </Row>
                    <LabelDisplay
                        labelPdfURL={this.state.labelPdfURL}
                        isDinA6Printing={this.state.isDinA6Printing}
                        dinA6LabelQueue={this.state.dinA6LabelQueue}
                        handleRemoveA6Label={this.handleRemoveItemDinA6Queue}
                        handlePrintA6Queue={this.handlePrintA6Queue}
                    />
                </Container>
            </div>

        );
    }
}


// ========================================

ReactDOM.render(
    <LabelPrintingPage/>,
    document.getElementById('root')
);


