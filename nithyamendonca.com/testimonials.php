<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nithya Mendonca Law Firm - Testimonials</title>
    <link rel="stylesheet" href="testimonials.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .testimonial-box-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  margin-top: 20px;
}

.testimonial-box {
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  padding: 20px;
  width: 300px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.testimonial-message {
  font-style: italic;
  font-size: 16px;
  color: #333;
}

.testimonial-author {
  font-weight: bold;
  margin-top: 15px;
  color: #555;
}

.content-container {
  text-align: center;
  padding: 20px;
}

h1 {
  font-size: 2rem;
  margin-bottom: 20px;
}

.testimonial-form-container {
  margin-top: 30px;
}

.testimonial-card {
  text-align: center;
  font-size: 18px;
  color: gray;
}

    </style>
</head>

<body>

<?php include('navbar.php'); ?>

    <div class="content-container">
        <h1>Testimonials</h1>

        <!-- Testimonial Box Container -->
        <div class="testimonial-box-container">
            
            <!-- Testimonial 1 -->
            <div class="testimonial-box">
                <p class="testimonial-message">
                    "Nithya Mendonca provided exceptional legal support during my case. Her attention to detail and deep understanding of the law gave me peace of mind. Highly recommend!"
                </p>
                <p class="testimonial-author">— John Doe</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-box">
                <p class="testimonial-message">
                    "I was impressed with the professionalism and dedication shown by the team. Nithya Mendonca made the entire process easy to understand and guided me through every step."
                </p>
                <p class="testimonial-author">— Jane Smith</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-box">
                <p class="testimonial-message">
                    "Excellent service! Nithya Mendonca helped me with my divorce proceedings, providing clarity and compassion throughout the process."
                </p>
                <p class="testimonial-author">— Michael Brown</p>
            </div>

            <!-- Testimonial 4 -->
            <div class="testimonial-box">
                <p class="testimonial-message">
                    "Nithya Mendonca is an incredible lawyer. She is always available to answer questions and is committed to her clients. Thank you for your excellent work!"
                </p>
                <p class="testimonial-author">— Emily Davis</p>
            </div>

        </div>

        <!-- Optional Testimonial Form (if you'd like to keep it for future) -->
        <!-- 
        <div class="testimonial-form-container">
            <h2>Leave a Testimonial</h2>
            <form class="testimonial-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send Testimonial</button>
            </form>
        </div>
        -->
    </div>

</body>

</html>
