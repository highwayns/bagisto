<?php

return [
    [
        'key' => 'dashboard',
        'name' => 'admin::app.acl.dashboard',
        'route' => 'vendoradmin.dashboard.index',
        'sort' => 1
    ], [
        'key' => 'sales',
        'name' => 'admin::app.acl.sales',
        'route' => 'vendoradmin.sales.orders.index',
        'sort' => 2
    ], [
        'key' => 'sales.orders',
        'name' => 'admin::app.acl.orders',
        'route' => 'vendoradmin.sales.orders.index',
        'sort' => 1
    ], [
        'key' => 'sales.invoices',
        'name' => 'admin::app.acl.invoices',
        'route' => 'vendoradmin.sales.invoices.index',
        'sort' => 2
    ], [
        'key' => 'sales.shipments',
        'name' => 'admin::app.acl.shipments',
        'route' => 'vendoradmin.sales.shipments.index',
        'sort' => 3
    ], [
        'key' => 'catalog',
        'name' => 'admin::app.acl.catalog',
        'route' => 'vendoradmin.catalog.index',
        'sort' => 3
    ], [
        'key' => 'catalog.products',
        'name' => 'admin::app.acl.products',
        'route' => 'vendoradmin.catalog.products.index',
        'sort' => 1
    ], [
        'key' => 'catalog.products.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.catalog.products.create',
        'sort' => 1
    ], [
        'key' => 'catalog.products.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.catalog.products.edit',
        'sort' => 2
    ], [
        'key' => 'catalog.products.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.catalog.products.delete',
        'sort' => 3
    ], [
        'key' => 'catalog.categories',
        'name' => 'admin::app.acl.categories',
        'route' => 'vendoradmin.catalog.categories.index',
        'sort' => 2
    ], [
        'key' => 'catalog.categories.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.catalog.categories.create',
        'sort' => 1
    ], [
        'key' => 'catalog.categories.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.catalog.categories.edit',
        'sort' => 2
    ], [
        'key' => 'catalog.categories.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.catalog.categories.delete',
        'sort' => 3
    ], [
        'key' => 'catalog.attributes',
        'name' => 'admin::app.acl.attributes',
        'route' => 'vendoradmin.catalog.attributes.index',
        'sort' => 3
    ], [
        'key' => 'catalog.attributes.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.catalog.attributes.create',
        'sort' => 1
    ], [
        'key' => 'catalog.attributes.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.catalog.attributes.edit',
        'sort' => 2
    ], [
        'key' => 'catalog.attributes.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.catalog.attributes.delete',
        'sort' => 3
    ], [
        'key' => 'catalog.families',
        'name' => 'admin::app.acl.attribute-families',
        'route' => 'vendoradmin.catalog.families.index',
        'sort' => 4
    ], [
        'key' => 'catalog.families.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.catalog.families.create',
        'sort' => 1
    ], [
        'key' => 'catalog.families.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.catalog.families.edit',
        'sort' => 2
    ], [
        'key' => 'catalog.families.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.catalog.families.delete',
        'sort' => 3
    ], [
        'key' => 'customers',
        'name' => 'admin::app.acl.customers',
        'route' => 'vendoradmin.customer.index',
        'sort' => 4
    ], [
        'key' => 'customers.customers',
        'name' => 'admin::app.acl.customers',
        'route' => 'vendoradmin.customer.index',
        'sort' => 1
    ], [
        'key' => 'customers.customers.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.customer.create',
        'sort' => 1
    ], [
        'key' => 'customers.customers.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.customer.edit',
        'sort' => 2
    ], [
        'key' => 'customers.customers.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.customer.delete',
        'sort' => 3
    ], [
        'key' => 'customers.groups',
        'name' => 'admin::app.acl.groups',
        'route' => 'vendoradmin.groups.index',
        'sort' => 2
    ], [
        'key' => 'customers.groups.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.groups.create',
        'sort' => 1
    ], [
        'key' => 'customers.groups.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.groups.edit',
        'sort' => 2
    ], [
        'key' => 'customers.groups.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.groups.delete',
        'sort' => 3
    ], [
        'key' => 'customers.reviews',
        'name' => 'admin::app.acl.reviews',
        'route' => 'vendoradmin.customer.review.index',
        'sort' => 3
    ], [
        'key' => 'customers.reviews.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.customer.review.edit',
        'sort' => 1
    ], [
        'key' => 'customers.reviews.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.customer.review.delete',
        'sort' => 2
    ], [
        'key' => 'configuration',
        'name' => 'admin::app.acl.configure',
        'route' => 'vendoradmin.configuration.index',
        'sort' => 5
    ], [
        'key' => 'settings',
        'name' => 'admin::app.acl.settings',
        'route' => 'vendoradmin.users.index',
        'sort' => 6
    ], [
        'key' => 'settings.locales',
        'name' => 'admin::app.acl.locales',
        'route' => 'vendoradmin.locales.index',
        'sort' => 1
    ], [
        'key' => 'settings.locales.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.locales.create',
        'sort' => 1
    ], [
        'key' => 'settings.locales.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.locales.edit',
        'sort' => 2
    ], [
        'key' => 'settings.locales.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.locales.delete',
        'sort' => 3
    ], [
        'key' => 'settings.currencies',
        'name' => 'admin::app.acl.currencies',
        'route' => 'vendoradmin.currencies.index',
        'sort' => 2
    ], [
        'key' => 'settings.currencies.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.currencies.create',
        'sort' => 1
    ], [
        'key' => 'settings.currencies.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.currencies.edit',
        'sort' => 2
    ], [
        'key' => 'settings.currencies.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.currencies.delete',
        'sort' => 3
    ], [
        'key' => 'settings.exchange_rates',
        'name' => 'admin::app.acl.exchange-rates',
        'route' => 'vendoradmin.exchange_rates.index',
        'sort' => 3
    ], [
        'key' => 'settings.exchange_rates.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.exchange_rates.create',
        'sort' => 1
    ], [
        'key' => 'settings.exchange_rates.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.exchange_rates.edit',
        'sort' => 2
    ], [
        'key' => 'settings.exchange_rates.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.exchange_rates.delete',
        'sort' => 3
    ], [
        'key' => 'settings.inventory_sources',
        'name' => 'admin::app.acl.inventory-sources',
        'route' => 'vendoradmin.inventory_sources.index',
        'sort' => 4
    ], [
        'key' => 'settings.inventory_sources.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.inventory_sources.create',
        'sort' => 1
    ], [
        'key' => 'settings.inventory_sources.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.inventory_sources.edit',
        'sort' => 2
    ], [
        'key' => 'settings.inventory_sources.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.inventory_sources.delete',
        'sort' => 3
    ], [
        'key' => 'settings.channels',
        'name' => 'admin::app.acl.channels',
        'route' => 'vendoradmin.channels.index',
        'sort' => 5
    ], [
        'key' => 'settings.channels.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.channels.create',
        'sort' => 1
    ], [
        'key' => 'settings.channels.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.channels.edit',
        'sort' => 2
    ], [
        'key' => 'settings.channels.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.channels.delete',
        'sort' => 3
    ], [
        'key' => 'settings.users',
        'name' => 'admin::app.acl.users',
        'route' => 'vendoradmin.users.index',
        'sort' => 6
    ], [
        'key' => 'settings.users.users',
        'name' => 'admin::app.acl.users',
        'route' => 'vendoradmin.users.index',
        'sort' => 1
    ], [
        'key' => 'settings.users.users.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.users.create',
        'sort' => 1
    ], [
        'key' => 'settings.users.users.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.users.edit',
        'sort' => 2
    ], [
        'key' => 'settings.users.users.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.users.delete',
        'sort' => 3
    ], [
        'key' => 'settings.users.roles',
        'name' => 'admin::app.acl.roles',
        'route' => 'vendoradmin.roles.index',
        'sort' => 2
    ], [
        'key' => 'settings.users.roles.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.roles.create',
        'sort' => 1
    ], [
        'key' => 'settings.users.roles.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.roles.edit',
        'sort' => 2
    ], [
        'key' => 'settings.users.roles.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.roles.delete',
        'sort' => 3
    ], [
        'key' => 'settings.sliders',
        'name' => 'admin::app.acl.sliders',
        'route' => 'vendoradmin.sliders.index',
        'sort' => 7
    ], [
        'key' => 'settings.sliders.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.sliders.create',
        'sort' => 1
    ], [
        'key' => 'settings.sliders.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.sliders.edit',
        'sort' => 2
    ], [
        'key' => 'settings.sliders.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.sliders.delete',
        'sort' => 3
    ], [
        'key' => 'settings.taxes',
        'name' => 'admin::app.acl.taxes',
        'route' => 'vendoradmin.tax-categories.index',
        'sort' => 8
    ], [
        'key' => 'settings.taxes.tax-categories',
        'name' => 'admin::app.acl.tax-categories',
        'route' => 'vendoradmin.tax-categories.index',
        'sort' => 1
    ], [
        'key' => 'settings.taxes.tax-categories.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.tax-categories.create',
        'sort' => 1
    ], [
        'key' => 'settings.taxes.tax-categories.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.tax-categories.edit',
        'sort' => 2
    ], [
        'key' => 'settings.taxes.tax-categories.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.tax-categories.delete',
        'sort' => 3
    ], [
        'key' => 'settings.taxes.tax-rates',
        'name' => 'admin::app.acl.tax-rates',
        'route' => 'vendoradmin.tax-rates.index',
        'sort' => 2
    ], [
        'key' => 'settings.taxes.tax-rates.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.tax-rates.create',
        'sort' => 1
    ], [
        'key' => 'settings.taxes.tax-rates.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.tax-rates.edit',
        'sort' => 2
    ], [
        'key' => 'settings.taxes.tax-rates.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.tax-rates.delete',
        'sort' => 3
    ], [
        'key' => 'promotions',
        'name' => 'admin::app.acl.promotions',
        'route' => 'vendoradmin.cart-rule.index',
        'sort' => 7
    ], [
        'key' => 'promotions.cart-rule',
        'name' => 'admin::app.acl.cart-rules',
        'route' => 'vendoradmin.cart-rule.index',
        'sort' => 1
    ], [
        'key' => 'promotions.cart-rule.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.cart-rule.create',
        'sort' => 1
    ], [
        'key' => 'promotions.cart-rule.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.cart-rule.edit',
        'sort' => 2
    ], [
        'key' => 'promotions.cart-rule.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.cart-rule.delete',
        'sort' => 3
    ], [
        'key' => 'settings.agent_sources',
        'name' => 'admin::app.acl.agent-sources',
        'route' => 'vendoradmin.agent_sources.index',
        'sort' => 9
    ], [
        'key' => 'settings.agent_sources.create',
        'name' => 'admin::app.acl.create',
        'route' => 'vendoradmin.agent_sources.create',
        'sort' => 1
    ], [
        'key' => 'settings.agent_sources.edit',
        'name' => 'admin::app.acl.edit',
        'route' => 'vendoradmin.agent_sources.edit',
        'sort' => 2
    ], [
        'key' => 'settings.agent_sources.delete',
        'name' => 'admin::app.acl.delete',
        'route' => 'vendoradmin.agent_sources.delete',
        'sort' => 3
    ]
];

?>