
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>My Portfolio</h1>
<img src="" alt="">
    <p></p>
    <?php
    $names = [
        1 => ['name' => 'Anna', 'last name' => 'Pronina', 'email' => 'anna.pronina@example.com'],
        2 => ['name' => 'Aivars', 'last name' => 'Trumars', 'email' => 'aivars.trumars@example.com'],
        3 => ['name' => 'Kira', 'last name' => 'Korze', 'email' => 'kira.korze@example.com'],

    ];
    echo "<ul>";
    foreach($names as $name){
        echo "<li>$name</li>";
    }
?>
    <a href="/contact.html">Sazinies ar mani</a>
    <ul>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</body>
</html>
