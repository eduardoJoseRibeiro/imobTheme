<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <?php $home = get_template_directory_uri(); ?>
    <link rel="stylesheet" href="<?= $home; ?>/assets/css/<?= $css_escolhido; ?>">
    <link rel="stylesheet" href="<?= $home; ?>/assets/css/comum.css">
    <link rel="stylesheet" href="<?= $home; ?>/assets/css/header.css">

    <title>
        <?php
            geraTitle();
        ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <?php
            $args = array(
                'theme_location' => 'header-menu'
            );
            wp_nav_menu($args);
            ?>
        </div>
    </header>