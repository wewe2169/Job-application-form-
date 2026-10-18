<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<?php 
$applicationToDelete = getApplicationById($pdo, $_GET['applicant_id']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Application</title>
</head>
<body>
    <h2>Are you sure you want to delete this application?</h2>
    
    <div style="border: 2px solid red; padding: 15px; width: 300px; background-color: #ffe6e6;">
        <p><strong>First Name:</strong> <?php echo htmlspecialchars($applicationToDelete['first_name']); ?></p>
        <p><strong>Last Name:</strong> <?php echo htmlspecialchars($applicationToDelete['last_name']); ?></p>
        <p><strong>Specialization:</strong> <?php echo htmlspecialchars($applicationToDelete['it_specialization']); ?></p>
        
        <form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
            <input type="submit" name="deleteBtn" value="Yes, Delete Application" style="background-color: red; color: white; border: none; padding: 10px; cursor: pointer;">
        </form>
    </div>
    
    <p><a href="index.php">Cancel and Go Back</a></p>
</body>
</html>