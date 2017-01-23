<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Services\LoadPostFixture;
use Jet\Services\LoadFixture;

class LoadAdminCustomField extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;
    use LoadPostFixture;

    protected $data = [
        /* Balsamine fields */
        'balsamine_opening_hours' => [
            'scope' => 'global',
            'title' => 'Horaires d\'ouverture',
            'name' => 'opening_hours',
            'type' => 'wysiwyg',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => ['value' => '<p><strong>Monday - Wednesday</strong><br/>
                09 AM - 6 PM
            </p>
            <p><strong>Thursday - Saturday</strong><br/>
                09 AM - 7 PM
            </p>
            <p><strong>Sunday</strong><br/>
                closed
            </p>']
        ],
        'balsamine_social' => [
            'scope' => 'global',
            'title' => 'Réseaux sociaux',
            'name' => 'social_networks',
            'type' => 'repeater',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows' => [0,1]
            ]
        ],
        'balsamine_social_name' => [
            'scope' => 'global',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'balsamine_social',
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => [
                'value' => [
                    'Facebook',
                    'Twitter',
                ]
            ]
        ],
        'balsamine_social_link' => [
            'scope' => 'global',
            'title' => 'Lien',
            'name' => 'link',
            'type' => 'string',
            'position' => 1,
            'parent' => 'balsamine_social',
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => [
                'value' => [
                    '#',
                    '#',
                ]
            ]
        ],
        'balsamine_booking' => [
            'scope' => 'global',
            'title' => 'Lien du rendez-vous en ligne',
            'name' => 'booking_link',
            'type' => 'string',
            'position' => 2,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => ['value' => '#']
        ],
        /* Theme specific */
        'balsamine_homepage_layout' => [
            'scope' => 'global',
            'title' => 'Modèle de thème pour la page d\'accueil',
            'name' => 'homepage_model',
            'type' => 'select',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Specific Global',
            'data' => [
                'contents' => [
                    ['key' => 'static','value' => 'Statique'],
                    ['key' => 'slider','value' => 'Slider'],
                    ['key' => 'video','value' => 'Vidéo'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => 'static']
        ],
        'balsamine_theme_color' => [
            'scope' => 'global',
            'title' => 'Couleur du thème',
            'name' => 'theme_color',
            'type' => 'select',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Specific Global',
            'data' => [
                'contents' => [
                    ['key' => 'green','value' => 'Vert'],
                    ['key' => 'orange','value' => 'Orange'],
                    ['key' => 'red','value' => 'Rouge'],
                    ['key' => 'blue','value' => 'Bleu'],
                    ['key' => 'pink','value' => 'Route'],
                    ['key' => 'yellow','value' => 'Jaune'],
                    ['key' => 'purple','value' => 'Violet'],
                    ['key' => 'brown','value' => 'Marron'],
                    ['key' => 'aqua','value' => 'Aqua'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => 'pink']
        ],
        'balsamine_header_style' => [
            'scope' => 'global',
            'title' => 'Position du menu',
            'name' => 'navigation_position',
            'type' => 'select',
            'position' => 2,
            'parent' => null,
            'cf' => 'Balsamine Specific Global',
            'data' => [
                'contents' => [
                    ['key' => 'center','value' => 'Milieu'],
                    ['key' => 'left','value' => 'Gauche'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => 'center']
        ],
        'balsamine_homepage_1' => [
            'scope' => 'global',
            'title' => 'Configuration pour le modèle "Statique"',
            'name' => 'homepage_1',
            'type' => 'repeater',
            'position' => 3,
            'parent' => null,
            'cf' => 'Balsamine Specific Global',
            'data' => [
                'min_row' => 1,
                'max_row' => 1,
            ],
            'content' => [
                'type' => 'repeater',
                'rows' => [0]
            ]
        ],
        'balsamine_homepage_1_background' => [
            'scope' => 'global',
            'title' => 'Image du background',
            'name' => 'background_image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'balsamine_homepage_1',
            'cf' => 'Balsamine Specific Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' =>
                ['/src/Themes/Balsamine/Resources/public/img/background/bg-7.jpg']
            ]
        ],
        'balsamine_homepage_1_activities' => [
            'scope' => 'global',
            'title' => 'Activités',
            'name' => 'activities',
            'type' => 'repeater',
            'position' => 1,
            'parent' => 'balsamine_homepage_1',
            'cf' => 'Balsamine Specific Global',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows' => [ 0 => [0,1,2,3,4,5]]
            ]
        ],
        'balsamine_homepage_1_activity_title' => [
            'scope' => 'global',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 0,
            'parent' => 'balsamine_homepage_1_activities',
            'cf' => 'Balsamine Specific Global',
            'data' => [],
            'content' => [
                'value' => [0 => ['Hair Care', 'Make Up', 'Facial', 'Massage', 'Nail Care', 'Waxing']]
            ]
        ],
        'balsamine_homepage_2' => [
            'scope' => 'global',
            'title' => 'Configuration pour le modèle "Slider"',
            'name' => 'homepage_2',
            'type' => 'repeater',
            'position' => 4,
            'parent' => null,
            'cf' => 'Balsamine Specific Global',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows' => [0,1]
            ]
        ],
        'balsamine_homepage_2_slider_image' => [
            'scope' => 'global',
            'title' => 'Images du slider',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'balsamine_homepage_2',
            'cf' => 'Balsamine Specific Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => [
                    '/src/Themes/Balsamine/Resources/public/img/images-slider/wide7.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/images-slider/wide8.jpg'
                ],
            ]
        ],
        'balsamine_homepage_2_slider_title' => [
            'scope' => 'global',
            'title' => 'Titre du slider',
            'name' => 'title',
            'type' => 'string',
            'position' => 1,
            'parent' => 'balsamine_homepage_2',
            'cf' => 'Balsamine Specific Global',
            'data' => [],
            'content' => ['value' => [
                    'BEAUTY SALON',
                    'FROM HEAD TO TOE'
                ],
            ]
        ],
        'balsamine_homepage_2_slider_link' => [
            'scope' => 'global',
            'title' => 'Lien du slider',
            'name' => 'link',
            'type' => 'string',
            'position' => 2,
            'parent' => 'balsamine_homepage_2',
            'cf' => 'Balsamine Specific Global',
            'data' => [],
            'content' => ['value' =>
                ['#',''],
            ]
        ],
        'balsamine_homepage_3' => [
            'scope' => 'global',
            'title' => 'Configuration pour le modèle "Vidéo"',
            'name' => 'homepage_3',
            'type' => 'repeater',
            'position' => 5,
            'parent' => null,
            'cf' => 'Balsamine Specific Global',
            'data' => [
                'min_row' => 1,
                'max_row' => 1,
            ],
            'content' => [
                'type' => 'repeater',
                'rows' => [0]
            ]
        ],
        'balsamine_homepage_3_background' => [
            'scope' => 'global',
            'title' => 'Lien du vidéo de background',
            'name' => 'background_video',
            'type' => 'string',
            'position' => 0,
            'parent' => 'balsamine_homepage_3',
            'cf' => 'Balsamine Specific Global',
            'data' => [],
            'content' => ['value' =>
                ['/src/Themes/Balsamine/Resources/public/video/salon_1.mp4']
            ]
        ],
        'balsamine_homepage_3_background_title' => [
            'scope' => 'global',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 1,
            'parent' => 'balsamine_homepage_3',
            'cf' => 'Balsamine Specific Global',
            'data' => [],
            'content' => ['value' =>
                ['QUALITY & SERVICES']
            ]
        ],
        'balsamine_homepage_3_background_link' => [
            'scope' => 'global',
            'title' => 'Lien',
            'name' => 'link',
            'type' => 'string',
            'position' => 2,
            'parent' => 'balsamine_homepage_3',
            'cf' => 'Balsamine Specific Global',
            'data' => [],
            'content' => ['value' =>
                ['#'],
            ]
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->addCustomFieldCallback('post', 'getCustomFieldPost');
        $this->loadAdminCustomField($manager);
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
            'Jet\Themes\Balsamine\Fixtures\LoadMedia',
            'Jet\Themes\Balsamine\Fixtures\LoadPage',
            'Jet\Themes\Balsamine\Fixtures\LoadWebsite',
            'Jet\Themes\Balsamine\Fixtures\LoadCustomField'
        ];
    }
}