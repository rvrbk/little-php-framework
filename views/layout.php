<!DOCTYPE html>
<html lang="<?= env('APP_LOCALE'); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <link rel="stylesheet" href="public/app.css">
    </head>
    <body>
        <?php echo $this->section('page'); ?>

	    <script src="public/app.js"></script>
    </body>
</html>