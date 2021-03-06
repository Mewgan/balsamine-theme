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
        'balsamine_seo_title' => [
            'scope' => 'specified',
            'title' => 'Meta titre',
            'name' => 'meta_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Seo',
            'data' => [],
            'content' => []
        ],
        'balsamine_seo_description' => [
            'scope' => 'specified',
            'title' => 'Meta description',
            'name' => 'meta_description',
            'type' => 'textarea',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Seo',
            'data' => [],
            'content' => []
        ],
        'balsamine_seo_keywords' => [
            'scope' => 'specified',
            'title' => 'Meta mots clef',
            'name' => 'meta_keywords',
            'type' => 'string',
            'position' => 2,
            'parent' => null,
            'cf' => 'Balsamine Seo',
            'data' => [],
            'content' => []
        ],
        /* Global CSS and JS */
        'balsamine_css' => [
            'scope' => 'global',
            'title' => 'Css',
            'name' => 'css_block',
            'type' => 'editor',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Custom Css & Js',
            'data' => [
                'file_type' => 'css'
            ],
            'content' => ['value' => '']
        ],
        'balsamine_js' => [
            'scope' => 'global',
            'title' => 'Javascript',
            'name' => 'js_block',
            'type' => 'editor',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Custom Css & Js',
            'data' => [
                'file_type' => 'javascript'
            ],
            'content' => ['value' => '']
        ],
        /* Global social network */
        'balsamine_social' => [
            'scope' => 'global',
            'title' => 'Réseaux sociaux',
            'name' => 'social_networks',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Social Network',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows' => [0, 1]
            ]
        ],
        'balsamine_social_name' => [
            'scope' => 'global',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'balsamine_social',
            'cf' => 'Balsamine Social Network',
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
            'cf' => 'Balsamine Social Network',
            'data' => [],
            'content' => [
                'value' => [
                    '',
                    '',
                ]
            ]
        ],
        /* Global seo */
        'balsamine_global_seo_analytics' => [
            'scope' => 'global',
            'title' => 'Google | Analytics',
            'name' => 'meta_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'description' => 'Renseigner votre script analytics',
            'cf' => 'Balsamine Global Seo',
            'data' => [],
            'content' => []
        ],
        /* Global */
        'balsamine_favicon' => [
            'scope' => 'global',
            'title' => 'Favicon',
            'name' => 'favicon',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/public/media/default/favicon.ico']
        ],
        'balsamine_logo' => [
            'scope' => 'global',
            'title' => 'Logo',
            'name' => 'logo',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Balsamine/Resources/public/img/logo.png']
        ],
        'balsamine_sub_logo' => [
            'scope' => 'global',
            'title' => 'Logo réduit',
            'name' => 'logo_light',
            'type' => 'media',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Balsamine/Resources/public/img/logo_light.png']
        ],
        'balsamine_opening_hours' => [
            'scope' => 'global',
            'title' => 'Horaires d\'ouverture',
            'name' => 'opening_hours',
            'type' => 'wysiwyg',
            'position' => 2,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => ['value' => 'Lundi - Vendredi: 09:00 - 22:00']
        ],
        'balsamine_booking' => [
            'scope' => 'global',
            'title' => 'Lien du rendez-vous en ligne',
            'name' => 'booking_link',
            'type' => 'string',
            'position' => 3,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => ['value' => '']
        ],
        /* Theme specific */
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
                    ['key' => 'green', 'value' => 'Vert'],
                    ['key' => 'orange', 'value' => 'Orange'],
                    ['key' => 'red', 'value' => 'Rouge'],
                    ['key' => 'blue', 'value' => 'Bleu'],
                    ['key' => 'pink', 'value' => 'Rose'],
                    ['key' => 'yellow', 'value' => 'Jaune'],
                    ['key' => 'purple', 'value' => 'Violet'],
                    ['key' => 'brown', 'value' => 'Marron'],
                    ['key' => 'aqua', 'value' => 'Aqua'],
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
                    ['key' => 'center', 'value' => 'Milieu'],
                    ['key' => 'left', 'value' => 'Gauche'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => 'center']
        ],
        /* Page */
        'balsamine_page' => [
            'scope' => 'specified',
            'title' => 'Image du bandeau du haut',
            'name' => 'subheader',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-balsamine-home' => '/src/Themes/Balsamine/Resources/public/img/background/bg-7.jpg',
                'page@society-balsamine-list-post' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-2.jpg',
                'page@society-balsamine-price' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-2.jpg',
                'page@society-balsamine-actualite' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-2.jpg',
                'page@society-balsamine-single-post' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-3.jpg',
                'page@society-balsamine-gallery' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-5.jpg',
                'page@society-balsamine-contact' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-6.jpg',
            ]
        ],
        /* Slider Homepage */
        'balsamine_slider_homepage' => [
            'scope' => 'specified',
            'title' => 'Configuration pour le modèle "Slider"',
            'name' => 'homepage_2',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Slider Home Page',
            'data' => [
                'disposition' => 'col'
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-balsamine-slider-home' => [0, 1]
            ]
        ],
        'balsamine_slider_homepage_slider_image' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'balsamine_slider_homepage',
            'cf' => 'Balsamine Slider Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-slider-home' => [
                '/src/Themes/Balsamine/Resources/public/img/images-slider/wide7.jpg',
                '/src/Themes/Balsamine/Resources/public/img/images-slider/wide8.jpg'
            ],
            ]
        ],
        'balsamine_slider_homepage_slider_title' => [
            'scope' => 'specified',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 1,
            'parent' => 'balsamine_slider_homepage',
            'cf' => 'Balsamine Slider Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-slider-home' => [
                'SALON DE BEAUTÉ',
                'DE LA TÊTE AUX PIEDS'
            ],
            ]
        ],
        'balsamine_slider_homepage_slider_link' => [
            'scope' => 'specified',
            'title' => 'Lien',
            'name' => 'link',
            'type' => 'string',
            'position' => 2,
            'parent' => 'balsamine_slider_homepage',
            'cf' => 'Balsamine Slider Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-slider-home' =>
                ['', ''],
            ]
        ],
        'balsamine_slider_homepage_left_bloc' => [
            'scope' => 'specified',
            'title' => 'Bloc de gauche',
            'name' => 'left_top_bloc',
            'type' => 'wysiwyg',
            'position' => 3,
            'parent' => null,
            'cf' => 'Balsamine Slider Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-slider-home' => '<h4>Promo Spécial</h4>
                                    <p>Notre engagement envers la qualité et les services assurent nos clients heureux. Avec des années d\'expériences et formation continue, notre personnel dévoué est prêt à servir vos
                                        besoins de beauté. Nous sommes heureux de vous aider à choisir le meilleur look.</p>'
            ]
        ],
        'balsamine_slider_homepage_right_bloc' => [
            'scope' => 'specified',
            'title' => 'Bloc de droite',
            'name' => 'right_top_bloc',
            'type' => 'wysiwyg',
            'position' => 4,
            'parent' => null,
            'cf' => 'Balsamine Slider Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-slider-home' => '<h4>Obtenez une réduction de 50%</h4>
                                    <p>Notre engagement envers la qualité et les services assurent nos clients heureux. Avec des années d\'expériences et formation continue, notre personnel dévoué est prêt à servir vos
                                        besoins de beauté. Nous sommes heureux de vous aider à choisir le meilleur look.</p>'
            ]
        ],
        'balsamine_slider_homepage_about_us' => [
            'scope' => 'specified',
            'title' => 'Article',
            'name' => 'homepage_about_us',
            'type' => 'post',
            'position' => 5,
            'parent' => null,
            'cf' => 'Balsamine Slider Home Page',
            'data' => [
                'categories' => []
            ],
            'content' => ['page@society-balsamine-slider-home' => 'balsamine-about-us']
        ],
        'balsamine_slider_homepage_actu_background' => [
            'scope' => 'specified',
            'title' => 'Image de fond pour les Actualités',
            'name' => 'news_background',
            'type' => 'media',
            'position' => 6,
            'parent' => null,
            'cf' => 'Balsamine Slider Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-slider-home' => '/src/Themes/Balsamine/Resources/public/img/background/bg-10.jpg']
        ],
        'balsamine_slider_homepage_actu_text' => [
            'scope' => 'specified',
            'title' => 'Texte pour les Actualités',
            'name' => 'news_title',
            'type' => 'string',
            'position' => 7,
            'parent' => null,
            'cf' => 'Balsamine Slider Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-slider-home' => 'Découvrez nos actualités']
        ],
        /* Video Homepage */
        'balsamine_video_homepage_background' => [
            'scope' => 'specified',
            'title' => 'Lien du vidéo de fond pour le modèle "Vidéo"',
            'name' => 'homepage_3_background_video',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Video Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-video-home' => '/src/Themes/Balsamine/Resources/public/video/salon_1.mp4']
        ],
        'balsamine_video_homepage_background_title' => [
            'scope' => 'specified',
            'title' => 'Titre pour le modèle "Vidéo"',
            'name' => 'homepage_3_title',
            'type' => 'string',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Video Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-video-home' => 'QUALITÉ & SERVICES']
        ],
        'balsamine_video_homepage_background_link' => [
            'scope' => 'specified',
            'title' => 'Lien pour le modèle "Vidéo"',
            'name' => 'homepage_3_link',
            'type' => 'string',
            'position' => 2,
            'parent' => null,
            'cf' => 'Balsamine Video Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-video-home' => '']
        ],
        'balsamine_video_homepage_left_bloc' => [
            'scope' => 'specified',
            'title' => 'Bloc de gauche',
            'name' => 'left_top_bloc',
            'type' => 'wysiwyg',
            'position' => 3,
            'parent' => null,
            'cf' => 'Balsamine Video Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-video-home' => '<h4>Promo Spécial</h4>
                                    <p>Notre engagement envers la qualité et les services assurent nos clients heureux. Avec des années d\'expériences et formation continue, notre personnel dévoué est prêt à servir vos
                                        besoins de beauté. Nous sommes heureux de vous aider à choisir le meilleur look.</p>'
            ]
        ],
        'balsamine_video_homepage_right_bloc' => [
            'scope' => 'specified',
            'title' => 'Bloc de droite',
            'name' => 'right_top_bloc',
            'type' => 'wysiwyg',
            'position' => 4,
            'parent' => null,
            'cf' => 'Balsamine Video Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-video-home' => '<h4>Obtenez une réduction de 50%</h4>
                                    <p>Notre engagement envers la qualité et les services assurent nos clients heureux. Avec des années d\'expériences et formation continue, notre personnel dévoué est prêt à servir vos
                                        besoins de beauté. Nous sommes heureux de vous aider à choisir le meilleur look.</p>'
            ]
        ],
        'balsamine_video_homepage_about_us' => [
            'scope' => 'specified',
            'title' => 'Article',
            'name' => 'homepage_about_us',
            'type' => 'post',
            'position' => 5,
            'parent' => null,
            'cf' => 'Balsamine Video Home Page',
            'data' => [
                'categories' => []
            ],
            'content' => ['page@society-balsamine-video-home' => 'balsamine-about-us']
        ],
        'balsamine_video_homepage_actu_background' => [
            'scope' => 'specified',
            'title' => 'Image de fond pour les Actualités',
            'name' => 'news_background',
            'type' => 'media',
            'position' => 6,
            'parent' => null,
            'cf' => 'Balsamine Video Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-video-home' => '/src/Themes/Balsamine/Resources/public/img/background/bg-10.jpg']
        ],
        'balsamine_video_homepage_actu_text' => [
            'scope' => 'specified',
            'title' => 'Texte pour les Actualités',
            'name' => 'news_title',
            'type' => 'string',
            'position' => 7,
            'parent' => null,
            'cf' => 'Balsamine Video Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-video-home' => 'Découvrez nos actualités']
        ],
        /* Homepage */
        'balsamine_homepage_1_activities' => [
            'scope' => 'specified',
            'title' => 'Activités',
            'name' => 'homepage_1_activities',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-balsamine-home' => [0, 1, 2, 3, 4, 5]
            ]
        ],
        'balsamine_homepage_1_activity_title' => [
            'scope' => 'specified',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 0,
            'parent' => 'balsamine_homepage_1_activities',
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => [
                'page@society-balsamine-home' => ['Soin des cheveux', 'Maquillage', 'Soin du visage', 'Massage', 'Manucure', 'Épilation']
            ]
        ],
        'balsamine_homepage_left_bloc' => [
            'scope' => 'specified',
            'title' => 'Bloc de gauche',
            'name' => 'left_top_bloc',
            'type' => 'wysiwyg',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' => '<h4>Promo Spécial</h4>
                                    <p>Notre engagement envers la qualité et les services assurent nos clients heureux. Avec des années d\'expériences et formation continue, notre personnel dévoué est prêt à servir vos
                                        besoins de beauté. Nous sommes heureux de vous aider à choisir le meilleur look.</p>'
            ]
        ],
        'balsamine_homepage_right_bloc' => [
            'scope' => 'specified',
            'title' => 'Bloc de droite',
            'name' => 'right_top_bloc',
            'type' => 'wysiwyg',
            'position' => 2,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' => '<h4>Obtenez une réduction de 50%</h4>
                                    <p>Notre engagement envers la qualité et les services assurent nos clients heureux. Avec des années d\'expériences et formation continue, notre personnel dévoué est prêt à servir vos
                                        besoins de beauté. Nous sommes heureux de vous aider à choisir le meilleur look.</p>'
            ]
        ],
        'balsamine_homepage_about_us' => [
            'scope' => 'specified',
            'title' => 'Article',
            'name' => 'homepage_about_us',
            'type' => 'post',
            'position' => 3,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [
                'categories' => []
            ],
            'content' => ['page@society-balsamine-home' => 'balsamine-about-us']
        ],
        'balsamine_homepage_actu_background' => [
            'scope' => 'specified',
            'title' => 'Image de fond pour les Actualités',
            'name' => 'news_background',
            'type' => 'media',
            'position' => 4,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-home' => '/src/Themes/Balsamine/Resources/public/img/background/bg-10.jpg']
        ],
        'balsamine_homepage_actu_text' => [
            'scope' => 'specified',
            'title' => 'Texte pour les Actualités',
            'name' => 'news_title',
            'type' => 'string',
            'position' => 5,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' => 'Découvrez nos actualités']
        ],
        /* Gallery Page */
        'balsamine_gallery_disposition' => [
            'scope' => 'specified',
            'title' => 'Disposition de la galerie',
            'name' => 'gallery_column',
            'type' => 'select',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Gallery Page',
            'data' => [
                'multiple' => false,
                'contents' => [
                    ['key' => '4', 'value' => '4 colonnes'],
                    ['key' => '3', 'value' => '3 colonnes'],
                    ['key' => '2', 'value' => '2 colonnes']
                ]
            ],
            'content' => ['page@society-balsamine-gallery' => '4',]
        ],
        'balsamine_gallery' => [
            'scope' => 'specified',
            'title' => 'Galerie',
            'name' => 'galleries',
            'type' => 'repeater',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Gallery Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-balsamine-gallery' => [0, 1, 2, 3, 4, 5, 6, 7]
            ]
        ],
        'balsamine_gallery_image' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'balsamine_gallery',
            'cf' => 'Balsamine Gallery Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-gallery' => [
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_1.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_2.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_3.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_4.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_5.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_6.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_7.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_8.jpg',
            ]
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