<?php
include_once('php/div0/utils/Logger.php');
include_once('php/div0/collections/Map.php');
include_once('php/div0/collections/exceptions/CollectionException.php');
include_once('php/div0/collections/iterators/MapIterator.php');

include_once('php/div0/view/itemRenderer/BaseItemRenderer.php');
include_once('php/div0/view/itemRenderer/TextInputItemRenderer.php');

include_once('php/div0/view/table/BaseTable.php');

include_once('php/div0/TableExample.php');

echo '<link href="css/style.css" rel="stylesheet">';

includeJS(); // into <head>
new TableExample();

function includeJS(){
    echo '<script type="application/javascript" src="js/libs/jquery-3.1.0.js"></script>';
    echo '<script type="application/javascript" src="js/div0/collections/Map.js"></script>';
    echo '<script type="application/javascript" src="js/div0/collections/iterators/MapIterator.js"></script>';
    echo '<script type="application/javascript" src="js/div0/App.js"></script>';
    echo '<script type="application/javascript" src="js/div0/Initor.js"></script>';
}

