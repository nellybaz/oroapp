<?php

namespace Oro\Bundle\RedirectBundle\Tests\Unit\Routing;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RequestContext;

use Oro\Bundle\FrontendLocalizationBundle\Manager\UserLocalizationManager;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\RedirectBundle\Provider\SluggableUrlProviderInterface;
use Oro\Bundle\RedirectBundle\Provider\ContextUrlProviderRegistry;
use Oro\Bundle\RedirectBundle\Routing\SluggableUrlGenerator;
use Oro\Component\Testing\Unit\EntityTrait;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class SluggableUrlGeneratorTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var UrlGeneratorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $baseGenerator;

    /**
     * @var ContextUrlProviderRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    private $contextUrlProvider;

    /**
     * @var UserLocalizationManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $userLocalizationManager;

    /**
     * @var SluggableUrlGenerator
     */
    private $generator;

    /**
     * @var SluggableUrlProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $sluggableUrlProvider;

    protected function setUp()
    {
        $this->baseGenerator = $this->createMock(UrlGeneratorInterface::class);
        $this->contextUrlProvider = $this->createMock(ContextUrlProviderRegistry::class);
        $this->sluggableUrlProvider = $this->createMock(SluggableUrlProviderInterface::class);
        $this->userLocalizationManager = $this->createMock(UserLocalizationManager::class);

        $this->generator = new SluggableUrlGenerator(
            $this->sluggableUrlProvider,
            $this->contextUrlProvider,
            $this->userLocalizationManager
        );
        $this->generator->setBaseGenerator($this->baseGenerator);
    }

    public function testSetContext()
    {
        /** @var RequestContext|\PHPUnit_Framework_MockObject_MockObject $context */
        $context = $this->getMockBuilder(RequestContext::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->baseGenerator->expects($this->once())
            ->method('setContext')
            ->with($context);

        $this->generator->setContext($context);
    }

    public function testGetContext()
    {
        /** @var RequestContext|\PHPUnit_Framework_MockObject_MockObject $context */
        $context = $this->getMockBuilder(RequestContext::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->baseGenerator->expects($this->once())
            ->method('getContext')
            ->with()
            ->willReturn($context);

        $this->assertEquals($context, $this->generator->getContext());
    }

    public function testGenerateNoDataStorageWithoutContext()
    {
        $routeName = 'test';
        $routeParameters = ['id' => 1];
        $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH;
        $url = '/base/test/1';

        $baseUrl = '/base';
        $this->assertRequestContextCalled($baseUrl);

        $localizationId = 1;
        $localization = $this->createMock(Localization::class);
        $localization->expects($this->once())
            ->method('getId')
            ->willReturn($localizationId);
        $this->userLocalizationManager->expects($this->once())
            ->method('getCurrentLocalization')
            ->willReturn($localization);

        $this->contextUrlProvider->expects($this->never())
            ->method($this->anything());

        $this->sluggableUrlProvider->expects($this->once())
            ->method('setContextUrl')
            ->with(null);

        $this->sluggableUrlProvider->expects($this->exactly(2))
            ->method('getUrl')
            ->withConsecutive(
                [$routeName, $routeParameters, $localizationId],
                [$routeName, $routeParameters, null]
            )
            ->willReturn(null);

        $this->baseGenerator->expects($this->once())
            ->method('generate')
            ->with($routeName, $routeParameters, $referenceType)
            ->willReturn($url);

        $this->assertEquals('/base/test/1', $this->generator->generate($routeName, $routeParameters, $referenceType));
    }

    public function testGenerateNoDataStorageWithContext()
    {
        $routeName = 'test';
        $contextType = 'context';
        $contextData = 1;
        $contextUrl = '/context';
        $routeParameters = ['id' => 1, 'context_type' => $contextType, 'context_data' => $contextData];
        $cleanParameters = ['id' => 1];
        $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH;
        $url = '/base/test/1';

        $baseUrl = '/base';
        $this->assertRequestContextCalled($baseUrl);

        $this->initCommonMocks($contextType, $contextData, $contextUrl);

        $localizationId = 1;
        $localization = $this->createMock(Localization::class);
        $localization->expects($this->any())
            ->method('getId')
            ->willReturn($localizationId);
        $this->userLocalizationManager->expects($this->once())
            ->method('getCurrentLocalization')
            ->willReturn($localization);

        $this->sluggableUrlProvider->expects($this->once())
            ->method('setContextUrl')
            ->with('context');

        $this->sluggableUrlProvider->expects($this->exactly(2))
            ->method('getUrl')
            ->withConsecutive(
                [$routeName, $cleanParameters, $localizationId],
                [$routeName, $cleanParameters, null]
            )
            ->willReturn(null);

        $this->baseGenerator->expects($this->once())
            ->method('generate')
            ->with($routeName, $cleanParameters, $referenceType)
            ->willReturn($url);

        $this->assertEquals(
            '/base/context/_item/test/1',
            $this->generator->generate($routeName, $routeParameters, $referenceType)
        );
    }

    public function testGenerateWithDataStorageWithContext()
    {
        $routeName = 'test';
        $contextType = 'context';
        $contextData = 1;
        $contextUrl = '/context';
        $routeParameters = ['id' => 1, 'context_type' => $contextType, 'context_data' => $contextData];
        $cleanParameters = ['id' => 1];
        $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH;
        $slug = 'slug';

        $baseUrl = '/base';
        $this->assertRequestContextCalled($baseUrl);

        $this->initCommonMocks($contextType, $contextData, $contextUrl);

        $this->sluggableUrlProvider->expects($this->once())
            ->method('getUrl')
            ->with($routeName, $cleanParameters)
            ->willReturn($slug);

        $this->baseGenerator->expects($this->never())
            ->method('generate');

        $this->sluggableUrlProvider->expects($this->once())
            ->method('setContextUrl')
            ->with('context');


        $this->assertEquals(
            '/base/context/_item/slug',
            $this->generator->generate($routeName, $routeParameters, $referenceType)
        );
    }

    public function testGenerateWithDataStorageWithContextForDefaultLocalization()
    {
        $routeName = 'test';
        $contextType = 'context';
        $contextData = 1;
        $contextUrl = '/context';
        $routeParameters = ['id' => 1, 'context_type' => $contextType, 'context_data' => $contextData];
        $cleanParameters = ['id' => 1];
        $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH;
        $slug = 'slug';

        $baseUrl = '/base';
        $this->assertRequestContextCalled($baseUrl);

        $this->initCommonMocks($contextType, $contextData, $contextUrl);

        $localizationId = 1;
        $localization = $this->createMock(Localization::class);
        $localization->expects($this->any())
            ->method('getId')
            ->willReturn($localizationId);
        $this->userLocalizationManager->expects($this->once())
            ->method('getCurrentLocalization')
            ->willReturn($localization);

        $this->sluggableUrlProvider->expects($this->exactly(2))
            ->method('getUrl')
            ->withConsecutive(
                [$routeName, $cleanParameters, $localizationId],
                [$routeName, $cleanParameters, null]
            )
            ->willReturnOnConsecutiveCalls(
                null,
                $slug
            );

        $this->baseGenerator->expects($this->never())
            ->method('generate');

        $this->sluggableUrlProvider->expects($this->once())
            ->method('setContextUrl')
            ->with('context');


        $this->assertEquals(
            '/base/context/_item/slug',
            $this->generator->generate($routeName, $routeParameters, $referenceType)
        );
    }

    /**
     * @dataProvider emptyContextAwareUrlDataProvider
     * @param string $contextUrl
     */
    public function testGenerateWithDataStorageWithEmptyContext($contextUrl)
    {
        $routeName = 'test';
        $contextType = 'test_context';
        $contextData = 1;
        $routeParameters = ['id' => 2, 'context_type' => $contextType, 'context_data' => $contextData];
        $cleanParameters = ['id' => 2];
        $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH;
        $slug = 'slug';

        $this->baseGenerator->expects($this->never())
            ->method('generate');

        $baseUrl = '/base';
        $this->assertRequestContextCalled($baseUrl);

        $this->initCommonMocks($contextType, $contextData, $contextUrl);

        $this->sluggableUrlProvider->expects($this->once())
            ->method('getUrl')
            ->with($routeName, $cleanParameters)
            ->willReturn($slug);

        $this->sluggableUrlProvider->expects($this->once())
            ->method('setContextUrl')
            ->with('');

        $this->assertEquals(
            '/base/slug',
            $this->generator->generate($routeName, $routeParameters, $referenceType)
        );
    }

    /**
     * @return array
     */
    public function emptyContextAwareUrlDataProvider()
    {
        return [
            'empty context' => [''],
            'null context' => [null],
            'root context' => ['/']
        ];
    }

    public function testGenerateWithDataStorageWithoutContext()
    {
        $routeName = 'test';
        $routeParameters = ['id' => 1];
        $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH;
        $url = '/test/1';

        $baseUrl = '/base';
        $this->assertRequestContextCalled($baseUrl);

        $localizationId = 1;
        $localization = $this->createMock(Localization::class);
        $localization->expects($this->once())
            ->method('getId')
            ->willReturn($localizationId);
        $this->userLocalizationManager->expects($this->once())
            ->method('getCurrentLocalization')
            ->willReturn($localization);

        $this->contextUrlProvider->expects($this->never())
            ->method('getUrl');

        $this->baseGenerator->expects($this->never())
            ->method('generate');

        $this->sluggableUrlProvider->expects($this->once())
            ->method('setContextUrl')
            ->with('');

        $this->sluggableUrlProvider->expects($this->once())
            ->method('getUrl')
            ->with($routeName, $routeParameters)
            ->willReturn($url);

        $this->assertEquals(
            '/base/test/1',
            $this->generator->generate($routeName, $routeParameters, $referenceType)
        );
    }

    public function testGenerateWithDataStorageWithContextNoSlug()
    {
        $routeName = 'test';
        $contextType = 'context';
        $contextData = 1;
        $contextUrl = '/context';
        $routeParameters = ['id' => 1, 'context_type' => $contextType, 'context_data' => $contextData];
        $cleanParameters = ['id' => 1];
        $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH;
        $url = '/test/1';

        $baseUrl = '/base';
        $this->assertRequestContextCalled($baseUrl);

        $this->initCommonMocks($contextType, $contextData, $contextUrl);

        $this->baseGenerator->expects($this->never())
            ->method('generate');

        $this->sluggableUrlProvider->expects($this->once())
            ->method('setContextUrl')
            ->with('context');

        $this->sluggableUrlProvider->expects($this->once())
            ->method('getUrl')
            ->with($routeName, $cleanParameters)
            ->willReturn($url);

        $this->assertEquals(
            '/base/context/_item/test/1',
            $this->generator->generate($routeName, $routeParameters, $referenceType)
        );
    }

    public function testGenerateWithDataStorageWithContextNoSlugNoUrl()
    {
        $routeName = 'test';
        $contextType = 'context';
        $contextData = 1;
        $contextUrl = '/context';
        $routeParameters = ['id' => 1, 'context_type' => $contextType, 'context_data' => $contextData];
        $cleanParameters = ['id' => 1];
        $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH;
        $url = '/base/test/1';

        $baseUrl = '/base';
        $this->assertRequestContextCalled($baseUrl);

        $this->initCommonMocks($contextType, $contextData, $contextUrl);

        $this->baseGenerator->expects($this->once())
            ->method('generate')
            ->with($routeName, $cleanParameters, $referenceType)
            ->willReturn($url);

        $this->assertEquals(
            '/base/context/_item/test/1',
            $this->generator->generate($routeName, $routeParameters, $referenceType)
        );
    }

    public function testGenerateNoDataStorageWithoutContextUnsupportedReference()
    {
        $routeName = 'test';
        $routeParameters = ['id' => 1];
        $referenceType = UrlGeneratorInterface::ABSOLUTE_URL;
        $url = '/test/1';

        $this->contextUrlProvider->expects($this->never())
            ->method($this->anything());

        $this->baseGenerator->expects($this->once())
            ->method('generate')
            ->with($routeName, $routeParameters, $referenceType)
            ->willReturn($url);

        $this->sluggableUrlProvider->expects($this->never())
            ->method('getUrl');

        $this->assertEquals('/test/1', $this->generator->generate($routeName, $routeParameters, $referenceType));
    }

    /**
     * @param string $baseUrl
     */
    private function assertRequestContextCalled($baseUrl)
    {
        /** @var RequestContext|\PHPUnit_Framework_MockObject_MockObject $context */
        $context = $this->getMockBuilder(RequestContext::class)
            ->disableOriginalConstructor()
            ->getMock();
        $context->expects($this->once())
            ->method('getBaseUrl')
            ->willReturn($baseUrl);
        $this->baseGenerator->expects($this->once())
            ->method('getContext')
            ->with()
            ->willReturn($context);
    }

    /**
     * @param $contextType
     * @param $contextData
     * @param $contextUrl
     */
    private function initCommonMocks($contextType, $contextData, $contextUrl)
    {
        $localizationId = 1;
        $localization = $this->createMock(Localization::class);
        $localization->expects($this->once())
            ->method('getId')
            ->willReturn($localizationId);
        $this->userLocalizationManager->expects($this->once())
            ->method('getCurrentLocalization')
            ->willReturn($localization);

        $this->contextUrlProvider->expects($this->once())
            ->method('getUrl')
            ->with($contextType, $contextData)
            ->willReturn($contextUrl);
    }
}
