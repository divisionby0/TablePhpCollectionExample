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

new TableExample();