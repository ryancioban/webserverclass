<!DOCTYPE html>
<html>
    <head>
        <title>Google Search</title>
    </head>

    <body>
        <?php
            //Define variables
            $servername = "localhost";
            $username = "ryan";
            $password = "password";
            $dbname = "pistore";

            $search = htmlspecialchars($_POST['search']);
            $ip = $_SERVER['REMOTE_ADDR'];

            //Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //Check connection
             if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            //Insert data from form
            $sql = "INSERT INTO searcher (Result, IP) VALUES ('$search', '$ip')";

            //Check for error
            if (mysqli_query($conn, $sql)) {
                echo "Search complete! <br>";
            } else {
                echo "Error: " .$sql . "<br>" . mysqli_error($conn);
            }

            //En of program
            mysqli_close($conn);



        ?>
    </body>
</html>