<?php
namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadSociety extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        [
            'name' => 'Balsamine Society',
            'email' => 'contact@balsamine.com',
            'phone' => '0123456789',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        [
            'name' => 'Balsamine Slider Society',
            'email' => 'contact@balsamine-slider.com',
            'phone' => '0123456789',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        [
            'name' => 'Balsamine Video Society',
            'email' => 'contact@balsamine-video.com',
            'phone' => '0123456789',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        [
            'name' => 'Zoro Society',
            'email' => 'contact@zoro.com',
            'phone' => '0123456789',
            'account' => 'zoro@onepiece.com'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadSociety($manager);
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
            'Jet\DataFixtures\LoadAccount'
        ];
    }
}