<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Richlight Apparels</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-image: url('about.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: black;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo img {
            vertical-align: middle;
            height: 80px;
            width: 80px;
            margin-right: 10px;
        }

        .nav-links {
            margin-right: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .nav-links a:hover {
            background-color: #333;
        }

        .content {
            width: 1000px;
            border: 3px solid #1A120B;
            padding: 20px;
            background: #1A120B;
            border-radius: 20px;
            margin-top: 100px;
            color: white;
            opacity: 0.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .about-section h2,
        .client-section h2,
        .solution-section h2 {
            color: #f39c12;
        }

        .about-section p,
        .client-section p,
        .solution-section p {
            color: #f1c40f;
            line-height: 1.8;
        }

        .about-section, .client-section, .solution-section {
            margin-bottom: 40px;
        }

        /* Add more custom styles as needed */
    </style>
</head>
<body>
    <div class="header">
        <a class="logo" href="#home">
            <img src="logo.png" alt="Logo">
        </a>
        <div class="nav-links">
            <a href="first_main_page.php">Home</a>
            <a href="About.php">About</a>
            <a href="#">Contact</a>
        </div>
    </div>
    <br>
    <div class="content">
        <header>
            <h1>About Us - Richlight Apparels Private Limited</h1>
        </header>
        <main>
            <section class="about-section">
                <div class="container">
                    <h2>The Journey</h2>
                    <p>
                        The journey of Richlight Apparels Private Limited began on 18th June 2003, and now our factory and stores spread over 5 acres of land in Ratnapura, Sri Lanka stand as testament to the faith our clients and stakeholders have shown us throughout our existence in the apparel industry. With a monthly production capacity of 300,000 units and a workforce of over 300, our company’s steady growth is a clear result of our commitment towards innovation, design, and uncompromised production standards.
                    </p>
                </div>
            </section>
            <section class="client-section">
                <div class="container">
                    <h2>Our Clients</h2>
                    <p>
                        Currently, our client portfolio includes world-renowned brands such as George, Primark, Matalan, Pep &amp; Co, Carter's, Marks &amp; Spencer, Kohl’s, Sears &amp; K-mart, Target Stores, Casual Male, Gap, and Dim. Our wide product range consists of body suits, sleep suits, pajama sets, school wear (pants, skirts, pinafore, and frocks), polo T-shirts, and crew neck T-shirts.
                    </p>
                </div>
            </section>
            <section class="solution-section">
                <div class="container">
                    <h2>Comprehensive Apparel Solutions</h2>
                    <p>
                        Comprehensive apparel solutions are offered to our clients. From textile research, manufacturing, lab testing, garment washing, printing, embroidery to product development and design, Richlight Apparels have put together a highly dedicated team of skilled employees and state-of-the-art production facilities to exceed client expectations. Learning the market dynamics is a proactive approach in the apparel industry as fashion is a rapidly transforming industry, hence the design and manufacturing sector needs to position itself accordingly to remain competitive in the market and provide the clients with everything they are looking for. This has been the defining mantra of Richlight Apparels, and we continue to invest in training, development, safety measures, and more efficient technologies to remain as a competent, sustainable, and a forward-thinking organization.
                    </p>
                </div>
            </section>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Add any jQuery code you want here (if required)
        // For example, you can use jQuery to create interactive elements or animations.
    </script>
</body>
</html>
