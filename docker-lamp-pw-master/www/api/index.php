<?php

$request_method = $_SERVER["REQUEST_METHOD"];
$local = $_SERVER['SCRIPT_NAME'];
$uri = $_SERVER['PHP_SELF'];
$rout = str_replace($local, "", $uri);
$uriSegments = explode("/", $rout);

if (isset($uriSegments[1])) {
    switch ($uriSegments[1]) {
        case 'client':
            require_once('controllers/UserController.php');
            $user = new UserController();
            if ($user->isAdmin()) {
                require_once('controllers/ClientController.php');
                $Client = new ClientController();
                switch ($requestMethod) {
                    case 'GET':
                        if (!isset($uriSegments[2]))
                            $Client->listClients();
                        else
                            $Client->consultClient($uriSegments[2]);
                        break;

                    case 'POST':
                        $Client->insertClient();
                        break;

                    case 'PUT':
                        $Client->updateClient($uriSegments[2]);
                        break;
                    case 'DELETE':
                        $Client->deleteClient($uriSegments[2]);
                        break;
                }
            }
            break;
        case 'user';
            require_once('controllers/UserController.php');
            $user = new UserController();
            switch ($request_method) {
                case 'GET':
                    $user->validateLogin();
                    break;
            }
            break;
    }
}
?>