<?php
/**
 * Front Page template (Landing)
 */
get_header();
?>

<section class="banner" id="home">
    <div class="banner-text">
        <h2><?php esc_html_e( 'Reliable transformers,<br> at affordable prices!', 'uztransformator' ); ?></h2>
    </div>
    <div class="banner-img">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banner-transformer.jpg' ); ?>" alt="Transformer">
    </div>
</section>

<section class="products" id="products">
    <h2><?php esc_html_e( 'Products', 'uztransformator' ); ?></h2>
    <div class="product-grid">
    <?php
    $products = uztransf_get_products();
    foreach ( $products as $p ) : ?>
        <div class="product-card" id="<?php echo esc_attr( $p['slug'] ); ?>">
            <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['title'] ); ?>">
            <p class="title"><?php echo esc_html( $p['title'] ); ?></p>
            <p class="price"><?php echo esc_html( $p['price'] ); ?></p>
            <div class="buttons">
                <a class="btn buy" href="#contact"><?php esc_html_e( 'Buy', 'uztransformator' ); ?></a>
                <a class="btn learn" href="#<?php echo esc_attr( $p['slug'] ); ?>-details"><?php esc_html_e( 'Learn more', 'uztransformator' ); ?></a>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>
