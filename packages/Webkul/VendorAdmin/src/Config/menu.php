<?php

return [
    [
        'key' => 'dashboard',
        'name' => 'admin::app.layouts.dashboard',
        'route' => 'vendoradmin.dashboard.index',
        'sort' => 1,
        'icon-class' => 'dashboard-icon'
    ], [
        'key' => 'sales',
        'name' => 'admin::app.layouts.sales',
        'route' => 'vendoradmin.sales.orders.index',
        'sort' => 2,
        'icon-class' => 'sales-icon'
    ], [
        'key' => 'sales.orders',
        'name' => 'admin::app.layouts.orders',
        'route' => 'vendoradmin.sales.orders.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'sales.shipments',
        'name' => 'admin::app.layouts.shipments',
        'route' => 'vendoradmin.sales.shipments.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'sales.invoices',
        'name' => 'admin::app.layouts.invoices',
        'route' => 'vendoradmin.sales.invoices.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'sales.refunds',
        'name' => 'admin::app.layouts.refunds',
        'route' => 'vendoradmin.sales.refunds.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'catalog',
        'name' => 'admin::app.layouts.catalog',
        'route' => 'vendoradmin.catalog.products.index',
        'sort' => 3,
        'icon-class' => 'catalog-icon'
    ], [
        'key' => 'catalog.products',
        'name' => 'admin::app.layouts.products',
        'route' => 'vendoradmin.catalog.products.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'catalog.categories',
        'name' => 'admin::app.layouts.categories',
        'route' => 'vendoradmin.catalog.categories.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'catalog.attributes',
        'name' => 'admin::app.layouts.attributes',
        'route' => 'vendoradmin.catalog.attributes.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'catalog.families',
        'name' => 'admin::app.layouts.attribute-families',
        'route' => 'vendoradmin.catalog.families.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'customers',
        'name' => 'admin::app.layouts.customers',
        'route' => 'vendoradmin.customer.index',
        'sort' => 4,
        'icon-class' => 'customer-icon'
    ], [
        'key' => 'customers.customers',
        'name' => 'admin::app.layouts.customers',
        'route' => 'vendoradmin.customer.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'customers.groups',
        'name' => 'admin::app.layouts.groups',
        'route' => 'vendoradmin.groups.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'customers.reviews',
        'name' => 'admin::app.layouts.reviews',
        'route' => 'vendoradmin.customer.review.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'customers.subscribers',
        'name' => 'admin::app.layouts.newsletter-subscriptions',
        'route' => 'vendoradmin.customers.subscribers.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'configuration',
        'name' => 'admin::app.layouts.configure',
        'route' => 'vendoradmin.configuration.index',
        'sort' => 7,
        'icon-class' => 'configuration-icon'
    ], [
        'key' => 'settings',
        'name' => 'admin::app.layouts.settings',
        'route' => 'vendoradmin.locales.index',
        'sort' => 6,
        'icon-class' => 'settings-icon'
    ], [
        'key' => 'settings.locales',
        'name' => 'admin::app.layouts.locales',
        'route' => 'vendoradmin.locales.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'settings.currencies',
        'name' => 'admin::app.layouts.currencies',
        'route' => 'vendoradmin.currencies.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'settings.exchange_rates',
        'name' => 'admin::app.layouts.exchange-rates',
        'route' => 'vendoradmin.exchange_rates.index',
        'sort' => 3,
        'icon-class' => ''
    ], [
        'key' => 'settings.inventory_sources',
        'name' => 'admin::app.layouts.inventory-sources',
        'route' => 'vendoradmin.inventory_sources.index',
        'sort' => 4,
        'icon-class' => ''
    ], [
        'key' => 'settings.channels',
        'name' => 'admin::app.layouts.channels',
        'route' => 'vendoradmin.channels.index',
        'sort' => 5,
        'icon-class' => ''
    ], [
        'key' => 'settings.users',
        'name' => 'admin::app.layouts.users',
        'route' => 'vendoradmin.users.index',
        'sort' => 6,
        'icon-class' => ''
    ], [
        'key' => 'settings.users.users',
        'name' => 'admin::app.layouts.users',
        'route' => 'vendoradmin.users.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'settings.users.roles',
        'name' => 'admin::app.layouts.roles',
        'route' => 'vendoradmin.roles.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'settings.sliders',
        'name' => 'admin::app.layouts.sliders',
        'route' => 'vendoradmin.sliders.index',
        'sort' => 7,
        'icon-class' => ''
    ], [
        'key' => 'settings.taxes',
        'name' => 'admin::app.layouts.taxes',
        'route' => 'vendoradmin.tax-categories.index',
        'sort' => 8,
        'icon-class' => ''
    ], [
        'key' => 'settings.taxes.tax-categories',
        'name' => 'admin::app.layouts.tax-categories',
        'route' => 'vendoradmin.tax-categories.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'settings.taxes.tax-rates',
        'name' => 'admin::app.layouts.tax-rates',
        'route' => 'vendoradmin.tax-rates.index',
        'sort' => 2,
        'icon-class' => ''
    ], [
        'key' => 'settings.development',
        'name' => 'admin::app.settings.development.title',
        'route' => 'vendoradmin.development.index',
        'sort' => 8,
        'icon-class' => ''
    ],[
        'key' => 'promotions',
        'name' => 'admin::app.layouts.promotion',
        'route' => 'vendoradmin.cart-rule.index',
        'sort' => 5,
        'icon-class' => 'promotion-icon'
    ], [
        'key' => 'promotions.cart-rule',
        'name' => 'admin::app.promotion.cart-rule',
        'route' => 'vendoradmin.cart-rule.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'promotions.catalog-rule',
        'name' => 'admin::app.promotion.catalog-rule',
        'route' => 'vendoradmin.catalog-rule.index',
        'sort' => 1,
        'icon-class' => '',
    ], [
        'key' => 'cms',
        'name' => 'admin::app.layouts.cms',
        'route' => 'vendoradmin.cms.index',
        'sort' => 5,
        'icon-class' => 'cms-icon'
    ], [
        'key' => 'cms.pages',
        'name' => 'admin::app.cms.pages.pages',
        'route' => 'vendoradmin.cms.index',
        'sort' => 1,
        'icon-class' => ''
    ], [
        'key' => 'settings.agent_sources',
        'name' => 'admin::app.layouts.agent-sources',
        'route' => 'vendoradmin.agent_sources.index',
        'sort' => 9,
        'icon-class' => ''
    ]
];