<?php

namespace Oro\Bundle\FrontendBundle\Tests\Unit\EventListener;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

use Oro\Bundle\DistributionBundle\Event\RouteCollectionEvent;
use Oro\Bundle\FrontendBundle\EventListener\RouteCollectionListener;

class RouteCollectionListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $prefix
     * @param RouteCollection $collection
     * @param array $expected
     *
     * @dataProvider dataProvider
     */
    public function testOnCollectionAutoload($prefix, RouteCollection $collection, array $expected)
    {
        $listener = new RouteCollectionListener($prefix);

        $event = new RouteCollectionEvent($collection);
        $listener->onCollectionAutoload($event);

        $this->assertEquals($expected, $event->getCollection()->getIterator()->getArrayCopy());
    }

    /**
     * @return array
     */
    public function dataProvider()
    {
        return [
            'prefix is empty after trim' => [
                ' / ',
                $this->getCollection(['route1' => new Route('/route1')]),
                ['route1' => new Route('/route1')]
            ],
            'without frontend route' => [
                ' /prefix/ ',
                $this->getCollection(['route1' => new Route('/route1')]),
                ['route1' => new Route('/prefix/route1')]
            ],
            'contains prefix for resource' => [
                ' /prefix/ ',
                $this->getCollection(['route1' => new Route('/prefix/route1')]),
                ['route1' => new Route('/prefix/route1')]
            ],
            'contains prefix for resource without slash' => [
                ' /prefix/ ',
                $this->getCollection(['route1' => new Route('prefix/route1')]),
                ['route1' => new Route('/prefix/route1')]
            ],
            'contains prefix for resource inside the path with slash' => [
                ' /prefix/ ',
                $this->getCollection(['route1' => new Route('/route1/prefix')]),
                ['route1' => new Route('/prefix/route1/prefix')]
            ],
            'contains prefix for resource inside the path' => [
                ' /prefix/ ',
                $this->getCollection(['route1' => new Route('/route1-prefix')]),
                ['route1' => new Route('/prefix/route1-prefix')]
            ],
            'frontend route skip prefix' => [
                ' /prefix/ ',
                $this->getCollection(
                    [
                        'route1' => new Route('/route1'),
                        'route2' => new Route('/prefix/route2-prefix'),
                        'frontend1' => (new Route('/frontend1'))->setOption('frontend', false),
                        'frontend2' => (new Route('/frontend2'))->setOption('frontend', true),
                        'frontend3' => (new Route('/frontend3-prefix'))->setOption('frontend', false),
                        'frontend4' => (new Route('/frontend4-prefix'))->setOption('frontend', true),
                    ]
                ),
                [
                    'route1' => new Route('/prefix/route1'),
                    'route2' => new Route('/prefix/route2-prefix'),
                    'frontend1' => (new Route('/prefix/frontend1'))->setOption('frontend', false),
                    'frontend2' => (new Route('/frontend2'))->setOption('frontend', true),
                    'frontend3' => (new Route('/prefix/frontend3-prefix'))->setOption('frontend', false),
                    'frontend4' => (new Route('/frontend4-prefix'))->setOption('frontend', true),
                ]
            ],
        ];
    }

    /**
     * @param Route[] $routes
     *
     * @return RouteCollection
     */
    protected function getCollection(array $routes)
    {
        $collection = new RouteCollection();

        foreach ($routes as $routeName => $route) {
            $collection->add($routeName, $route);
        }

        return $collection;
    }
}
