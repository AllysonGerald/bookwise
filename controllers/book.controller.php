<?php
//Model
require 'datas.php';

$id = $_REQUEST['id'];

$filterBook = array_filter($books, fn($book) => $book['id'] == $id);
$book = array_pop($filterBook);

view("book", ['book' => $book]);