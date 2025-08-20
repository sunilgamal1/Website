<?php

$getMethod = 'get';
$postMethod = 'post';
$putMethod = 'put';
$deleteMethod = 'delete';

$homeBaseUrl = '/home';
$userBaseUrl = '/users';
$roleBaseUrl = '/roles';
$loginLogsBaseUrl = '/login-logs';
$activityLogsBaseUrl = '/activity-logs';
$emailTemplateBaseUrl = '/email-templates';
$configBaseUrl = '/configs';
$profileBaseUrl = '/profile';
$pagesBaseUrl = '/pages';
$mailtestBaseUrl = '/mail-test';
$apiBaseUrl = '/api-logs';
$errorLogsBaseUrl = '/error-logs';
$graphicArtBaseUrl = '/graphic-art';
$motionBaseUrl = '/motion';
$digitalDesignBaseUrl = '/digital-design';
$blogBaseUrl = '/blog';
$contactBaseUrl = '/contacts';  
return  [
    // routes entered in this array are accessible by any user no matter what role is given
    'permissionGrantedbyDefaultRoutes' => [
        [
            'url' => $homeBaseUrl,
            'method' => $getMethod,
        ],
        [
            'url' => '/logout',
            'method' => $getMethod,
        ],
        [
            'url' => '/miscellaneous/scrap',
            'method' => $getMethod,
        ],
        [
            'url' => $profileBaseUrl,
            'method' => $getMethod,
        ],
        [
            'url' => $profileBaseUrl . '/*',
            'method' => $putMethod,
        ],
        [
            'url' => '/change-password',
            'method' => $getMethod,
        ],
    ],

    // All the routes are accessible by super user by default
    // routes entered in this array are not accessible by super user
    'permissionDeniedToSuperUserRoutes' => [],

    'modules' => [
        [
            'name' => 'Dashboard',
            'icon' => "<i class='fa fa-home'></i>",
            'hasSubmodules' => false,
            'route' => $homeBaseUrl,
        ],
        [
            'name' => 'User Management',
            'icon' => "<i class='fa fa-user'></i>",
            'hasSubmodules' => true,
            'submodules' => [
                [
                    'name' => 'Users',
                    'icon' => "<i class='fa fa-users'></i>",
                    'hasSubmodules' => false,
                    'route' => $userBaseUrl,
                    'permissions' => [
                        [
                            'name' => 'View Users',
                            'route' => [
                                'url' => $userBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Users',
                            'route' => [
                                [
                                    'url' => $userBaseUrl . '/create',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $userBaseUrl,
                                    'method' => $postMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Edit Users',
                            'route' => [
                                [
                                    'url' => $userBaseUrl . '/*/edit',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $userBaseUrl . '/*',
                                    'method' => $putMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Delete Users',
                            'route' => [
                                'url' => $userBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                        [
                            'name' => 'Reset Password',
                            'route' => [
                                'url' => $userBaseUrl . '/reset-password/*',
                                'method' => $postMethod,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Roles',
                    'icon' => "<i class='fa fa-tags'></i>",
                    'hasSubmodules' => false,
                    'route' => '/roles',
                    'permissions' => [
                        [
                            'name' => 'View Roles',
                            'route' => [
                                'url' => $roleBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Roles',
                            'route' => [
                                [
                                    'url' => $roleBaseUrl . '/create',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $roleBaseUrl,
                                    'method' => $postMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Edit Roles',
                            'route' => [
                                [
                                    'url' => $roleBaseUrl . '/*/edit',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $roleBaseUrl . '/*',
                                    'method' => $putMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Delete Roles',
                            'route' => [
                                'url' => $roleBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            'name' => 'Log Management',
            'icon' => "<i class='fa fa-history'></i>",
            'hasSubmodules' => true,
            'submodules' => [
                [
                    'name' => 'Login Logs',
                    'icon' => "<i class='fas fa-sign-in-alt'></i>",
                    'hasSubmodules' => false,
                    'route' => $loginLogsBaseUrl,
                    'permissions' => [
                        [
                            'name' => 'View Login logs',
                            'route' => [
                                'url' => $loginLogsBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                    ],
                ],
                // [
                //     'name' => 'Audit logs',
                //     'icon' => "<i class='fas fa-chart-line'></i>",
                //     'hasSubmodules' => false,
                //     'route' => $activityLogsBaseUrl,
                //     'permissions' => [
                //         [
                //             'name' => 'View Audit logs',
                //             'route' => [
                //                 'url' => $activityLogsBaseUrl,
                //                 'method' => $getMethod,
                //             ],
                //         ],
                //     ],
                // ],
                // [
                //     'name' => 'Api logs',
                //     'icon' => "<i class='fas fa-chart-line'></i>",
                //     'hasSubmodules' => false,
                //     'route' => $apiBaseUrl,
                //     'permissions' => [
                //         [
                //             'name' => 'View Api logs',
                //             'route' => [
                //                 'url' => $apiBaseUrl,
                //                 'method' => $getMethod,
                //             ],
                //         ],
                //     ],
                // ],
                [
                    'name' => 'Error logs',
                    'icon' => "<i class='fas fa-chart-line'></i>",
                    'hasSubmodules' => false,
                    'route' => $errorLogsBaseUrl,
                    'permissions' => [
                        [
                            'name' => 'View Error logs',
                            'route' => [
                                'url' => $errorLogsBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        // [
        //     'name' => 'System configs',
        //     'icon' => "<i class='fa fa-cogs' aria-hidden='true'></i>",
        //     'hasSubmodules' => true,
        //     'submodules' => [
        //         [
        //             'name' => 'Email Templates',
        //             'icon' => "<i class='fa fa-envelope' aria-hidden='true'></i>",
        //             'route' => $emailTemplateBaseUrl,
        //             'hasSubmodules' => false,
        //             'permissions' => [
        //                 [
        //                     'name' => 'View Email Templates',
        //                     'route' => [
        //                         'url' => $emailTemplateBaseUrl,
        //                         'method' => $getMethod,
        //                     ],
        //                 ],
        //                 [
        //                     'name' => 'Edit Email Templates',
        //                     'route' => [
        //                         [
        //                             'url' => $emailTemplateBaseUrl . '/*/edit',
        //                             'method' => $getMethod,
        //                         ],
        //                         [
        //                             'url' => $emailTemplateBaseUrl . '/*',
        //                             'method' => $putMethod,
        //                         ],
        //                     ],
        //                 ],
        //                 [
        //                     'name' => 'Delete Email Templates',
        //                     'route' => [
        //                         'url' => $emailTemplateBaseUrl . '/*',
        //                         'method' => $deleteMethod,
        //                     ],
        //                 ],
        //             ],
        //         ],
                [
                    'name' => 'Configs',
                    'icon' => '<i class="fa fa-cog" aria-hidden="true"></i>',
                    'route' => $configBaseUrl,
                    'hasSubmodules' => false,
                    'permissions' => [
                        [
                            'name' => 'View Configs',
                            'route' => [
                                'url' => $configBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Config',
                            'route' => [
                                'url' => $configBaseUrl,
                                'method' => $postMethod,
                            ],
                        ],
                        [
                            'name' => 'Edit Config',
                            'route' => [
                                'url' => $configBaseUrl . '/*',
                                'method' => $putMethod,
                            ],
                        ],
                        [
                            'name' => 'Delete Config',
                            'route' => [
                                'url' => $configBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                    ],
                ],
            // ],
        // ],
        // [
        //     'name' => 'Page Management',
        //     'icon' => "<i class='fa fa-list'></i>",
        //     'hasSubmodules' => false,
        //     'route' => $pagesBaseUrl,
        //     'permissions' => [
        //         [
        //             'name' => 'View Page',
        //             'route' => [
        //                 'url' => $pagesBaseUrl,
        //                 'method' => $getMethod,
        //             ],
        //         ],
        //         [
        //             'name' => 'Create Page',
        //             'route' => [
        //                 [
        //                     'url' => $pagesBaseUrl . '/create',
        //                     'method' => $getMethod,
        //                 ],
        //                 [
        //                     'url' => $pagesBaseUrl,
        //                     'method' => $postMethod,
        //                 ],

        //             ],
        //         ],
        //         [
        //             'name' => 'Edit Page',
        //             'route' => [
        //                 [
        //                     'url' => $pagesBaseUrl . '/*/edit',
        //                     'method' => $getMethod,
        //                 ],
        //                 [
        //                     'url' => $pagesBaseUrl . '/*',
        //                     'method' => $putMethod,
        //                 ],
        //             ],
        //         ],
        //         [
        //             'name' => 'Delete Page',
        //             'route' => [
        //                 'url' => $pagesBaseUrl . '/*',
        //                 'method' => $deleteMethod,
        //             ],
        //         ],
        //     ],
        // ],
        // [
        //     'name' => 'Mail Test',
        //     'icon' => "<i class='fa fa-envelope-o'></i>",
        //     'hasSubmodules' => false,
        //     'route' => $mailtestBaseUrl.'/create',
        //     'permissions' => [
        //         [
        //             'name' => 'Create Mail',
        //             'route' => [
        //                 'url' => $mailtestBaseUrl.'/create',
        //                 'method' => $getMethod,
        //             ],
        //             [
        //                 'url' => $mailtestBaseUrl,
        //                 'method' => $postMethod,
        //             ],

        //         ],
        //     ],
        // ],
        [
            'name' => 'Graphic Art',
            'icon' => "<i class='fa fa-image'></i>",
            'hasSubmodules' => false,
            'route' => $graphicArtBaseUrl,
            'permissions' => [
                [
                    'name' => 'View Graphic Art',
                    'route' => [
                        'url' => $graphicArtBaseUrl,
                        'method' => $getMethod,
                    ],
                ],
                [
                    'name' => 'Create Graphic Art',
                    'route' => [
                        [
                            'url' => $graphicArtBaseUrl . '/create',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $graphicArtBaseUrl,
                            'method' => $postMethod,
                        ],

                    ],
                ],
                [
                    'name' => 'Edit Graphic Art',
                    'route' => [
                        [
                            'url' => $graphicArtBaseUrl . '/*/edit',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $graphicArtBaseUrl . '/*',
                            'method' => $putMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Delete Graphic Art',
                    'route' => [
                        'url' => $graphicArtBaseUrl . '/*',
                        'method' => $deleteMethod,
                    ],
                ],
            ],
        ],
        [
            'name' => 'Motion',
            'icon' => "<i class='fa fa-video-camera'></i>",
            'hasSubmodules' => false,
            'route' => $motionBaseUrl,
            'permissions' => [
                [
                    'name' => 'View Motion',
                    'route' => [
                        'url' => $motionBaseUrl,
                        'method' => $getMethod,
                    ],
                ],
                [
                    'name' => 'Create Motion',
                    'route' => [
                        [
                            'url' => $motionBaseUrl . '/create',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $motionBaseUrl,
                            'method' => $postMethod,
                        ],

                    ],
                ],
                [
                    'name' => 'Edit Motion',
                    'route' => [
                        [
                            'url' => $motionBaseUrl . '/*/edit',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $motionBaseUrl . '/*',
                            'method' => $putMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Delete Motion',
                    'route' => [
                        'url' => $motionBaseUrl . '/*',
                        'method' => $deleteMethod,
                    ],
                ],
            ],
        ],

        [
            'name' => 'Digital Design',
            'icon' => "<i class='fa fa-paint-brush'></i>",
            'hasSubmodules' => false,
            'route' => $digitalDesignBaseUrl,
            'permissions' => [
                [
                    'name' => 'View Digital Design',
                    'route' => [
                        'url' => $digitalDesignBaseUrl,
                        'method' => $getMethod,
                    ],
                ],
                [
                    'name' => 'Create Digital Design',
                    'route' => [
                        [
                            'url' => $digitalDesignBaseUrl . '/create',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $digitalDesignBaseUrl,
                            'method' => $postMethod,
                        ],

                    ],
                ],
                [
                    'name' => 'Edit Digital Design',
                    'route' => [
                        [
                            'url' => $digitalDesignBaseUrl . '/*/edit',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $digitalDesignBaseUrl . '/*',
                            'method' => $putMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Delete Digital Design',
                    'route' => [
                        'url' => $digitalDesignBaseUrl . '/*',
                        'method' => $deleteMethod,
                    ],
                ],
            ],
        ],
        [
            'name' => 'Blog Management',
            'icon' => "<i class='fa fa-book'></i>",
            'hasSubmodules' => false,
            'route' => $blogBaseUrl,
            'permissions' => [
                [
                    'name' => 'View Blog',
                    'route' => [
                        'url' => $blogBaseUrl,
                        'method' => $getMethod,
                    ],
                ],
                [
                    'name' => 'Create Blog',
                    'route' => [
                        [
                            'url' => $blogBaseUrl . '/create',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $blogBaseUrl,
                            'method' => $postMethod,
                        ],

                    ],
                ],
                [
                    'name' => 'Edit Blog',
                    'route' => [
                        [
                            'url' => $blogBaseUrl . '/*/edit',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $blogBaseUrl . '/*',
                            'method' => $putMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Delete Blog',
                    'route' => [
                        'url' => $blogBaseUrl . '/*',
                        'method' => $deleteMethod,
                    ],
                ],
            ],
        ],
        [
            'name' => 'Contact',
            'icon' => "<i class='fa fa-envelope-o'></i>",
            'hasSubmodules' => false,
            'route' => $contactBaseUrl,
            'permissions' => [
                [
                    'name' => 'View Contact',
                    'route' => [
                        'url' => $contactBaseUrl,   
                        'method' => $getMethod,
                    ],
                ],
            ],
        ],
    ],
];
