
<?php




$customers = [
  ["name" => "Abdelrahman", "email" => "abdelrahman.sameeh507@gmail.com", "phone" => "+201556577857"],
  ["name" => "Sami", "email" => "sami@gmail.com", "phone" => "+2015554646562"],
  ["name" => "Salah", "email" => "salah@gmail.com", "phone" => "+201585451213"],
];




class Customer
{
  /** @var Customer[] */
  private static array $customers = [];
  private string $name;
  private string $email;
  private string $phone;

  public function __construct($name, $email, $phone)
  {
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;

    self::$customers[$this->email] = $this;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getEmail()
  {
    return $this->email;
  }

  
  public function getPhone()
  {
    return $this->phone;
  }


  /**
   * Summary of getAllCustomers
   * @return Customer[]
   */
  public static function getAllCustomers (): array {
    return self::$customers;
  }




}



foreach ($customers as $customer) {
  new Customer($customer['name'], $customer['email'], $customer['phone']);
}



?>
