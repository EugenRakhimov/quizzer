<?php include 'database.php'; ?>
<?php
//Set question number format
   $query = "select * from questions";
   $result = $mysqli->query($query) or die($mysqli->error._LINE_);
   $numbers_of_question = $result->num_rows;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <header>
      <div class="container">
        <h1>PHP Quizzer</h1>
      </div>
    </header>
    <main>
      <div class="container">
        <h2> Test your PHP Knowledge</h2>
        <p> This is a multiple choice quiz to test your knowledge of PHP </p>
        <ul>
          <li><strong>Number of questions:</strong> <?php echo $numbers_of_question; ?></li>
          <li><strong>Type:</strong> Multiple choice</li>
          <li><strong>Estimated time:</strong><?php echo  $numbers_of_question *2; ?> minutes</li>
          <li><strong>Number of questions:</strong> 5</li>
        </ul>
        <a href="questions.php/?n=1" class="start">Start quiz</a>
      </div>
    </main>
    <footer>
      <div class="container" >
        Copyright &copy; 2016, PHP Quizzer
      </div>
    </footer>
  </body>
</html
