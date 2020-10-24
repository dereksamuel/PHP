<?php
  require_once 'BaseElement.php';
  require_once 'Printable.php';

  class Job extends BaseElement implements Printable {
    public function __construct($title, $description) {
      $newTitle = 'Job: ' . $title;
      parent::__construct($newTitle, $description);
    }
    public function getDurationAsString() {
      $years = floor($this->months / 12);
      if ($years == 1) {
        return '<p class="pharragraph"> Job duration: '. $this->months . 'months ' . '|| ' . $years . ' year' . '</p>';
      } else if ($years < 1) {
        return '<p class="pharragraph"> Job Duration: '. $this->months . 'month ' . '|| ' . $years . ' years' . '</p>';
      }
    }
    public function getDescription() {
      return $this->pharragraph;
    }
  };
