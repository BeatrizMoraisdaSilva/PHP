<?php
class Client{
    public function register(){
        require_once("views/templates/header.php");
        require_once("views/client/register.php");
        require_once("views/templates/footer.php");    
    }

    public function registerView(){

        if(isset($_POST['check'])){
            $check = true;
        }else{
            $check = false;

        }
        $arrayClient = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'radio' => $_POST['optradio'],
            'check' => $check
        );

        require_once("views/templates/header.php");
        require_once("views/client/registerView.php");
        require_once("views/templates/footer.php"); 
        

}
}
?>