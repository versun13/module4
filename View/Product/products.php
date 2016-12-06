<h1>Наши товары</h1>
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Сортировать <span class="caret"></span></button>
  <ul class="dropdown-menu" role="menu">
      <li><a href="product/all/">Без сортировки</a></li>
    <li><a href="product/byprice/">От дешевых  к дорогим</a></li>
    <li><a href="product/byname/">По имени</a></li>
  </ul>
</div>
<br>
<br>
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

<?php } ?>
</div>