<?php
include 'config.php';
$this_id = $_GET['this_id'];
$sql = "DELETE FROM borrower WHERE id= '$this_id' ";
mysqli_query($conn, $sql);
header('location: danhsachborrower.php');



