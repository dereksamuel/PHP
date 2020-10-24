<?php
  require_once './app/Models/Project.php';
  include_once('jobs.php');
  $name = 'Derek Samuel';
  $fullName = "$name Paúl Peña";
  $limitMonths = 32;
  $user = [
    'fullName' => $fullName,
    'active' => true,
  ];
  $totalMounths = 0;
  $tools = [ 'Vue', 'React', 'Pug', 'HTML', 'CSS' ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="SPA">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="shortcut icon" href="https://img.icons8.com/nolan/96/change-user-male.png" type="image/x-icon">
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>
  <title>User Management</title>
</head>
<body>
  <header class="Menu">
    <h1 class="title white">USER MANAGEMENT <i class="fas fa-user-ninja ninja"></i></h1>
    <nav class="Menu__nav">
      <ul class="Menu__list">
        <li class="Menu__list--item">
          <a href="#">Home</a>
        </li>
        <li class="Menu__list--item">
          <a href="#"><?php
            if ($user) echo "Hello $user[fullName]";
            else echo 'Login';
          ?></a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="Hero">
    <section class="user__info">
      <figure class="user__info--picture">
        <img id="user-img" src="images/derekismy.jpeg" alt="user image">
      </figure>
      <article class="user__info--content">
        <h1 class="title">
          <?php echo $fullName; ?>
        </h1>
        <h2 class="subtitle">JavaScript and PHP developer</h2>
        <ul class="content__info">
          <li class="content__info--mail">dereksamuelgr@gmail.com</li>
          <li class="content__info--phone">+57 316 511 511 4</li>
          <li class="content__info--facebook">Facebook: dereksamuelpaúlpeña</li>
        </ul>
      </article>
    </section>
    <article class="carrer">
      <h2 class="subtitle">Carrer Summary</h2>
      <hr>
      <p class="pharragraph">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda iure fugit voluptates excepturi consectetur rerum id pariatur, ad sapiente! Repellat autem dicta odio cumque delectus vel voluptatibus iste temporibus aperiam.
        Numquam explicabo vero, illum at corrupti enim repellendus deserunt a tenetur iure quibusdam dolor porro fugiat quia quod labore, adipisci, pariatur laudantium! Maiores, consequuntur cumque aliquid mollitia quod accusantium tempora!
        Rerum culpa dolor ad earum nemo exercitationem accusantium aliquam autem nobis libero in, quis doloremque, reiciendis quaerat quae, quod nihil. Necessitatibus quam veniam earum. Laboriosam dignissimos tempora similique reiciendis quae.
        Quod explicabo eius nostrum voluptatem consequatur vitae quasi eaque, temporibus tempora nobis rem cupiditate perferendis facere assumenda culpa, nulla quam ullam recusandae adipisci hic laudantium corporis. Consectetur velit molestiae corrupti.
        Ab ad ipsum, tenetur obcaecati sequi mollitia cum maxime ipsa labore aliquid odit, harum quo blanditiis fuga? Debitis et sunt, saepe voluptates similique dicta, aspernatur, fugit laudantium ullam esse ratione.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto explicabo vero provident dicta ipsam doloremque id tenetur magnam dolore voluptate eveniet corporis error in placeat facere, reprehenderit expedita nobis deleniti.
        Optio nobis perferendis molestiae, praesentium, voluptatum id sequi magni sapiente exercitationem reprehenderit ipsa eos ad, ratione facilis? Hic, exercitationem quia libero cumque eos sint commodi vel temporibus obcaecati, doloremque nobis!
        Blanditiis, laborum cumque. Nisi obcaecati asperiores vel aspernatur omnis beatae eligendi expedita eveniet, consectetur commodi accusantium, repellendus temporibus optio ex? Nemo sit numquam unde? Adipisci voluptatum doloremque dolor minus tempora.
      </p>
    </article>
    <section class="experience">
      <h1 class="title">Work experience</h1>
      <article class="experience__introduction">
        <?php
          printElement($jobs, $totalMounths, $limitMonths, 'JOBS');
        ?>
      </article>
    </section>
    <section class="projects">
      <h1 class="title">Projects</h1>
      <article class="projects_description">
        <p class="pharragraph">
          <?php
            printElement($projects, $totalMounths, $limitMonths, 'PROJECTS');
          ?>
        </p>
        <section class="tools">
          <h2 class="subtitle">Skills & Tools <i class="fas fa-tools"></i></h2>
          <h4 class="text_small">Backend:</h4>
          <ul class="tools__list">
            <li class="tools__list--item">PHP</li>
            <li class="tools__list--item">Node.js</li>
            <li class="tools__list--item">Express</li>
          </ul>
          <h4 class="text_small">Frontend:</h4>
          <ul class="tools__list">
            <?php
              if ($user) {
                for ($i = 0; $i < 5; $i++) {
                  echo "<li class='tools__list--item'>$tools[$i]</li>";
                };
              } else {
                echo null;
              }
            ?>
          </ul>
        </section>
      </article>
    </section>
  </main>
  <footer class="footer">
    <p class="phrragraph">Design width love by Derek Paúl</p>
    <p class="phrragraph">Forms to contact me</p>
  </footer>
</body>
</html>