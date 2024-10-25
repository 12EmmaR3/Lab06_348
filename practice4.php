<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
</head>
<body>
    <h1>EECS 348 Lab Seven Practice Four</h1>
    <form method="POST">
        <p>Size of the multiplication table: <input type="text" name="size" required placeholder="Enter size"></p>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tableSize = intval($_POST['size']); 

        if ($tableSize > 0) {
            echo "<h2>Multiplication Table (1 to $tableSize)</h2>";
            echo "<table border='1' style='border-collapse: collapse;'>";

            // Generate table headers
            echo "<tr><th></th>"; 
            for ($header = 1; $header <= $tableSize; $header++) {
                echo "<th>$header</th>";
            }
            echo "</tr>";

            // Generate table rows
            for ($row = 1; $row <= $tableSize; $row++) {
                echo "<tr>";
                echo "<th>$row</th>"; 

                for ($column = 1; $column <= $tableSize; $column++) {
                    echo "<td>" . ($row * $column) . "</td>"; 
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a positive number.</p>";
        }
    }
    ?>
</body>
</html>
