<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP !</title>
</head>
<body>
        <h1><?php echo 'Hello, World!'; ?></h1>
        <?php 
            $timestamp = time();
            $formatted = date('y-m-d h:i:s T', $timestamp);
            echo $formatted;
        ?>

</body>
</html>
