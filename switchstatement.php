<?php 
    $title = "Switch Statement";
    include 'includes/header.php'
?>
<h1><?php echo $title ?></h1>

<?php 
     $grade = 'A';

     switch($grade)
     {
         case 'A':
             echo '<h2 style="color: green">YOU ARE A SUPERSTAR<h2/>';
             break;

         case 'B':
             echo '<h2  style="color: green yellow">YOU DID WELL<h2/>';
             break;

         default:
             echo '<h2  style="color: red">YOU FAILED <h2/>';
     } 
    ?>


<?php require 'includes/footer.php '?>