<?php
    $string1 = 'First';
    $string2 = 'second';
    // echo $string1." ".$string2;
    // echo "hola this is $string1 and the $string2";
    // echo strlen($string2);
    // echo strtoupper($string2);
    // echo strtolower($string2);
    echo str_replace('i', 'o', $string1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>String</title>
</head>
<body>
    <h1>
        <?php echo "this is the first char: $string1[0]" ?>
    </h1>
</body>
</html>