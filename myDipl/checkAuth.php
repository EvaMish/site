<?php
session_start();
$link = mysqli_connect("localhost", "root", "123456", "workshop");
if($_POST != NULL)
{
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    
    if($email == "" || $password== "")
    {
        echo "<div class='alert alert-danger' role='alert'>Вы не заполнили все поля!</div>";
        return;  
    }
    else
    {      
        $query = mysqli_query($link, "Select id_us from users where mail = '".$email."' and pass= '".$password."' ");
        $data = mysqli_fetch_assoc($query);
        if(is_null($data))
        {
           
            echo "<div class='alert alert-danger' role='alert'>Неправильный пароль / адрес электронной почты!</div>";
            
        }
        else
        {
            $res_data =mysqli_query($link, "Select id_us from users where mail = '".$email."'");
            while ($row = mysqli_fetch_assoc($res_data)) 
            {
                $_SESSION['id_us'] = $row["id_us"];
            }
            

            echo "<div class='alert alert-success' role='alert'>Вы вошли в свой аккаунт!</div>";
            
            
        }
    }  
    mysqli_close($link);
}
?>