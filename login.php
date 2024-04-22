<?php

if($_POST['username'] == "Hitesh"){
    if($_POST['password'] == "Hitesh1100@"){
        echo "Welcome Hitesh";
    }
    else{
        echo "Wrong Password";
    }
}

else{
    echo "Wrong ID";
}

?>