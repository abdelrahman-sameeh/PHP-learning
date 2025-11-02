<?php

// load classes
require_once "autoload.php";

// load data
require_once "./data/menuitem.php";
require_once "./data/customers.php";



foreach ($menuItems as $item) {
  new MenuItem($item['name'], $item['price'], $item['category']);
}

foreach ($customers as $customer) {
  new Customer($customer['name'], $customer['email'], $customer['phone']);
}



$order1 = new Order(Customer::getAllCustomers()['abdelrahman.sameeh507@gmail.com']);

$order1->addItem(MenuItem::getAllMenuItems()["pizzaMargherita"]);
$order1->addItem(MenuItem::getAllMenuItems()["beefShawarma"]);
$order1->addItem(MenuItem::getAllMenuItems()["onionRings"]);
$order1->addItem(MenuItem::getAllMenuItems()["water"], 2);
$order1->addItem(MenuItem::getAllMenuItems()["water"]);
$order1->addItem(MenuItem::getAllMenuItems()["fruitSalad"]);
$order1->showOrder();

$order2 = new Order(Customer::getAllCustomers()['abdelrahman.sameeh507@gmail.com'], true);
$order2->addItem(MenuItem::getAllMenuItems()["fruitSalad"]);
$order2->showOrder();


Restaurant::showSummery();
Restaurant::showMenuItems();


?>