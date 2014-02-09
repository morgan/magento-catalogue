# Magento Catalogue

This extension accomplishes the following:

- Ability for user to browse all products on the front-end with layered navigation
- Manufacturers page that lists and links to their corresponding products
- Block helper for implementing manufacturer drop-down for header navigation

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
