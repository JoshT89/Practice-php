<!DOCTYPE html>
<html>
<head>
    <title>Greeting</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "<h1>Hello, $name!</h1>";
    } else {
        echo "<h1>Invalid request.</h1>";
    }
    ?>
    <a href="index.html">Go back</a>
</body>
</html>

