import React from "react";
import Button from "react-bootstrap/Button";
import Spinner from "react-bootstrap/Spinner";

function SpinnerButton(props) {
    let loadingText;
    if (!props.loadingText) {
        loadingText = props.text;
    } else {
        loadingText = props.loadingText;
    }
    if (props.isLoading) {
        return (<Button
            onClick={() => props.handleSearchClicked()}
            variant={props.variant}
        >
            <Spinner
                as="span"
                animation="border"
                size="sm"
            /> {loadingText}
        </Button>)
    } else {
        return (<Button
            variant={props.variant}
            onClick={() => props.handleSearchClicked()}
        >
            {props.text}
        </Button>)
    }
}

export default SpinnerButton;