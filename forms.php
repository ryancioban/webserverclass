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
            Male <input type="radio" id="gender" name="gender" value="male">
            Female <input type="radio" id="gender" name="gender" value="female">
            Other <input type="radio" id="gender" name="gender" value="other">
            <br/>

            Preferred drink: <select id="drink" name="drink">
                <option value="alcohol">Alcoholic</option>
                <option value="no-alcohol">Non-Alcoholic</option>
                <option value="water">Water</option>
            </select>
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