<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>hello</h1>
</head>
<body>
    <h1>My Portfolio</h1>
    <img src="" alt="">
    <p>Info</p>

    <?php
        $persons = [
            1 => ['first_name' => 'Maksims', 'last_name' => 'Carevs', 'email' => 'sigma@ligma.com'],
            2 => ['first_name' => 'Daniil', 'last_name' => 'Kuchinskyi', 'email' => 'sigma@ligma.com'],
            3 => ['first_name' => 'Sigma', 'last_name' => 'Ligma', 'email' => 'sigma@ligma.com'],
        ];

        echo "<ul>";
        foreach ($persons as $id => $person) {
            echo "<li>";
            echo "ID: {$id}, FIRST NAME: {$person['first_name']}, LAST NAME: {$person['last_name']}, EMAIL: {$person['email']}\n";
            echo "</li>";
        }
        echo "</ul>"
        ?>

    <a href="contact.html">bello</a>    
    
</body>
</html>