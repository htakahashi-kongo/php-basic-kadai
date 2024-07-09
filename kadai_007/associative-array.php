<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php課題_007</title>
</head>
<body>
    <p>
        <?php
        $onion = ["name" => "onion", "price" => 200];
        print_r($onion);
        echo "<br>";

        echo $onion["name"];
        echo "<br>";
        $name = $onion["name"];
        echo $name;
        echo "<br>";

        $onion["weight"] = 160; 
        print_r($onion);
        ?>
    </p>
</body>
</html>