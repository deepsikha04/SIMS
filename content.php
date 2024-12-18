<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Student Information Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
        .quote {
            font-size: 1.2em;
            margin-bottom: 20px;
            font-style: italic;
            color: #333;
        }
        .contact-info {
            margin-bottom: 20px;
        }
        .contact-info a {
            display: block;
            color: #0066cc;
            text-decoration: none;
            margin: 5px 0;
        }
        .feedback-form {
            margin-top: 20px;
        }
        .feedback-form label {
            display: block;
            margin-bottom: 5px;
        }
        .feedback-form input, .feedback-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .feedback-form button {
            padding: 10px 15px;
            background: #0066cc;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .feedback-form button:hover {
            background: #0055aa;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="quote">
            "A Student Information Management System streamlines administrative tasks, enabling educators to focus on what they do best: teaching."
        </div>
        
        <div class="contact-info">
            <h2>Contact Us</h2>
            <a href="https://www.facebook.com/yourpage" target="_blank">Facebook</a>
            <a href="tel:+1234567890">Call Us: +1 (234) 567-890</a>
        </div>
        
        <div class="feedback-form">
            <h2>Feedback</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit" name="submit">Submit Feedback</button>
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // Save feedback to a file (feedback.txt) or database
            $feedback = "Name: $name\nEmail: $email\nMessage: $message\n\n";
            file_put_contents('feedback.txt', $feedback, FILE_APPEND);
            
            echo "<p>Thank you for your feedback, $name!</p>";
        }
        ?>
    </div>
</body>
</html>
