<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadAddress extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        'balsamine-address' => [
            'address' => '19 Rue Portefoin',
            'city' => 'Paris 3',
            'postal_code' => '75003',
            'society' => 'Balsamine Society',
            'country' => 'FRANCE',
        ],
        'balsamine-slider-address' => [
            'address' => '20 Rue Portefoin',
            'city' => 'Paris 3',
            'postal_code' => '75003',
            'society' => 'Balsamine Slider Society',
            'country' => 'FRANCE',
        ],
        'balsamine-video-address' => [
            'address' => '30 Rue Portefoin',
            'city' => 'Paris 3',
            'postal_code' => '75003',
            'society' => 'Balsamine Video Society',
            'country' => 'FRANCE',
        ],
        'zoro-address' => [
            'address' => '45 Rue Alexandre Fourny',
            'city' => 'Champigny Sur Marne',
            'postal_code' => '94500',
            'society' => 'Zoro Society',
            'country' => 'FRANCE',
        ]
    ];

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->loadAddress($manager);
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
            'Jet\Themes\Balsamine\Fixtures\LoadSociety'
        ];
    }
}