<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Главное',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'Склад',
        ],
        [
            'title' => 'Склады',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Продукты',
                    'page' => 'custom/pages/wizard/wizard-1'
                ],
                [
                    'title' => 'Склады',
                    'page' => 'custom/pages/wizard/wizard-2'
                ],
                [
                    'title' => 'Комплекты',
                    'page' => 'custom/pages/wizard/wizard-3'
                ],
            ]
        ],
        [
            'title' => 'Предпиятия',
            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Wizard 1',
                    'page' => 'custom/pages/wizard/wizard-1'
                ],
                [
                    'title' => 'Wizard 2',
                    'page' => 'custom/pages/wizard/wizard-2'
                ],
                [
                    'title' => 'Wizard 3',
                    'page' => 'custom/pages/wizard/wizard-3'
                ],
                [
                    'title' => 'Wizard 4',
                    'page' => 'custom/pages/wizard/wizard-4'
                ]

            ]
        ],
        [
            'title' => 'Движение',
            'icon' => 'media/svg/icons/Design/Bucket.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Wizard 1',
                    'page' => 'custom/pages/wizard/wizard-1'
                ],
                [
                    'title' => 'Wizard 2',
                    'page' => 'custom/pages/wizard/wizard-2'
                ],
                [
                    'title' => 'Wizard 3',
                    'page' => 'custom/pages/wizard/wizard-3'
                ],
                [
                    'title' => 'Wizard 4',
                    'page' => 'custom/pages/wizard/wizard-4'
                ]

            ]
        ],
        [
            'section' => 'Настройки',
        ],
        [
            'title' => 'Предприятии',
            'icon' => 'media/svg/icons/Shopping/Box2.svg',
            'bullet' => 'dot',
            'page' => 'custom/pages/wizard/wizard-4',
            'root' => true,
        ],
        [
            'title' => 'Пользователи',
            'icon' => 'media/svg/icons/Files/Pictures1.svg',
            'bullet' => 'dot',
            'root' => true,
            'page' => 'custom/pages/wizard/wizard-4',
        ],
        [
            'title' => 'Cards',
            'icon' => 'media/svg/icons/Layout/Layout-arrange.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'General Cards',
                    'page' => 'features/cards/general'
                ],
                [
                    'title' => 'Stacked Cards',
                    'page' => 'features/cards/stacked'
                ],
                [
                    'title' => 'Tabbed Cards',
                    'page' => 'features/cards/tabbed'
                ],
                [
                    'title' => 'Draggable Cards',
                    'page' => 'features/cards/draggable'
                ],
                [
                    'title' => 'Cards Tools',
                    'page' => 'features/cards/tools'
                ],
                [
                    'title' => 'Sticky Cards',
                    'page' => 'features/cards/sticky'
                ],
                [
                    'title' => 'Stretched Cards',
                    'page' => 'features/cards/stretched'
                ]
            ]
        ],
        [
            'title' => 'Widgets',
            'icon' => 'media/svg/icons/Devices/Diagnostics.svg',
            'root' => true,
            'bullet' => 'dot',
            'submenu' => [
                [
                    'title' => 'Lists',
                    'page' => 'features/widgets/lists'
                ],
                [
                    'title' => 'Stats',
                    'page' => 'features/widgets/stats'
                ],
                [
                    'title' => 'Charts',
                    'page' => 'features/widgets/charts'
                ],
                [
                    'title' => 'Mixed',
                    'page' => 'features/widgets/mixed',
                ],
                [
                    'title' => 'Tiles',
                    'page' => 'features/widgets/tiles',
                ],
                [
                    'title' => 'Engage',
                    'page' => 'features/widgets/engage'
                ],
                [
                    'title' => 'Base Tables',
                    'page' => 'features/widgets/base-tables',
                ],
                [
                    'title' => 'Advance Tables',
                    'page' => 'features/widgets/advance-tables',
                ],
                [
                    'title' => 'Forms',
                    'page' => 'features/widgets/forms',
                ]
            ]
        ],
        [
            'title' => 'Icons',
            'icon' => 'media/svg/icons/General/Attachment2.svg',
            'bullet' => 'dot',
            'submenu' => [
                [
                    'title' => 'SVG Icons',
                    'page' => 'features/icons/svg'
                ],
                [
                    'title' => 'Flaticon',
                    'page' => 'features/icons/flaticon'
                ],
                [
                    'title' => 'Fontawesome 5',
                    'page' => 'features/icons/fontawesome5'
                ],
                [
                    'title' => 'Lineawesome',
                    'page' => 'features/icons/lineawesome'
                ],
                [
                    'title' => 'Socicons',
                    'page' => 'features/icons/socicons'
                ]
            ]
        ],
        [
            'title' => 'Calendar',
            'icon' => 'media/svg/icons/Design/Select.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Basic Calendar',
                    'page' => 'features/calendar/basic'
                ],
                [
                    'title' => 'List Views',
                    'page' => 'features/calendar/list-view'
                ],
                [
                    'title' => 'Google Calendar',
                    'page' => 'features/calendar/google'
                ],
                [
                    'title' => 'External Events',
                    'page' => 'features/calendar/external-events'
                ],
                [
                    'title' => 'Background Events',
                    'page' => 'features/calendar/background-events'
                ]
            ]
        ],
        [
            'title' => 'Charts',
            'icon' => 'media/svg/icons/Media/Equalizer.svg',
            'root' => true,
            'bullet' => 'dot',
            'submenu' => [
                [
                    'title' => 'amCharts',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'amCharts Charts',
                            'page' => 'features/charts/amcharts/charts'
                        ],
                        [
                            'title' => 'amCharts Stock Charts',
                            'page' => 'features/charts/amcharts/stock-charts'
                        ],
                        [
                            'title' => 'amCharts Maps',
                            'page' => 'features/charts/amcharts/maps'
                        ]
                    ]
                ],
                [
                    'title' => 'Flot Charts',
                    'page' => 'features/charts/flotcharts'
                ],
                [
                    'title' => 'Google Charts',
                    'page' => 'features/charts/google-charts'
                ],
                [
                    'title' => 'Morris Charts',
                    'page' => 'features/charts/morris-charts'
                ]
            ]
        ],
        [
            'title' => 'Maps',
            'icon' => 'media/svg/icons/Home/Book-open.svg',
            'root' => true,
            'bullet' => 'dot',
            'submenu' => [
                [
                    'title' => 'Google Maps',
                    'page' => 'features/maps/google-maps'
                ],
                [
                    'title' => 'JQVMap',
                    'page' => 'features/maps/jqvmap'
                ],
            ]
        ],
        [
            'title' => 'Miscellaneous',
            'icon' => 'media/svg/icons/Home/Mirror.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Kanban Board',
                    'page' => 'features/miscellaneous/kanban-board'
                ],
                [
                    'title' => 'Sticky Panels',
                    'page' => 'features/miscellaneous/sticky-panels'
                ],
                [
                    'title' => 'Block UI',
                    'page' => 'features/miscellaneous/blockui'
                ],
                [
                    'title' => 'Perfect Scrollbar',
                    'page' => 'features/miscellaneous/perfect-scrollbar'
                ],
                [
                    'title' => 'Tree View',
                    'page' => 'features/miscellaneous/treeview'
                ],
                [
                    'title' => 'Bootstrap Notify',
                    'page' => 'features/miscellaneous/bootstrap-notify'
                ],
                [
                    'title' => 'Toastr',
                    'page' => 'features/miscellaneous/toastr'
                ],
                [
                    'title' => 'SweetAlert2',
                    'page' => 'features/miscellaneous/sweetalert2'
                ],
                [
                    'title' => 'Dual Listbox',
                    'page' => 'features/miscellaneous/dual-listbox'
                ],
                [
                    'title' => 'Session Timeout',
                    'page' => 'features/miscellaneous/session-timeout'
                ],
                [
                    'title' => 'Idle Timer',
                    'page' => 'features/miscellaneous/idle-timer'
                ]
            ]
        ]
    ]

];
