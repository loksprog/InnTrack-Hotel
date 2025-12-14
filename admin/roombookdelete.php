<?php

include '../config.php';

$id = $_GET['id'];

// query
$deletesql = "DELETE FROM roombook WHERE id = $id";

$result = mysqli_query($conn, $deletesql);

header("Location:roombook.php");

?>