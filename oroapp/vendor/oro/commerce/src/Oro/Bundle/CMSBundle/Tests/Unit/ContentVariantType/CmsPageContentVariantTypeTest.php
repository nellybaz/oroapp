<?php

namespace Oro\Bundle\CMSBundle\Tests\Unit\ContentVariantType;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\CMSBundle\ContentVariantType\CmsPageContentVariantType;
use Oro\Bundle\CMSBundle\Entity\Page;
use Oro\Bundle\CMSBundle\Form\Type\CmsPageVariantType;
use Oro\Bundle\CMSBundle\Tests\Unit\ContentVariantType\Stub\ContentVariantStub;
use Oro\Component\Routing\RouteData;
use Oro\Component\Testing\Unit\EntityTrait;

class CmsPageContentVariantTypeTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var AuthorizationCheckerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $authorizationChecker;

    /**
     * @var CmsPageContentVariantType
     */
    private $type;

    protected function setUp()
    {
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);

        $this->type = new CmsPageContentVariantType(
            $this->authorizationChecker,
            $this->getPropertyAccessor()
        );
    }

    public function testGetName()
    {
        $this->assertEquals('cms_page', $this->type->getName());
    }

    public function testGetTitle()
    {
        $this->assertEquals('oro.cms.page.entity_label', $this->type->getTitle());
    }

    public function testGetFormType()
    {
        $this->assertEquals(CmsPageVariantType::class, $this->type->getFormType());
    }

    public function testIsAllowed()
    {
        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('oro_cms_page_view')
            ->willReturn(true);
        $this->assertTrue($this->type->isAllowed());
    }

    public function testGetRouteData()
    {
        /** @var ContentVariantStub **/
        $contentVariant = new ContentVariantStub();
        
        /** @var Page $page */
        $page = $this->getEntity(Page::class, ['id' => 42]);
        $contentVariant->setCmsPage($page);

        $this->assertEquals(
            new RouteData('oro_cms_frontend_page_view', ['id' => 42]),
            $this->type->getRouteData($contentVariant)
        );
    }
}
