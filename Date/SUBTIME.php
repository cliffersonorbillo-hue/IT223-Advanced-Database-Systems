<?php
include("../db.php");

$sql = "SELECT SUBTIME('10:00:00', '01:30:00') AS result";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SUBTIME Function Output</title>
</head>
<body>

<a href="list.php">Back</a>

<h2>SUBTIME Function Output</h2>

<p><b>SQL Used:</b></p>
<pre>SELECT SUBTIME('10:00:00', '01:30:00') AS result</pre>

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