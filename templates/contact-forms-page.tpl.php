<?php
/**
 * @file
 * Default theme implementation for the contact page.
 *
 * Available variables:
 * - $categories: Array of all contact categories.
 *
 * Available variables: for each contact categories
 * - $cat['cid'],
 * - $cat['category'],
 * - $cat['page_title'],
 * - $cat['page_info'],
 * - $cat['path'],
 * - $cat['link'],
 */
?>
<?php
foreach ($categories as $key => $cat){
  $cat = contact_forms_prepare_category($cat);
  // To see the variables available uncomment this block
  /*
  print '<pre>';
  print_r($cat);
  print '</pre>';
  */
?>
<div class="cf-category cat-<?php print $cat['cid']; ?>">
  <h2><?php print $cat['category']; ?></h2>
  <div class="cf-title"><?php print $cat['page_info']; ?></div>
  <div class="cf-link"><?php print $cat['link']; ?></div>
</div>
<?php } ?>