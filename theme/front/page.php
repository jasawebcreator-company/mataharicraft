
<?php if($data->result->title == 'About Us'): ?>
  <?php include "page/about-us.php" ?>
<?php endif; ?>

<?php if($data->result->title == 'Facilities'): ?>
  <?php include "page/facilities.php" ?>
<?php endif; ?>

<?php if($data->result->title == 'Custom Villas'): ?>
  <?php include "page/villas.php" ?>
<?php endif; ?>

<?php if($data->result->title == 'Company Goals'): ?>
  <?php include "page/company-goals.php" ?>
<?php endif; ?>

<?php if($data->result->title == 'Partner'): ?>
  <?php include "page/partner.php" ?>
<?php endif; ?>

<?php if($data->result->title == 'Certificate'): ?>
  <?php include "page/Certificate.php" ?>
<?php endif; ?>

<?php if($data->result->title == 'FAQ'): ?>
  <?php include "page/faq.php" ?>
<?php endif; ?>

<?php if(($data->result->custom_field_1 ?? '') == 'capabilities'): ?>
  <?php include "page/capabilities.php" ?>
<?php endif; ?>

<?php if(($data->result->custom_field_1 ?? '') == 'process'): ?>
  <?php include "page/process.php" ?>
<?php endif; ?>


<?php if($data->result->title == 'Our Story'): ?>
  <?php include "page/our_story.php" ?>
<?php endif; ?>

<?php if($data->result->title == 'Our Artisans'): ?>
  <?php include "page/our_artisans.php" ?>
<?php endif; ?>

<?php if($data->result->title == 'Our Workshop'): ?>
  <?php include "page/our_workshop.php" ?>
<?php endif; ?>


<?php $func->load('home/home_parallax') ?>