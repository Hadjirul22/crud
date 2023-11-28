<head><title>Add Syllabus</title></head>
<body>
    <h1>Add syllabus</h1>
    <a href="../index.php">home</a>
    <br></br>
    <form action="../functions/addsyllabus.php" method="post" name="form1">
        <table width="12%">
            <tr>
                <td>syllabus code</td>
                <td><input type="text" name="code"></td>

            </tr>
            <tr>
                <td>syllabus code</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>subject</td>
                <td>
                    <select name="subject">
                        <?php
                        include_once("../dbconnection/mysqlconfig_connection.php");
                        $query = "SELECT * FROM tblsubjects";
                        $result = mysqli_query($dbc,$query);
                        while($res = mysqli_fetch_array($reult)){
                            echo "<option value\"".$res['subject_id']."\">";
                            echo $res['subject_name'];
                            echo "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <td></td>
            <td><input type='submit' name="Submit" value="Add"> </td>
            
        </table>
    </form>

</body>
