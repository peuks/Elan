<?php

class MessageService
{
  public function getMessages($type)
  {
    if (isset($_SESSION["messages"][$type])) {
      $messages = $_SESSION["messages"][$type];
      unset($_SESSION["messages"][$type]);
      return messages;
    } else {
      return false;
    }
  }

  public static function getMessage($type, $message)
  {
    $_SESSION["messages"][$type][] = $message;
  }
}

?>
