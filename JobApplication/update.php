<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<?php 
$applicationToEdit = getApplicationById($pdo, $_GET['applicant_id']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Application</title>
</head>
<body>
    <h2>Edit Application for <?php echo htmlspecialchars($applicationToEdit['first_name']); ?></h2>
    
    <form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
        <p><label>First Name:</label> <input type="text" name="first_name" value="<?php echo htmlspecialchars($applicationToEdit['first_name']); ?>" required></p>
        <p><label>Last Name:</label> <input type="text" name="last_name" value="<?php echo htmlspecialchars($applicationToEdit['last_name']); ?>" required></p>
        <p><label>Email Address:</label> <input type="email" name="email_address" value="<?php echo htmlspecialchars($applicationToEdit['email_address']); ?>" required></p>
        <p><label>IT Specialization:</label> <input type="text" name="it_specialization" value="<?php echo htmlspecialchars($applicationToEdit['it_specialization']); ?>" required></p>
        <p><label>Years of Experience:</label> <input type="number" name="years_of_experience" value="<?php echo htmlspecialchars($applicationToEdit['years_of_experience']); ?>" required></p>
        <p><label>Certifications:</label> <input type="text" name="certifications" value="<?php echo htmlspecialchars($applicationToEdit['certifications']); ?>" required></p>
        <p><input type="submit" name="editBtn" value="Update Application"></p>
    </form>
    
    <p><a href="index.php">Cancel and Go Back</a></p>
</body>
</html>