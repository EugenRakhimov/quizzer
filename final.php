<<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
  </head>
  <body>
    <header>
      <div class="container">
        <h1>PHP Quizzer</h1>
      </div>
    </header>
    <main>
      <div class="container">
        <h2>You are done</h2>
        <p>Congratulations! You are completed tests!</p>
        <p>Final score:<?php echo $_SESSION['score']; ?> </p>
        <?php  $_SESSION['score'] = 0; ?>
        <a href="questions.php/?n=1" class="start"> Take again</a>
      </div>
    </main>
    <footer>
      <div class="container" >
        Copyright &copy; 2016, PHP Quizzer
      </div>
    </footer>
  </body>
</html
