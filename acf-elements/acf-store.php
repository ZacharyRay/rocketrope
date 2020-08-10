<?php 
    $product = get_sub_field('product');
?>

<div id="shop-wrapper">
        <div id="headline"><h1>STORE</h1></div>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach($product as $p) { ?>
                <div class="swiper-slide" style="background-image:url('<?= $p['product_image'] ?>')">
                  <a href="<?= $p['product_link'] ?>" target="_blank">
                    <div id="overlay"><p>SHOP</p></div>
                  </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>