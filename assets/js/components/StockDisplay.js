import Col from "react-bootstrap/Col";
import Row from "react-bootstrap/Row";
import React from "react";
import InputGroup from "react-bootstrap/InputGroup";
import FormControl from "react-bootstrap/es/FormControl";
import Button from "react-bootstrap/Button";


function StockDisplay(props) {
    const storageLocations = props.storageLocations;
    const stock = props.stock;

    const stockDisplays = storageLocations.map((stockLocation) => {
        let quantity = "";
        if (stock.storageLocationId === stockLocation.id) {
            quantity = stock.quantity;
        }

        return (<Row key={stockLocation.id}>
            <InputGroup className="stock-input">
                <InputGroup.Prepend>
                    <InputGroup.Text className="stock-input-label"><b>{stockLocation.label}</b></InputGroup.Text>
                </InputGroup.Prepend>
                <FormControl
                    onClick={() => {
                        props.onClick(stockLocation.id)
                    }}
                    value={quantity}
                    readOnly
                />
            </InputGroup>
        </Row>)
    });

    return (
        <Col>
            {stockDisplays}
            <Row>
                <Button className="various-buttons" variant="primary"
                        onClick={() => props.handleAddStock()}>Bestand<br/> buchen</Button>
                <Button className="various-buttons" variant="danger"
                        onClick={() => props.handleRemoveStock()}>Bestand<br/> entfernen</Button>
            </Row>
        </Col>
    );
}


export default StockDisplay;