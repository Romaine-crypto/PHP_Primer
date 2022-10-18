<?php 
    $title = "Functions";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php
    //Defining a Function
        function writeMessage(){
            echo "You are very nice person, hope to see you again <br/><br/>";
        }
    // Calling Function
          writeMessage();
    
    // Funcction with Parameter
            function addFunction($num1, $num2)
          {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
          }
          addFunction(256, 512);
    
          function changeNum(&$num)
          {
            $num = $num + 10;
    
            changeNum($num);
            echo $num . '<br/>';
          }

          function returnProduct ($num1, $num2)
          {
            $prod=$num1 * $num2;
            return $prod;
          }

          $num=500;
          $return_value = returnProduct(10, 200);
          echo "The product is" ." ". $return_value . '<br/>';


    ?>
<?php require 'includes/footer.php '?>