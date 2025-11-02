<?php 

class Restaurant {

    public static function showSummery(){
      echo "Total Menu Items " . count(MenuItem::getAllMenuItems()) . "<br>";
      echo "Total Orders " . count(Order::getAllOrders()) . "<br>";
      echo "Customers " . count(Customer::getAllCustomers()) . "<br>";
    }

    public static function showMenuItems() {
      MenuItem::showMenuItems();
    }


}


?>