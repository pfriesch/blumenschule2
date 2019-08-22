const $ = require('jquery');


class RequestService {
    constructor(startLoading, stopLoading) {
        this.startLoading = startLoading;
        this.stopLoading = stopLoading;

        this.searchItem = this.searchItem.bind(this);
        this.printItemLabel = this.printItemLabel.bind(this);
        this.getItem = this.getItem.bind(this);
        this.changeStockLocation = this.changeStockLocation.bind(this);

    }

    addStock(articleId, variantId, quantity) {
        this.startLoading();

        const request = $.ajax({
            method: "POST",
            url: "/item/addstock",
            data: {article_id: articleId, variant_id: variantId, quantity: quantity}
        });
        request.then((response, textStatus, xhr) => {
            if (xhr.getResponseHeader("X-notification").length > 0) {
                alert(xhr.getResponseHeader("X-notification"))
            }
            return response;
        });

        request.always(() => {
            this.stopLoading();
        });
        return request;
    }


    removeStock(articleId, variantId, new_quantity) {
        this.startLoading();

        const request = $.ajax({
            method: "POST",
            url: "/item/removestock",
            data: {article_id: articleId, variant_id: variantId, new_quantity: new_quantity}
        });
        request.then((response, textStatus, xhr) => {
            if (xhr.getResponseHeader("X-notification").length > 0) {
                alert(xhr.getResponseHeader("X-notification"))
            }
            return response;
        });
        request.always(() => {
            this.stopLoading();
        });
        return request;
    }


    searchItem(searchText) {
        const request = $.ajax({
            url: "/api/item/search/" + searchText,
        });
        request.then((response, textStatus, xhr) => {
            if (xhr.getResponseHeader("X-notification").length > 0) {
                alert(xhr.getResponseHeader("X-notification"))
            }
            return response;
        });
        return request
    }

    printItemLabel(item, quantity) {
        if (!Number.isInteger(item.articleId) || !Number.isInteger(item.variantId) || !Number.isInteger(quantity)) {
            throw new Error(item);
        }
        this.startLoading();

        const request = $.ajax({
            url: "/api/item/" + item.articleId + "/variant/" + item.variantId + "/quantity/" + quantity,
            // dataType: "json",
        });
        request.then((_item, textStatus, xhr) => {
            if (xhr.getResponseHeader("X-notification").length > 0) {
                alert(xhr.getResponseHeader("X-notification"))
            }

            return {
                articleId: _item.article_id,
                variantId: _item.variant_id,
                code: _item.code || "",
                name: _item.name || "",
                name_botanic: _item.name_botanic || "",
                description: _item.description_short || "",
                labelText: _item.label_text || "",
                imgURL: _item.picurl || "",
                stock: {
                    storageLocationId: _item.stock.storageLocationId,
                    quantity: _item.stock.quantity,
                }
            }
        });
        request.always(() => {
            this.stopLoading();
        });
        return request;

    };


    getItem(articleId, variantId) {
        const request = this.printItemLabel({articleId: articleId, variantId: variantId}, 1);
        request.fail((jqXHR, textStatus) => {
            alert(jqXHR.responseJSON.error.code + ": " + jqXHR.responseJSON.error.message + "(" + jqXHR.responseJSON.error.exception[0].message + ")");
        });
        request.then((response, textStatus, xhr) => {
            if (xhr.getResponseHeader("X-notification").length > 0) {
                alert(xhr.getResponseHeader("X-notification"))
            }
            return response;
        });


        return request
        // return {
        //     articleId: 5219,
        //     variantId: 3324,
        //     code: "Salnan00",
        //     name: "Salnan",
        //     name_botanic: "Salnan botanisch",
        //     description: "Vom Salbeiexperten Frank Fischer erhielten wir diesen ganz außergewöhnlichen, buschigen, tiefblauen Salbei, der sich wegen seines flachen, hängenden Wuchses vorzüglich für die Balkonbepflanzung eignet. Er beginnt sehr früh, bereits im April, mit der Blüte, die bis zum Herbst anhält. Zudem ist er eine hervorragende Bienenweide und Insektenpflanze. Die tiefblauen Blüten haben eine weiße \"Biene\" in der Blütenmitte, die ovalen Blätter sind kräftig Grün mit silberweißer Unterseite. Insgesamt eine wirklich wertvolle Neuheit in unserem Sortiment. Er ist kälteverträglich aber nicht winterhart in unserem Klima.",
        //     labelText: "buschiger, tiefblauer Salbei, der sich wegen seines flachen, hängenden Wuchses vorzüglich für die Balkonbepflanzung eignet. Er beginnt sehr früh, bereits im April, mit der Blüte, die bis zum Herbst anhält. Zudem ist er eine hervorragende Bienenweide, Er ist kälteverträglich aber nicht winterhart in unserem Klima.",
        //     imgURL: "https://cdn02.plentymarkets.com/3eialin64h0j/item/images/5219/full/Salvia--nana--Neu.jpg",
        //     stock: {
        //         storageLocationId: 44,
        //         quantity: 300,
        //     }
        //
        // };
    }


    changeStockLocation(item, newStockLocationId) {
        this.startLoading();

        const request = $.ajax({
            method: "POST",
            url: "/item/changeStorageLocation",
            data: {
                article_id: item.articleId,
                variant_id: item.variantId,
                new_quantity: item.stock.quantity,
                old_storage_location: item.stock.storageLocationId,
                new_storage_location: newStockLocationId,
            }
        });
        // request.then((response) => {
        //     this.stopLoading();
        //     return response;
        // });
        request.then((response, textStatus, xhr) => {
            if (xhr.getResponseHeader("X-notification").length > 0) {
                alert(xhr.getResponseHeader("X-notification"))
            }
            return response;
        });
        request.always(() => {
            this.stopLoading();
        });
        request.fail((jqXHR, textStatus) => {
            alert(jqXHR.responseJSON.error.code + ": " + jqXHR.responseJSON.error.message + "(" + jqXHR.responseJSON.error.exception[0].message + ")");
        });

        return request;
    }
}


export default RequestService;