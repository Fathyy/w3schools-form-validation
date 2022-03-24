<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .error{
            color: #FF0000;
        }
    </style>  
</head>
<body>
<!-- define variables and then set to empty -->
<?php
$nameErr = $emailErr = $genderErr = $websiteErr ="";
$name= $email= $gender = $comment= $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["name"])){
        $nameErr = "Name is required"; 
    }
    else{
        $name = test_input($_POST["name"]);
        // check if name contains letters and whitespace
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr= "Only letters and whitespace are allowed";
        }
    }


    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }
    else{
        $email= test_input($_POST["email"]);
        //check if email is well formed
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr= "invalid email format";
        }
    }


    if(empty($_POST["website"])){
        $website = "";
    }
    else{
        $website= test_input($_POST["website"]);
        //check if url syntax is valid. This regex also
        //allows dashes in the url
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr="Invalid url";
        }
    }

    if(empty($_POST["comment"])){
        $comment ="";
    }
    else{
        $comment = test_input($_POST["comment"]);
    }


    if(empty($_POST["gender"])){
        $genderErr = "gender is required";
    }
    else{
        $gender= test_input($_POST["gender"]);
    }
    
}

function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>
<h2>PHP form Validation example</h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo 
    htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name:
    <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>

    Email:
    <input type="email" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>

    Website:
    <input type="text" name="website">
    <span class="error">* <?php echo $websiteErr;?></span>
    <br><br>

    Comment: 
    <textarea name="comment" cols="30" rows="10"></textarea>

    Gender:
    <input type="radio" name="gender" value="female">Female

    <input type="radio" name="gender" value="male">male
    
    <input type="radio" name="gender" value="other">other
    <br><br>

    <input type="submit" value="Submit">

    </form>

    <?php
    echo "<h2> Your input </h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    ?>

</body>
</html>

