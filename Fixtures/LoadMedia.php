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
            'title' => 'Slider 7',
            'path' => '/src/Themes/Balsamine/Resources/public/img/images-slider/wide7.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Slider image'
        ],
        [
            'title' => 'Slider 8',
            'path' => '/src/Themes/Balsamine/Resources/public/img/images-slider/wide8.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Slider image'
        ],
        [
            'title' => 'Background 1',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 2',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 3',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 4',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 5',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 6',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-6.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 7',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-7.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 8',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-8.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 9',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-9.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 10',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-10.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 11',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-11.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Balsamine service 1',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 2',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 3',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ], [
            'title' => 'Balsamine service 4',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 5',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 6',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-6.jpg',
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