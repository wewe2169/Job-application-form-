<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>IT Professional Application</title>
</head>
<body>
    <h2>Apply for IT Professional Role</h2>
    <form action="core/handleForms.php" method="POST">
        <p><label>First Name:</label> <input type="text" name="first_name" required></p>
        <p><label>Last Name:</label> <input type="text" name="last_name" required></p>
        <p><label>Email Address:</label> <input type="email" name="email_address" required></p>
        <p><label>IT Specialization:</label> <input type="text" name="it_specialization" required></p>
        <p><label>Years of Experience:</label> <input type="number" name="years_of_experience" required></p>
        <p><label>Certifications:</label> <input type="text" name="certifications" required></p>
        <p><input type="submit" name="insertBtn" value="Submit Application"></p>
    </form>

    <hr>
    <h3>Applicant Roster</h3>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Specialization</th><th>Experience</th><th>Certifications</th><th>Date Added</th><th>Actions</th>
        </tr>
        <?php $applications = getAllApplications($pdo); foreach ($applications as $row) { ?>
        <tr>
            <td><?php echo $row['applicant_id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email_address']; ?></td>
            <td><?php echo $row['it_specialization']; ?></td>
            <td><?php echo $row['years_of_experience']; ?></td>
            <td><?php echo $row['certifications']; ?></td>
            <td><?php echo $row['date_added']; ?></td>
            <td>
                <a href="update.php?applicant_id=<?php echo $row['applicant_id']; ?>">Edit</a> | 
                <a href="delete.php?applicant_id=<?php echo $row['applicant_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
