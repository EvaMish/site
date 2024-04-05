<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "workshop");

if($_POST != NULL)
{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    
   
    if($name=="" ||  $number =="" || $email=="" || $pass==""){
          
        echo "<div class='alert alert-danger' role='alert'>Вы не заполнили все поля!</div>";
        return;

        
    }else{
        $query = mysqli_query($link, "Select id_us from users where mail = '".$email."'");
        $data = mysqli_fetch_assoc($query);
   

        if(!is_null($data)){
            echo "<div class='alert alert-danger' role='alert'>Такой пользователь уже существует!</div>";
            return;  
        }
        else{
            $query = mysqli_query($link, "Insert into users values (default,'".$name."', '".$number."', '".$email."', '".$pass."')");
           $_SESSION['id_us'] = mysqli_query($link, "Select id_us from users where mail = '".$email."'");
           //while($row1 = mysqli_fetch_array($_SESSION['id_us'])){echo $row1[0];}
           echo "<div class='alert alert-success' role='alert'>Вы успешно зарегистрированы!</div>";
            
            
        }
    }
    
    mysqli_close($link);
}
?>

