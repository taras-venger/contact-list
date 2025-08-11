<?php

function dd ($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    die(); 

}

function isCurrentPage($page) {
    return $_SERVER['REQUEST_URI'] === $page;
}