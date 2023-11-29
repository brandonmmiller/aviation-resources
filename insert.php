<?php
include 'dbconnect.php';

$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$dob = isset($_POST['dob']) ? $_POST['dob'] : '';
$exp = isset($_POST['exp']) ? $_POST['exp'] : '';
$att = isset($_POST['att']) ? $_POST['att'] : '';
$apt = isset($_POST['apt']) ? $_POST['apt'] : '';

$sql = "INSERT INTO contacts (fname, lname, age, dob, exp, att, apt) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssissss", $fname, $lname, $age, $dob, $exp, $att, $apt);
$stmt->execute();

if ($stmt->error) {
    echo "<script type='text/javascript'>alert('Error: ".$stmt->error."');</script>";
} else {
    echo "<script type='text/javascript'>alert('Thank You'); window.location.href = 'contact.html';</script>";
}

$stmt->close();
$conn->close();
?>
