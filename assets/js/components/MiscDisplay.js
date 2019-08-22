import Col from "react-bootstrap/Col";
import Row from "react-bootstrap/Row";
import Button from "react-bootstrap/Button";
import Image from "react-bootstrap/Image";
import React from "react";
import Form from "react-bootstrap/Form";

function MiscDisplay(props) {

    const imgURL = props.imgURL.length > 0 ? props.imgURL : "/assets/images/200px.jpg";

    const handleAmountChange = props.handleAmountChange;
    let addingButtons;
    if (props.isDinA6Printing) {
        addingButtons = (
            <div>
                <Row>
                    <Button
                        className="various-buttons"
                        variant='success'
                        onClick={() => props.handleAddtoDinA6Queue()}>Zu DinA6
                        hinzufügen
                    </Button>
                </Row>
            </div>
        )
    } else {
        const amount = props.amount;
        addingButtons = (
            <div>
                <Row>
                    <Form.Group as={Row} className="justify-content-end">
                        <Col>
                            <Form.Label>
                                <b>Anzahl</b>
                            </Form.Label>
                        </Col>
                        <Col>
                            <Form.Control className="amount" type="text" placeholder="" value={amount}
                                          onChange={(text) => handleAmountChange(text)}/>
                        </Col>
                    </Form.Group>
                </Row>
                <Row>
                    <Button
                        className="various-buttons"
                        onClick={() => props.handleCreateLabel()}
                        variant='success'> Etikett<br/> erstellen
                    </Button>
                    <Button
                        className="various-buttons"
                        onClick={() => {
                            props.handleCreateLabel();
                            props.handleAddStock();
                        }}
                        variant='secondary'>Etikett erstellen &<br/> Bestand buchen</Button>
                </Row>
            </div>
        )
    }

    let editArticleButton;
    if (props.articleId && props.articleId > 1) {
        editArticleButton = (
            <Row>
                <Button
                    className="various-buttons"
                    variant="info"
                    target="_blank"
                    rel="noopener noreferrer"
                    href={"https://plentymarkets-cloud-de.com/11541?uiAction=item_detail&itemId=" + props.articleId}>
                    Artikel bearbeiten
                </Button>
            </Row>
        )
    } else {
        editArticleButton = (
            <Row>
                <Button
                    className="various-buttons"
                    variant="info"
                    href="" disabled>
                    Artikel bearbeiten
                </Button>
            </Row>)
    }


    return (
        <Col>
            {editArticleButton}
            <Row><Image className="img-thumbnail" width="200px" src={imgURL} rounded/></Row>
            {addingButtons}

        </Col>
    );

}

export default MiscDisplay;