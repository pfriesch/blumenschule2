import React, {Fragment} from "react";
import InputGroup from "react-bootstrap/InputGroup";
import FormControl from "react-bootstrap/es/FormControl";
import Table from "react-bootstrap/Table";
import SpinnerButton from "./Utils";

require('../../css/search.scss');


function SearchResultItem(props) {
    return (
        <tr onClick={() => props.onClick(props.item)}>
            <th>{props.item.articleId}</th>
            <th>{props.item.variantId} </th>
            <th>{props.item.name}</th>
            <th>{props.item.code}</th>
        </tr>
    )
}

class Search extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            isSearching: false,
            searchResultItems: Array(),
            showSearchResultItems: false,
            searchText: "",
        };
        this.handleSelectedItem = this.handleSelectedItem.bind(this);
        this.handleValueChange = this.handleValueChange.bind(this);
        this.triggerSearch = this.triggerSearch.bind(this);
        this.handleKeyPress = this.handleKeyPress.bind(this);
    }

    handleSelectedItem(item) {
        // alert(JSON.stringify(item));
        this.setState({showSearchResultItems: false});
        this.props.requestService.getItem(item.articleId, item.variantId)

            .done((_item) => {
                return this.props.setItem(_item);
            });
    }

    handleValueChange(e) {
        // this.setState({isSearching: true, searchText: e.target.value});
        this.setState({searchText: e.target.value});


    }

    triggerSearch() {
        if (this.state.searchText.length > 0) {
            this.setState({isSearching: true});
            const request = this.props.requestService.searchItem(this.state.searchText);

            request.done((items) => {
                if (items.length > 0) {
                    this.setState({
                        searchResultItems: items.map((item) => {
                            return {
                                articleId: item.article_id,
                                variantId: item.variant_id,
                                code: item.code || "",
                                name: item.name || "",
                                name_botanic: item.name_botanic || "",
                                labelText: item.label_text || "",
                            }
                        }),
                        showSearchResultItems: true,
                    })
                } else {
                    alert("Keinen Artikel gefunden!")
                }
            });
            request.fail((jqXHR, textStatus) => {
                alert(jqXHR.error.code + ": " + jqXHR.error.message + "(" + jqXHR.error.exception.message + ")");
            });
            request.always(() => {
                this.setState({
                    isSearching: false
                })
            });
            return request;
        }
    }


    handleKeyPress(e) {
        if (e.key === "Enter") {
            this.triggerSearch()
        }
    }

    render() {
        const {
            onEnter,
            handleSelectedItem,
            state: {
                isSearching,
                showSearchResultItems,
                searchResultItems
            }
        } = this;

        let searchResultsComponent;
        let searchResultsModal;

        if (showSearchResultItems) {
            searchResultsComponent = (
                <div className="search-results-div">
                    <Table striped hover size="sm">
                        <tbody>
                        {searchResultItems.map((item) => {
                            return (
                                <SearchResultItem item={item}
                                                  key={item.variantId}
                                                  onClick={(item) => {
                                                      handleSelectedItem(item)
                                                  }}/>);
                        })}
                        </tbody>
                    </Table>

                </div>
            );
            searchResultsModal = (<div className="modal-search"/>);
        }
        return (
            <Fragment>
                <InputGroup className="search-bar">
                    <FormControl
                        onChange={(e) => this.handleValueChange(e)}
                        onKeyUp={(e) => this.handleKeyPress(e)}
                        value={this.state.searchText}
                        type="text"
                    />
                    <InputGroup.Append>
                        <SpinnerButton
                            variant="success"
                            handleSearchClicked={this.triggerSearch}
                            isLoading={this.state.isSearching}
                            loadingText="Suche"
                            text="Suche"/>
                    </InputGroup.Append>
                </InputGroup>
                {searchResultsComponent}
                {searchResultsModal}
                <br/><p><small>Es werden max. 50 Artikel angezeigt. ggf. suche verfeinern!</small></p>
            </Fragment>
        )
    };
}

export default Search;