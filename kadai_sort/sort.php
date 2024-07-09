<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題sort</title>
</head>
<body>
    <p>
        <?php
        function sort_2way ($array, $order) {
            if ($order === 1) {
                echo "昇順にソートします。";
                echo "<br>";
                sort ($array);
                foreach ($array as $array) {
                    echo "$array";
                    echo "<br>";
                }
            }
            elseif ($order === 0) {
                echo "降順にソートします。";
                echo "<br>";
                rsort ($array);
                foreach ($array as $array) {
                    echo "$array";
                    echo "<br>";
                }
            }
        }
        
        $nums = [15, 4, 18, 23, 10 ];

        
        sort_2way($nums, 1);
        sort_2way($nums, 0);
        ?>
    </p>
</body>
</html>