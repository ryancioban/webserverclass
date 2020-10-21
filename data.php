<!DOCTYPE html>
<html>
    <body>
        <?php

            //Define variables
            $servername = "localhost";
            $username = "ryan";
            $password = "password";
            $dbname = "pistore";

            //Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //Check connection
            if (!$conn) {
                die("Connection failed: " . mnysqli_connect_error());
            }
            
            //Select data
            $sql = "SELECT Entryid, Name, Age, Gender, Drinktype FROM drinkers";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                //output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Entryid: " . $row["Entryid"]. " Name: " . $row["Name"]. " Gender: " .$row["Gender"]. " Drink: " . $row["Drinktype"]. "<br>";
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);

        ?>
    </body>
</html>