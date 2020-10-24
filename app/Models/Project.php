<?php
  namespace App\Models;
  require_once 'vendor/autoload.php';

  class Project extends BaseElement implements Printable {
    public function getDescription() {
      return $this->pharragraph;
    }
  };
