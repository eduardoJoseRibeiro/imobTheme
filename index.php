<?php
    $css_escolhido = 'index.css';
    require_once ('header.php');
?>

<main class="home-main">
    <div class="container">
        <ul class="imoveis-listagem">
            <?php
                $taxQuery = array(
                    array(
                        "taxonomy" => "localizacao",
                        "field" => "slug",
                        "terms" => "iturama"
                    )
                );

                $args = array(
                    "post_type" => "imovel",
                    "tax_query" => $taxQuery
                );
                $loop = new WP_Query($args);
                if( $loop->have_posts() ) {
                    while ($loop->have_posts()) {
                        $loop->the_post();
            ?>
            <li class="imoveis-listagem-item">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail()?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content();}}?></p>
                </a>
            </li>
        </ul>
    </div>
</main>

<?php get_footer(); ?>
