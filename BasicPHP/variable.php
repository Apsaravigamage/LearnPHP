<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="GET">
        <input type="text" name="person">
        <button>Submit</button>
    </form>

    <?php
        $name = $_GET['person'];
        echo " say hi ". $name; // combined  php code and string
    ?>
</body>
</html>