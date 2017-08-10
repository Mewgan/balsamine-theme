<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadAddress extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        'balsamine-address' => [
            'alias' => 'Adresse de la société',
            'address' => '19 Rue Portefoin',
            'city' => 'Paris 3',
            'postal_code' => '75003',
            'country' => 'FRANCE',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        'balsamine-slider-address' => [
            'alias' => 'Adresse de la société',
            'address' => '20 Rue Portefoin',
            'city' => 'Paris 3',
            'postal_code' => '75003',
            'country' => 'FRANCE',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        'balsamine-video-address' => [
            'alias' => 'Adresse de la société',
            'address' => '30 Rue Portefoin',
            'city' => 'Paris 3',
            'postal_code' => '75003',
            'country' => 'FRANCE',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        'zoro-address' => [
            'alias' => 'Adresse de la société',
            'address' => '45 Rue Alexandre Fourny',
            'city' => 'Champigny Sur Marne',
            'postal_code' => '94500',
            'country' => 'FRANCE',
            'account' => 'zoro@onepiece.com'
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
            'Jet\DataFixtures\LoadAccount',
        ];
    }
}