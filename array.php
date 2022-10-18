<?php 
    $title = "Array and Printouts";
    include 'includes/header.php'
?>

<h1><?php echo $title ?></h1>
<?php 

    //A variable
    $num;

    $numbers = array(1, 20, 03, 4, 5, 16, 27, 38, 19, 101);
    echo $numbers[5]; 

    echo "<p>$numbers[9]</p>";

    $size = count($numbers);
    echo "<p>The Array number size is: $size</p>";

    for($count = 0; $count < $size; $count++)
    {
        echo "<p>$numbers[$count]</p>";
    }

    ?>

<?php require 'includes/footer.php '?>