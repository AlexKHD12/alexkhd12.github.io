<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>display</title>
    <link href="style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    $mysqli = new mysqli('localhost','root','','products') or die($mysqli->connect_error);
    $table = 'products';

    $result = $mysqli->query("SELECT * FROM $table") or die($mysqli->error);
    
    while ($data = $result->fetch_assoc()) {
        print_r($data);
    }

    ?>

</body>
</html>
