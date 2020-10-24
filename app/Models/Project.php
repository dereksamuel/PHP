<?php
  require_once 'BaseElement.php';
  require_once 'Printable.php';

  class Project extends BaseElement implements Printable {
    public function getDescription() {
      return $this->pharragraph;
    }
  };


