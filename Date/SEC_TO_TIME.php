<?php
include("../db.php");

$sql = "SELECT SEC_TO_TIME(3661) AS result";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SEC_TO_TIME Function Output</title>
</head>
<body>

<a href="list.php">Back</a>

<h2>SEC_TO_TIME Function Output</h2>

<p><b>SQL Used:</b></p>
<pre>SELECT SEC_TO_TIME(3661) AS result</pre>

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