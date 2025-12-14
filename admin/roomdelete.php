<?php

include '../config.php';

$id = $_GET['id'];

// query
$roomdeletesql = "DELETE FROM room WHERE id = $id";

$result = mysqli_query($conn, $roomdeletesql);

header("Location:room.php");

?>