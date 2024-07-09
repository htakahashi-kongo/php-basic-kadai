<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題_011</title>
</head>
<body>
    <h1>
        <?php
        $onion = ["名前" => "玉ねぎ", "値段" => 200, "産地" => "北海道"];
        
        foreach ($onion as $key => $valua) {
            echo "{$key} : {$valua}";
            echo "<br>";
        }
        ?>
    </h1>
</body>
</html>