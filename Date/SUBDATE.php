<?php
include("../db.php");

$sql = "SELECT SUBDATE('2024-01-10', INTERVAL 5 DAY) AS result";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SUBDATE Function Output</title>
</head>
<body>

<a href="list.php">Back</a>

<h2>SUBDATE Function Output</h2>

<p><b>SQL Used:</b></p>
<pre>SELECT SUBDATE('2024-01-10', INTERVAL 5 DAY) AS result</pre>

<table border="1" cellpadding="8">
<tr><th>Result</th></tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= implode(" | ", $row) ?></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>