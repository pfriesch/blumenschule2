<?php


namespace BSApp\Service\orderPDF;


class OrderPDFService
{

    function pdfBuilderFromPickListName($PickListName)
    {
        return new OrderPDF($PickListName);
    }

}