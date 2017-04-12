<?php

namespace Jet\Themes\Balsamine\Fixtures;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Services\LoadPostFixture;

class LoadPost extends AbstractFixture implements DependentFixtureInterface
{

    use LoadPostFixture;

    protected $data = [
        'balsamine-about-us' => [
            'title' => 'A propos de nous',
            'slug' => 'a-propos-de-nous',
            'short_description' => 'Un salon de coiffure chaleureux et convivial situé au cœur de Paris.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">Depuis 1986, notre salon prend soin de vous et de vos cheveux.</span>
                  <p>Notre expertise nous a permis de nous élever  parmi les 10 meilleurs salons de coiffure de la capitale. Parce que votre satisfaction est notre priorité, nous donnons le meilleur de nous-même pour vous apporter le  meilleur des services et des conseils.</p>  
                   <p>Notre équipe contient une grande diversité de professionnels : coiffeurs visagistes ou bien barbier sont à votre écoute pour réaliser tous vos souhaits et révéler votre personnalité. </p>
                  <p>Un salon de coiffure chaleureux et convivial situé au cœur de Paris.</p>
                  <p>Notre équipe est composée d\'expert, à votre écoute, pour réaliser tous vos souhaits.</p>
                </div>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/background/bg-side-9.jpg',
            'categories' => [],
            'website' => 'balsamine-society'
        ],
        /* Balsamine website posts */
        'balsamine-service-1' => [
            'title' => 'Coiffure',
            'slug' => 'coiffure',
            'short_description' => 'Que ce soit pour une coupe femme, homme ou enfant nos coiffeurs experts sauront gérer les cheveux longs comme courts.',
            'content' => '  <p>Que ce soit pour une coupe femme, homme ou enfant nos coiffeurs experts sauront gérer les cheveux longs comme courts. </p>
                  <p>Notre coiffeur est spécialiste des cheveux frisés. Afin de satisfaire notre clientèle féminine et masculine, nous vous conseillons sur votre coupe de cheveux, votre couleur ainsi que les différents soins capillaires adaptés à votre cuir chevelu.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-1.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-service-2' => [
            'title' => 'Maquillage',
            'slug' => 'maquillage',
            'short_description' => 'Laissez-vous maquiller par des mains expertes.',
            'content' => '<p>Laissez-vous maquiller par des mains expertes.</p>
        <p>Nos professionnels au cœur de la tendance  vous proposeront un maquillage moderne qui comblera vos envies. Notre gamme de cosmétique est certifiée bio et est composée de produits de beauté composés à 100% d’ingrédients naturels.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-2.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-service-3' => [
            'title' => 'Soin du visage',
            'slug' => 'soin-du-visage',
            'short_description' => 'Pour une peau impeccable, faites confiance à l’œil expert de nos esthéticienne dans la partie institut de notre salon.',
            'content' => '<p>Pour une peau impeccable, faites confiance à l’œil expert de nos esthéticienne dans la partie institut de notre salon.</p>
                <p>Les soins visage de notre salon sont experts et innovants. Ils sont concentrés en actifs végétaux brevetés et vous apporteront les réponses adaptées à vos besoins et votre type de peau.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-3.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-service-4' => [
            'title' => 'Massage',
            'slug' => 'massage',
            'short_description' => 'Nos masseuses vous accueillent avec une grande sérénité.',
            'content' => ' <p>Nos masseuses vous accueillent avec une grande sérénité. Au choix : un massage sportif énergisant, un massage ayurvédique relaxant, ou encore un soin du visage accompagné d\'un massage du cuir chevelu. Nos huiles chaudes bios, importées d\'Inde, fleurent bon l\'exotisme : ambre, musc, rose, jasmin, protéines de soie, huile d’argan…</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-4.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-service-5' => [
            'title' => 'Manucure',
            'slug' => 'manucure',
            'short_description' => 'Profitez d’un moment de pure détente pendant que nos esthéticiennes s’occupent de vos mains et de vos ongles.',
            'content' => '<p>Profitez d’un moment de pure détente pendant que nos esthéticiennes s’occupent de vos mains et de vos ongles.</p>
                <p>Notre bar à ongle comporte des équipements dernière génération afin de vous proposer des prestations d’une qualité inégalée.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-5.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-service-6' => [
            'title' => 'Coloration',
            'slug' => 'coloration',
            'short_description' => 'Notre salon bénéficie d’une large gamme de produits qui permet aux coiffeurs et coloristes de proposer de nombreuses teintes sous trois formes : les colorations intégrales, les balayages et les mèches.',
            'content' => '<p>Notre salon bénéficie d’une large gamme de produits qui permet aux coiffeurs et coloristes de proposer de nombreuses teintes sous trois formes : les colorations intégrales, les balayages et les mèches.</p>
                <p>Nos coloristes sont à votre disposition pour trouver la couleur dont vous rêvez.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-6.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-actu-1' => [
            'title' => 'Traiter les cheveux secs',
            'slug' => 'traiter-les-cheveux-secs',
            'short_description' => 'Il n’est pas rare de constater une sécheresse des cheveux et du cuir chevelu. A l’origine de cette situation, une sécheresse naturelle ou un mauvais traitement (météo, brossage trop fort ...), qui entraînent un déséquilibre dans le mélange de sueur et de sébum.',
            'content' => '<p>Il n’est pas rare de constater une sécheresse des cheveux et du cuir chevelu. A l’origine de cette situation, une sécheresse naturelle ou un mauvais traitement (météo, brossage trop fort ...), qui entraînent un déséquilibre dans le mélange de sueur et de sébum.</p>
<h3>Shampoings et après-shampoings </h3>
<p>L\'essentiel de la solution réside en une réhydratation de vos cheveux. Pour cela, testez plusieurs shampoings riches en actifs nutritifs (acides gras essentiels, huiles ...) pour trouver celui agissant le mieux sur vos cheveux. Complétez le lavage par l\'utilisation d\'un après-shampoing riche en huile de jojoba ou au beurre de kairté.</p>
<h3>Soin quotidien</h3> 
<p>Pour commencer, pensez à ne pas trop abimer vos cheveux au moment du brossage. Appliquez également un masque toutes les deux semaines pour nourrir vos cheveux en profondeur. Choisissez des produits riches en beurre de karité que vous laisserez agir comme expliqué dans la notice. </p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-1.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-actu-2' => [
            'title' => 'Freiner la chute des cheveux',
            'slug' => 'freiner-la-chute-des-cheveux',
            'short_description' => 'Homme ou femme, la chute des cheveux n\'épargne personne. Peu importe l\'âge, le type de cheveux, cette chute (lorsqu\'elle n\'est pas liée à une maladie du cuir chevelu) est difficile à freiner. Soyez donc attentifs à chaque détail concernant vos cheveux afin d\'informer le dermatologue du mieux possible.',
            'content' => '<p>Homme ou femme, la chute des cheveux n\'épargne personne. Peu importe l\'âge, le type de cheveux, cette chute (lorsqu\'elle n\'est pas liée à une maladie du cuir chevelu) est difficile à freiner. Soyez donc attentifs à chaque détail concernant vos cheveux afin d\'informer le dermatologue du mieux possible.</p>
<h3>Quel type de chute ?</h3>
<p>La chute la plus répandue de l\'homme est la calvitie, qui correspond à la perte progressive des cheveux sur certaines zones de crâne. Liée à un excès d\'hormones mâles, elle peut toutefois être retardée par l\'application de produits prescrits par un dermatologue. Dans certains cas, des maladies de la peau ou de certains organes (la thyroïde par exemple) sont responsables de chutes diffuses ou localisées.</p>
<h3>Quelques remèdes ?</h3> 
<p>Quelques remèdes naturels existent et ne peuvent qu\'être bénéfiques sans être miraculeux. Commencez par adopter un régime alimentaire équilibré, riche en vitamines. Certaines cures comme celles à la levure de bière sont également efficaces et renouvelables plusieurs fois par an.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-2.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-actu-3' => [
            'title' => 'Coiffer des cheveux bouclés',
            'slug' => 'coiffer-des-cheveux-boucles',
            'short_description' => 'Mettre en valeur des cheveux bouclés ou décider de les lisser sont des opérations parfois périlleuses pour certaines personnes. Ce choix dépend de vos envies mais également de la forme de votre visage, de la couleur de vos cheveux ... Zoom sur les deux types d\'opérations.',
            'content' => '<h3>Coiffer des cheveux bouclés</h3>
<p>Mettre en valeur des cheveux bouclés ou décider de les lisser sont des opérations parfois périlleuses pour certaines personnes. Ce choix dépend de vos envies mais également de la forme de votre visage, de la couleur de vos cheveux ... Zoom sur les deux types d\'opérations.</p>
<h3>Boucler ses cheveux</h3>
<p>Commencez par laver vos cheveux en utilisant un shampoing et un soin nutritif pour donner de la densité à vos cheveux. Démêlez ensuite vos cheveux et appliquez un produit destiné à soutenir les boucles. Si vos cheveux ne sont pas naturellement frisés ou si vous voulez leur donner plus de volume, vous pouvez utiliser un fer à boucler.</p>
<h3>Lisser ses cheveux</h3>
<p>Appliquez d\'abord un soin antifrisottis après le shampoing puis pré-séchez les cheveux avant d\'utiliser le fer à lisser. Evitez de lisser les mèches encadrant le visage afin de conserver leur aspect naturel.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-3.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-actu-4' => [
            'title' => 'Préparer les vacances au soleil',
            'slug' => 'preparer-les-vacances-au-soleil',
            'short_description' => 'Les vacances au soleil (vent, chlore, eau de mer ...) sont une rude épreuve pour vos cheveux. Il est donc essentiel de protéger votre cuir chevelu et votre fibre capillaire avant et pendant vos vacances. Quelques "trucs" existent pour prévenir facilement de ces effets désagréables.',
            'content' => '<p>Les vacances au soleil (vent, chlore, eau de mer ...) sont une rude épreuve pour vos cheveux. Il est donc essentiel de protéger votre cuir chevelu et votre fibre capillaire avant et pendant vos vacances. Quelques "trucs" existent pour prévenir facilement de ces effets désagréables.</p>
<h3>Quand faire sa couleur ?</h3>
<p>Idéalement, il faudrait réaliser la couleur 15 jours avant le départ en vacances. L\'oxydation du cheveu lors de la coloration est en fait atténuée par les deux ou trois shampoings réalisés lors des 15 jours, ce qui permet une meilleure résistance à l\'agression du soleil.</p>
<h3>Prendre soin de ses cheveux pendant le séjour</h3>
<p>L\'idée consiste à hydrater le cheveu autant que possible pendant le séjour tout en le protégeant à l\'aide d\'un filtre anti-UV (sous forme d\'huile en général). Appliqué le matin, le filtre protège vos cheveux jusqu\'au shampoing du soir. Soigner vos cheveux régulièrement permettra de conserver leur texture agréable longtemps après les vacances !</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-4.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'balsamine-society'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadPost($manager);
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
            'Jet\Modules\Post\Fixtures\LoadPostCategory',
            'Jet\Themes\Balsamine\Fixtures\LoadWebsite',
            'Jet\Themes\Balsamine\Fixtures\LoadMedia',
        ];
    }
}