<?php
    // echo filter_has_var(INPUT_POST, 'data') ? 'has var' : 'doesn\'t have var';
    // echo filter_has_var(INPUT_GET, 'data') ? 'has var' : 'doesn\'t have var';

    // remove ilagal character
    $email = $_POST['data'];
    
    // remove ilagal character
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    if(filter_has_var(INPUT_POST, 'data')){
        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL))
            echo 'email is valid';
            else
            echo 'email is not valid';
    }

    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_EMAIL		
    #FILTER_VALIDATE_FLOAT		
    #FILTER_VALIDATE_INT			
    #FILTER_VALIDATE_IP			
    #FILTER_VALIDATE_REGEXP		
    #FILTER_VALIDATE_URL

    #FILTER_SANITIZE_EMAIL	
    #FILTER_SANITIZE_ENCODED	
    #FILTER_SANITIZE_NUMBER_FLOAT	
    #FILTER_SANITIZE_NUMBER_INT	
    #FILTER_SANITIZE_SPECIAL_CHARS	 
    #FILTER_SANITIZE_STRING		
    #FILTER_SANITIZE_URL
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter and validation</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="text" name="data">
        <button type="submit">Submit</button>
    </form>
</body>
</html>