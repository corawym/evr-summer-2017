<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $title ) ) > 0) : ?>
  <p class="address-widget-title"><?php echo esc_html($title) ?></p>
<?php endif; ?>

<?php if ( strlen( trim( $address ) ) > 0) : ?>
  <p class="address"><?php echo esc_html($address) ?></p>
<?php endif; ?>

<?php if ( strlen( trim( $city ) ) > 0) : ?>
<p class="city"><?php echo esc_html($city) ?>, </p>
<?php endif; ?>

<?php if ( strlen( trim( $region ) ) > 0) : ?>
  <p class="region"><?php echo esc_html($region) ?></p>
<?php endif; ?>

<?php if ( strlen( trim( $phone ) ) > 0) : ?>
  <p class="phone"><?php echo esc_html($phone) ?></p>
<?php endif; ?>