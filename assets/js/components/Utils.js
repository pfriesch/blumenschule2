import React from "react";
import Button from "react-bootstrap/Button";
import Spinner from "react-bootstrap/Spinner";

class SpinnerButton extends React.Component {

    render() {
        let loadingText;
        if (!this.props.loadingText) {
            loadingText = this.props.text;
        } else {
            loadingText = this.props.loadingText;
        }
        if (this.props.isLoading) {
            return (<Button variant={this.props.variant}>
                <Spinner
                    as="span"
                    animation="border"
                    size="sm"
                /> {loadingText}
            </Button>)
        } else {
            return (<Button variant={this.props.variant}>
                {this.props.text}
            </Button>)
        }
    }
}

SpinnerButton.defaultProps = {
    variant: "primary",
};

export default SpinnerButton;