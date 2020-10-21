<!DOCTYPE html>
<html>
    <body>
        <?php

            //Define variables
            $servername = "localhost";
            $username = "ryan";
            $password = "password";
            $dbname = "pistore";

            $EnterName = $_POST["name"];
            $EnterAge = $_POST["age"];
            $EnterGender = $_POST["gender"];
            $EnterDrink = $_POST["drink"];

            //Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            //Insert data from form
            $sql = "INSERT INTO drinkers (Name, Age, Gender, Drinktype) VALUES ('$EnterName', $EnterAge, '$EnterGender', '$EnterDrink')";

            //Check for error
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully. <br>";
            } else {
                echo "Error: " .$sql . "<br>" . mysqli_error($conn);
            }

            //Select data and query
            $sql = "SELECT * FROM drinkers";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                //output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Entry #: " . $row["Entryid"]. " Name: " . $row["Name"]. " Gender: " .$row["Gender"]. " Drink: " . $row["Drinktype"]. "<br>";
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);

        ?>
    </body>
</html>