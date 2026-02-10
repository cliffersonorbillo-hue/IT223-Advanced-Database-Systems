<?php
include("../db.php");

$sql = "SELECT name,
                CASE
                    WHEN price > 1000 THEN 'Expensive'
                    ELSE 'Affordable'
                END AS result
         FROM data";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CASE Function Output</title>
    <meta charset="UTF-8">
</head>
<body>

<a href="list.php">Back</a>

<h2>CASE Function Output</h2>

<p><b>SQL Used:</b></p>
<pre>SELECT name,
                CASE
                    WHEN price > 1000 THEN 'Expensive'
                    ELSE 'Affordable'
                END AS result
         FROM data</pre>

<table border="1" cellpadding="8">
<tr>
<?php
// Print table headers dynamically
while ($field = $result->fetch_field()) {
    echo "<th>" . htmlspecialchars($field->name) . "</th>";
}
$result->data_seek(0);
?>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
<?php foreach ($row as $value): ?>
    <td><?= ($value === null) ? 'NULL' : htmlspecialchars($value) ?></td>
<?php endforeach; ?>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>