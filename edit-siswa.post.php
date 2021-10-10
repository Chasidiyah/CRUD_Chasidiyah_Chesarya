<?php

include './connection.php';

$id =$_GET['id'];
$name = $_POST['name'];
$address = $_POST['address'];

$sql = "
    update students
    set name = '" . $name ."', address = '" . $address . "'
    where id = '" . $id . "';
    ";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo 'Location: index.php';
} else {
    printf('Failed create student: ' . mysql_error($conn));
    exit();
}
    
