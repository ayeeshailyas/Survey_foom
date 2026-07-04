<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$cleanliness = $_POST['cleanliness_rating'];
$food = $_POST['food_quality_rating'];
$accessibility = $_POST['accessibility_rating'];
$overall = $_POST['overall_satisfaction'];
$comments = $_POST['comments'];

$stmt = $conn->prepare("INSERT INTO survey_responses 
    (name, email, cleanliness_rating, food_quality_rating, accessibility_rating, overall_satisfaction, comments)
    VALUES (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssiiiss", $name, $email, $cleanliness, $food, $accessibility, $overall, $comments);

if ($stmt->execute()) {
    header("Location: thankyou.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>
