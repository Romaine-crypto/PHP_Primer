<?php 
    $title = "Index";
    include 'includes/header.php'
?>

<!--Basic HTML-->
<h1> Hello HTML- PHP Primer</h1>
    <br/>


    
    <?php
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';

    
        $name= 'Romaine Beckford';
        $age = 29;
        
        echo $name;
        
        echo '<h1> My Name is: '.$name.' </h1>';
        echo '<h1> My Age is: '.$age.' </h1>';
        echo '<br/>';
        echo '<br/>';
        

    ?>


<button type="button" class="btn btn-success">Click Here</button>

<?php require 'includes/footer.php '?>