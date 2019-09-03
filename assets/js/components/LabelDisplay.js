import React from "react";
import Button from "react-bootstrap/Button";
import DinA6LabelDocument from "./pdf/PrintA6";
import Frame from 'react-frame-component';
import DisplayDinA6LabelDocument from "./pdf/DisplayA6";
import Image from "react-bootstrap/Image";


function LabelDisplay(props) {

    const dinA6LabelQueue = props.dinA6LabelQueue;
    const isDinA6Printing = props.isDinA6Printing;

    if (isDinA6Printing) {
        const dinA6LabelsDisplay = dinA6LabelQueue.map((dinA6LabelElement, index) => {
            return (<div key={index} className="a6-print-item">
                <Image className="a6-print-item-pic img-thumbnail" src={dinA6LabelElement.imgURL}/>
                <p><strong>Etikett {index}</strong></p>
                <p><strong>{dinA6LabelElement.name}</strong></p><p>{dinA6LabelElement.name_botanic}</p>
                <p>{dinA6LabelElement.description}</p>
                <Button variant="danger"
                        onClick={() => props.handleRemoveA6Label(index)}
                >
                    Entfernen</Button>
            </div>)
        });


        const docSrc = (<DinA6LabelDocument items={props.dinA6LabelQueue}/>);
        return (<div>
            <h1>DinA6 Druck Auswahl</h1>
            {dinA6LabelsDisplay}
            <Frame className="dinA6-iframe"
                   id="printA6"
                   name="printA6"
                   head={<link type='text/css' rel='stylesheet' href='/build/appReactDinA6.css'/>
                   }
                   initialContent='<!DOCTYPE html><html><head></head><body class="print-body"><div></div></body></html>'

            >
                <DinA6LabelDocument items={props.dinA6LabelQueue}/>
            </Frame>
            <Button onClick={
                () => props.handlePrintA6Queue()
            } vairant="success">Print</Button>
        </div>);

    } else {
        return (<div>
            <object className="PdfOut" data={props.labelPdfURL} type="application/pdf" width="100%"
                    height="180px"/>
        </div>)
    }
}


export default LabelDisplay;