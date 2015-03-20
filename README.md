Contact Forms
=============

This module expands the features of the site wide contact form. It eliminates
the need for the drop down category menu by generating a form, and a unique
path, for each of the contact form categories. It also replaces the contact form
at /contact with a themable list of Contacts with links to their contact form.

The path 'contact/{category}' generates a contact form for that category with a
title = 'Contact {category}'. e.g. path 'contact/Jill Jones' generates a contact
form for the category 'Jill Jones' with a title = 'Contact Jill Jones'. You can
use underscore "_" or a dash "-" instead of spaces.

If a path is entered that does not have a category the user will be redirected
to 404 page not found.

To define the subject of the generated form the path is as follows
'contact/{category}/Subject goes here'
e.g. path 'contact/Jill Jones/Enquiry about Sales' generates a contact form
for the category 'Jill Jones' with a title = 'Contact Jill Jones' and the
subject 'Enquiry about Sales'.


Requirements
------------

contact.module must be enabled.


Installation
------------

- Install this module using the official Backdrop CMS instructions at
  https://backdropcms.org/guide/modules

- Visit the configuration page under Administration > Structure > Contact Form >
  Settings (admin/structure/contact/settings) and check the settings.

Upgrading from Drupal 7
-----------------------

Make sure the contact and contact_forms modules are installed and enabled.

License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.

Current Maintainers
-------------------

- Geoff Davies (https://github.com/behindthepage/)

Credits
-------
Thanks to the following people who have helped with suggestions and code for the
Drupal version:
nancyw
alienbrain
incrn8
joachim
mfredrickson
jandd
arcaneadam
Rob C