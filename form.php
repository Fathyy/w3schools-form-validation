<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    $fullname=$email=$gender=$comment=$number=$age="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname= test_input($_POST['name']);
        $fullname= test_input($_POST['email']);
        $fullname= test_input($_POST['number']);
        $fullname= test_input($_POST['comment']);
        $fullname= test_input($_POST['gender']);
        $fullname= test_input($_POST['age']);
    }

    
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);

}
?>

<h2>Form Validation</h2>

<form method="post" action="<?php echo 
    htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Full Name:
    <input type="text" name="name">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    number(optional):
    <input type="tel" name="number">
    <br><br>
     
    Age:
    <input type="text" name="age">
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
    echo $fullname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $number;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    ?>

</body>
</html>


    
