<h1><?php echo $data['siteName'] ?>: Welcome to our Apple store</h1>
<h1>Three random products</h1>
<div class="row">
<?php foreach ($data['products'] as $product ) { ?>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?php echo $product['image']?>" alt="<?php echo $product['title']?>">
                <div class="caption">
                    <h3><?php echo $product['title']?> - <?php echo $product['price']?>$</h3>
                    <p><?php echo $product['description']?></p>
                    <p><a href="product/display/<?php echo $product['id']?>" class="btn btn-primary" role="button">Open</a>
                        <a href="cart/add/<?php echo $product['id']?>" class="btn btn-default" role="button">Order</a>
                    </p>
                </div>
            </div>
        </div>

<?php }
echo $file = SITE_DIR . DS . $className . '.php' ;
?>
</div>
