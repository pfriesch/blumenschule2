import React from 'react'
import Button from "react-bootstrap/Button";

require('../../../css/printA6.scss');


export default function DinA6LabelDocument(props) {

    const itemPrint = props.items.map((item, index) => {
        let imgDisplay;
        if (item.imgURL) {
            imgDisplay = (<img className="print-img" src={item.imgURL}/>);
        }
        return (<div className="print-block" key={index}>
            {imgDisplay}
            <h1 className="print-h1">{item.name}</h1>
            <h2 className="print-h2"><span className="print-header2"> {item.name_botanic}</span> {item.code}</h2>
            <p>{item.description}</p>
            {props.renderRemoveButton && <Button variant="danger">Entfernen</Button>}
        </div>)
    });
    return (
        <div>
            {itemPrint}
        </div>
    )
}
