<?php
include("../db.php");

$sql = "SELECT SUM(price) AS result FROM data";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SUM Function Output</title>
</head>
<body>

<a href="list.php">Back </a>

<h2>SUM Function Output</h2>

<p><b>SQL Used:</b></p>
<pre>SELECT SUM(price) AS result FROM data</pre>

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