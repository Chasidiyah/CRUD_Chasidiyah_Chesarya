<?php

include './connection.php';

$id =$_GET['id'];

$sql = "
    delete from students
    where id = '" . $id . "'
    ";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo 'Location: index.php';
} else {
    printf('Failed create student: ' . mysql_error($conn));
    exit();
}
    