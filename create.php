<!DOCTYPE html>
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
        <h1>Add new Employee</h1>
        <hr>
        <form action="create.php" method="POST">
            <fieldset class="creation_form">
                <span class="label">Employee name</span>
                <input type="text" name="eName" id="eName">
                <span class="label">Social security Number</span>
                <input type="text" name="snumber" id="snumber">
                <span class="label">Department</span>
                <input type="text" name="dpt" id="dpt">
                <span class="label">Salary</span>
                <input type="text" name="salary" id="salary">
                <span class="label">home Address</span>
                <textarea  name="homeaddress" id="address" rows="8" cols="80"> </textarea>
            </fieldset>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>