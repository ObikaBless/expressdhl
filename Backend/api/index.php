<?php
header("Access-Control-Allow-Origin: *");
require('../config/connection.php');
require('../controllers/Auth.php');
require('../controllers/Order.php');


$Auth = new Auth();
$order = new Order();


$route = $_POST['route'];


if($route == '/login'){
    $email = $_POST['email'];
    $password = $_POST['password'];
     $res = $Auth->SignIn($email, $password);
    echo json_encode($res);
}
else if($route == '/order_registration'){
   
}

else if($route == '/ordersall'){

}

else if($route == '/track'){
 
$tracking = $_POST['trackingID'];


$res =  $order->track($tracking);
 echo json_encode($res);
}


else if($route == '/getusers'){
 echo json_encode($Auth->Read());
}




// $result = $Auth->SignIn('simonsacascsa@gmail.com', '3929348');
//  $result = $message->Read(2, 1);
//   $result = $message->Send('im a late for class today', 1, 2, '');
