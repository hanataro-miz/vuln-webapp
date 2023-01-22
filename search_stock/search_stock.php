<?php
require("../dbconnect.php");
?>

<!DOCTYPE html>
<html lang=ja>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>Amanzo</title>
</head>

<body>
<form action="" method="POST">
    <div class="control">
    <label for="name">商品名</label>
    <input id="name" type="text" name="name">
    </div>

    <div class="control">
    <button type="submit" class="btn">検索する</button>
    </div>
</form>
    <?php
        $name = $_POST["name"];

        try 
        {   
            if (!empty($name) && $statement = $db->prepare("SELECT * FROM stocks WHERE name = '$name'")) {
                $statement->execute();
                echo "<table border=1>\n";
                echo "<th>商品名</th>\n";
                echo "<th>価格</th>\n";
                echo "<th>在庫数</th>\n";

                // $stocks = $statement->fetchAll(PDO::FETCH_ASSOC);
                while ($row = $statement->fetch()) {
                    echo "<tr>\n";
                    for ($col = 0; isset($row[$col]); $col++) {
                        echo "<td>" . $row[$col] . "</td>\n";
                    }
                    echo "</tr>\n";
                }
                echo "</table>\n";

            }
        }   
        catch (PDOException $e) 
        {   
            echo $e->getMessage() . "\n";
            exit;
        }   
    ?>

</body>

</html>