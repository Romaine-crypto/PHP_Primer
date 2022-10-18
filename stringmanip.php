<?php 
    $title = "String Manipulation";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php
    //COncatenation of Strings
        $phrase1= "Student who were late";
        $phrase2= "Early Birds";
        $name = "romaine beckford";
        echo $phrase1 .", name Tim, " . $phrase2;
        echo '<br/>';
        echo '<hr/>';

        //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
        echo 'Uppercase letter of each word: ' . ucwords($name). '<br/>';
        echo 'Upper case : ' .strtoupper($name). '<br/>'.'<br/>';
        echo 'Lower case : ' .strtolower("THIS WAS UPPERCASED"). '<br/>';
        echo '<hr/>';

        echo 'Repeat String: ' .str_repeat('a' , 10). '<br/>';
        echo 'Repeat String-Nested Function: ' .strtoupper(str_repeat('a', 10)).'<br/>';

    ?>

<?php require 'includes/footer.php '?>