<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    
    if(!empty(preg_match("/^[А-я]+/", $name) === 0 && preg_match("/^[A-z]+/", $name) === 0))
    {
        echo "Некорректное имя";  
    }
    
    else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    {
        echo "Некорректный email";
    }
    else{
        //Отправка
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    
        if(mail("test@mail.ru", $subject, $message, $headers))
            echo "Сообщение Отправлено";
        else
            echo "Сообщение не отправлено";
    }    
?>