<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create-siswa.post.php" method="post">
        <?php
            $sql = 'select * form students where id = ' . $_GET['id'];
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
        ?>
        
        <div>
            <span>Name : </span>
            <input type="text" name="name">
        </div>
        <div>
            <span>Address : </span>
            <input type="text" name="address">
        </div>
        <br>
        <button type="submit">Create</button>
    </form>
</body>
</html>