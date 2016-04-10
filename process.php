<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
  if(!isset($_SESSION['score']))
  {
    $_SESSION['score'] = 0;
  }
  else {
    // echo $_SESSION['score'];
    // die();
  }
  if(isset($_POST))
  {
    $number = (int)$_POST['number'];
    $selected_choice = (int)$_POST['choice'];
    $next = $number+1;

    $total_query = "select * from questions";
    $result_total = $mysqli->query($total_query) or die($mysqli->error._LINE_);
    $total = $result_total->num_rows;


    $query = "SELECT * FROM choices
      where question_number = $number and is_correct = 1";
    $result = $mysqli->query($query) or die($mysqli->error._LINE_);
    $row = $result->fetch_assoc();
    $correct_choice = $row['id'];
    if($correct_choice == $selected_choice){
      $_SESSION['score']++;
    }

    if ($number == $total) {
      header('Location: final.php');
      exit();
    }else {
      header('Location: questions.php?n='.$next);
    }
  }
 ?>
