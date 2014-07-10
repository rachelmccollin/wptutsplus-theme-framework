Creating your own WordPress theme framework

This theme supports the 4th part of this series for wptutsplus - these are the starting files.

The starting theme includes the following template files:
index.php
page.php - for static pages
archive.php - for archive pages
header.php
sidebar.php
footer.php

The theme supports featured images, menus and widgets and uses them as follows:

Featured images:
These are displayed in the archive and index templates if they are present, using the medium size.

Menus:
The default menu is in header.php, and uses the Menus admin

Styling
The theme uses Object Oriented CSS (OOCSS). The following clases are for layout and you can use them in your pages and posts.
They are responsive, so will resize on smaller screens (for example the .half class is full width on phones)
.full-width
.three-quarters
.two-thirds
.half
.third
.quarter

Hooks
There are 7 action hooks:
Above the header
Inside the header
Before the content
After the content
In the sidebar
In the footer
After the footer
