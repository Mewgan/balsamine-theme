<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadCustomField extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Balsamine Default Global' => [
            'title' => 'Données globales',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Balsamine Website'
        ],
        'Balsamine Specific Global' => [
            'title' => 'Apparence',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Balsamine Website'
        ],
        'Balsamine Global Seo' => [
            'title' => 'SEO Global',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Balsamine Website'
        ],
        'Balsamine Social Network' => [
            'title' => 'Réseaux sociaux',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Balsamine Website'
        ],
        'Balsamine Custom Css & Js' => [
            'title' => 'Css & Js',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'access_level' => 2,
            'website' => 'Balsamine Website',
        ],
        'Balsamine Page' => [
            'title' => 'Header',
            'rule' => 'publication_type_rule',
            'operation' => '=',
            'value' => 'page',
            'website' => 'Balsamine Website'
        ],
        'Balsamine Home Page' => [
            'title' => 'Page d\'accueil',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-balsamine-home',
            'website' => 'Balsamine Website'
        ],
        'Balsamine Gallery Page' => [
            'title' => 'Galerie',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-balsamine-gallery',
            'website' => 'Balsamine Website'
        ],
        /* Slider Fields */
        'Balsamine Slider Home Page' => [
            'title' => 'Page d\'accueil',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-balsamine-slider-home',
            'website' => 'Balsamine Slider Website'
        ],
        /* Video Fields */
        'Balsamine Video Home Page' => [
            'title' => 'Page d\'accueil',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-balsamine-video-home',
            'website' => 'Balsamine Video Website'
        ],
        'Balsamine Seo' => [
            'title' => 'SEO Référencement naturel - Pour améliorer vos positions dans Google veuillez remplir les champs suivants',
            'rule' => 'everywhere_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Balsamine Website',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadCustomField($manager);
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
            'Jet\Themes\Balsamine\Fixtures\LoadWebsite',
            'Jet\Themes\Balsamine\Fixtures\LoadPage',
            'Jet\DataFixtures\LoadCustomFieldRule',
        ];
    }
}