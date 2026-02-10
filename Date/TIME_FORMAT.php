<?php
include("../db.php");

$sql = "SELECT TIME_FORMAT(created_at, '%H:%i') AS result FROM data";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>TIME_FORMAT Function Output</title>
</head>
<body>

<a href="list.php">Back</a>

<h2>TIME_FORMAT Function Output</h2>

<p><b>SQL Used:</b></p>
<pre>SELECT TIME_FORMAT(created_at, '%H:%i') AS result FROM data</pre>

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