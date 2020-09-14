
<?php
// used to connect to the database
$host = "localhost";
$db_name = "census";
$username = "root";
$password = "";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}



?>

<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <td><?= $ogtt_hansom_tally ?></td>
            <td><?= $ogtt_hansof_tally ?></td>
            <td><?= $ogtt_hansipm_tally ?></td>
            <td><?= $ogtt_hansipf_tally ?></td>
            <td><?= $ogtt_nhom_tally ?></td>
            <td><?= $ogtt_nhof_tally ?></td>
            <td><?= $ogtt_nhipm_tally ?></td>
            <td><?= $ogtt_nhipf_tally ?></td>
        </tr>
        </thead>
</table>