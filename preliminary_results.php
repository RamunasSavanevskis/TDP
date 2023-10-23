<?php
$title = $_GET['title'];
$content = $_GET['content'];
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>Last test done on 20/10/2023</p>
    <p><?php echo $content; ?></p>
    <a href="#">Historic data</a>
    <button>Schedule re-test</button>
</body>
</html>