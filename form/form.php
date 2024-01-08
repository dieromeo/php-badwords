<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css  -->
    <link rel="stylesheet" href="style.css">
    <title>Bad words form</title>
</head>
<body>
    <header>
        <h1>Bad word Form</h1>
    </header>
    <main>
<!-- form  -->
<form action="../response/index.php" method="get">
        <!-- textarea  -->
        <div>
        <label for="text">Insert text:</label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>
        <!-- input text  -->
        <div class="bad-word">
        <label for="bad-word">Insert a bad word:</label>
        <input type="text" name="bad-word">
        </div>
        <!-- button  -->
        <button id="submit">Send</button>
    </form>
    </main>
</body>
</html>