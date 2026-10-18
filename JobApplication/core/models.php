<?php
function insertApplication($pdo, $first_name, $last_name, $email_address, $it_specialization, $years_of_experience, $certifications) {
    $sql = "INSERT INTO it_applications (first_name, last_name, email_address, it_specialization, years_of_experience, certifications) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $email_address, $it_specialization, $years_of_experience, $certifications]);
}

function getAllApplications($pdo) {
    $sql = "SELECT * FROM it_applications ORDER BY date_added DESC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getApplicationById($pdo, $applicant_id) {
    $sql = "SELECT * FROM it_applications WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$applicant_id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateApplication($pdo, $applicant_id, $first_name, $last_name, $email_address, $it_specialization, $years_of_experience, $certifications) {
    $sql = "UPDATE it_applications SET first_name = ?, last_name = ?, email_address = ?, it_specialization = ?, years_of_experience = ?, certifications = ? WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $email_address, $it_specialization, $years_of_experience, $certifications, $applicant_id]);
}

function deleteApplication($pdo, $applicant_id) {
    $sql = "DELETE FROM it_applications WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$applicant_id]);
}
?>