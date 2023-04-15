<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $abteilung =  $_POST['abteilung'];   
    $gerichte =   $_POST['gerichte'];
    $anzahl =     $_POST['anzahl'];

}else{
    $abteilung =  "";   
    $gerichte =   "";
    $anzahl =     "";

}

$errors = [
    'abteilungError' => '',
    'gerichteError' => '',
    'anzahlError' => '',
];
if (isset($_POST['submit'])){

    if(empty($abteilung)){
        $errors['abteilungError'] = 'Abteilung ist leer';
    }if(empty($gerichte)){
        $errors['gerichteError'] = 'Gerichte ist leer';
    }if(empty($anzahl)){
        $errors['anzahlError'] = 'Anzahl ist leer';
    }
    
    
    if(!array_filter($errors)){
        $abteilung =  mysqli_real_escape_string($conn, $_POST['abteilung']);   
        $gerichte =   mysqli_real_escape_string($conn, $_POST['gerichte']);
        $anzahl =     mysqli_real_escape_string($conn, $_POST['anzahl']); 

        $sql = "INSERT INTO gerichte(abteilung, gerichte, anzahl) 
                VALUES ('$abteilung', '$gerichte', '$anzahl')";

        if(mysqli_query($conn, $sql)){
            header('Location: kueche.php');
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }

    }
    
}