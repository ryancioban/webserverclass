<!DOCTYPE html>
<html>
    <head>
        <title>Drinks Entry</title>
        <!--Script to check if the entered age is appropriate and if a name was entered-->
        <script src="checks.js"></script>
    </head>
    
    <body>

        <h1>Do you like to drink?</h1>
        <br/>
        <div>Tell me about yourself below:</div>
        <br/>

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
            }
            
            if (empty($_POST["age"])) {
                $ageErr = "Age is required.";
            } else {
                $age = test_input($_POST["age"]);
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
        ?>

        <!--Form elements-->
        <p><span class="error">* required field</span></p>
        <form action="submitted.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" id="name" name="name">
            <span class="error">* <?= $nameErr;?></span> <br/><br/>

            Age: <input type="text" id="age" name="age">
            <span class="error">* <?= $ageErr;?></span> <br/><br/>
            
            <div>Gender:</div>
            <input type="radio" id="gender" name="gender" value="Male"> Male <br/>
            <input type="radio" id="gender" name="gender" value="Female"> Female <br/>
            <input type="radio" id="gender" name="gender" value="n/a"> Other 
            <span class="error">* <?= $genderErr;?></span> <br/><br/>

            Preferred drink: <select id="drink" name="drink">
                <option value="Alcohol">Alcoholic</option>
                <option value="Non-Alcoholic">Non-Alcoholic</option>
                <option value="Water">Water</option>
            </select><br/><br/>
            <input type="submit" name="submit" value="Submit">
        </form>
        </br>

        <button type="button"
        onclick="AgeCheck();NameCheck();GenderCheck()">Submit2</button>

        <p id="check"></p>
        <p id="check2"></p>
        <p id="check3"></p>

    </body>
</html>