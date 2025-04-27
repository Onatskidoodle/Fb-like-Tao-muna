<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laborer Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
        }
        input[type="text"], input[type="file"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Laborer Profile</h2>
        
        <!-- Personal Information Section -->
        <form action="laborer_profile.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="text" id="contact" name="contact">
            </div>

            <div class="form-group">
                <label for="location">Location (Optional)</label>
                <input type="text" id="location" name="location">
            </div>

            <!-- Skills Section -->
            <div class="form-group">
                <label for="skills">Skills</label>
                <input type="text" id="skills" name="skills" placeholder="e.g., Carpenter, Electrician" required>
            </div>

            <!-- Work Experience Section -->
            <div class="form-group">
                <label for="experience">Work Experience</label>
                <textarea id="experience" name="experience" rows="4" placeholder="Describe your work experience..." required></textarea>
            </div>

            <!-- Profile Picture Upload Section -->
            <div class="form-group">
                <label for="profile_pic">Profile Picture (Optional)</label>
                <input type="file" id="profile_pic" name="profile_pic">
            </div>

            <!-- Save Button -->
            <button type="submit" name="submit">Save Profile</button>
        </form>
    </div>

</body>
</html>
