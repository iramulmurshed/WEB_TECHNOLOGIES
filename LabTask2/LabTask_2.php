<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>registration page</title>
</head>

<body>

    <?php
    $validateName = "";
    $validateEmail = "";
    $validateUsername = "";
    $genderValidation = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST["fname"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $confirmPass = $_REQUEST["confirmPassword"];
        $validPassword = "";

        if (empty($name) || strlen($name) < 5 || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $validateName = "you must enter your name";
        } else {
            $validateName = "your name is :" . $name;
        }
        if (empty($email)) {
            $validateEmail = "you must enter your email";
        } else {
            $validateEmail = "your email is :" . $email;
        }
        if (!isset($_REQUEST["gender"])) {
            $genderValidation = "select your gender";
        } else {
            $gender = $_REQUEST["gender"];;
            $genderValidation = "your gender is :" . $gender;
        }
        if (empty($password) || empty($confirmPassword)) {
            $validPassword = "enter your password";
        } elseif ($password != $confirmPassword) {
            $$validPassword = "your password is incorrect";
        } else if ($password > 8) {
            $validPassword = "password must contain at least 8 characters";
        } else {
            $validPassword = "password is  correct";
        }
    }
    ?>

    <h1>my registration page</h1>
    <form form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" /><?php echo $validateName; ?></td>
                <td></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" /><?php echo $validateEmail; ?></td>
            </tr>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="userName" /><?php echo $validateUsername; ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confirmPassword" /></td>
            </tr>
        </table>

        Gender:
        <br>
        <input type="radio" name="gender" id="male" value="male" />
        Male
        <input type="radio" name="gender" id="female" value="female" />
        Female
        <input type="radio" name="gender" id="other" value="other" />
        other
        <br>
        <?php echo $genderValidation; ?>
        <br>
        
        Date of birth:
        <br>
        <input type="date" id="birthday" name="birthday">
        <br>
        <br>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
    </form>
</body>

</html>