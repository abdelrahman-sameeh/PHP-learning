<?php 

class MenuItem
{
  /** @var MenuItem[] */
  private static array $items = [];
  private string $name;
  private float $price;
  private string $category;

  public function __construct($name, $price, $category)
  {
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;

    self::$items[$this->getSlug()] = $this;
  }

  public function getDetails(): string
  {
    return "{$this->name} ({$this->category}): {$this->price}<br>";
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getSlug(): string
  {
    return lcfirst(str_replace(" ", "", $this->name));
  }

  /**
   * @return MenuItem[]
  */
  public static function getAllMenuItems(): array {
    return self::$items;
  }


  public static function showMenuItems(){
    echo "<br>--------- Menu ---------<br>";
    foreach(self::$items as $item){
      echo "{$item->name} ({$item->category}): {$item->price}<br>";
    }
    echo "------------------------<br>";
  }

}


?>
