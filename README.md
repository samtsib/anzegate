MIGS payment gateways plugin for Craft Commerce 2
=======================

This plugin provides [MIGS](http://www.anz.com/corporate/products-services/transaction-services/merchant-eftpos-services/internet-payment-solutions/gateway-solutions/egate/) integrations for [Craft Commerce](https://craftcommerce.com/).

It provides the "three party" MIGS gateway.

## Requirements

This plugin requires Craft Commerce 2.0.0-alpha.6 or later.


## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require craftcms/commerce-migs

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for MIGS.

## Setup

To add a MIGS payment gateway, go to Commerce → Settings → Gateways, create a new gateway, and set the gateway type to MIGS.