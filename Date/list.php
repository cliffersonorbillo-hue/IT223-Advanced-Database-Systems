<?php
include("../db.php");
include("functions.php");
?>

<a href="../index.php">Back</a>

<h2>MySQL Date Functions</h2>

<table border="1" cellpadding="8">
<tr>
    <th>#</th>
    <th>SQL Function</th>
    <th>Description</th>
    <th>Example Code</th>
    <th>Example Output</th>
</tr>

<?php
$no = 1;
foreach ($dateFunctions as $func => $data):
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $func ?></td>
    <td><?= $data[0] ?></td>
    <td><pre><?= $data[1] ?></pre></td>
    <td><a href="<?= $func ?>.php">View Output</a></td>
</tr>
<?php endforeach; ?>

</table>
