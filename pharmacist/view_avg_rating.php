<?php

require '../config/connection.php';

include '../src/avg_rating_calc.php';


// Display average rating to user
echo '<div class="average-rating">';
echo '<div class="average-rating-text">Average rating:</div>';
echo '<div class="average-rating-value">' . $avg_rating_percent . '%</div>';
echo '<div class="average-rating-stars" style="--rating: ' . $avg_rating_percent . ';"></div>';
echo '</div>';

$_SESSION['avg_rating_percent'] = $avg_rating_percent;

// Close connection
$conn->close();
?>
