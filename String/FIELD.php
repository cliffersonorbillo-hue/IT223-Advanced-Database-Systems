<?php
include("../db.php");

$sql = "SELECT FIELD(city, 'Chicago','New York','Los Angeles') AS result FROM data";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>FIELD Function Output</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .nav-link {
            display: inline-block;
            margin-bottom: 15px;
            color: #0066cc;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>
<body>

<a class="nav-link" href="list.php">Back to String Functions</a>

<h2>FIELD Function Output</h2>

<p><b>SQL Used:</b></p>
<pre>SELECT FIELD(city, 'Chicago','New York','Los Angeles') AS result FROM data</pre>

<table border="1" cellpadding="8">
<tr>
    <th>Result</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= implode(" | ", $row) ?></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>