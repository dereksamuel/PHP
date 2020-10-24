<?php
  require_once 'vendor/autoload.php';

  use App\Models\{Job, Project, Printable};

  $developer = 'Developer';
  $job1 = new Job("JavaScript $developer", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore optio cupiditate rem expedita velit quae facilis voluptatem corrupti explicabo exercitationem, maiores mollitia eligendi quidem error, asperiores molestias voluptates amet incidunt!
  Veritatis exercitationem quisquam quibusdam voluptatibus dolore eveniet odit obcaecati incidunt nihil assumenda deleniti, laboriosam asperiores ex. Perferendis sit vero rerum illum. Vero ipsum neque, quis debitis suscipit ipsam sapiente consequatur.
  Fugiat numquam quod ut commodi vel dignissimos, blanditiis eligendi cum beatae, neque sequi! Debitis voluptate pariatur minus repellendus accusamus quo dicta nemo, est numquam nihil nobis doloremque ullam, exercitationem adipisci.
  Quam facere consequuntur mollitia quo aliquam eum repellat iusto quisquam neque et porro itaque impedit, voluptatibus aliquid enim similique repellendus dignissimos voluptatum illo id atque ipsam nesciunt qui dolores? Adipisci.");
  $job1->months = 16;

  $job2 = new Job("PHP $developer", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore optio cupiditate rem expedita velit quae facilis voluptatem corrupti explicabo exercitationem, maiores mollitia eligendi quidem error, asperiores molestias voluptates amet incidunt!
  Veritatis exercitationem quisquam quibusdam voluptatibus dolore eveniet odit obcaecati incidunt nihil assumenda deleniti, laboriosam asperiores ex. Perferendis sit vero rerum illum. Vero ipsum neque, quis debitis suscipit ipsam sapiente consequatur.
  Fugiat numquam quod ut commodi vel dignissimos, blanditiis eligendi cum beatae, neque sequi! Debitis voluptate pariatur minus repellendus accusamus quo dicta nemo, est numquam nihil nobis doloremque ullam, exercitationem adipisci.
  Quam facere consequuntur mollitia quo aliquam eum repellat iusto quisquam neque et porro itaque impedit, voluptatibus aliquid enim similique repellendus dignissimos voluptatum illo id atque ipsam nesciunt qui dolores? Adipisci.");
  $job2->months = 2;

  $project1 = new Project('Project 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ea, voluptas
  architecto ex odio dicta molestias porro laborum modi veritatis aperiam suscipit nobis excepturi vitae aliquam ab eaque incidunt consequatur?
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ea, voluptas architecto ex odio dicta molestias porro laborum modi veritatis aperiam suscipit nobis excepturi vitae aliquam ab eaque incidunt consequatur?
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ea, voluptas architecto ex odio dicta molestias porro laborum modi veritatis aperiam suscipit nobis excepturi vitae aliquam ab eaque incidunt consequatur?
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ea, voluptas architecto ex odio dicta molestias porro laborum modi veritatis aperiam suscipit nobis excepturi vitae aliquam ab eaque incidunt consequatur?
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ea, voluptas architecto ex odio dicta molestias porro laborum modi veritatis aperiam suscipit nobis excepturi vitae aliquam ab eaque incidunt consequatur?
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ea, voluptas architecto ex odio dicta molestias porro laborum modi veritatis aperiam suscipit nobis excepturi vitae aliquam ab eaque incidunt consequatur?');

  $projects = [
    $project1,
  ];

  $jobs = [
    $job1,
    $job2,
  ];

  function printElement($elements, $totalMounths, $limitMonths, $type) {
    foreach ($elements as $element) {
      $totalMounths += $element->months;
      if (!$element->visible) {
        print "<i class='fas fa-arrow-alt-circle-down down'></i>";
        return null;
      };
      if ($totalMounths > $limitMonths) {
        //break;
        continue;
      };
      printAll($element, $type, $totalMounths);
    }
  };
  function printAll(Printable $param, $type, $extra) {
    if ($type === 'JOBS') {
      print '<h4 class="text_xsmall">'. $param->getTitle() .'</h4>';
      print '<p class="pharragraph">' . $param->getDescription() . '</p>';
      print "
        <ul class='experience__introduction_2--list'>
        <li class='introduction_2__list--item'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem odit ullam deleniti dolorum laborum cupiditate aliquam, distinctio ipsa sint voluptatum maxime quaerat hic eligendi accusamus quae eius tenetur accusantium unde.</li>
        <li class='introduction_2__list--item'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem odit ullam deleniti dolorum laborum cupiditate aliquam, distinctio ipsa sint voluptatum maxime quaerat hic eligendi accusamus quae eius tenetur accusantium unde.</li>
        <li class='introduction_2__list--item'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem odit ullam deleniti dolorum laborum cupiditate aliquam, distinctio ipsa sint voluptatum maxime quaerat hic eligendi accusamus quae eius tenetur accusantium unde.</li>
        </ul>
      ";
      print $param->getDurationAsString();
      print "<p class='pharragraph'>TOTAL OF MONTHS: $extra</p>";
    }
    else if ($type === 'PROJECTS') {
      print '<h4 class="text_xsmall">'. $param->getTitle() .'</h4>';
      print '<p class="pharragraph">' . $param->getDescription() . '</p>';
    };
  };