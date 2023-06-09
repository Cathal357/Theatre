<?php 
    // Display PHP errors to make debugging easier
    // Comment this out when you are finished with the website.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Uncomment the following lines if you get a connection error 
    // define('ROOT_DIR', 'http://localhost:8040/College/theatre/');
    // define('AUTH_DIR', 'http://localhost:8040/College/theatre/');

    // Comment out the following lines if you get a connection error
    define('ROOT_DIR', 'http://localhost/College/theatre/');
    define('AUTH_DIR', 'http://localhost/College/theatre/');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="bg-gray-100 flex items-center">
        <section class="w-full bg-cover bg-center py-32" style="background-image: url('<?= ROOT_DIR ?>/assets/images/header_bg.jpg');">
            <div class="text-centre container mx-auto text-white flex-a">
                
                <h1 class=" w-fit text-5xl text-gray-100 font-medium rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md">Welcome to Clyde Theatre</h1>

            </div>
        </section>
    </div>

    <!-- Include Tailwind CSS and app.css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= ROOT_DIR ?>assets/css/app.css">
</head>

<body class="bg-gray-200">

<script src="//unpkg.com/alpinejs" defer></script>