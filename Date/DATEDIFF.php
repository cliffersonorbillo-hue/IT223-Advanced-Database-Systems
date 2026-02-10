<?php
include("../db.php");

$sql = "SELECT DATEDIFF('2024-01-10','2024-01-01') AS result";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATEDIFF Function Output</title>
</head>
<body>

<a href="list.php">Back</a>

<h2>DATEDIFF Function Output</h2>

<p><b>SQL Used:</b></p>
<pre>SELECT DATEDIFF('2024-01-10','2024-01-01') AS result</pre>

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