<?php

include "connect.php";

try {
    if(isset($_POST['submit']))
    {
        $letter = $_POST['letter'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $sql_insert = "INSERT INTO input (letter, name, description) VALUES ('$letter', '$name', '$description');";
        $conn->exec($sql_insert);
    }   

    header("Location: glossar.php");
}
catch(PDOException $e){
    echo $sql_insert . "<br>" . $e->getMessage();
}


?>