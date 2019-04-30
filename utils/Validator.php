<?php

class Validator {

  private function __construct() {}

  public static function validate(?array &$inputs, array $fields): bool {
    if(!$inputs) { return false; }
    foreach ($fields as $field) {
      if(!isset($inputs[$field])) {
        return false;
      }
    }
    return true;
  }

}

?>
