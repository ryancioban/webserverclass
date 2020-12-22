<!DOCTYPE html>
<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "3";
?>
<html>
     <head>
        <title>Drinking Time</title>
        <!--Change picture on index page by hovering over it with the mouse-->
        <script src="swap.js"></script>
        <!--Auto-refresh page-->
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
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

        <br>
        <form method="post">
            <input type="submit" name="test" id="test" value="Toggle LED"/><br/>
        </form>

        <?php
            function toggler() {
                //Read value of gpio.0 pin
                $output = `gpio read 0`;

                //If pin is low
                if (($output = `gpio read 0`) == 0){
                    $output= `gpio write gpio.0 1`;
                    echo "<div>$output</div>";
                    echo "<br>LED should toggle ON!<br>";
                }
                
                //If pin is high
                else if (($output = `gpio read 0`) == 1){
                    $output= `gpio write gpio.0 0`;
                    echo "<div>$output</div>";
                    echo "<br>LED should toggle OFF!<br>";
                }

            }

            //Execute function on post
            if(array_key_exists('test',$_POST)){
                toggler();
            }

            //Read value from gpio.2 pin
            $output = `gpio read 2`;

            //If pin is low
            if (($output = `gpio read 2`) == 0){
                echo "<br>Switch is LOW!<br>";
            }

            //If pin is high
            else if (($output = `gpio read 2`) == 1){
                echo "<br>Switch is HIGH!<br>";
            }
        ?>

     </body>
</html>