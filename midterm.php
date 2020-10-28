<!DOCTYPE html>
<html>
    <body>
        <?php

            //Define variables
            $servername = "localhost";
            $username = "ryan";
            $password = "password";
            $dbname = "pistore";

            $ProgName = "";

            //Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            //Select data from table and query
            $sql = "SELECT ProgramName FROM Programs";
            $result = mysqli_query($conn, $sql);

        ?>

        <p> Choose a program: </br>

        <?php    
            while($row = mysqli_fetch_assoc($result)) {
                $ProgName = $row["ProgramName"];
                //echo $ProgName;
        ?>
        <input type="radio" name="ProgName" value=<?php echo $ProgName; ?>> </br>
        <?php } ?>

        <?php mysqli_close($conn);?>
    </body>
</html>