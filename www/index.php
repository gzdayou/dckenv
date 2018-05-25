<?php

header("Content-Type=text/html;charset=utf8");  
    $dbType   = 'mysql';  
    $host     = 'mysql'; //此处不用localhost  
    $dbName   = 'test';  
    $userName = 'root';  
    $pwd      = '123456';  
  
    $dsn = "$dbType:host=$host;dbname=$dbName";  
    try {  
        $pdo = new PDO($dsn, $userName, $pwd);  
        echo '连接成功';  
    } catch (PDOException $e) {  
        echo '连接失败：' . $e->getMessage();  
    }  

?>
