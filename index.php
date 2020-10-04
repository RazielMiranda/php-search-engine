<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SEARCH ENGINE PROJECT: SEARCH PAGE</title>
    <!-- TODO - SOME CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<?php require 'view/front/header.php'; ?>
<main>
<?php
switch ($page = $_GET['page'] = 'home') {
    case 'insert':
        include('view/front/insert.php');
        break;
    case 'results':
        include('view/front/results.php');
        break;
    default:
        include('view/front/home.php');
        break;
}
?>
</main>
<?php require 'view/front/footer.php'; ?>
<script src="view/assets/js/main.js" defer></script>
</body>
</html>