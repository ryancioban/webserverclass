<!DOCTYPE html>
<html>
    <head>
        <title>Quenched!</title>
    </head>

    <body>
        <h1>Thank you for your submission!</h1>
        <img src="images/friends.jpg" alt="I put my friends here :)" id="friends"/>
        <br/><br/>
        <h2>Here's a list of your fellow drinkers:</h2>
        <br>
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
                //Echo SQL error
                //echo "Error: " .$sql . "<br>" . mysqli_error($conn);
                echo "No entry made! <br>";
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
            //end of program
        ?>
        <br>
        <form method="post" action="index.php">
            <div>Click below to return to the main page.</div>
            <input type="submit" name="returner" id="returner" value="Return to main page"/><br/>
        </form>
    </body>
</html>