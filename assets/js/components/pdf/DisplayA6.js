import React from 'react'
import Button from "react-bootstrap/Button";


export default function DisplayDinA6LabelDocument(props) {

    const itemPrint = props.items.map((item, index) => {
        let imgDisplay;
        if (item.imgURL) {
            imgDisplay = (<img src={item.imgURL}/>);
        }
        return (<div className="block" key={index}>
            {imgDisplay}
            <h1>{item.name}</h1>
            <h2><span className="header2"> {item.name_botanic}</span> {item.code}</h2>
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
