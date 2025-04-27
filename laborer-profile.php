<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laborer Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            color: #333;
        }
        input[type="text"], input[type="file"], textarea {
            width: 100%;
            padding: 10px;
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
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        .form-section {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Laborer Profile</h2>
        
        <form action="save_profile.php" method="POST" enctype="multipart/form-data">
            <!-- Personal Information Section -->
            <div class="form-section">
                <h3>Personal Information</h3>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="text" id="contact" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" required>
                </div>
            </div>

            <!-- Skills Section -->
            <div class="form-section">
                <h3>Skills</h3>
                <div class="form-group">
                    <label for="skills">Enter Your Skills</label>
                    <input type="text" id="skills" name="skills" placeholder="e.g., Carpenter, Plumber" required>
                </div>
            </div>

            <!-- Work Experience Section -->
            <div class="form-section">
                <h3>Work Experience</h3>
                <div class="form-group">
                    <label for="experience">Describe Your Work Experience</label>
                    <textarea id="experience" name="experience" rows="5" placeholder="List your previous projects or jobs..." required></textarea>
                </div>
            </div>

            <!-- Profile Picture Upload Section -->
            <div class="form-section">
                <h3>Profile Picture (Optional)</h3>
                <div class="form-group">
                    <label for="profile_pic">Choose Profile Picture</label>
                    <input type="file" id="profile_pic" name="profile_pic">
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" name="submit">Save Profile</button>
        </form>
    </div>

</body>
</html>
