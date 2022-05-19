<?php

include "connect.php";

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

		<title>M.Handwerker Glossar</title>
	</head>
	
	<body>

		<section class="nav">
            <nav id="1">
                <a href="index.html">Home</a>
                <a href="glossar.php">Glossar</a>
                <a href="index.html#bio">Bio</a>
                <a href="index.html#skills">Skills</a>
                <a href="index.html#time-line">Time-Line</a>
                <a href="index.html#doku">Doku's</a>
            </nav>
        </section>

	
		<h1>Glossar</h1>

		<center>
			<details>
				<summary>Upload Data</summary>
				<form action="input.php" method="POST">
					<input type="text" placeholder="Name" name="name" class="txt"> 
					<br>
					<input type="text" placeholder="Beschreibung" name="description" class="txt">
					<br>
					<input type="submit" placeholder="Upload" name="submit">
				</form>
			</details>
		</center>
		
		

		<table>
		<tr>
			<th>Name</th>
			<th>Description</th>
		</tr>
		<br>
			<?php

				$stmt = $conn->prepare("SELECT * FROM input ORDER BY name ASC;");
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
