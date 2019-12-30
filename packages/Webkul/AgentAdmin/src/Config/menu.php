<?php

return [
    [
        'key' => 'dashboard',
        'name' => 'admin::app.layouts.dashboard',
        'route' => 'agentadmin.dashboard.index',
        'sort' => 1,
        'icon-class' => 'dashboard-icon'
    ], [
        'key' => 'sales',
        'name' => 'admin::app.layouts.sales',
        'route' => 'agentadmin.sales.orders.index',
        'sort' => 2,
        'icon-class' => 'sales-icon'
    ], [
        'key' => 'sales.orders',
        'name' => 'admin::app.layouts.orders',
        'route' => 'agentadmin.sales.orders.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'sales.shipments',
        'name' => 'admin::app.layouts.shipments',
        'route' => 'agentadmin.sales.shipments.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'sales.invoices',
        'name' => 'admin::app.layouts.invoices',
        'route' => 'agentadmin.sales.invoices.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'sales.refunds',
        'name' => 'admin::app.layouts.refunds',
        'route' => 'agentadmin.sales.refunds.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'catalog',
        'name' => 'admin::app.layouts.catalog',
        'route' => 'agentadmin.catalog.products.index',
        'sort' => 3,
        'icon-class' => 'catalog-icon'
    ], [
        'key' => 'catalog.products',
        'name' => 'admin::app.layouts.products',
        'route' => 'agentadmin.catalog.products.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'catalog.categories',
        'name' => 'admin::app.layouts.categories',
        'route' => 'agentadmin.catalog.categories.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'catalog.attributes',
        'name' => 'admin::app.layouts.attributes',
        'route' => 'agentadmin.catalog.attributes.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'catalog.families',
        'name' => 'admin::app.layouts.attribute-families',
        'route' => 'agentadmin.catalog.families.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'customers',
        'name' => 'admin::app.layouts.customers',
        'route' => 'agentadmin.customer.index',
        'sort' => 4,
        'icon-class' => 'customer-icon'
    ], [
        'key' => 'customers.customers',
        'name' => 'admin::app.layouts.customers',
        'route' => 'agentadmin.customer.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'customers.groups',
        'name' => 'admin::app.layouts.groups',
        'route' => 'agentadmin.groups.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'customers.reviews',
        'name' => 'admin::app.layouts.reviews',
        'route' => 'agentadmin.customer.review.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'customers.subscribers',
        'name' => 'admin::app.layouts.newsletter-subscriptions',
        'route' => 'agentadmin.customers.subscribers.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'configuration',
        'name' => 'admin::app.layouts.configure',
        'route' => 'agentadmin.configuration.index',
        'sort' => 7,
        'icon-class' => 'configuration-icon'
    ], [
        'key' => 'settings',
        'name' => 'admin::app.layouts.settings',
        'route' => 'agentadmin.locales.index',
        'sort' => 6,
        'icon-class' => 'settings-icon'
    ], [
        'key' => 'settings.locales',
        'name' => 'admin::app.layouts.locales',
        'route' => 'agentadmin.locales.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'settings.currencies',
        'name' => 'admin::app.layouts.currencies',
        'route' => 'agentadmin.currencies.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'settings.exchange_rates',
        'name' => 'admin::app.layouts.exchange-rates',
        'route' => 'agentadmin.exchange_rates.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'settings.inventory_sources',
        'name' => 'admin::app.layouts.inventory-sources',
        'route' => 'agentadmin.inventory_sources.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'settings.channels',
        'name' => 'admin::app.layouts.channels',
        'route' => 'agentadmin.channels.index',
        'sort' => 5,
        'icon-class' => ''
    ], [
        'key' => 'settings.users',
        'name' => 'admin::app.layouts.users',
        'route' => 'agentadmin.users.index',
        'sort' => 6,
        'icon-class' => ''
    ], [
        'key' => 'settings.users.users',
        'name' => 'admin::app.layouts.users',
        'route' => 'agentadmin.users.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'settings.users.roles',
        'name' => 'admin::app.layouts.roles',
        'route' => 'agentadmin.roles.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'settings.sliders',
        'name' => 'admin::app.layouts.sliders',
        'route' => 'agentadmin.sliders.index',
        'sort' => 7,
        'icon-class' => ''
    ], [
        'key' => 'settings.taxes',
        'name' => 'admin::app.layouts.taxes',
        'route' => 'agentadmin.tax-categories.index',
        'sort' => 8,
        'icon-class' => ''
    ], [
        'key' => 'settings.taxes.tax-categories',
        'name' => 'admin::app.layouts.tax-categories',
        'route' => 'agentadmin.tax-categories.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'settings.taxes.tax-rates',
        'name' => 'admin::app.layouts.tax-rates',
        'route' => 'agentadmin.tax-rates.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'settings.development',
        'name' => 'admin::app.settings.development.title',
        'route' => 'agentadmin.development.index',
        'sort' => 8,
        'icon-class' => ''
    ],[
        'key' => 'promotions',
        'name' => 'admin::app.layouts.promotion',
        'route' => 'agentadmin.cart-rule.index',
        'sort' => 5,
        'icon-class' => 'promotion-icon'
    ], [
        'key' => 'promotions.cart-rule',
        'name' => 'admin::app.promotion.cart-rule',
        'route' => 'agentadmin.cart-rule.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'promotions.catalog-rule',
        'name' => 'admin::app.promotion.catalog-rule',
        'route' => 'agentadmin.catalog-rule.index',
        'sort' => 1,
        'icon-class' => '',
    ], [
        'key' => 'cms',
        'name' => 'admin::app.layouts.cms',
        'route' => 'agentadmin.cms.index',
        'sort' => 5,
        'icon-class' => 'cms-icon'
    ], [
        'key' => 'cms.pages',
        'name' => 'admin::app.cms.pages.pages',
        'route' => 'agentadmin.cms.index',
        'sort' => 1,
        'icon-class' => ''
    ]
];