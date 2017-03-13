<?php
namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Team\Services\LoadTeamFixture;

class LoadTeam extends AbstractFixture implements DependentFixtureInterface
{

    use LoadTeamFixture;
    
    protected $data = [
        'balsamine-briana-team' => [
            'full_name' => 'Briana',
            'photo' =>  '/src/Themes/Balsamine/Resources/public/img/team/team_pic_1.jpg',
            'gender' => 0,
            'position' => 0,
            'description' => 'Notre styliste coloriste se fera un plaisir de répondre à toutes vos envies !',
            'roles' => [],
            'website' => 'balsamine-society'
        ],
        'balsamine-jessica-team' => [
            'full_name' => 'Jessica',
            'photo' =>  '/src/Themes/Balsamine/Resources/public/img/team/team_pic_2.jpg',
            'gender' => 0,
            'position' => 1,
            'description' => 'Notre styliste coloriste se fera un plaisir de répondre à toutes vos envies !',
            'roles' => [],
            'website' => 'balsamine-society'
        ],
        'balsamine-rachel-team' => [
            'full_name' => 'Rachel',
            'photo' =>  '/src/Themes/Balsamine/Resources/public/img/team/team_pic_3.jpg',
            'gender' => 0,
            'position' => 2,
            'description' => 'Notre styliste coloriste se fera un plaisir de répondre à toutes vos envies !',
            'roles' => [],
            'website' => 'balsamine-society'
        ],
        'balsamine-emma-team' => [
            'full_name' => 'Emma',
            'photo' =>  '/src/Themes/Balsamine/Resources/public/img/team/team_pic_4.jpg',
            'gender' => 0,
            'position' => 3,
            'description' => 'Notre styliste coloriste se fera un plaisir de répondre à toutes vos envies !',
            'roles' => [],
            'website' => 'balsamine-society'
        ],
    ];

    public function load(ObjectManager $manager)
    {
       $this->loadTeam($manager);
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
            'Jet\Themes\Balsamine\Fixtures\LoadMedia',
        ];
    }
}