<?php

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Letter</th><th>Name</th><th>Description</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}
?>

<!DOCKYPE html>
<html>
    <h1>Glossar<h1>

    <section class="tables">
        <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "glossary";

			try {
			  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  $stmt = $conn->prepare("SELECT letter, name, description FROM input");
			  $stmt->execute();

			  // set the resulting array to associative
			  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
				echo $v;
			  }
			} catch(PDOException $e) {
			  echo "Error: " . $e->getMessage();
			}
			$conn = null;
			echo "</table>";
        ?>
    </section>
</html><?php

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Letter</th><th>Name</th><th>Description</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}
?>

<!DOCKYPE html>
<html>
    <h1>Glossar<h1>

    <section class="tables">
        <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "glossary";

			try {
			  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  $stmt = $conn->prepare("SELECT letter, name, description FROM input");
			  $stmt->execute();

			  // set the resulting array to associative
			  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
				echo $v;
			  }
			} catch(PDOException $e) {
			  echo "Error: " . $e->getMessage();
			}
			$conn = null;
			echo "</table>";
        ?>
    </section>
</html>
