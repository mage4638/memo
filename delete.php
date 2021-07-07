<?php

try{

    $dsn = "mysql:dbname=php_tools;host=localhost;charset=utf8mb4";
    $username = "root";
    $password = "";
    $options = [];
    $pdo = new PDO($dsn, $username, $password, $options);

    $stmt = $pdo->prepare('DELETE FROM subject2 WHERE ID = :id');

    $stmt->execute(array(':id' => $_GET["id"]));

    echo "完了";

  } catch (Exception $e) {
            echo 'error!' . $e->getMessage();
  }

?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>削除完了</title>
 </head>
 <body>
 <p>
     <a href="memo.php">元画面へ</a>
 </p>
 </body>
</html>
