<!DOCTYPE html>
<html>
    <head>
        <title>Programs</title>
    </head>

    <body>
        <!--Connect to database-->
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

        <!-- Displayed fields -->
        <h1> Choose a program: </h1> </br>
        
        <?php    
            while($row = mysqli_fetch_assoc($result)) {
                $ProgName = $row["ProgramName"];
        ?>
        <br>
        <input type="radio" name="ProgName" value="<?php echo $ProgName; ?>">
        <?php
            echo $ProgName; //This actually displays the program name
        } ?>
        </br>

        <?php mysqli_close($conn);?>

        <!--Prompt for name-->
        <br>
        <div id="name"></div> 
        </br>

        <form>
            <input type="text" id="name" name="name">
            <button onclick="FillName()">Submit</button>
        </form>

        <script>
        function FillName("text") {
            document.getElementById("name").innerHTML = "text";
        }
        </script>
    </body>
</html>