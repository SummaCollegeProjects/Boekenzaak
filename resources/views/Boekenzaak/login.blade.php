<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Password">
        
        <button>login</button>
    </form>

    <?php
        function processForm() {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Process the form data (e.g., save to database, send email, etc.)
            echo "Form submitted successfully! Name: $name, Email: $email";
        }
    ?>
</body>
</html>