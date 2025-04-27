<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Profile</title>
</head>
<body>
    <h1>Employer Profile</h1>
    
    <?php
    // Example of PHP code to fetch data (you can modify this with actual data)
    echo "<p>Welcome to your profile page!</p>";

    // You can later add form handling, saving data to a database, etc.
    ?>
    
    <form action="profile_update.php" method="POST" enctype="multipart/form-data">
        <!-- Example of fields for updating profile -->
        <label for="company_name">Company Name:</label>
        <input type="text" name="company_name" id="company_name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        
        <label for="profile_picture">Profile Picture:</label>
        <input type="file" name="profile_picture" id="profile_picture"><br>
        
        <input type="submit" value="Update Profile">
    </form>
</body>
</html>
