<?php

include_once "Sort.php";
include_once "initArrayNumbers/initArrayNumbers.php";

$numbers = initArrayNumbers(100,1,100);

$selectionSort = new Sort($numbers);
$selectionSort->selectionSort();

echo "<br><br>Mang sau sap xep selectionSort: <br>".$selectionSort->readList()."<br><hr>";

//---------------------------

$numbers = initArrayNumbers(100,1,100);

$selectionSort = new Sort($numbers);
$selectionSort->bubbleSort();

echo "<br><br>Mang sau sap xep bubleSort: <br>".$selectionSort->readList()."<br><hr>";

//--------------------------------

$numbers = initArrayNumbers(100,1,100);

$selectionSort = new Sort($numbers);
$selectionSort->insertionSort();

echo "<br><br>Mang sau sap xep insertionSort: <br>".$selectionSort->readList()."<br><hr>";
