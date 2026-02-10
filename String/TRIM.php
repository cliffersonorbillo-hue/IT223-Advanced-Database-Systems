<?php
include("../db.php");

$sql = "SELECT TRIM('   Hello   ') AS result";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>TRIM Function Output</title>
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

<h2>TRIM Function Output</h2>

<p><b>SQL Used:</b></p>
<pre>SELECT TRIM('   Hello   ') AS result</pre>

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