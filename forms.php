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

        <form action="submitted.php" method="post">
            Name: <input type="text" id="name" name="name"><br/><br/>

            Age: <input type="text" id="age" name="age"><br/><br/>
            
            <div>Gender:</div>
            <input type="radio" id="gender" name="gender" value="Male"> Male <br/>
            <input type="radio" id="gender" name="gender" value="Female"> Female <br/>
            <input type="radio" id="gender" name="gender" value="Other"> Other <br/>
            <br/>

            Preferred drink: <select id="drink" name="drink">
                <option value="Alcohol">Alcoholic</option>
                <option value="Non-Alcoholic">Non-Alcoholic</option>
                <option value="Water">Water</option>
            </select><br/>
            <input type="submit">
        </form>
        </br>

        <button type="button"
        onclick="AgeCheck();NameCheck();GenderCheck()">Submit2</button>

        <p id="check"></p>
        <p id="check2"></p>
        <p id="check3"></p>

    </body>
</html>