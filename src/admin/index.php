<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.5/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../output.css">
</head>
<body class="flex flex-row justify-center py-72 gap-10">
    <?php include('./users.php') ?>
    <?php include('./movies.php') ?>
    <?php include('./ratings.php') ?>
    <?php include('./reviews.php') ?>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>