<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking Confirmation</title>
    <meta charset="utf-8">

</head>

<body>


	<header><h1>Rohirrim Tour Booking Confirmation</h1></header>

<?php

    if (isset($_POST["firstname"])) {
        $firstname=$_POST["firstname"];
    } 
    else {
        $firstname = "";
    }
        
    if (isset($_POST["lastname"])) {
        $lastname=$_POST["lastname"];
    } else {
        $lastname = "";
    }

    if (isset($_POST["age"])) {
        $age=$_POST["age"];
    } else {
        $age = "";
    }

    if (isset($_POST["food"])) {
        $food=$_POST["food"];
    } else {
        $food = "";
    }

    if (isset($_POST["bookday"])) {
        $bookday=$_POST["bookday"];
    } else {
        $bookday = "";
    }

    if (isset($_POST["partysize"])) {
        $partysize=$_POST["partysize"];
    } else {
        $partysize = "";
    }

    $species= "";
    if (isset($_POST["species"])) {
        switch ($_POST["species"]) {
            case "M": $species = "Human"; break;
            case "D": $species = "Dwarf"; break;
            case "E": $species = "Elf"; break;
            case "H": $species = "Hobbit"; break;
        }
    }

        $checking = array();
        if (isset($_POST["accom"])) {$checking[]= "Accomodation";}
        if (isset($_POST["4day"])) {$checking[]= "Four day tour";}
        if (isset($_POST["10day"])) {$checking[]= "Ten day tour";}

        if (count($checking)> 0) {
            $check= "You are booked on the " . implode(" and " , $checking);
        }
        else 
            {
                $check = "You have not selected any bookings ";
            }

        if (isset($_POST["firstname"])) {
            echo "<p>Welcome $firstname $lastname!</p>";
            echo "<p>$check </p>";
            echo "<p>Species: $species </p>";
            echo "<p>Age: $age </p>";
            echo "<p>Menu preferences: $food </p>";
            echo "<p>Date: $bookday </p>";
            echo "<p>Number of travellers: $partysize </p>";
        }
        else 
            {
                echo "<p>No data received.</p>";
            }
    ?>

</body>
</html>