<?php
require_once 'db.php';
$db_controller = new db();

class Cart extends db {

    function __construct(

    ){
        parent::__construct();
    }

    public function init(){
        echo '
        <table class="table">
          <thead>
            <tr>
              <th scope="col">PID</th>
              <th scope="col">Product</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
          ';
        foreach ($_SESSION['cart'] as $id){
            $query = "select name, price from products where id=$id";
            $result = (new db)->DB_SELECT($query);
            echo '<tr>
              <th scope="row">'. $id .'</th>
              <td>'. $result[0]['name'] .'</td>
              <td>fix</td>
              <td>'. $result[0]['price'] .'</td>
            </tr>';
        }

        echo '
           
          </tbody>
        </table>
        Total Items '. sizeof($_SESSION['cart']) .'
               
        ';
    }
    public function getCart(){

    }
    public function addItem(){

    }
    public function removeItem(){
        foreach ($_SESSION['cart_item'] as $key => $value){
            if (!empty($_SESSION['cart_item'])) {
                if ($_GET['id'] == $key) {
                    unset($_SESSION['cart_item'][$key]);
                }
            } else {
                unset($_SESSION['cart_item']);
            }
        }
    }
    public function emptyCart(){
        unset($_SESSION['cart_item']);
    }
}

//if (!empty($_GET['action'])){
//    switch ($_GET['action']){
//        case 'add':
//            if (!empty($_POST['quantity'])){
//                $itemById = $db_controller->DB_SELECT('select * from Products where id = '. $_GET['id'] .' ');
//                $itemArray = array($itemById[0]["Product_ID"]=>array(
//                    'Name'=>$itemById[0]["Name"],
//                    'Product_ID'=>$itemById[0]["Product_ID"],
//                    'quantity'=>$_POST["quantity"],
//                    'Price'=>$itemById[0]["Price"],
//                    'Image'=>$itemById[0]["Image"]
//                ));
//
//                if(!empty($_SESSION["cart_item"])) {
//                    if(in_array($itemById[0]["Product_ID"],array_keys($_SESSION["cart_item"]))) {
//                        foreach($_SESSION["cart_item"] as $i => $p) {
//                            if($itemById[0]["Product_ID"] == $i) {
//                                if(empty($_SESSION["cart_item"][$i]["quantity"])) {
//                                    $_SESSION["cart_item"][$i]["quantity"] = 0;
//                                }
//                                $_SESSION["cart_item"][$i]["quantity"] += $_POST["quantity"];
//                            }
//                        }
//                    } else {
//                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
//                    }
//                } else {
//                    $_SESSION["cart_item"] = $itemArray;
//                }
//
//            }
//            break;
//
//        case 'remove':
//            if (!empty($_SESSION['cart_item'])){
//                foreach ($_SESSION['cart_item'] as $key => $value){
//                    if (!empty($_SESSION['cart_item'])) {
//                        if ($_GET['code'] == $key) {
//                            unset($_SESSION['cart_item'][$key]);
//                        }
//                    } else {
//                        unset($_SESSION['cart_item']);
//                    }
//                }
//            }
//            break;
//
//        case 'empty':
//            unset($_SESSION['cart_item']);
//            break;
//    }
//}
