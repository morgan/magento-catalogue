# Magento Catalogue

This extension accomplishes the following:

- Ability for user to browse all products on the front-end with layered navigation
- Manufacturers page that lists and links to their corresponding products
- Block helper for implementing manufacturer drop-down for header navigation

## Live Demo

- All products with layered navigation: http://dev.morgan.ly/magento/1.8.1/catalogue/
- List of manufacturers linking to their products: http://dev.morgan.ly/magento/1.8.1/catalogue/manufacturers/

## Installation

1. Extract into root of Magento installation
2. Login to Magento Admin Panel. Go to "Catalog" -> "Manage Categories"
3. Select the root category. Under "Display Settings", set "Is Anchor" to "Yes"
4. Below are the URLs on the front-end:
  - http://your-store.com/catalogue
  - http://your-store.com/catalogue/manufacturers
5. If interested in having manufacturuers/brands listed in navigation, see implementation instructions below.

## Implement Manufacturer Navigation Drop-down

1. In `app/design/frontend/default/{name-of-theme}/layout/page.xml`

2. Find the following block:

```xml
<block type="page/html_header" name="header" as="header">
```

3. Copy the following line inside the block:

```xml
<block type="core/template" name="top_brand" as="topManufacturers" template="magnifystudio-catalogue/navigation/manufacturers.phtml" />
```

4. In `app/design/frontend/default/{name-of-theme}/template/page/html/header.phtml`, place the following where the menu is desired. Keep in mind that this is a plain list and requires styling.

```php
<?php echo $this->getChildHtml('topManufacturers') ?>
```

## Version 0.1.0

This is release version 0.1.0 of [Catalogue](https://github.com/morgan/magento-catalogue).
