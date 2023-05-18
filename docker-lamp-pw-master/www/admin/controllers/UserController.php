<?php

class UserController{

    public function validateLogin(){
        
        //se os dados do usuários tiverem corretos
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        require_once('models/UserModel.php');
        $UserModel = new UserModel();

        $result = $UserModel -> consultUser($userName);

        if($user = $result -> fetch_assoc()){
            if($user['password']==$password){
                $_SESSION['user'] = $user;
                header('Location:index.php');
            }else{
                echo 'Senha errada!';
            }
        }else{
            echo 'Usuário inválido!';
        }

        
    }

}