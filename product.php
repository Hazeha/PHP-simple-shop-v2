<?php
require_once "db.php";

class Product extends db {
    function __construct(){
        self::getProducts();
        parent::__construct();
    }
    public static function getProducts(){
        $query = "select id, name, description, price, img from products order by price asc";
        $result = (new db)->DB_SELECT($query);

        if (!empty($result)){
            foreach ($result as $key=>$value){
                echo '
                <form class="col" method="post" action="index.php?action=add&id='. $result[$key]['id'] .'">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 fw-normal">'. $result[$key]['name'] .'</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$'. $result[$key]['price'] .' <small class="text-muted">/ mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4"> ';

                            /**  Maybe a bad idea to use DOT(.) as delimiter TODO Fix later to /n **/
                            $description = explode(".", filter_var($result[$key]['description']));
                            foreach ($description as $item) {
                                echo '<li>' . $item . '</li>';
                            }

                            echo '
                            </ul>
                            <button type="submit" value="Buy Sub" class="w-100 btn btn-lg btn-outline-primary">Buy Now</button>
                        </div>
                    </div>
                </form>';
            }
        } else {
            echo "Failed to load Products";
        }
    }
}
