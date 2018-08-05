<?php

require_once('inc/ScheduleCarouselClass.php');
$scheduleSlider = new ScheduleCarouselClass();

?>

<?php if ($scheduleSlider->isAnySlideMatch()): ?>

    <div class="container">

        <?php $scheduleSlider->renderScheduleSlider(); ?>

    </div>

<?php else: ?>

    <h4>No any slides to display now.</h4>

<?php endif; ?>