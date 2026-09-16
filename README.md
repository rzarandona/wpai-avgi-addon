<h1 align="center">WP All Import Variation Gallery Add-On</h1>

<p align="center"><strong>Bulk-import gallery images for WooCommerce product variations.</strong></p>

<p align="center">A WordPress add-on that connects WP All Import to Additional Variation Images Gallery for WooCommerce.</p>

<p align="center">
	<img src="https://img.shields.io/badge/WordPress-plugin-21759B?logo=wordpress&logoColor=white" alt="WordPress plugin" />
	<img src="https://img.shields.io/badge/WP%20All%20Import-required-24292F" alt="WP All Import required" />
	<img src="https://img.shields.io/badge/WooCommerce-variation%20gallery-96588A?logo=woocommerce&logoColor=white" alt="WooCommerce variation gallery" />
</p>

---

## Overview

This add-on imports images into the `woo_variation_gallery_images` metadata for
WooCommerce product variations. It uses the bundled Rapid Add-On framework to
extend WP All Import and registers an admin notice when the required variation
gallery plugin is unavailable.

## Tech Stack

| Technology | Purpose |
| --- | --- |
| PHP | WordPress plugin implementation. |
| WordPress | Plugin host, hooks, metadata, and admin interface. |
| WP All Import | Import workflow host. |
| Additional Variation Images Gallery for WooCommerce | Variation gallery metadata consumer. |
| `rapid-addon.php` | Bundled WP All Import add-on framework. |
| CSS | Admin interface styling in `admin.css`. |

The plugin header does not declare a license.

## Installation

1. Install and activate WP All Import.
2. Install and activate Additional Variation Images Gallery for WooCommerce.
3. Copy this directory to `wp-content/plugins/wp-all-import-variations-gallery-addon`.
4. Activate the add-on from the WordPress Plugins screen.

No Node.js build step is required.
