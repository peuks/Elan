<?php
class Owner
{
  private $firstName, $lastName, $birthday, $city, $accountsArray;

  public function __construct(
    string $firstName = "Undifined",
    string $lastName = "Undifined",
    string $birthday = "01/01/0000",
    string $city = "Undifined"
  ) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->birthday = $birthday;
    $this->city = $city;
    $accountsArray = [];
    $this->accountsArray = $accountsArray;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;

    return $this;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;

    return $this;
  }

  public function getBirthday()
  {
    return $this->birthday;
  }

  public function setBirthday($birthday)
  {
    $this->birthday = $birthday;

    return $this;
  }

  public function getAccounts()
  {
    // return "coucou";
    // return $accountsArray;
    // $this->accountsArray
    $string = "";
    foreach ($this->accountsArray as $key => $val) {
      $string = $string . " " . $key . " " . $val->getWording();
    }
    return $string;
  }

  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;

    return $this;
  }

  public function addAccount(Account $account)
  {
    array_push($this->accountsArray, $account);
  }

  public function __toString()
  {
    return $this->getFirstName() . " " . $this->getLastName();
  }
}
?>
