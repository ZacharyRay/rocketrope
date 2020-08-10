  <?php 
  $logo = get_sub_field('logo');
  $text = get_sub_field('text');
  $link_tree = get_sub_field('link_tree');
  ?>

  <div id="info-wrap">
    <div id="info-box">
      <div id="logo" style="background-image: url('<?= $logo ?>')"></div>
      <div id="text"><?= $text ?></div>
       <?php foreach($link_tree as $tree) { ?>
      <div id="link-tree">         
       <a href="<?= $tree['links'] ?>">
         <div id="icon" style="background-image: url('<?= $tree['link_image'] ?>')"></div>
         <div id="link-name"><div id="text-box"><?= $tree['link_name'] ?></div>
         <div id="go-icon"><i class="fas fa-long-arrow-alt-right"></i></div>    
       </a>         
      </div>
    </div>
    <?php } ?>
  </div>
</div>