<?php 


class Order
{
  private int $id;
  private $items = [];
  private Customer $customer;
  private static array $ordersObjs = [];
  private $deliveryOrder;
  private static $deliveryFee = 20;
  private static int $counter = 0;

  public function __construct($customer, $deliveryOrder = false)
  {
    $this->customer = $customer;
    $this->deliveryOrder = $deliveryOrder;
    // Generate dynamic id
    self::$counter++;
    $this->id = self::$counter;
    // add order to ordersObjs
    self::$ordersObjs[] = $this;
  }

  public function addItem(MenuItem $item, $count = 1)
  {
    $slug = $item->getSlug();
    if (isset($this->items[$slug])) {
      $this->items[$slug]['count'] += $count;
    } else {
      $this->items[$slug] = ["item" => $item, "count" => $count];
    }
  }

  public function getTotal()
  {
    $result = 0;
    foreach ($this->items as $key => $value) {
      $result += $value['item']->getPrice() * $value['count'];
    }
    if ($this->deliveryOrder) {
      $result += self::$deliveryFee;
    }
    return $result;
  }

  public function showOrder()
  {
    echo "----------------------<br>";
    echo "Order for {$this->customer->getName()} " . ($this->deliveryOrder ? "(Delivery)<br>" : "<br>");
    echo "Items:<br>";
    foreach ($this->items as $k => $value) {
      $sum = $value['count'] * $value['item']->getPrice();
      echo "- {$value['item']->getName()}: {$value['count']} * {$value['item']->getPrice()} => {$sum} <br>";
    }
    if ($this->deliveryOrder) {
      echo "- Delivery Fee: " . self::$deliveryFee . "<br>";
    }
    echo "Total: {$this->getTotal()}<br>";
    echo "----------------------<br>";
  }

  public static function getAllOrders()
  {
    return self::$ordersObjs;
  }

}


?>