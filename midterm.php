<!DOCTYPE html>
<html>
    <body>
        <?php

            //Define variables
            $servername = "localhost";
            $username = "root";
            $password = "EagleStrike1q";
            $dbname = "pistore";

            //Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            //Select data from table and query
            $sql = "SELECT ProgramName FROM Programs;"
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                //output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Name:" . $row["ProgramName"].  "<br>";
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
        ?>
    </body>
</html>