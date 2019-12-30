<?php

return [
    [
        'key' => 'agent_dashboard',
        'name' => 'agentadmin::app.acl.dashboard',
        'route' => 'agentadmin.dashboard.index',
        'sort' => 1
    ], [
        'key' => 'agent_sales',
        'name' => 'agentadmin::app.acl.sales',
        'route' => 'agentadmin.sales.orders.index',
        'sort' => 2
    ], [
        'key' => 'agent_sales.orders',
        'name' => 'agentadmin::app.acl.orders',
        'route' => 'agentadmin.sales.orders.index',
        'sort' => 1
    ], [
        'key' => 'agent_sales.invoices',
        'name' => 'agentadmin::app.acl.invoices',
        'route' => 'agentadmin.sales.invoices.index',
        'sort' => 2
    ], [
        'key' => 'agent_sales.shipments',
        'name' => 'agentadmin::app.acl.shipments',
        'route' => 'agentadmin.sales.shipments.index',
        'sort' => 3
    ], [
        'key' => 'agent_catalog',
        'name' => 'agentadmin::app.acl.catalog',
        'route' => 'agentadmin.catalog.index',
        'sort' => 3
    ], [
        'key' => 'agent_catalog.products',
        'name' => 'agentadmin::app.acl.products',
        'route' => 'agentadmin.catalog.products.index',
        'sort' => 1
    ], [
        'key' => 'agent_catalog.products.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.catalog.products.create',
        'sort' => 1
    ], [
        'key' => 'agent_catalog.products.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.catalog.products.edit',
        'sort' => 2
    ], [
        'key' => 'agent_catalog.products.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.catalog.products.delete',
        'sort' => 3
    ], [
        'key' => 'agent_catalog.categories',
        'name' => 'agentadmin::app.acl.categories',
        'route' => 'agentadmin.catalog.categories.index',
        'sort' => 2
    ], [
        'key' => 'agent_catalog.categories.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.catalog.categories.create',
        'sort' => 1
    ], [
        'key' => 'agent_catalog.categories.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.catalog.categories.edit',
        'sort' => 2
    ], [
        'key' => 'agent_catalog.categories.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.catalog.categories.delete',
        'sort' => 3
    ], [
        'key' => 'agent_catalog.attributes',
        'name' => 'agentadmin::app.acl.attributes',
        'route' => 'agentadmin.catalog.attributes.index',
        'sort' => 3
    ], [
        'key' => 'agent_catalog.attributes.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.catalog.attributes.create',
        'sort' => 1
    ], [
        'key' => 'agent_catalog.attributes.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.catalog.attributes.edit',
        'sort' => 2
    ], [
        'key' => 'agent_catalog.attributes.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.catalog.attributes.delete',
        'sort' => 3
    ], [
        'key' => 'agent_catalog.families',
        'name' => 'agentadmin::app.acl.attribute-families',
        'route' => 'agentadmin.catalog.families.index',
        'sort' => 4
    ], [
        'key' => 'agent_catalog.families.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.catalog.families.create',
        'sort' => 1
    ], [
        'key' => 'agent_catalog.families.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.catalog.families.edit',
        'sort' => 2
    ], [
        'key' => 'agent_catalog.families.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.catalog.families.delete',
        'sort' => 3
    ], [
        'key' => 'agent_customers',
        'name' => 'agentadmin::app.acl.customers',
        'route' => 'agentadmin.customer.index',
        'sort' => 4
    ], [
        'key' => 'agent_customers.customers',
        'name' => 'agentadmin::app.acl.customers',
        'route' => 'agentadmin.customer.index',
        'sort' => 1
    ], [
        'key' => 'agent_customers.customers.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.customer.create',
        'sort' => 1
    ], [
        'key' => 'agent_customers.customers.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.customer.edit',
        'sort' => 2
    ], [
        'key' => 'agent_customers.customers.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.customer.delete',
        'sort' => 3
    ], [
        'key' => 'agent_customers.groups',
        'name' => 'agentadmin::app.acl.groups',
        'route' => 'agentadmin.groups.index',
        'sort' => 2
    ], [
        'key' => 'agent_customers.groups.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.groups.create',
        'sort' => 1
    ], [
        'key' => 'agent_customers.groups.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.groups.edit',
        'sort' => 2
    ], [
        'key' => 'agent_customers.groups.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.groups.delete',
        'sort' => 3
    ], [
        'key' => 'agent_customers.reviews',
        'name' => 'agentadmin::app.acl.reviews',
        'route' => 'agentadmin.customer.review.index',
        'sort' => 3
    ], [
        'key' => 'agent_customers.reviews.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.customer.review.edit',
        'sort' => 1
    ], [
        'key' => 'agent_customers.reviews.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.customer.review.delete',
        'sort' => 2
    ], [
        'key' => 'agent_configuration',
        'name' => 'agentadmin::app.acl.configure',
        'route' => 'agentadmin.configuration.index',
        'sort' => 5
    ], [
        'key' => 'agent_settings',
        'name' => 'agentadmin::app.acl.settings',
        'route' => 'agentadmin.users.index',
        'sort' => 6
    ], [
        'key' => 'agent_settings.locales',
        'name' => 'agentadmin::app.acl.locales',
        'route' => 'agentadmin.locales.index',
        'sort' => 1
    ], [
        'key' => 'agent_settings.locales.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.locales.create',
        'sort' => 1
    ], [
        'key' => 'agent_settings.locales.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.locales.edit',
        'sort' => 2
    ], [
        'key' => 'agent_settings.locales.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.locales.delete',
        'sort' => 3
    ], [
        'key' => 'agent_settings.currencies',
        'name' => 'agentadmin::app.acl.currencies',
        'route' => 'agentadmin.currencies.index',
        'sort' => 2
    ], [
        'key' => 'agent_settings.currencies.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.currencies.create',
        'sort' => 1
    ], [
        'key' => 'agent_settings.currencies.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.currencies.edit',
        'sort' => 2
    ], [
        'key' => 'agent_settings.currencies.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.currencies.delete',
        'sort' => 3
    ], [
        'key' => 'agent_settings.exchange_rates',
        'name' => 'agentadmin::app.acl.exchange-rates',
        'route' => 'agentadmin.exchange_rates.index',
        'sort' => 3
    ], [
        'key' => 'agent_settings.exchange_rates.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.exchange_rates.create',
        'sort' => 1
    ], [
        'key' => 'agent_settings.exchange_rates.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.exchange_rates.edit',
        'sort' => 2
    ], [
        'key' => 'agent_settings.exchange_rates.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.exchange_rates.delete',
        'sort' => 3
    ], [
        'key' => 'agent_settings.inventory_sources',
        'name' => 'agentadmin::app.acl.inventory-sources',
        'route' => 'agentadmin.inventory_sources.index',
        'sort' => 4
    ], [
        'key' => 'agent_settings.inventory_sources.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.inventory_sources.create',
        'sort' => 1
    ], [
        'key' => 'agent_settings.inventory_sources.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.inventory_sources.edit',
        'sort' => 2
    ], [
        'key' => 'agent_settings.inventory_sources.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.inventory_sources.delete',
        'sort' => 3
    ], [
        'key' => 'agent_settings.channels',
        'name' => 'agentadmin::app.acl.channels',
        'route' => 'agentadmin.channels.index',
        'sort' => 5
    ], [
        'key' => 'agent_settings.channels.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.channels.create',
        'sort' => 1
    ], [
        'key' => 'agent_settings.channels.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.channels.edit',
        'sort' => 2
    ], [
        'key' => 'agent_settings.channels.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.channels.delete',
        'sort' => 3
    ], [
        'key' => 'agent_settings.users',
        'name' => 'agentadmin::app.acl.users',
        'route' => 'agentadmin.users.index',
        'sort' => 6
    ], [
        'key' => 'agent_settings.users.users',
        'name' => 'agentadmin::app.acl.users',
        'route' => 'agentadmin.users.index',
        'sort' => 1
    ], [
        'key' => 'agent_settings.users.users.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.users.create',
        'sort' => 1
    ], [
        'key' => 'agent_settings.users.users.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.users.edit',
        'sort' => 2
    ], [
        'key' => 'agent_settings.users.users.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.users.delete',
        'sort' => 3
    ], [
        'key' => 'agent_settings.users.roles',
        'name' => 'agentadmin::app.acl.roles',
        'route' => 'agentadmin.roles.index',
        'sort' => 2
    ], [
        'key' => 'agent_settings.users.roles.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.roles.create',
        'sort' => 1
    ], [
        'key' => 'agent_settings.users.roles.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.roles.edit',
        'sort' => 2
    ], [
        'key' => 'agent_settings.users.roles.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.roles.delete',
        'sort' => 3
    ], [
        'key' => 'agent_settings.sliders',
        'name' => 'agentadmin::app.acl.sliders',
        'route' => 'agentadmin.sliders.index',
        'sort' => 7
    ], [
        'key' => 'agent_settings.sliders.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.sliders.create',
        'sort' => 1
    ], [
        'key' => 'agent_settings.sliders.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.sliders.edit',
        'sort' => 2
    ], [
        'key' => 'agent_settings.sliders.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.sliders.delete',
        'sort' => 3
    ], [
        'key' => 'agent_settings.taxes',
        'name' => 'agentadmin::app.acl.taxes',
        'route' => 'agentadmin.tax-categories.index',
        'sort' => 8
    ], [
        'key' => 'agent_settings.taxes.tax-categories',
        'name' => 'agentadmin::app.acl.tax-categories',
        'route' => 'agentadmin.tax-categories.index',
        'sort' => 1
    ], [
        'key' => 'agent_settings.taxes.tax-categories.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.tax-categories.create',
        'sort' => 1
    ], [
        'key' => 'agent_settings.taxes.tax-categories.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.tax-categories.edit',
        'sort' => 2
    ], [
        'key' => 'agent_settings.taxes.tax-categories.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.tax-categories.delete',
        'sort' => 3
    ], [
        'key' => 'agent_settings.taxes.tax-rates',
        'name' => 'agentadmin::app.acl.tax-rates',
        'route' => 'agentadmin.tax-rates.index',
        'sort' => 2
    ], [
        'key' => 'agent_settings.taxes.tax-rates.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.tax-rates.create',
        'sort' => 1
    ], [
        'key' => 'agent_settings.taxes.tax-rates.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.tax-rates.edit',
        'sort' => 2
    ], [
        'key' => 'agent_settings.taxes.tax-rates.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.tax-rates.delete',
        'sort' => 3
    ], [
        'key' => 'agent_promotions',
        'name' => 'agentadmin::app.acl.promotions',
        'route' => 'agentadmin.cart-rule.index',
        'sort' => 7
    ], [
        'key' => 'agent_promotions.cart-rule',
        'name' => 'agentadmin::app.acl.cart-rules',
        'route' => 'agentadmin.cart-rule.index',
        'sort' => 1
    ], [
        'key' => 'agent_promotions.cart-rule.create',
        'name' => 'agentadmin::app.acl.create',
        'route' => 'agentadmin.cart-rule.create',
        'sort' => 1
    ], [
        'key' => 'agent_promotions.cart-rule.edit',
        'name' => 'agentadmin::app.acl.edit',
        'route' => 'agentadmin.cart-rule.edit',
        'sort' => 2
    ], [
        'key' => 'agent_promotions.cart-rule.delete',
        'name' => 'agentadmin::app.acl.delete',
        'route' => 'agentadmin.cart-rule.delete',
        'sort' => 3
    ]
];

?>