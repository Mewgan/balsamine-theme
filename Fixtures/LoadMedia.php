<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadMedia extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        [
            'title' => 'Theme balsamine thumbnail',
            'path' => '/public/media/thumbnail/theme-balsamine-thumbnail.png',
            'type' => 'image/png',
            'size' => 137577,
            'access_level' => 2,
            'alt' => 'Theme aster thumbnail'
        ],
        [
            'title' => 'Logo theme balsamine',
            'path' => '/src/Themes/Balsamine/Resources/public/img/logo.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Logo aster'
        ],
        [
            'title' => 'Balsamine service 1',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service_1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 2',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service_2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 3',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service_3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ], [
            'title' => 'Balsamine service 4',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service_4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 5',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service_5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 6',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service_6.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine actu 1',
            'path' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine actu'
        ],
        [
            'title' => 'Balsamine actu 2',
            'path' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine actu'
        ],
        [
            'title' => 'Balsamine actu 3',
            'path' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine actu'
        ],
        [
            'title' => 'Balsamine actu 4',
            'path' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine actu'
        ],
    ];
    
    public function load(ObjectManager $manager)
    {
        $this->loadMedia($manager);
    }
}