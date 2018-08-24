<?php

namespace Oro\Bundle\RedirectBundle\Tests\Functional\Controller\Api\Rest;

use Symfony\Component\HttpFoundation\Response;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

/**
 * @dbIsolationPerTest
 */
class RedirectControllerTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient([], $this->generateWsseAuthHeader());
        $this->client->useHashNavigation(true);
    }

    /**
     * Test slugify
     *
     * @dataProvider slugifyActionDataProvider
     * @param string $string
     * @param string $slug
     */
    public function testSlugifyAction($string, $slug)
    {
        $this->client->request(
            'GET',
            $this->getUrl('oro_api_slugify_slug', ['string' => $string])
        );

        $result = $this->getJsonResponseContent($this->client->getResponse(), Response::HTTP_OK);

        $this->assertNotEmpty($result);
        $this->assertEquals($slug, $result['slug']);
    }

    /**
     * @return array
     */
    public function slugifyActionDataProvider()
    {
        return [
            [
                'string' => 'hello',
                'slug' => 'hello'
            ],
            [
                'string' => 'hello#%$^&*()',
                'slug' => 'hello'
            ],
            [
                'string' => 'hello123.',
                'slug' => 'hello123'
            ],
            [
                'string' => 'LONDON-Cambridge!',
                'slug' => 'london-cambridge'
            ],
            [
                'string' => 'LONDON|Cambridge',
                'slug' => 'londoncambridge'
            ],
            [
                'string' => 'Ça ne fait rien.',
                'slug' => 'ca-ne-fait-rien'
            ],
            [
                'string' => 'Lo siento, no hablo espanol...',
                'slug' => 'lo-siento-no-hablo-espanol'
            ],
            [
                'string' => 'Знает ли он русский?',
                'slug' => 'znaet-li-on-russkij'
            ],
            [
                'string' => 'Слов\'янське слово «Україна»',
                'slug' => 'slovanske-slovo-ukraina'
            ],
            [
                'string' => '火を見るより明らかだ',
                'slug' => 'huowo-jianruyori-mingrakada'
            ],
            [
                'string' => 'Alle Gewässer fließen ins Meer',
                'slug' => 'alle-gewasser-fliessen-ins-meer'
            ],
            [
                'string' => '断鹤续凫',
                'slug' => 'duan-he-xu-fu'
            ],
            [
                'string' => 'საქართველო',
                'slug' => 'sakartvelo'
            ],
            [
                'string' => 'Czyja siła, tego prawda',
                'slug' => 'czyja-sila-tego-prawda'
            ],
            [
                'string' => 'áàâéèêíìîóòôúùûã',
                'slug' => 'aaaeeeiiiooouuua'
            ],
        ];
    }
}
