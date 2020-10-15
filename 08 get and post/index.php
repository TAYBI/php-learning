<?php
    if(isset($_GET['name'])){
        $name = htmlentities($_GET['name']);
    }

    // get
    // if(isset($_GET['name'])){
    //     print_r($_GET);
    //     echo $_GET['name'];
    // }

    // post
    // if(isset($_POST['name'])){
    //     print_r($_POST);
    //     echo $_POST['name'];
    // }

    // request

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get & Post</title>
</head>
<body>
    <form method="GET" action="index.php">
        <div>
            <label>Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" id="email">
        </div>
        <input type="submit" value="submit">
    </form>

    <ul>
        <li>
            <a href="index.php?name=bilal">bilal</a>
        </li>
        <li>
            <a href="index.php?name=zayd">zayd</a>
        </li>
    </ul>

    <h2> <?php echo $name ?>'s profile </h2>
</body>
</html>