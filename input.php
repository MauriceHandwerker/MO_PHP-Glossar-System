<?php

include "connect.php";

try {
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $description = $_POST['description'];

        $sql_insert = "INSERT INTO input (name, description) VALUES ('$name', '$description');";
        $conn->exec($sql_insert);
    }   

    header("Location: glossar.php");
}
catch(PDOException $e){
    echo $sql_insert . "<br>" . $e->getMessage();
}


?>
