<?php

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



?>
