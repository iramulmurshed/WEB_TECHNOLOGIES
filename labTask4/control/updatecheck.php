<?php
include('../model/db.php');


$error = "";


if (isset($_POST['update'])) {
    if (
        empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['password'])

         || !isset($_POST['interests']) || empty($_POST['address'])
    ) {
        $error = "invalid input";
    }
     else {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->UpdateUser(
            $conobj,
            "student",
            $_SESSION["username"],
            $_POST['firstname'],
            $_POST['email'],
            $_POST['password'],
            $_POST['address'],
            $_POST['dob'],
            $_POST['gender'],
            $_POST['interests'],
            $_POST['profession']
           
        );
        if ($userQuery == TRUE) {
            echo "update successful";
        } else {
            echo "could not update";
        }
        $connection->CloseCon($conobj);
    }
}
