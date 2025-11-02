
<?php 



$menuItems = [
  // 🍕 Main Dishes
  ["name" => "Pizza Margherita", "price" => 120, "category" => "Main Dish"],
  ["name" => "Chicken Burger", "price" => 100, "category" => "Main Dish"],
  ["name" => "Beef Shawarma", "price" => 90, "category" => "Main Dish"],
  ["name" => "Spaghetti Bolognese", "price" => 130, "category" => "Main Dish"],
  ["name" => "Grilled Chicken", "price" => 140, "category" => "Main Dish"],

  // 🍟 Side Dishes
  ["name" => "French Fries", "price" => 45, "category" => "Side Dish"],
  ["name" => "Onion Rings", "price" => 40, "category" => "Side Dish"],
  ["name" => "Garlic Bread", "price" => 35, "category" => "Side Dish"],

  // 🍹 Drinks
  ["name" => "Cola", "price" => 20, "category" => "Drink"],
  ["name" => "Orange Juice", "price" => 25, "category" => "Drink"],
  ["name" => "Water", "price" => 10, "category" => "Drink"],
  ["name" => "Milkshake", "price" => 35, "category" => "Drink"],

  // 🍰 Desserts
  ["name" => "Chocolate Cake", "price" => 50, "category" => "Dessert"],
  ["name" => "Ice Cream", "price" => 40, "category" => "Dessert"],
  ["name" => "Fruit Salad", "price" => 30, "category" => "Dessert"],
];


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

}


foreach ($menuItems as $item) {
  new MenuItem($item['name'], $item['price'], $item['category']);
}


?>
