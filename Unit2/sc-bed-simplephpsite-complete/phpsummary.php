<!doctype hyml>
<html lang="eng">

<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/menu.php' ?>

    <div class="container">
        <h1>PHP Summary</h1>
        <?php
            printf('<p>You are running PHP version %s', phpversion());

            echo 'h4>Loaded Extensions</h4';
            $ext = get_loaded_extensions();
            var_dump($ext);

            echo '<h4>Server Environment</h4>';
            var_dump($_SERVER);
        ?>
    </div>

    <?php include 'includes/footer.php' ?>
</body>

</html>