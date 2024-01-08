<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words form</title>
</head>
<body>
    <form action="../response/index.php" method="get">
        <label for="text">Insert text:</label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
        <label for="bad-word">Insert a bad word</label>
        <input type="text" name="bad-word">
        <button>Send</button>
    </form>
</body>
</html>