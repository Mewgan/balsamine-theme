<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Modules\Post\Services\LoadPostFixture;
use Jet\Services\LoadFixture;

class LoadContent extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;
    use LoadPostFixture;
    use LoadNavigationFixture;

    protected $data = [
        /* Balsamine website navigation module content */
        'balsamine_navigation_content' => [
            'cat_mod' => 'navigation',
            'name' => 'Menu',
            'block' => 'navigation',
            'website' => 'balsamine-society',
            'module' => 'module_simple_menu',
            'template' => 'balsamine_navigation_partial',
            'section' => null,
            'page' => null,
            'data' => [
                'class' => '',
                'navigation' => 'balsamine-menu'
            ]
        ],
        /* Balsamine website post module content */
        'balsamine_list_home_service_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste de services',
            'block' => 'list_home_service',
            'website' => 'balsamine-society',
            'module' => 'module_post_list',
            'template' => 'balsamine_home_list_service_partial',
            'section' => null,
            'page' => 'society-balsamine-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => 6,
                'total' => 6,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['service'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'balsamine_list_home_news_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'actualités',
            'block' => 'list_home_news',
            'website' => 'balsamine-society',
            'module' => 'module_post_list',
            'template' => 'balsamine_home_list_news_partial',
            'section' => null,
            'page' => 'society-balsamine-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => 6,
                'total' => 6,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['actualite'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        /* Slider home page */
        'balsamine_slider_list_home_service_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste de services',
            'block' => 'list_home_service',
            'website' => 'balsamine-slider-society',
            'module' => 'module_post_list',
            'template' => 'balsamine_home_list_service_partial',
            'section' => null,
            'page' => 'society-balsamine-slider-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => 6,
                'total' => 6,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['service'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'balsamine_slider_list_home_news_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'actualités',
            'block' => 'list_home_news',
            'website' => 'balsamine-slider-society',
            'module' => 'module_post_list',
            'template' => 'balsamine_home_list_news_partial',
            'section' => null,
            'page' => 'society-balsamine-slider-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => 6,
                'total' => 6,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['actualite'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        /* Video home page */
        'balsamine_video_list_home_service_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste de services',
            'block' => 'list_home_service',
            'website' => 'balsamine-video-society',
            'module' => 'module_post_list',
            'template' => 'balsamine_home_list_service_partial',
            'section' => null,
            'page' => 'society-balsamine-video-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => 6,
                'total' => 6,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['service'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'balsamine_video_list_home_news_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'actualités',
            'block' => 'list_home_news',
            'website' => 'balsamine-video-society',
            'module' => 'module_post_list',
            'template' => 'balsamine_home_list_news_partial',
            'section' => null,
            'page' => 'society-balsamine-video-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => 6,
                'total' => 6,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['actualite'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'balsamine_list_actualite_content' => [
            'cat_mod' => 'post',
            'name' => 'Actualités',
            'block' => 'list_post',
            'website' => 'balsamine-society',
            'module' => 'module_post_list',
            'template' => 'balsamine_post_list_partial',
            'section' => null,
            'page' => 'society-balsamine-actualite',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => '',
                'total' => 100,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['actualite'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'balsamine_list_post_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'articles',
            'block' => 'list_post',
            'website' => 'balsamine-society',
            'module' => 'module_post_list',
            'template' => 'balsamine_post_list_partial',
            'section' => null,
            'page' => 'society-balsamine-list-post',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => '',
                'total' => 100,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'dynamic',
                        'column' => 'slug',
                        'route' => 'slug',
                        'value' => [],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'balsamine_single_post_content' => [
            'cat_mod' => 'post',
            'name' => 'Article',
            'block' => 'single_post',
            'website' => 'balsamine-society',
            'module' => 'module_single_post',
            'template' => 'balsamine_single_post_partial',
            'section' => null,
            'page' => 'society-balsamine-single-post',
            'data' => [
                'class' => '',
                'db' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'column' => 'slug',
                        'route' => 'slug',
                        'value' => [],
                    ]
                ]
            ]
        ],
        /* Team */
        'balsamine_team_content' => [
            'cat_mod' => 'team',
            'name' => 'Équipe',
            'block' => 'team',
            'website' => 'balsamine-society',
            'module' => 'module_team',
            'template' => 'balsamine_team_partial',
            'section' => null,
            'page' => 'society-balsamine-team',
            'data' => [
                'class' => '',
                'roles' => []
            ]
        ],
        /* Price */
        'balsamine_price_content' => [
            'cat_mod' => 'price',
            'name' => 'Tarif',
            'block' => 'price',
            'website' => 'balsamine-society',
            'module' => 'module_price',
            'template' => 'balsamine_price_partial',
            'section' => null,
            'page' => 'society-balsamine-price',
            'data' => [
                'class' => '',
                'service_in_category' => true,
                'service' => false,
                'category' => true,
                'categories' => []
            ]
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->addContentCallback('post', 'getPostContent');
        $this->addContentCallback('navigation', 'getNavigationContent');
        $this->loadContent($manager);
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    function getDependencies()
    {
        return [
            'Jet\DataFixtures\LoadSection',
            'Jet\Themes\Balsamine\Fixtures\LoadWebsite',
            'Jet\Themes\Balsamine\Fixtures\LoadPage',
            'Jet\Themes\Balsamine\Fixtures\LoadPost',
            'Jet\Themes\Balsamine\Fixtures\LoadNavigation',
            'Jet\Themes\Balsamine\Fixtures\LoadTemplate',
            'Jet\Modules\Post\Fixtures\LoadPostModule',
            'Jet\Modules\Navigation\Fixtures\LoadNavigationModule',
            'Jet\Modules\Team\Fixtures\LoadTeamModule',
        ];
    }
}