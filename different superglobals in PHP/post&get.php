<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="GET">
        <input type="hidden" name="name" value="Denial">
        <button type ="submit">PRESS ME!</button>
</body>
</html>

<?php
    echo $_GET['name'];
?>
