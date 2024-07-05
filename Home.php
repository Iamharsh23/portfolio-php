<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harsh's Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background: #333;
            color: white;
            padding: 10px 0;
        }
        nav{
            display: flex;
            flex-direction:row;
            align-items:center;
            justify-content:flex-end;
            padding-right:20px;

        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
        }
        section {
            padding: 20px 0;
        }
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        /* Add more styles as needed */
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#welcome">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="welcome" style="display:flex;justify-content:center;flex-direction:column;">
        <h1 style="font-size:50px;padding:20px">Welcome to my Portfolio</h1>
        <h1 style="padding:20px">I am Harsh, a full stack developer</h1>
    </section>
    <hr style="margin-top:20vh">
    <section id="about">
        <h1 style="font-size:50px;padding:20px">About Me</h1>
        <h1 style="padding:20px">Information about your skills, experience, and background...</h1>
    </section>
    <hr style="margin-top:20vh">
    <section id="projects">
        <h1 style="font-size:50px;padding:20px">My projects</h1>
        
        <?php
        $projects = [
            ['title' => 'Project 1', 'description' => 'Description of Project 1...'],
            // Add more projects as needed
        ];
        foreach ($projects as $project) {
            echo "<article style='margin-left:20px;border:2px solid black;width:fit-content;padding:20px;'>";
            echo "<h2>" . $project['title'] . "</h2>";
            echo "<p>" . $project['description'] . "</p>";
            echo "</article>";
        }
        ?>
    </section>

    <section id="contact">
        <h1>Contact Me</h1>
        <form action="portfolio.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit" name="submit_contact">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Pritam's Portfolio</p>
    </footer>


</body>
</html>