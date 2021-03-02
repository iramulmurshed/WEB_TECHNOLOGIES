<?php

class value_insert
{
    function OpenCon()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }


    function value($conn, $fname, $email, $user, $pass, $gender, $dob)
    {
        $sql = "INSERT INTO user (user,email,username,password,gender,birthday)
        VALUES ('$fname','$email','$user','$pass','$gender','$dob')";
        $res = $conn->query($sql);
        if ($res) {
            echo "new record inserted";
        } else {
            echo "error " . $conn->error;
        }
    }


    function CloseCon($conn)
    {
        $conn->close();
    }
};
?>
