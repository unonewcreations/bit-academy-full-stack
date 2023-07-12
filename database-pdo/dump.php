<?php

/* database-pdo opdracht "order" */
if ($_GET['cat'] === 'serie') {
    // default sort order
    $direction = "ASC";

// set array for search values
    $orders = array("title","rating");

// search array and output index
    $key = array_search($_GET['orderby'], $orders);

// if logic is true then change sort order
    if (($_GET['orderby'] == 0 || 1) && $_GET['direction'] == "ASC") {
        $direction = "DESC";
    }

// get sort order and make variable
    if ($_GET['direction']) {
        $sortOrder = $_GET['direction'];
    }

// set variable with value
    $order = $orders[$key];

// query table with set variables
    $stmtSeries = $pdo->query("SELECT * from series ORDER BY " . $order . " " . $sortOrder . "");
}
