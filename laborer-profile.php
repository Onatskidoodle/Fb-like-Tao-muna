<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laborer Profile</title>
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .profile-header {
            text-align: center;
        }
        .profile-header img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
        }
        .profile-info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .profile-info div {
            width: 48%;
        }
        .profile-info label {
            font-weight: bold;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
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
    <h1>Laborer Profile</h1>
    
    <!-- Profile Header -->
    <div class="profile-header">
        <img src="profile-pic.jpg" alt="Profile Picture">
        <h2>John Doe</h2>
        <p>Contact: 09123456789</p>
    </div>

    <!-- Profile Info -->
    <div class="profile-info">
        <div>
            <h3>Skills:</h3>
            <ul>
                <li>Electrical Works</li>
                <li>Plumbing</li>
                <li>Concrete Work</li>
            </ul>
        </div>
        <div>
            <h3>Experience:</h3>
            <p>5 years of experience in construction. Worked on commercial and residential buildings.</p>
        </div>
    </div>

    <!-- Availability Section -->
    <div class="profile-info">
        <div>
            <h3>Availability:</h3>
            <p>Available for long-term and short-term projects. Preferred location: Metro Manila.</p>
        </div>
    </div>

    <!-- Buttons for Actions -->
    <div class="buttons">
        <button>Update Profile</button>
        <button>Upload New Photo</button>
        <button>View Applications</button>
    </div>
</div>

</body>
</html>
