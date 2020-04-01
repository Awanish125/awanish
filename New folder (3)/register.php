<?php

// connect db
require_once './sqlcon.php';

// get data from form
extract($_POST);

if(empty($name) || empty($roll) || empty($maths) || empty($science) || empty($computer) || empty($socail) || empty($english) || empty($total) || empty($per))
{
    echo "<script>";
    echo 'alert("Required parameters are not set!\nPlease fill the registration form carefully!"),';
    echo "location.href='/'";
    echo "</script>";
    
}
else
{
   
   $query = "INSERT INTO history
    (
        name,
        roll,
        maths,
        science,
        computer,
        socail,
        english,
        total,
        per
    )
    VALUES
    (
        '$name',
        '$roll',
        '$maths',
        '$science',
        '$computer',
        '$socail',
        '$english',
        '$total',
        '$per'
    )
    ";

    $run = mysqli_query($conn,$query);

    if($run)
    {
        // session_start();
        // $_SESSION['name'] = $name;
        echo "<script>";
        echo "alert('DONE!'),";
        echo "location.href='./calculator.php'";
        echo "</script>";
    }
    else
    {
        echo mysqli_error($conn);
    }

}


?>