<?php
use hoaaah\sbadmin2\widgets\Menu;

echo Menu::widget([
    'options' => [
        'ulClass' => "navbar-nav bg-gradient-primary sidebar sidebar-dark accordion",
        'ulId' => "accordionSidebar"
    ], //  optional
    'brand' => [
        'url' => ['site/index'],
        'content' => <<<HTML
            <div class="sidebar-brand-icon mt-3">
            <i class="fas fa-home"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Yii Basic</div>        
HTML
    ],
    'items' => [
        [
            'label' => 'Dashboard',
            'url' => ['site/index'], //  Array format of Url to, will be not used if have an items
            'icon' => 'fas fa-fw fa-tachometer-alt', // optional, default to "fa fa-circle-o
            'visible' => true, // optional, default to true
            // 'options' => [
            //     'liClass' => 'nav-item',
            // ] // optional
        ],
        [
            'type' => 'divider', // divider or sidebar, if not set then link menu
            // 'label' => '', // if sidebar we will set this, if divider then no

        ],
        // [
        //     'label' => 'Data',
        //     'icon' => 'fas fa-bars', // optional, default to "fa fa-circle-o
        //     'visible' => true, // optional, default to true
        //     // 'subMenuTitle' => 'Menu 2 Item', // optional only when have submenutitle, if not exist will not have subMenuTitle
        //     'items' => [
        //         [
        //             'label' => 'Data User',
        //             'icon' => 'fas fa-user', // optional, default to "fa fa-circle-o
        //             'url' => ['personal/index'], //  Array format of Url to, will be not used if have an items
        //         ],
        //         // [
        //         //     'label' => 'Menu 2 Sub 2',
        //         //     'url' => ['/menu22'], //  Array format of Url to, will be not used if have an items
        //         // ],
        //     ]
        // ],
        [
            'label' => 'Data User',
            'url' => ['personal/index'], //  Array format of Url to, will be not used if have an items
            'icon' => 'fas fa-user', // optional, default to "fa fa-circle-o
            'visible' => true, // optional, default to true
            // 'options' => [
            //     'liClass' => 'nav-item',
            // ] // optional
        ],
        // [
        //     'label' => 'Data Pegawai',
        //     'url' => ['pegawai/index'], //  Array format of Url to, will be not used if have an items
        //     'icon' => 'fas fa-users', // optional, default to "fa fa-circle-o
        //     'visible' => true, // optional, default to true
        //     // 'options' => [
        //     //     'liClass' => 'nav-item',
        //     // ] // optional
        // ],
        
        [
            'label' => 'Kepegawaian',
            'icon' => 'fas fa-users', // optional, default to "fa fa-circle-o
            'visible' => true, // optional, default to true
            // 'subMenuTitle' => 'Menu 3 Item', // optional only when have submenutitle, if not exist will not have subMenuTitle
            'items' => [
                [
                    'label' => 'Data Pegawai',
                    'icon' => 'fas fa-user', // optional, default to "fa fa-circle-o
                    'url' => ['pegawai/index'], //  Array format of Url to, will be not used if have an items
                ],
            ]
        ],
        [
            'label' => 'Laporan',
            'icon' => 'fas fa-list', // optional, default to "fa fa-circle-o
            'visible' => true, // optional, default to true
            // 'subMenuTitle' => 'Menu 3 Item', // optional only when have submenutitle, if not exist will not have subMenuTitle
            'items' => [
                [
                    'label' => 'Rekap Lembur',
                    'icon' => 'fas fa-list', // optional, default to "fa fa-circle-o
                    'url' => ['pegawai/index'], //  Array format of Url to, will be not used if have an items
                ],
                [
                    'icon' => 'fas fa-list', // optional, default to "fa fa-circle-o
                    'label' => 'Rekap Cuti',
                    'url' => ['/menu22'], //  Array format of Url to, will be not used if have an items
                ],
            ]
        ],
    ]
]);