<?php

include 'connection.php';

?>

<!DOCKYPE html>
<html>
    <h1>Glossar<h1>

    <section class="tables">
        <table>
            <tr>
                <th>Letter</th>
                <th>Name</th>
                <th>Description</th>
            <tr>
        <?php
            $sql = "SELECT letter, name, description FROM glossary";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "  <td>". $row["letter"]. "</td>";
                    echo "  <td>". $row["name"]. "</td>";
                    echo "  <td>". $row["description"]. "</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
        ?>
    </section>
</html>