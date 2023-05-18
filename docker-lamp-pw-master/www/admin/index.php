<?php

session_start();

if(!isset($_GET['controller'])){
    require_once('controllers/MainController.php');
    $MainController = new MainController();
    $MainController -> index();
}else{
    switch ($_REQUEST['controller']) {
        case 'main':     
            require_once('controllers/MainController.php');
            $MainController = new MainController();
            if(!isset($_GET['action'])){
               
            }else{
                switch ($_REQUEST['action']) {
                    case 'login':
                       $MainController -> login();
                    break;

                    case 'logout':
                        $MainController -> logout();
                    break;
                }
            }
        break;

        case 'user':
            require_once('controllers/UserController.php');
            $UserController = new UserController();
            if(!isset($_GET['action'])){
               
            }else{
                switch ($_REQUEST['action']) {
                    case 'validateLogin':
                       $UserController -> validateLogin();
                    break;
                }
            }
        break;

        case 'client':
            require_once('controllers/ClientController.php');
            $Client = new ClientController();
            if(!isset($_GET['action'])){
                //chamada padrão
            }else{
                switch ($_REQUEST['action']) {
                    case 'listClients':
                        $Client -> listClients();
                    break;
                    case 'detailsClient':
                        $Client -> detailsClient($_GET['id']);
                    break;
                    case 'insertClient':
                        $Client -> insertClient();
                    break;
                    case 'insertClientAction':
                        $Client -> insertClientAction();
                    break;
                    case 'updateClient':
                        $Client -> updateClient($_GET['id']);
                    break;
                    case 'updateClientAction':
                        $Client -> updateClientAction($_GET['id']);
                    break;
                    case 'deleteClient':
                        $Client -> deleteClient($_GET['id']);
                    break;
                }
            }
        break;

     
    }
}