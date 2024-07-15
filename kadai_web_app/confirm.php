<?php
$name = $_POST['user_name'];
$age = $_POST['user_age'];
$dept = $_POST['user_dept'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題がなければ「確定」、修正する場会は「キャンセル」をクリックしてください。</p>
    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?PHP echo $name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?PHP echo $age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?PHP echo $dept; ?></td>
        </tr>
    </table>
    <p>
        <button id="confirm-btn" onclick="location.href = 'complete.php'; ">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
</body>
</html>