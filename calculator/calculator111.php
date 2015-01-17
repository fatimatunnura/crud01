<?php

    session_start();

    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
    $option=$_POST['option'];

    if ( $_POST['cal'] == "add" ) {
        echo "Successful Addition of two entered number is : " ;
        echo $number1 + $number2;
    }
    if ( $_POST['cal'] == "subtract" ) {
        echo "Successful Subtraction of two entered number is : ";
        echo $number1 - $number2;
    }
    if ( $_POST['cal'] == "multiply" ) {
        echo "Successful Multiplication of two entered number is : ";
        echo $number1 * $number2;
    }
    if ($_POST['cal'] == "divide" ) {
        echo "Successful Division of two entered number is : ";
        echo $number1 / $number2;
    }


function add($number1,$number2){
    return $number1+$number2;

}


function subtract($number1,$number2)
{

    if ($number1 >= $number2) {
        return $number1 - $number2;
    } else {
        $_SESSION['msg'] = "Number1 should be larger than Number2";
        header('location: form1.php');
    }
}



function multiply($number1,$number2)
{
    return $number1 * $number2;
}


function divide($number1,$number2)
{
    if ($number2==0 ) {
        $_SESSION['msg'] = "Can not Divide";
        header('location: form1.php');
    } else {
        return $number1 / $number2;
    }
}