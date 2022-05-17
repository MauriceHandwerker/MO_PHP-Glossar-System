<?php
class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td> <p>" . parent::current(). "</p> </td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "<br>";
  }
}
?>

<!DOCKYPE html>
<html>

	<head>
		<link rel="stylesheet" href="css/glossar.css">
		<link rel="stylesheet" href="css/nav.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>

		<section class="nav">
            <nav id="1">
                <a href="index.html">Home</a>
                <a href="glossar.php">Glossar</a>
                <a href="#bio">Bio</a>
                <a href="#skills">Skills</a>
                <a href="index.html#time-line">Time-Line</a>
                <a href="#dokus">Doku's</a>
            </nav>
        </section>

	
		<h1>Glossar</h1>

		

		<table>
		<tr>
			<th>Letter</th>
			<th>Name</th>
			<th>Description</th>
		</tr>
		<br>
			<?php

				$stmt = $conn->prepare("SELECT letter, name, description FROM input");
				$stmt->execute();

				// set the resulting array to associative
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
					echo $v;
				}
				$conn = null;
				echo "</table>";
			?>
		</table>
	

		<footer>

		</footer>
	</body>
</html>
