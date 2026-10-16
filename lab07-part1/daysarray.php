<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8"/>
        <title>Using PHP Variables, arrays and operators </title>
        <!-- add other meta -->
         <meta name="description" content="A PHP example demonstrating variables, arrays and operators.">
         <meta name="keywords" content="PHP, variables, arrays, operators">
         <meta name="author" content="Navya">
</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
    <?php
        $days = array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"); // declare and initialise array
        
        echo "<p>The days of the week in English are: </p>";
        echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]. </p>";

        $days = array ("Dimanche", "Lundi", "Mardi","Mercredi", "Jeudi", "Vendredi", "Samedi");
        
        echo "<p>The days of the week in French are: </p>";
        echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]. </p>";
    ?>
</body>
</html>