<?php include 'server_info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <title>Home</title>
<body>
    <h1>Server & File info</h1>
    <?php if($server): ?>
    <ul>
        <?php foreach($server as $key => $value): ?>
            <li><b><?php echo $key; ?></b> <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>  
    
    <h1>Client info</h1>
    <?php if($client): ?>
    <ul>
        <?php foreach($client as $key => $value): ?>
            <li><b><?php echo $key; ?></b> <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>  


</body>
</html>
