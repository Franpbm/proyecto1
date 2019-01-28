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

function validate_dni($dni){
    if (!preg_match("/^[0-9]{8}[a-zA-Z]$/", $dni)) {
        return [false, "DNI: Incorrect format"];
    } else {
        return [true, "DNI: CORRECT"];
    }
}

function validate_phone($phone){
    if (!preg_match("/^[0-9]*$/", $phone)) {
        return [false, "Phone: Only numbers allowed"];
    } else if (strlen($phone) < 9){
        return [false, "Phone: must contain more than 8 numbers"];
    } else if (strlen($phone) > 12){
        return [false, "Phone: must contain less than 12 numbers"];
    } else {
        return [true, "Phone: CORRECT"];
    }
}

function validate_email($email){
    if (!preg_match("/^[0-9a-z]*[@][0-9a-z]*[.][a-z]*$/", $email)) {
        return [false, "Email: Invalid email format"];
    } else {
        return [true, "Email: CORRECT"];
    }
}

function validate_form($name, $surname1, $surname2, $dni, $phone, $email){
    $errMsg = '';

    if (!empty($name) && !empty($surname1) && !empty($surname2) && !empty($dni) && !empty($phone) && !empty($email)){
        global $errMsg;

        $valName = validate_name($name);
        if (!$valName[0]){
            $errMsg .= "<p>" . $valName[1] . "</p>";
        }

        $valSurname1 = validate_surname($surname1);
        if (!$valSurname1[0]){
            $errMsg .= "<p>" . $valSurname1[1] . "</p>";
        }

        $valSurname2 = validate_surname($surname2);
        if (!$valSurname2[0]){
            $errMsg .= "<p>" . $valSurname2[1] . "</p>";
        }

        $valDNI = validate_dni($dni);
        if (!$valDNI[0]){
            $errMsg .= "<p>" . $valDNI[1] . "</p>";
        }
        
        $valPhone = validate_phone($phone);
        if (!$valPhone[0]){
            $errMsg .= "<p>" . $valPhone[1] . "</p>";
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