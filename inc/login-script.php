<?php

include './inc/conn.php';

// $welcome = ['first_name' => ''];


$db= $conn; // assign  your connection varibale

// by default, error messages are empty
$login=$emailErr=$passErr='';

    extract($_POST);
if(isset($_POST['login']))
{

   //input fields are Validated with regular expression
    $validName="/^[a-zA-Z ]*$/";
    $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";

//Email Address Validation
if(empty($email)){
    $emailErr="Email ist erforderlich"; 
}
else if (!preg_match($validEmail,$email)) {
    $emailErr="Ungültige E-Mail-Adresse";
}
else{
    $emailErr=true;
}
    
// password validation 
if(empty($password)){
    $passErr="Passwort ist erforderlich"; 
} 
else{
    $passErr=true;
}

// check all fields are valid or not
if( $emailErr==1 && $passErr==1)
{

   //legal input values
    $email=     legal_input($email);
    $password=  legal_input(md5($password));

   // call login function
    $login=login($email,$password);

}

}

// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

// function to insert user data into database table
function login($email,$password){

    global $db;

   // checking valid email
    $sql="SELECT email FROM users WHERE email= ?";
    $query = $db->prepare($sql);
    $query->bind_param('s',$email); 
    $query->execute();
    $exec=$query->get_result();
    if($exec){
        if($exec->num_rows>0){

    // checking email and password
    $loginSql="SELECT email, password FROM users WHERE email=? AND password=?";
    $loginQuery = $db->prepare($loginSql);
    $loginQuery->bind_param('ss',$email, $password); 
    $loginQuery->execute();
    $execQuery=$loginQuery->get_result();
    if($execQuery)
    {
        if($execQuery->num_rows>0){

            session_start();
            $_SESSION['email']=$email;
            header("location:kueche.php");
            
        }else{
            return "Das Passwort ist Falsch";
        }

    }else{
        return $db->error;
    }


}
    else{
    return $email." ist nicht registeriert";
}
}else{
    return $db->error;
}
    
    
}
?>