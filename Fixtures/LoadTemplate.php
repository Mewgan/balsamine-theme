<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadTemplate extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        /* Aster templates */
        'balsamine_layout' => [
            'name' => 'ThemeBalsamineFileLayout',
            'title' => 'Theme Balsamine Template',
            'content' => 'Balsamine/Views/layout',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_page_layout' => [
            'name' => 'ThemeBalsaminePageFileLayout',
            'title' => 'Theme Balsamine Page Template',
            'content' => 'Balsamine/Views/page',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_home_page_layout' => [
            'name' => 'ThemeBalsamineHomePageFileLayout',
            'title' => 'Theme Balsamine Home Page Template',
            'content' => 'Aster/Views/index',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'aster_post_list_partial' => [
            'name' => 'ThemeAsterPostListFilePartial',
            'title' => 'Theme Aster Post List Template',
            'content' => 'Aster/Views/post_list',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'aster_single_post_partial' => [
            'name' => 'ThemeAsterPostFilePartial',
            'title' => 'Theme Aster Post Template',
            'content' => 'Aster/Views/post',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'aster_navigation_partial' => [
            'name' => 'ThemeAsterNavigationFilePartial',
            'title' => 'Theme Aster Navigation Template',
            'content' => 'Aster/Views/navigation',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadTemplate($manager);
    }
}