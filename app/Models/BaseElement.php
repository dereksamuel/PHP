<?php
  namespace App\Models;

  class BaseElement {
    protected $title;
    public $pharragraph;
    public $visible = true;
    public $months;
    public function __construct($title, $description) {
      $this->title = $title;
      $this->pharragraph = $description;
    }
    public function getTitle() {
      return $this->title;
    }
    public function getDurationAsString() {
      $years = floor($this->months / 12);
      if ($years == 1) {
        return '<p class="pharragraph">'. $this->months . 'months ' . '|| ' . $years . ' year' . '</p>';
      } else if ($years < 1) {
        return '<p class="pharragraph">'. $this->months . 'month ' . '|| ' . $years . ' years' . '</p>';
      }
    }
  };