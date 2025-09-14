<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
    <div id="app">
        <?php include __DIR__ . "/../{$page}.php"; ?>
    </div>
    
    <script>
        // Pass PHP data to JavaScript
        window.appData = <?php echo json_encode($data); ?>;
        window.currentPage = '<?php echo $page; ?>';
    </script>
    <script src="/assets/js/bundle/<?php echo $page; ?>.bundle.js"></script>
</body>
</html>