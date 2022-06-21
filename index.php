<?php $text = 'scemo chi legge';?>
<?php $censured = $_GET['scemo'];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> <?= $text;?> </h1>
<h3> len: <?= strlen($text);?> </h3>

<h1> <?= str_replace($censured,'***',$text);?> </h1>
<h3> len: <?= strlen(str_replace($censured,'***',$text));?> </h3>

</body>
</html>