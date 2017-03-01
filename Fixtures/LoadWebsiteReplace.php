<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadWebsiteReplace extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Balsamine Slider Website' => [
            'data' => [
                'parent_exclude' => [
                    'pages' => ['society-balsamine-home']
                ],
                'parent_replace' => [],
            ]
        ],
        'Balsamine Video Website' => [
            'data' => [
                'parent_exclude' => [
                    'pages' => ['society-balsamine-home']
                ],
                'parent_replace' => [],
            ]
        ],
        'Zoro Website' => [
            'data' => [
                'parent_exclude' => [
                    'pages' => ['society-balsamine-home']
                ],
                'parent_replace' => [],
            ]
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->replaceWebsiteData($manager);
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
            'Jet\Themes\Balsamine\Fixtures\LoadPage',
            'Jet\Themes\Balsamine\Fixtures\LoadAdminCustomField',
        ];
    }
}