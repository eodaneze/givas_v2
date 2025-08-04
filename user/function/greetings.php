<?php 
   function getGreeting() {
    $hour = date('H'); // Get the current hour in 24-hour format

    if ($hour >= 5 && $hour < 12) {
        return "Good morning!";
    } elseif ($hour >= 12 && $hour < 17) {
        return "Good afternoon!";
    } elseif ($hour >= 17 && $hour < 21) {
        return "Good evening!";
    } else {
        return "Good night!";
    }
}

// Example usage

