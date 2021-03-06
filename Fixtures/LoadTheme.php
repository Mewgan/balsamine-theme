<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadTheme extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        [
            'name' => 'Balsamine',
            'professions' => ['barber'],
            'thumbnail' => '/public/media/default/thumbnail/theme-balsamine-thumbnail.png',
            'state' => 1,
        ],
        [
            'name' => 'Balsamine Slider',
            'professions' => ['spa'],
            'thumbnail' => '/public/media/default/thumbnail/theme-balsamine-slider-thumbnail.png',
            'state' => 1
        ],
        [
            'name' => 'Balsamine Video',
            'professions' => ['barber'],
            'thumbnail' => '/public/media/default/thumbnail/theme-balsamine-video-thumbnail.png',
            'state' => 1
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadTheme($manager);
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
            'Jet\DataFixtures\LoadProfession',
            'Jet\Themes\Balsamine\Fixtures\LoadMedia'
        ];
    }
}