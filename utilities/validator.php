<?php

function validate_name($name){
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        return [false, "Name: Only letters and white space allowed"];
    } else if ($name > 40){
        return [false, "Name: More than 40"];
    } else {
        return [true, "Name: CORRECT"];
    }
}

function validate_surname($surname){
    if (!preg_match("/^[a-zA-Z ]*$/", $surname)) {
        return [false, "Surname: Only letters and white space allowed"];
    } else if ($surname > 40){
        return [false, "Surname: More than 40"];
    } else {
        return [true, "Surname: CORRECT"];
    }
}

function validate_username($username){
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        return [false, "Name: Only letters and white space allowed"];
    } else if ($name > 40){
        return [false, "Name: More than 40"];
    } else {
        return [true, "Name: CORRECT"];
    }
}

function validate_email($birthdate){
    if (!preg_match("/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/", $birthdate)) {
        return [false, "Email: Invalid email format"];
    } else {
        return [true, "Email: CORRECT"];
    }
}

function validate_email($email){
    if (!preg_match("/^[0-9a-z]*[@][0-9a-z]*[.][a-z]*$/", $email)) {
        return [false, "Email: Invalid email format"];
    } else {
        return [true, "Email: CORRECT"];
    }
}

function validate_form($name, $surname1, $username, $birthdate, $email){
    $errMsg = '';

    if (!empty($name) && !empty($surname) && !empty($username) && !empty($birthdate0) && !empty($email)){
        global $errMsg;

        $valName = validate_name($name);
        if (!$valName[0]){
            $errMsg .= "<p>" . $valName[1] . "</p>";
        }

        $valSurname1 = validate_surname($surname);
        if (!$valSurname1[0]){
            $errMsg .= "<p>" . $valSurname[1] . "</p>";
        }

        $valusurname = validate_username($username);
        if (!$valusername[0]){
            $errMsg .= "<p>" . $valusername[1] . "</p>";
        }

        $valbirthdate = validate_birthdate($birthdate);
        if (!$valbirthdate[0]){
            $errMsg .= "<p>" . $valbirthdate[1] . "</p>";
        }

        $valEmail = validate_email($email);
        if (!$valEmail[0]){
            $errMsg .= "<p>" . $valEmail[1] . "</p>";
        }

    } else {
        $errMsg = "Empty fields";
    }

    if ($errMsg == ''){
        return [true, ''];
    } else {
        return [false, $errMsg];
    }

}

?>