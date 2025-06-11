<!DOCTYPE html>
<html>
<head>
    <title>PHP in HTML</title>
</head>
<body>
    <h1>Welcome!</h1>
    
    <!-- PHP code inside HTML -->
    <?php
        $name = "John";
        echo "<p>Hello, $name!</p>";
        $num1 =10;
        $num2 = 20;
        $sum = $num1 + $num2;
        echo "<p>The sum of $num1 and $num2 is $sum.</p>";
    ?>


    <?php
        $num1=10;
        if ($num1 > 5) {
            echo "<p>$num1 is greater than 5.</p>";
        }else if( $num1 ==5){
            echo "<p>$nam1 is equal to 5</p>";
        }else{
            echo "<p>$num1 is less than 5.</p>";
        }
    ?>

    <?php
        $num1=10;
        if ($num1 > 5) {
            echo "<p>$num1 is greater than 5.</p>";
        }else if( $num1 ==5){
            echo "<p>$nam1 is equal to 5</p>";
        }else{
            echo "<p>$num1 is less than 5.</p>";
        }
    ?>

    <p>Today is <?php echo date("Y-m-d"); ?></p>
</body>
</html>