<?php include './connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis molestias laudantium dolore ad, exercitationem doloribus laboriosam quo minima, fuga labore necessitatibus at fugiat vitae ab velit magnam ipsa voluptatum maxime.</p>
    <a href="./create-siswa.php">Create Siswa</a>

    <hr>

    <?php
        $sql = 'select * from students';
        $result = mysqli_query($conn, $sql);

    ?>
    <table border="1">
        <thead>
            <tr><th>Name</th><th>Address</th><th>Action</th></tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['address'] ?></td>
                    <td>
                        <a href="edit-siswa.php?id=<?php echo $data['id'] ?>">edit</a>
                    </td>
                </tr>
            <?php } ?>
            
        </tbody>
</body>
</html>
