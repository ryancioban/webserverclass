<!DOCTYPE html>
<html>
     <head>
        <title>Drinking Time</title>
        <!--Change picture on index page by hovering over it with the mouse-->
        <script src="swap.js"></script>
    </head>
    
    <body>

        <h1>Everybody Drink!</h1>
        <h2>Tell me about your preferred beverage.</h2>
        <br/>

        <div>There are <span style="font-size:150%">lots</span> of types of drinks out there and 
        everyone has their own way to quench their thirst.</div>
        <br/>
        <div>Personally, beer is my favourite drink. Let's have a cheers to that!</div>
        <br/>

        <img src="images/beer.jpg" alt="Where is my beer?" 
        width="462" height="259.2" id="picture" onmouseover="one()" onmouseout="two()" />
        <br/><br/>
        
        <div>My top 3 beer brands are:</div>
        <ol>
            <li>Belgian Moon</li>
            <li>Kilkenny</li>
            <li>Heineken</li>
        </ol>

        <div>Click <a href="forms.php" target=" _blank">here</a> to tell me about what
        you like to drink!</div>
            
        <div>Click <a href="midterm.php" target=" _blank">here</a> to test midterm.</div>

        <form method="post">
            <input type="submit" name="test" id="test" value="Toggle LED"/><br/>
        </form>

        <?php
        //define and set flag variable
        $flag = 0;

        function toggler() {
            if($flag == 0){
            $output= `gpio write gpio.0 1`;
            echo "<div>$output</div>";
            echo "<br>LED should toggle ON!<br>";
            }

            else if ($flag == 1){
            $output= `gpio write gpio.0 0`;
            echo "<div>$output</div>";
            echo "<br>LED should toggle OFF!<br>";
            }

        }

        /*function toggleOFF() {
            $output= `gpio write gpio.0 0`;
            echo "<div>$output</div>";
            echo "<br>LED should toggle OFF!<br>";
        }*/

        if(array_key_exists('test',$_POST) && $flag == 0){
            toggler();
            $flag = 1;
        }

        else if(array_key_exists('test',$_POST) && $flag == 1){
            toggleOFF();
            $flag = 0;
        }
        
        ?>

     </body>
</html>