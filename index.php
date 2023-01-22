<?php
    require("./dbconnect.php");

    header('Content-Type: text/html; charset=UTF-8');
    $name = $_GET['name'];
    try {
        $db->query("Set names utf8"); // 文字列格納時の文字化けを防止
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM stocks WHERE name ='$name'";
        $ps = $db->query($sql);
?>

<!DOCTYPE html>
<html lang=ja>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>Amanzo</title>
</head>

<body>

<div class="content">
    <form action="" method="POST">
        <h1>Amanzo</h1>

        <div class="search_stock">
            <li><a href="./search_stock/search_stock.php">商品検索</a></li>
        </div>

        <div class="create_account">
            <li><a href="./create_account/create_account.php">アカウント作成</a></li>
        </div>

        <div class="login">
            <li><a href="./login/login.php">ログイン</a></li>
        </div>

        <div class="contact">
            <li><a href="./contact/contact.php">お問い合わせ</a></li>
        </div>

    </form>
</div>


<!-- <table border=1>
<tr>
<th>名前</th>
<th>価格</th>
<th>在庫数</th>
</tr>
<?php
        while ($row = $ps->fetch()){
            echo "<tr>\n";
            for ($col = 0; $col < 3; $col++) {
                echo "<td>" . $row[$col] . "</td>\n";
            }
            echo "</tr>\n";
        }
    } catch (PDOException $e) {
        echo "Error : " . $e->getMessage() . "\n";
    }
?> -->
</table>

</body>



</html>