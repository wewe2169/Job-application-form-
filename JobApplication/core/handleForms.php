<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertBtn'])) {
    $query = insertApplication($pdo, $_POST['first_name'], $_POST['last_name'], $_POST['email_address'], $_POST['it_specialization'], $_POST['years_of_experience'], $_POST['certifications']);
    if ($query) { header("Location: ../index.php"); }
}

if (isset($_POST['editBtn'])) {
    $query = updateApplication($pdo, $_GET['applicant_id'], $_POST['first_name'], $_POST['last_name'], $_POST['email_address'], $_POST['it_specialization'], $_POST['years_of_experience'], $_POST['certifications']);
    if ($query) { header("Location: ../index.php"); }
}

if (isset($_POST['deleteBtn'])) {
    $query = deleteApplication($pdo, $_GET['applicant_id']);
    if ($query) { header("Location: ../index.php"); }
}
?>