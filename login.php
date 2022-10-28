<?php

if(isset($_POST['uname']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
    }
    $uname = validate($_POST['uname']); 
    $pass = validate($_POST['password']);

    if(empty($uname)){
        header("Location: index.php?error=username is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: index.php?error=password is required ");
        exit();
    }
    else{   
        echo "Valid input";
    }

}
else{
    header("Location: index.php"); 
    exit();
}

?>