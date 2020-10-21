<html>
    <body>

        <!--PHP form validation-->
        <?php
            //Define variables and set to empty values
            $nameErr = $ageErr = $genderErr = "";
            $name = $age =  $gender = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required.";
                } else {
                    $name = test_input($_POST["name"]);
                    //check for letters and whitespace
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space are allowed.";
                    }
                }
                
                if (empty($_POST["age"])) {
                    $ageErr = "Age is required.";
                } else {
                    $age = test_input($_POST["age"]);
                    //check for numbers only
                    if (!ctype_digit($age)) {
                        $ageErr = "Only digits are allowed.";
                    }
                    //check if age is over 18
                    else if ($age < 18) {
                        $ageErr = "You must be over 18 to drink!";
                    }
                    //check if entered age is too high
                    else if ($age > 110) {
                        $ageErr = "Damn you're old.";
                    }
                }

                if (empty($_POST["gender"])) {
                $genderErr = "Choice is required."; 
                } else {
                    $gender = test_input($_POST["gender"]);
                }
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            //<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
        ?>
        
        Welcome <?php echo $_POST["name"]; ?>!<br/>
        Your age is: <?php echo $_POST["age"]; ?><br/>
        You are: <?php echo $_POST["gender"]; ?><br/>
        Your preferred drink is: <?php echo $_POST["drink"]; ?><br/>

    </body>
</html>