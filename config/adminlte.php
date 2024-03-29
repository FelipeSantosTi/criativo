<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'title' => 'Criativo',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'logo' => '<b>NEC</b> - Criativo',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Criativo',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'classes_body' => 'text-sm',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-red elevation-4',
    'classes_sidebar_nav' => 'nav-child-indent',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'light',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/8.-Menu-Configuration
    |
    */

    'menu' => [

        [
            'header'   => 'Pedagógico',
            'classes'  => 'text-bold text-center',
            'can'      => 'Pedagógico',
        ],

        [
            'text'    => 'Cursos',
            'icon'    => 'fas fa-graduation-cap',
            'can'     => 'Cursos',
            'submenu' => [
                [
                    'text' => 'Listar',
                    'url'  => 'admin/courses',
                    'icon' => 'fas fa-list-ol',
                ],
                [
                    'text' => 'Criar',
                    'url'  => 'admin/courses/create',
                    'icon' => 'fas fa-plus',
                ],
            ],
        ],

        [
            'text'    => 'Classes',
            'icon'    => 'fas fa-shapes',
            'can'     => 'Classes',
            'submenu' => [
                [
                    'text' => 'Listar',
                    'url'  => 'admin/grades',
                    'icon' => 'fas fa-list-ol',
                ],
                [
                    'text' => 'Criar',
                    'url'  => 'admin/grades/create',
                    'icon' => 'fas fa-plus',
                ],
            ],
        ],

//        [
//            'text'    => 'Salas',
//            'icon'    => 'fas fa-chalkboard-teacher',
//            'can'     => 'Salas',
//            'submenu' => [
//                [
//                    'text' => 'Listar',
//                    'url'  => 'admin/rooms',
//                    'icon'    => 'fas fa-list-ol',
//                ],
//                [
//                    'text' => 'Criar',
//                    'url'  => 'admin/rooms/create',
//                    'icon' => 'fas fa-plus',
//                ],
//            ],
//        ],

        [
            'text'    => 'Disciplinas',
            'icon'    => 'fas fa-book',
            'can'     => 'Disciplinas',
            'submenu' => [
                [
                    'text' => 'Listar',
                    'url'  => 'admin/subjects',
                    'icon' => 'fas fa-list-ol',
                ],
                [
                    'text' => 'Criar',
                    'url'  => 'admin/subjects/create',
                    'icon' => 'fas fa-plus',
                ],
            ],
        ],

        [
            'text'    => 'Professores',
            'icon'    => 'fas fa-chalkboard-teacher',
            'can'      => 'Professores',
            'submenu' => [
                [
                    'text' => 'Listar',
                    'url'  => 'admin/teachers',
                    'icon' => 'fas fa-list-ol',
                ],
                [
                    'text' => 'Criar',
                    'url'  => 'admin/teachers/create',
                    'icon' => 'fas fa-plus',
                ],
            ],
        ],

        [
            'text'    => 'Alunos',
            'icon'    => 'fas fa-user-graduate',
            'can'      => 'Alunos',
            'submenu' => [
                [
                    'text' => 'Listar',
                    'url'  => 'admin/students',
                    'icon' => 'fas fa-list-ol',
                ],
                [
                    'text' => 'Criar',
                    'url'  => 'admin/students/create',
                    'icon' => 'fas fa-plus',
                ],
            ],
        ],

        [
            'header'   => 'Configurações',
            'classes'  => 'text-bold text-center',
            'can'      => 'Configurações'
        ],

        [
            'text'    => 'Planos',
            'icon'    => 'fas fa-list-alt',
            'can'      => 'Planos',
            'submenu' => [
                [
                    'text' => 'Listar',
                    'url'  => 'admin/plans',
                    'icon' => 'fas fa-list-ol',
                ],
                [
                    'text' => 'Criar',
                    'url'  => 'admin/plans/create',
                    'icon' => 'fas fa-plus',
                ],
            ],
        ],

        [
            'text'    => 'Perfis',
            'icon'    => 'fas fa-user',
            'can'      => 'Perfis',
            'submenu' => [
                [
                    'text' => 'Listar',
                    'url'  => 'admin/profiles',
                    'icon' => 'fas fa-list-ol',
                ],
                [
                    'text' => 'Criar',
                    'url'  => 'admin/profiles/create',
                    'icon' => 'fas fa-plus',
                ],
            ],
        ],

        [
            'text'    => 'Permissões',
            'icon'    => 'fas fa-lock',
            'can'      => 'Permissões',
            'submenu' => [
                [
                    'text' => 'Listar',
                    'url'  => 'admin/permissions',
                    'icon' => 'fas fa-list-ol',
                ],
                [
                    'text' => 'Criar',
                    'url'  => 'admin/permissions/create',
                    'icon' => 'fas fa-plus',
                ],
            ],
        ],

        [
            'text'    => 'Cargos',
            'icon'    => 'fas fa-address-card',
            'can'      => 'Cargos',
            'submenu' => [
                [
                    'text' => 'Listar',
                    'url'  => 'admin/roles',
                    'icon' => 'fas fa-list-ol',
                ],
                [
                    'text' => 'Criar',
                    'url'  => 'admin/roles/create',
                    'icon' => 'fas fa-plus',
                ],
            ],
        ],

        [
            'text'    => 'Usuários',
            'icon'    => 'fas fa-users',
            'can'      => 'Usuários',
            'submenu' => [
                [
                    'text' => 'Listar',
                    'url'  => 'admin/users',
                    'icon' => 'fas fa-list-ol',
                ],
                [
                    'text' => 'Criar',
                    'url'  => 'admin/users/create',
                    'icon' => 'fas fa-plus',
                ],
            ],
        ],

        [
            'header'   => 'Financeiro',
            'classes'  => 'text-bold text-center',
            'can'      => 'Financeiro'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/8.-Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    |
    */

    'plugins' => [
        'DatatablesPlugins' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/dataTables.buttons.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.bootstrap4.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.html5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.print.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/jszip/jszip.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/pdfmake/pdfmake.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/pdfmake/vfs_fonts.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/css/buttons.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    */

    'livewire' => false,
];
