<?php
$title = "About Us";
include('header.php'); // Assuming you have a header.php file for common header content
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css"> <!-- Assuming you have a CSS file for styling -->
</head>
<body>
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to [Your Company Name], your trusted partner in [Your Service/Product]. Since our founding in [Year], we've dedicated ourselves to providing top-quality [Products/Services] to our community. Our team of experienced [Professionals/Technicians/Experts] is committed to excellence and passionate about making a difference.</p>
        
        <h2>Our Mission</h2>
        <p>Our mission is to [Your Mission Statement], delivering reliability, innovation, and unparalleled service. We believe in [Core Values], and these principles guide every aspect of our business.</p>
        
        <h2>Why Choose Us?</h2>
        <ul>
            <li>Experience: Over [X] years in the industry.</li>
            <li>Quality: We use only the best materials/products.</li>
            <li>Customer Service: Our clients are our top priority.</li>
            <li>Innovation: We stay at the forefront of technology.</li>
        </ul>
        
        <h2>Contact Us</h2>
        <p>For more information or to schedule a consultation, reach out to us at:</p>
        <p>Email: <a href="mailto:contact@yourcompany.com">contact@yourcompany.com</a></p>
        <p>Phone: [Your Phone Number]</p>
    </div>

    <?php include('footer.php'); // Assuming you have a footer.php file for common footer content ?>
</body>
</html>
