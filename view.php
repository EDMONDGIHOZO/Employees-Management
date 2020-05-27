<?php
require_once('include/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="include/main.css">
    <title>View the employees</title>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>SSN</th>
                <th>Department</th>
                <th>Salary</th>
            </tr>
        </table>
    </div>
</body>

</html>