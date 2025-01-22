<!DOCTYPE html>
<html>

<body>
    
    <form action="examplePost.php" method="post">
Name: <input type="text" name="name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>

<input type="submit">

    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  // $_SERVER["REQUEST_METHOD"]: Check if the form was submitred using the POST method. 
    $name = htmlspecialchars($_POST["name"]); // htmlspecialchars(): Avoid security issues such a malicius code injection.
    $last_name = htmlspecialchars($_POST["last_name"]);
    $Email = htmlspecialchars($_POST["email"]);
}
?>

</body>

</html>