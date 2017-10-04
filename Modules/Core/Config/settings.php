<?php

return [
    // General site settings
    'core_site_title' => [
        'description' => 'core::settings.site-title',
        'view' => 'text',
        'translatable' => true,
    ],
    'core_site_description' => [
        'description' => 'core::settings.site-description',
        'view' => 'textarea',
        'translatable' => true,
    ],
    'core_site_template' => [
        'description' => 'core::settings.template',
        'view' => 'core::fields.select-theme',
    ],
    'core_google_analytics_script' => [
        'description' => 'core::settings.analytics-script',
        'view' => 'textarea',
        'translatable' => false,
    ],
    'core_site_locales' => [
        'description' => 'core::settings.locales',
        'view' => 'core::fields.select-locales',
        'translatable' => false,
    ],
    'core_site_timezone' => [

    ],
    'core_site_language' => [],
    'date-format' => [],
    'time-format' => [],
    'week-starts-on' => [],

    // Mailer settings
    'core_mail_host' => [],
    'core_mail_port' => [],
    'core_mail_user' => [],
    'core_mail_password' => [],


];
