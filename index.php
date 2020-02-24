<?php
  $database = [
     'aticle1' =>[
       'title' => '<strong> How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten? </strong>',
       'text' => 'Testo1'
     ],
     'aticle2' =>[
       'title' => 'Titolo2',
       'text' => 'Testo2'
     ],
     'aticle3' =>[
       'title' => 'Titolo3',
       'text' => 'Testo3'
     ],
     'aticle4' =>[
       'title' => 'Titolo4',
       'text' => 'Testo4'
     ],
  ];
// var_dump($database);
//
// foreach ($database as $articles => $data) {
//   var_dump($articles);
//   echo $data['title'];
// }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Google FAQ</title>
  </head>
  <body>
    <header>
      <div class="container flex">
        <div class="logo flex">
          <img src="img/googlelogo_color_74x24dp.png" alt="logo"> <p>Privacy & Terms</p>
        </div>
        <nav class="menu flex">
          <div class="navbar">
            <ul>
              <li><a href="#">Overview</a></li>
              <li><a href="#">PrivacyPolicy</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Technologies</a></li>
              <li ><a class="nav_faq" href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="account">
            <p>Google Account</p>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <div class="wrapper">
        <ul class="faq">
          <?php foreach ($database as $articles => $data) {?>
            <li class= "article">
              <h2><?php echo $data['title']?></h2>
              <p><?php echo $data['text']?></p>
            </li>
          <?php } ?>
        </ul>
      </div>

    </main>
  </body>
</html>
