<?php

return [
    [
        'key' => 'vendor_dashboard',
        'name' => 'vendoradmin::app.layouts.dashboard',
        'route' => 'vendoradmin.dashboard.index',
        'sort' => 1,
        'icon-class' => 'dashboard-icon'
    ], [
        'key' => 'vendor_sales',
        'name' => 'vendoradmin::app.layouts.sales',
        'route' => 'vendoradmin.sales.orders.index',
        'sort' => 2,
        'icon-class' => 'sales-icon'
    ], [
        'key' => 'vendor_sales.orders',
        'name' => 'vendoradmin::app.layouts.orders',
        'route' => 'vendoradmin.sales.orders.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'vendor_sales.shipments',
        'name' => 'vendoradmin::app.layouts.shipments',
        'route' => 'vendoradmin.sales.shipments.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'vendor_sales.invoices',
        'name' => 'vendoradmin::app.layouts.invoices',
        'route' => 'vendoradmin.sales.invoices.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'vendor_sales.refunds',
        'name' => 'vendoradmin::app.layouts.refunds',
        'route' => 'vendoradmin.sales.refunds.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'vendor_catalog',
        'name' => 'vendoradmin::app.layouts.catalog',
        'route' => 'vendoradmin.catalog.products.index',
        'sort' => 3,
        'icon-class' => 'catalog-icon'
    ], [
        'key' => 'vendor_catalog.products',
        'name' => 'vendoradmin::app.layouts.products',
        'route' => 'vendoradmin.catalog.products.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'vendor_catalog.categories',
        'name' => 'vendoradmin::app.layouts.categories',
        'route' => 'vendoradmin.catalog.categories.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'vendor_catalog.attributes',
        'name' => 'vendoradmin::app.layouts.attributes',
        'route' => 'vendoradmin.catalog.attributes.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'vendor_catalog.families',
        'name' => 'vendoradmin::app.layouts.attribute-families',
        'route' => 'vendoradmin.catalog.families.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'vendor_customers',
        'name' => 'vendoradmin::app.layouts.customers',
        'route' => 'vendoradmin.customer.index',
        'sort' => 4,
        'icon-class' => 'customer-icon'
    ], [
        'key' => 'vendor_customers.customers',
        'name' => 'vendoradmin::app.layouts.customers',
        'route' => 'vendoradmin.customer.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'vendor_customers.groups',
        'name' => 'vendoradmin::app.layouts.groups',
        'route' => 'vendoradmin.groups.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'vendor_customers.reviews',
        'name' => 'vendoradmin::app.layouts.reviews',
        'route' => 'vendoradmin.customer.review.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'vendor_customers.subscribers',
        'name' => 'vendoradmin::app.layouts.newsletter-subscriptions',
        'route' => 'vendoradmin.customers.subscribers.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'vendor_configuration',
        'name' => 'vendoradmin::app.layouts.configure',
        'route' => 'vendoradmin.configuration.index',
        'sort' => 7,
        'icon-class' => 'configuration-icon'
    ], [
        'key' => 'vendor_settings',
        'name' => 'vendoradmin::app.layouts.settings',
        'route' => 'vendoradmin.locales.index',
        'sort' => 6,
        'icon-class' => 'settings-icon'
    ], [
        'key' => 'vendor_settings.locales',
        'name' => 'vendoradmin::app.layouts.locales',
        'route' => 'vendoradmin.locales.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.currencies',
        'name' => 'vendoradmin::app.layouts.currencies',
        'route' => 'vendoradmin.currencies.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.exchange_rates',
        'name' => 'vendoradmin::app.layouts.exchange-rates',
        'route' => 'vendoradmin.exchange_rates.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.inventory_sources',
        'name' => 'vendoradmin::app.layouts.inventory-sources',
        'route' => 'vendoradmin.inventory_sources.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.channels',
        'name' => 'vendoradmin::app.layouts.channels',
        'route' => 'vendoradmin.channels.index',
        'sort' => 5,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.users',
        'name' => 'vendoradmin::app.layouts.users',
        'route' => 'vendoradmin.users.index',
        'sort' => 6,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.users.users',
        'name' => 'vendoradmin::app.layouts.users',
        'route' => 'vendoradmin.users.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.users.roles',
        'name' => 'vendoradmin::app.layouts.roles',
        'route' => 'vendoradmin.roles.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.sliders',
        'name' => 'vendoradmin::app.layouts.sliders',
        'route' => 'vendoradmin.sliders.index',
        'sort' => 7,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.taxes',
        'name' => 'vendoradmin::app.layouts.taxes',
        'route' => 'vendoradmin.tax-categories.index',
        'sort' => 8,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.taxes.tax-categories',
        'name' => 'vendoradmin::app.layouts.tax-categories',
        'route' => 'vendoradmin.tax-categories.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.taxes.tax-rates',
        'name' => 'vendoradmin::app.layouts.tax-rates',
        'route' => 'vendoradmin.tax-rates.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.development',
        'name' => 'vendoradmin::app.settings.development.title',
        'route' => 'vendoradmin.development.index',
        'sort' => 8,
        'icon-class' => ''
    ],[
        'key' => 'vendor_promotions',
        'name' => 'vendoradmin::app.layouts.promotion',
        'route' => 'vendoradmin.cart-rule.index',
        'sort' => 5,
        'icon-class' => 'promotion-icon'
    ], [
        'key' => 'vendor_promotions.cart-rule',
        'name' => 'vendoradmin::app.promotion.cart-rule',
        'route' => 'vendoradmin.cart-rule.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'vendor_promotions.catalog-rule',
        'name' => 'vendoradmin::app.promotion.catalog-rule',
        'route' => 'vendoradmin.catalog-rule.index',
        'sort' => 1,
        'icon-class' => '',
    ], [
        'key' => 'vendor_cms',
        'name' => 'vendoradmin::app.layouts.cms',
        'route' => 'vendoradmin.cms.index',
        'sort' => 5,
        'icon-class' => 'cms-icon'
    ], [
        'key' => 'vendor_cms.pages',
        'name' => 'vendoradmin::app.cms.pages.pages',
        'route' => 'vendoradmin.cms.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'vendor_settings.agent_sources',
        'name' => 'vendoradmin::app.layouts.agent-sources',
        'route' => 'vendoradmin.agent_sources.index',
        'sort' => 9,
        'icon-class' => ''
    ]
];