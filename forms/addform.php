
<?php
include_once("../dbConnection/mysqlconfig_connection.php");

// Check if the 'id' parameter exists in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $result = mysqli_query($dbc, "SELECT * FROM tblsubjects WHERE subject_id = $id");
    $code = $res['subject_code'];
    $name = $res['subject_name'];
    // Rest of your code for displaying the form
} else {
    // Handle the case when 'id' is not provided in the URL, e.g., show an error message or redirect to a different page.
    echo " ";
}
?>
<!-- Your HTML code follows... -->


<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
</head>

<body>
    <h1>Add Subject</h1>
    <a href="../index.php">Home</a>
    <br/>  <br/>
    <form action="../functions/add.php" method = "post" name = "form1">
    <table width ="25%" border = "0">
        <tr>
            <td>Subject Code</td>
            <td><input type="text" name = "code"></td>
        </tr>
        <tr>
            <td>Subject Name</td>
            <td><input type="text" name = "name"></td>
        </tr>
        <tr>
                <td><input type="submit" name = "Submit" value = "Submit"></td>
            </tr>
    </table>
    
    </form>
</body>
</html>