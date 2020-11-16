<?php
class Account
{
  private $wording, $amount, $devise, $owner;

  public function __construct(
    string $wording = "Current Account",
    int $amount = 0,
    string $devise = "€",
    Owner $owner = null
  ) {
    $this->wording = $wording;
    $this->amount = $amount;
    $this->devise = $devise;
    $this->owner = $owner;
    $this->owner->addAccount($this);
  }

  public function getWording()
  {
    return $this->wording;
  }

  public function setWording(string $wording)
  {
    $this->wording = $wording;

    return $this;
  }

  public function getAmount()
  {
    return $this->amount;
  }

  public function setAmount(int $amount)
  {
    $this->amount = $amount;

    return $this;
  }

  public function getDevise()
  {
    return $this->devise;
  }

  public function setDevise(string $devise)
  {
    $this->devise = $devise;

    return $this;
  }

  public function getOwner()
  {
    return $this->owner;
  }

  public function setOwner(Owner $owner)
  {
    $this->owner = $owner;

    return $this;
  }
}
?>
