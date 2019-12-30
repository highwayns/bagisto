<?php

return [
    [
        'key' => 'dashboard',
        'name' => 'agentadmin::app.acl.dashboard',
        'route' => 'agentadmin.dashboard.index',
        'sort' => 1
    ], [
        'key' => 'sales',
        'name' => 'agentadmin::app.acl.sales',
        'route' => 'agentadmin.sales.orders.index',
        'sort' => 2
    ], [
        'key' => 'sales.orders',
        'name' => 'agentadmin::app.acl.orders',
        'route' => 'agentadmin.sales.orders.index',
        'sort' => 1
    ], [
        'key' => 'sales.invoices',
        'name' => 'agentadmin::app.acl.invoices',
        'route' => 'agentadmin.sales.invoices.index',
        'sort' => 2
    ], [
        'key' => 'sales.shipments',
        'name' => 'agentadmin::app.acl.shipments',
        'route' => 'agentadmin.sales.shipments.index',
        'sort' => 3
    ], [
        'key' => 'catalog',
        'name' => 'agentadmin::app.acl.catalog',
        'route' => 'agentadmin.catalog.index',
        'sort' => 3
    ], [
        'key' => 'catalog.products',
        'name' => 'agentadmin::app.acl.products',
        'route' => 'agentadmin.catalog.products.index',
        'sort' => 1
    ], [
        'key' => 'catalog.products.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.catalog.products.create',
        'sort' => 1
    ], [
        'key' => 'catalog.products.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.catalog.products.edit',
        'sort' => 2
    ], [
        'key' => 'catalog.products.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.catalog.products.delete',
        'sort' => 3
    ], [
        'key' => 'catalog.categories',
        'name' => 'agentadmin::app.acl.categories',
        'route' => 'agentadmin.catalog.categories.index',
        'sort' => 2
    ], [
        'key' => 'catalog.categories.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.catalog.categories.create',
        'sort' => 1
    ], [
        'key' => 'catalog.categories.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.catalog.categories.edit',
        'sort' => 2
    ], [
        'key' => 'catalog.categories.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.catalog.categories.delete',
        'sort' => 3
    ], [
        'key' => 'catalog.attributes',
        'name' => 'agentadmin::app.acl.attributes',
        'route' => 'agentadmin.catalog.attributes.index',
        'sort' => 3
    ], [
        'key' => 'catalog.attributes.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.catalog.attributes.create',
        'sort' => 1
    ], [
        'key' => 'catalog.attributes.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.catalog.attributes.edit',
        'sort' => 2
    ], [
        'key' => 'catalog.attributes.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.catalog.attributes.delete',
        'sort' => 3
    ], [
        'key' => 'catalog.families',
        'name' => 'agentadmin::app.acl.attribute-families',
        'route' => 'agentadmin.catalog.families.index',
        'sort' => 4
    ], [
        'key' => 'catalog.families.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.catalog.families.create',
        'sort' => 1
    ], [
        'key' => 'catalog.families.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.catalog.families.edit',
        'sort' => 2
    ], [
        'key' => 'catalog.families.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.catalog.families.delete',
        'sort' => 3
    ], [
        'key' => 'customers',
        'name' => 'agentadmin::app.acl.customers',
        'route' => 'agentadmin.customer.index',
        'sort' => 4
    ], [
        'key' => 'customers.customers',
        'name' => 'agentadmin::app.acl.customers',
        'route' => 'agentadmin.customer.index',
        'sort' => 1
    ], [
        'key' => 'customers.customers.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.customer.create',
        'sort' => 1
    ], [
        'key' => 'customers.customers.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.customer.edit',
        'sort' => 2
    ], [
        'key' => 'customers.customers.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.customer.delete',
        'sort' => 3
    ], [
        'key' => 'customers.groups',
        'name' => 'agentadmin::app.acl.groups',
        'route' => 'agentadmin.groups.index',
        'sort' => 2
    ], [
        'key' => 'customers.groups.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.groups.create',
        'sort' => 1
    ], [
        'key' => 'customers.groups.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.groups.edit',
        'sort' => 2
    ], [
        'key' => 'customers.groups.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.groups.delete',
        'sort' => 3
    ], [
        'key' => 'customers.reviews',
        'name' => 'agentadmin::app.acl.reviews',
        'route' => 'agentadmin.customer.review.index',
        'sort' => 3
    ], [
        'key' => 'customers.reviews.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.customer.review.edit',
        'sort' => 1
    ], [
        'key' => 'customers.reviews.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.customer.review.delete',
        'sort' => 2
    ], [
        'key' => 'configuration',
        'name' => 'agentadmin::app.acl.configure',
        'route' => 'agentadmin.configuration.index',
        'sort' => 5
    ], [
        'key' => 'settings',
        'name' => 'agentadmin::app.acl.settings',
        'route' => 'agentadmin.users.index',
        'sort' => 6
    ], [
        'key' => 'settings.locales',
        'name' => 'agentadmin::app.acl.locales',
        'route' => 'agentadmin.locales.index',
        'sort' => 1
    ], [
        'key' => 'settings.locales.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.locales.create',
        'sort' => 1
    ], [
        'key' => 'settings.locales.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.locales.edit',
        'sort' => 2
    ], [
        'key' => 'settings.locales.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.locales.delete',
        'sort' => 3
    ], [
        'key' => 'settings.currencies',
        'name' => 'agentadmin::app.acl.currencies',
        'route' => 'agentadmin.currencies.index',
        'sort' => 2
    ], [
        'key' => 'settings.currencies.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.currencies.create',
        'sort' => 1
    ], [
        'key' => 'settings.currencies.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.currencies.edit',
        'sort' => 2
    ], [
        'key' => 'settings.currencies.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.currencies.delete',
        'sort' => 3
    ], [
        'key' => 'settings.exchange_rates',
        'name' => 'agentadmin::app.acl.exchange-rates',
        'route' => 'agentadmin.exchange_rates.index',
        'sort' => 3
    ], [
        'key' => 'settings.exchange_rates.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.exchange_rates.create',
        'sort' => 1
    ], [
        'key' => 'settings.exchange_rates.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.exchange_rates.edit',
        'sort' => 2
    ], [
        'key' => 'settings.exchange_rates.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.exchange_rates.delete',
        'sort' => 3
    ], [
        'key' => 'settings.inventory_sources',
        'name' => 'agentadmin::app.acl.inventory-sources',
        'route' => 'agentadmin.inventory_sources.index',
        'sort' => 4
    ], [
        'key' => 'settings.inventory_sources.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.inventory_sources.create',
        'sort' => 1
    ], [
        'key' => 'settings.inventory_sources.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.inventory_sources.edit',
        'sort' => 2
    ], [
        'key' => 'settings.inventory_sources.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.inventory_sources.delete',
        'sort' => 3
    ], [
        'key' => 'settings.channels',
        'name' => 'agentadmin::app.acl.channels',
        'route' => 'agentadmin.channels.index',
        'sort' => 5
    ], [
        'key' => 'settings.channels.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.channels.create',
        'sort' => 1
    ], [
        'key' => 'settings.channels.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.channels.edit',
        'sort' => 2
    ], [
        'key' => 'settings.channels.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.channels.delete',
        'sort' => 3
    ], [
        'key' => 'settings.users',
        'name' => 'agentadmin::app.acl.users',
        'route' => 'agentadmin.users.index',
        'sort' => 6
    ], [
        'key' => 'settings.users.users',
        'name' => 'agentadmin::app.acl.users',
        'route' => 'agentadmin.users.index',
        'sort' => 1
    ], [
        'key' => 'settings.users.users.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.users.create',
        'sort' => 1
    ], [
        'key' => 'settings.users.users.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.users.edit',
        'sort' => 2
    ], [
        'key' => 'settings.users.users.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.users.delete',
        'sort' => 3
    ], [
        'key' => 'settings.users.roles',
        'name' => 'agentadmin::app.acl.roles',
        'route' => 'agentadmin.roles.index',
        'sort' => 2
    ], [
        'key' => 'settings.users.roles.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.roles.create',
        'sort' => 1
    ], [
        'key' => 'settings.users.roles.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.roles.edit',
        'sort' => 2
    ], [
        'key' => 'settings.users.roles.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.roles.delete',
        'sort' => 3
    ], [
        'key' => 'settings.sliders',
        'name' => 'agentadmin::app.acl.sliders',
        'route' => 'agentadmin.sliders.index',
        'sort' => 7
    ], [
        'key' => 'settings.sliders.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.sliders.create',
        'sort' => 1
    ], [
        'key' => 'settings.sliders.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.sliders.edit',
        'sort' => 2
    ], [
        'key' => 'settings.sliders.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.sliders.delete',
        'sort' => 3
    ], [
        'key' => 'settings.taxes',
        'name' => 'agentadmin::app.acl.taxes',
        'route' => 'agentadmin.tax-categories.index',
        'sort' => 8
    ], [
        'key' => 'settings.taxes.tax-categories',
        'name' => 'agentadmin::app.acl.tax-categories',
        'route' => 'agentadmin.tax-categories.index',
        'sort' => 1
    ], [
        'key' => 'settings.taxes.tax-categories.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.tax-categories.create',
        'sort' => 1
    ], [
        'key' => 'settings.taxes.tax-categories.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.tax-categories.edit',
        'sort' => 2
    ], [
        'key' => 'settings.taxes.tax-categories.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.tax-categories.delete',
        'sort' => 3
    ], [
        'key' => 'settings.taxes.tax-rates',
        'name' => 'agentadmin::app.acl.tax-rates',
        'route' => 'agentadmin.tax-rates.index',
        'sort' => 2
    ], [
        'key' => 'settings.taxes.tax-rates.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.tax-rates.create',
        'sort' => 1
    ], [
        'key' => 'settings.taxes.tax-rates.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.tax-rates.edit',
        'sort' => 2
    ], [
        'key' => 'settings.taxes.tax-rates.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.tax-rates.delete',
        'sort' => 3
    ], [
        'key' => 'promotions',
        'name' => 'agentadmin::app.acl.promotions',
        'route' => 'agentadmin.cart-rule.index',
        'sort' => 7
    ], [
        'key' => 'promotions.cart-rule',
        'name' => 'agentadmin::app.acl.cart-rules',
        'route' => 'agentadmin.cart-rule.index',
        'sort' => 1
    ], [
        'key' => 'promotions.cart-rule.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.cart-rule.create',
        'sort' => 1
    ], [
        'key' => 'promotions.cart-rule.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.cart-rule.edit',
        'sort' => 2
    ], [
        'key' => 'promotions.cart-rule.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.cart-rule.delete',
        'sort' => 3
    ]
];

?>