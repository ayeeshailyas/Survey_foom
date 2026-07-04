<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BRE & Chew Cafe - Customer Survey</title>

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f6f2e9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.12);
        }

        h1 {
            text-align: center;
            color: #4b2e1e;
            margin-bottom: 10px;
        }

        h3 {
            color: #6d4a35;
            text-align: center;
            margin-top: 0;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 18px;
            color: #4b2e1e;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #cbb8a7;
            border-radius: 6px;
            font-size: 16px;
        }

        textarea {
            height: 110px;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 14px;
            background: #8b5e3c;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #6d4a35;
        }

        .rating-select {
            margin-top: 8px;
        }

    </style>
</head>

<body>
<div class="container">

    <h1>BRE & Chew Cafe</h1>
    <h3>Customer Satisfaction Survey</h3>

    <form action="submit.php" method="POST">

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Cleanliness Rating</label>
        <select name="cleanliness_rating" class="rating-select" required>
            <option value="">Select...</option>
            <option>1 - Poor</option>
            <option>2 - Fair</option>
            <option>3 - Good</option>
            <option>4 - Very Good</option>
            <option>5 - Excellent</option>
        </select>

        <label>Food Quality Rating</label>
        <select name="food_quality_rating" required>
            <option value="">Select...</option>
            <option>1 - Poor</option>
            <option>2 - Fair</option>
            <option>3 - Good</option>
            <option>4 - Very Good</option>
            <option>5 - Excellent</option>
        </select>

        <label>Accessibility Rating</label>
        <select name="accessibility_rating" required>
            <option value="">Select...</option>
            <option>1 - Poor</option>
            <option>2 - Fair</option>
            <option>3 - Good</option>
            <option>4 - Very Good</option>
            <option>5 - Excellent</option>
        </select>

        <label>Overall Satisfaction</label>
        <select name="overall_satisfaction" required>
            <option value="">Select...</option>
            <option>1 - Poor</option>
            <option>2 - Fair</option>
            <option>3 - Good</option>
            <option>4 - Very Good</option>
            <option>5 - Excellent</option>
        </select>

        <label>Additional Comments</label>
        <textarea name="comments" placeholder="Tell us about your experience..."></textarea>

        <button type="submit">Submit Survey</button>

    </form>

</div>
</body>
</html>
