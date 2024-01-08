<?php
$text =$_GET["text"];
$bad_word= $_GET["bad-word"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form result</title>
</head>
<body>
    <p><?php echo $text ?> </p>
    <p>
        <?php echo strlen($text) ?>
    </p>

    <h2>Replaced Text</h2>
    <h4> <?php echo str_replace($bad_word, '***', $text) ?></h4>
    <h4> <?php echo strlen(str_replace($bad_word, '***', $text)) ?></h4>
</body>
</html>