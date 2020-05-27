<?php

//import the connection file 
require_once("include/db.php");

if (isset($_POST["submit"])) {
    if (!empty($_POST["emp_name"]) && !empty($_POST["ssn"])) {
        ///get the variable from the form

        $emp_name = $_POST["emp_name"];
        $ssn = $_POST["ssn"];
        $dept = $_POST["dept"];
        $salary = $_POST["salary"];
        $homeaddress = $_POST["homeaddress"];

        /// talking to database
        $connectingDB;
        $sql = "INSERT INTO employee(ssn,emp_name,dept,salary, homeaddress) VALUES (:Ename, :Snumber, :SAlary, :dPt, :hoMEaddress)";
        $stmt = $connectingDB->prepare($sql);
        $stmt->bindValue(':Ename', $emp_name);
        $stmt->bindValue(':Snumber', $ssn);
        $stmt->bindValue(':SAlary', $salary);
        $stmt->bindValue(':dPt', $dept);
        $stmt->bindValue(':hoMEaddress', $homeaddress);
        /// the save in the database
        $execute = $stmt->execute();

        if ($execute) {
            echo '<span class="success"> The new employee is added </span>';
        }
        else {
            echo "something is wrong";
        }
    } else {
        echo '<span class="error">' . 'at least add your name and ss number' . '</span>';
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="include/main.css">
    <title>CRUD Application</title>
</head>

<body>
    <div class="container">
        <h3>Add new Employee</h3>
        <hr>
        <form actions="create.php" method="POST">
            <fieldset class="creation_form">
                <span class="label">Employee name</span>
                <input type="text" name="emp_name" id="eName">
                <span class="label">Social security Number</span>
                <input type="text" name="ssn" id="snumber">
                <span class="label">Department</span>
                <input type="text" name="dept" id="dpt">
                <span class="label">Salary</span>
                <input type="text" name="salary" id="salary">
                <span class="label">home Address</span>
                <textarea name="homeaddress" id="address"> </textarea>
                <input value="create" type="submit" name="submit" class="btn submit">
            </fieldset>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>