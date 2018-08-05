<div class="schedule-carousel">
  <?php foreach ($adBanners as $key => $banner):
    $bannerFields = get_fields($banner->ID);
    ?>
    <div class="schedule-slide">
      <a href="<?php echo $bannerFields['cta_link']; ?>" target="<?php echo $bannerFields['target']; ?>" class="block-link">
        <img class="slide-img slide-img-xl" src="<?php echo $bannerFields['image_1']['url']; ?>" alt="<?php echo $banner->post_title; ?>">
        <img class="slide-img slide-img-l" src="<?php echo $bannerFields['image_2']['url']; ?>" alt="<?php echo $banner->post_title; ?>">
        <img class="slide-img slide-img-m" src="<?php echo $bannerFields['image_3']['url']; ?>" alt="<?php echo $banner->post_title; ?>">
        <img class="slide-img slide-img-xs" src="<?php echo $bannerFields['image_4']['url']; ?>" alt="<?php echo $banner->post_title; ?>">
      </a>
    </div>
  <?php endforeach; ?>
</div>
