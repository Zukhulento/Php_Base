<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/darkly/bootstrap.min.css" integrity="sha512-Lg4biTdh4KFPbKO9riaNNd4Dyz8Cop2ccD6q9sRb5WpVPPHCxpEMO0yIzmulpcxBfMHCIMr0G+I9kWjhIwwM/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Static Content -->
    <link rel="stylesheet" href="./static/css/index.css">
    <link rel="icon" href="./static/img/dev_24012.png" type="image/x-icon">
    <?php $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ?>
    <?php if($uri == "/contacts-app/" || $uri == "/contacts-app/index.php") : ?>
    <script defer src="./static/js/welcome.js"></script>
    <?php endif; ?>
    <title>Contacts App</title>
</head>

<body>
    <?php require "partials/navbar.php"; ?>
    <main>

        <!-- content here -->
