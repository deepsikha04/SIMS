<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 30px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #343a40;
        }
        .navigation {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        .navigation a {
            margin: 0 15px;
            color: #007bff;
            text-decoration: none;
            font-size: 1.1em;
        }
        .section {
            margin-bottom: 30px;
        }
        .section h2 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            color: #007bff;
        }
        .announcement, .event {
            padding: 15px;
            margin-bottom: 10px;
            background: #e9ecef;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to the Student Portal</h1>
            <p>Your gateway to all student-related information and services.</p>
        </div>
        
        <div class="navigation">
            <a href="#">Profile</a>
            <a href="#">Grades</a>
            <a href="#">Courses</a>
            <a href="#">Schedule</a>
            <a href="#">Resources</a>
        </div>
        
        <div class="section">
            <h2>Announcements</h2>
            <div class="announcement">
                <h3>Semester Break Announcement</h3>
                <p>The semester break will start from 25th June and will end on 5th July. Enjoy your holidays!</p>
            </div>
            <div class="announcement">
                <h3>COVID-19 Vaccination Drive</h3>
                <p>Get vaccinated at our campus health center. Register by 20th June.</p>
            </div>
        </div>
        
        <div class="section">
            <h2>Upcoming Events</h2>
            <div class="event">
                <h3>Annual Sports Meet</h3>
                <p>Join us for the annual sports meet on 10th July. Register your participation by 5th July.</p>
            </div>
            <div class="event">
                <h3>Guest Lecture Series</h3>
                <p>Attend the guest lecture series on Data Science on 15th July. Open for all students.</p>
            </div>
        </div>
        
        <div class="footer">
            <p>&copy; 2024 Student Information Management System. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
