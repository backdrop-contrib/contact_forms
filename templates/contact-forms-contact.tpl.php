<?php
/**
 * @file
 * Default theme implementation to display the individual contacts.
 *
 * Available variables:
 * - $cid: Category ID.
 * - $category: Contact category. Use this if you want to customise the h2 tag.
 * - $page_title: Title of category if set or default.
 * - $page_info: Extra info if set or default.
 * - $path: The url of the contact form. Use this to customise the link
 * - $link: The link to the contact form.
 */
?>
<div class="cf-category cat-<?php print $cid; ?>">
<h2><?php print $page_title; ?></h2>
<div class="cf-title"><?php print $page_info; ?></div>
<div class="cf-link"><?php print $link; ?></div>
</div>