<?php
/**
 * @file
 * Default theme implementation for the contact page.
 *
 * Available variables:
 * - $categories: Array of all contact categories.
 */
foreach ($categories as $key => $cat){
    $cat = contact_forms_prepare_category($cat);
    print theme('contact_forms_contact', array(
      'cid' => $cat['cid'],
      'category' => $cat['category'],
      'page_title' => $cat['page_title'],
      'page_info' => $cat['page_info'],
      'path' => $cat['path'],
      'link' => $cat['link'],
      ));
  }