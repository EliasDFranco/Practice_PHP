<!DOCTYPE html>
<html>
<body>

<form action="exampleGet.php" method="get">
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>

<input type="submit">

</form>

<?php 
if (isset($_GET["name"]) && isset($_GET["email"])) { // The isset function in PHP checks if a variable is set and not null, commonly used in if conditions to prevent errors.
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
}
?>

</body>

</html>