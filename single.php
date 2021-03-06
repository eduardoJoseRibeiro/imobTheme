<?php
    $css_escolhido = 'single.css';
    require_once ('header.php');
?>


    <main class="container">
    <article class="row">


    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
    ?>
    <div class="single-imovel-thumbnail">
        <?php the_post_thumbnail();?>
    </div>
    <div class="container">
        <section class="chamada-principal">
            <?php the_title();?>
        </section>
        <section class="single-imovel-geral single-imovel-descricao">
            <?php the_content();?>
        </section>
        <span class="single-imovel-data">
            <?php the_date(); ?>
        </span>
    </div>
    <?php
            }
        } ?>
    </article>
</main>

<?php
    get_footer();
?>