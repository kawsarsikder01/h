
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_control.php"method="post">
    Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
    </form>

    Welcome <?php //echo $_POST["name"]; ?><br>
Your email address is: <?php //echo $_POST["email"]; ?>

</body>
</html>
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <?php
 $name = $email = $gender = $comment = $website = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $comment = test_input($_POST["comment"]);
    $website = test_input($_POST["website"]);
 }
 function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
 ?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="email" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
    </form>



    <?php
        echo $name ;
        echo "<br>";
        echo $email ;
        echo "<br>";
        echo $website ;
        echo "<br>";
        echo $comment ;
        echo "<br>";
        echo $gender ;
        echo "<br>";
    ?>
 </body>
 </html>

