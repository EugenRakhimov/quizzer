<?php include 'database.php'; ?>
<?php
//Set question number format
   $number = (int) $_GET['n'];
   $query = "select * from questions where question_number = $number";
   $result = $mysqli->query($query) or die($mysqli->error._LINE_);
   $question = $result->fetch_assoc();

   $query_answers = "select * from choices where question_number = $number";
   $choices_db = $mysqli->query($query_answers) or die($mysqli->error._LINE_);

   $total_query = "select * from questions";
   $result_total = $mysqli->query($total_query) or die($mysqli->error._LINE_);
   $total = $result_total->num_rows;
 ?>
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
        <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?> </div>
        <p class="question">
          <?php echo $question['text'] ?>
        </p>
        <form method="post" action="/process.php">
          <ul class="choices">
            <?php while ($row = $choices_db->fetch_assoc()) : ?>
              <li class="choice"><input name="choice" type = "radio" value=<?php echo $row[id]; ?>/>
                <?php echo $row['text']; ?>
              </li>
            <?php endwhile; ?>
          </ul>
          <input type="hidden" value='<?php echo $number; ?>' name = "number" />
          <input type="submit" value="submit" />
        </form>
      </div>
    </main>
    <footer>
      <div class="container" >
        Copyright &copy; 2016, PHP Quizzer
      </div>
    </footer>
  </body>
</html
