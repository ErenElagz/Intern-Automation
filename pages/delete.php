<?php
include "../php/dbcon.php";

$id = $_GET['id'];
if (isset($_GET['id'])) {
    mysqli_query($dbcon, "delete from `interns` where id=$id");
    header('location:../pages/tables.php');
}
