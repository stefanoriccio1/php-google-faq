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
var_dump($database);

foreach ($database as $articles => $data) {
  var_dump($articles);

  foreach ($data as $key => $value) {
    // var_dump($value);
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>Google FAQ</title>
  </head>
  <body>
    <header>
      <div class="container">

      </div>
    </header>
    <main>
      <div class="wrapper">
        <ul class="faq">
          <?php foreach ($database as $articles => $data) {?>
            <li class= "article"> <?php echo $articles ?>
              <ul>
                <?php foreach ($data as $key => $value) {?>
                  <li class= "title"> <?php echo $value['title'] ?> </li>
                <?php } ?>
                <?php foreach ($data as $key => $value) {?>
                  <li class= "text"> <?php echo $value['text'] ?> </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>
        </ul>
      </div>

    </main>
  </body>
</html>
