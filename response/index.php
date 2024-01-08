<?php
$text =$_GET["text"];
$bad_word= $_GET["bad-word"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css  -->
    <link rel="stylesheet" href="style.css">
    <title>Form result</title>
</head>
<body>
    <header>
    <h1>Form Result</h1>
    </header>
    <main>
        <div class="container">
        <div class="original-text">
        <h2>Original text</h2>
    <p><strong>Text:</strong> <?php echo $text ?> </p>
    <p>
    <strong>Length:</strong> : <?php echo strlen($text) ?>
    </p>
    </div>

    <h2>Replaced Text</h2>
    <p><strong>Text:</strong>  <?php echo str_replace($bad_word, '***', $text) ?></p>
    <p><strong>Legth:</strong>  <?php echo strlen(str_replace($bad_word, '***', $text)) ?></p>
        </div>
    </main>
</body>
</html>