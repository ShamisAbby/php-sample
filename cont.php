<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['mail'];
$massage = $_REQUEST['massage'];

if (empty($name) || empty($email) || empty($massage)) {
    echo "Please fill the empty area";
} else {
    mail("shamisaziz52@gmail.com", $name, $massage, "From: $name <$email>");
    echo "<script type='text/javascript'> alert ('Messege sent');
    window.history.log(-1);
    </script>";
}
