<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $days ) ) > 0) : ?>
  <p class="days-of-week"><?php echo esc_html($days) ?> | </p>
<?php endif; ?>

<?php if ( strlen( trim( $monday_friday ) ) > 0) : ?>
  <p class="monday-friday"><?php echo esc_html($monday_friday) ?></p>
<?php endif; ?>

<?php if ( strlen( trim( $saturday ) ) > 0) : ?>
  <p>
    <span class="day-of-week">Saturday | </span><?php echo esc_html($saturday) ?>
  </p>
<?php endif; ?>

<?php if ( strlen( trim( $sunday ) ) > 0) : ?>
  <p>
    <span class="day-of-week">Sunday | </span> <?php echo esc_html($sunday) ?>
  </p>
<?php endif; ?>
