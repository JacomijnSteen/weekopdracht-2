<?php

//database opzoeken en verbinden
$db = "dbdemo1";
$host = "localhost";
$dsn = "mysql:dbname=$db;host=$host";
$user_name = "root";
$pass_word ="";

try {
    $connection = new PDO($dsn, $user_name, $pass_word);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //tabel met blogberichten weergeven met laatste post bovenaan.
    //datum  niet weergeven omdat date in php anders is can in sql. Ik werk nog aan het inbouwen van een timestamp bij het submitten van het formulier.
    $sql = "SELECT * FROM wk3blog ORDER BY id DESC";
    $result = $connection->query($sql);
    foreach ($result as $row) {
        echo "<table border = '1' cellpadding = '10'>";
        echo "<tr>";
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['naam'].'</td>';
        echo '<td>'.$row['datum'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td>'.$row['bericht'].'</td>';
        echo "</tr>"; 
        echo "</table>"; 
    }  
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}   

$connection = null; // Close connection

?>
