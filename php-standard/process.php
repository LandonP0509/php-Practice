<?php
    include('header.php');
?>
        <h2>Form Submission Result</h2>

        <?php
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $gender = htmlspecialchars($_POST["gender"]);

            $greetings = array("Salutations, ", "Hello, ", "Welcome, ");
            $key = array_rand($greetings);

            echo "<p>" . $greetings[$key] . $name . "!</p>";
            echo "<p>Your E-Mail is: " . $email . "</p>";
            echo "<p>Your Gender is: " . $gender . "</p>";

            $date = new DateTimeImmutable();
            echo "<p>Form submitted on: " . $date->format('Y-m-d H:i:s') . "</p>";
        ?>
    </div>
</body>
</html>