<?php
            $image = get_sub_field('display');
?>

<div id="hero-wrap">
            <div class="carousel">
              <?php foreach($image as $the_image) { ?>
                <div class="carousel-cell" style="background-image: url('<?= $the_image['choose_image'] ?>')">
                  <div class="video">
                    <?= $the_image['choose_video']; ?>
                  </div>
                </div>
              <?php } ?>
            </div>
        </div>
