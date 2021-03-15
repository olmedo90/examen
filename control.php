<?php
require_once('conex.php');

if(isset($_POST['but_submit'])){

    $uname = $_POST['txt_uname'];
    $password =$_POST['txt_pwd'];
    //var_dump($_POST);
    if ($uname != "" && $password != ""){
       // echo "error";
        $query="SELECT COUNT(*) as cont FROM users WHERE usuario='".$uname."' and  password='".$password."'";
        $result= $conex->prepare($query);
        $result->execute();
        if($result->fetchColumn() > 0){
            $_SESSION['uname'] = $uname;
            header('Location:menu.php');
        }else{
            echo "no existe el usuario";
        }
    }

}


