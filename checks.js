function AgeCheck() {
    var x, text;
    
    //Get the value of the age
    x = document.getElementById("age").value;

    //Check if x is greater or equal than 18 or not a number
    if (x < 18 || isNaN(x)) {
        text = "You must be over 18 to submit this form.";
    } else {
        text = "Age OK"
    }
    document.getElementById("check").innerHTML = text;
}

function NameCheck() {
    var y, text2;

    //Get the name text
    y = document.getElementById("name").value;

    //Check is anything was entered
    if (!y) {
        text2 = "Please enter your name.";
    } else {
        text2 = "Name OK";
    }
    document.getElementById("check2").innerHTML = text2;
}