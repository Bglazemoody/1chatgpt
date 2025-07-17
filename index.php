<?php
get_header(); ?>
<header>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
    <h1>Reliable and high-quality transformers</h1>
</header>
<section class="banner">
    <div>
        <h2>Reliable transformers,<br> at affordable prices!</h2>
    </div>
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/banner.jpg" alt="Transformer">
    </div>
</section>
<section class="products">
    <h2>Products</h2>
    <div class="product-grid">
        <?php
        $products = [
            ['TMG-100/10', '$1599'],
            ['TMG-630/10', '$4799'],
            ['TMG-400/10', '$3199'],
            ['TMG-160/10', '$1899'],
            ['TMG-250/10', '$2599'],
            ['TMG-63/10', '$1299'],
            ['TMG-25/10', '$999'],
            ['TMG-40/10', '$1199']
        ];
        foreach($products as $product): ?>
            <div class="product-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/product.jpg" alt="<?php echo $product[0]; ?>">
                <p class="title"><?php echo $product[0]; ?></p>
                <p class="price"><?php echo $product[1]; ?></p>
                <button class="buy">Buy</button>
                <button class="learn">Learn more</button>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<footer>
    <h2>For communication</h2>
    <p>📞 +998 99 903 5556</p>
    <p>📍 Uzbekistan, Tashkent</p>
    <p>Telegram: +998 99 693 5556</p>
</footer>
<?php get_footer(); ?>
