<?php 
    $title = "While/ Do While Loops";
    include 'includes/header.php'
?>
<body>
<h1><?php echo $title ?></h1>
    <?php
       $grade =7;
        while ($grade < 10)
        {
            echo '<p> I AM LESS THAN 10!</p>';
            $grade++;
        }
        echo 'Exit Loop!';

    ?>
    <h1> DO-While Loop</h1>
    <?php
        do
        {
            echo '<p> I AM A DO WHILE LOOP</p>';
            $grade++;
        }
        while ($grade <10);
        echo 'Exit Loop!';

    ?>


<?php require 'includes/footer.php '?>