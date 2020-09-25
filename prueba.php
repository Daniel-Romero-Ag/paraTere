<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $b=5; 
    function valor(&$a){
        
        $a=3;

    }
    valor($b);
    echo $b;

    ?>


</body>
</html>