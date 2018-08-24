<?php

namespace Oro\Bundle\ProductBundle\Tests\Functional\Provider;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Oro\Bundle\FrontendTestFrameworkBundle\Entity\TestContentVariant;
use Oro\Bundle\ProductBundle\Provider\ContentVariantSegmentProvider;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadContentNodeData;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductCollectionContentVariants;
use Oro\Bundle\SegmentBundle\Entity\Segment;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Component\WebCatalog\Entity\ContentVariantInterface;

class ContentVariantSegmentProviderTest extends WebTestCase
{
    /**
     * @var string
     */
    private $prevVariantClass;

    /**
     * @var ContentVariantSegmentProvider
     */
    private $provider;

    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->loadFixtures([LoadProductCollectionContentVariants::class]);

        $metadata = $this->getContentVariantMetadata();
        $this->prevVariantClass = $metadata->getName();
        $this->provider = new ContentVariantSegmentProvider(
            static::getContainer()->get('oro_entity.doctrine_helper')
        );
    }

    protected function tearDown()
    {
        $metadata = $this->getContentVariantMetadata();
        $metadata->name = $this->prevVariantClass;
    }

    public function testGetContentVariantSegmentsNoClass()
    {
        $metadata = $this->getContentVariantMetadata();
        $metadata->name = null;
        $provider = new ContentVariantSegmentProvider(
            static::getContainer()->get('oro_entity.doctrine_helper')
        );

        $this->assertEmpty(iterator_to_array($provider->getContentVariantSegments()));
    }

    public function testGetContentVariantSegments()
    {
        $metadata = $this->getContentVariantMetadata();
        $metadata->name = TestContentVariant::class;

        $segments = [
            $this->getReference('segment_dynamic'),
            $this->getReference('segment_static'),
            $this->getReference('product_static_segment')
        ];

        $this->assertEquals($segments, iterator_to_array($this->provider->getContentVariantSegments()));
    }

    public function testGetContentVariantsNoClass()
    {
        $metadata = $this->getContentVariantMetadata();
        $metadata->name = null;

        $this->provider = new ContentVariantSegmentProvider(static::getContainer()->get('oro_entity.doctrine_helper'));

        $this->assertEmpty(
            iterator_to_array($this->provider->getContentVariants($this->getReference('segment_dynamic')))
        );
        $this->assertEmpty(
            iterator_to_array($this->provider->getContentVariants($this->getReference('segment_static')))
        );
    }

    public function testGetContentVariants()
    {
        $metadata = $this->getContentVariantMetadata();
        $metadata->name = TestContentVariant::class;

        $this->assertEquals(
            [
                $this->getReference('test_segment_variant.1'),
                $this->getReference('test_segment_variant.2'),
            ],
            iterator_to_array($this->provider->getContentVariants($this->getReference('segment_dynamic')))
        );
        $this->assertEquals(
            [
                $this->getReference('test_segment_variant.3')
            ],
            iterator_to_array($this->provider->getContentVariants($this->getReference('segment_static')))
        );
    }

    public function testHasContentVariantNoClass()
    {
        $metadata = $this->getContentVariantMetadata();
        $metadata->name = null;

        $this->provider = new ContentVariantSegmentProvider(static::getContainer()->get('oro_entity.doctrine_helper'));

        $this->assertFalse($this->provider->hasContentVariant($this->getReference('segment_dynamic')));
        $this->assertFalse($this->provider->hasContentVariant($this->getReference('segment_static')));
        $this->assertFalse($this->provider->hasContentVariant($this->getReference('segment_dynamic_with_filter')));
    }

    public function testHasContentVariant()
    {
        $metadata = $this->getContentVariantMetadata();
        $metadata->name = TestContentVariant::class;

        $this->assertTrue($this->provider->hasContentVariant($this->getReference('segment_dynamic')));
        $this->assertTrue($this->provider->hasContentVariant($this->getReference('segment_static')));
        $this->assertFalse($this->provider->hasContentVariant($this->getReference('segment_dynamic_with_filter')));
    }

    public function testGetContentNodeNoClass()
    {
        $metadata = $this->getContentVariantMetadata();
        $metadata->name = null;

        $this->assertNull($this->provider->getContentNode($this->getReference('segment_dynamic')));
        $this->assertNull($this->provider->getContentNode($this->getReference('segment_static')));
        $this->assertNull($this->provider->getContentNode($this->getReference('segment_dynamic_with_filter')));
    }

    public function testGetContentNode()
    {
        $metadata = $this->getContentVariantMetadata();
        $metadata->name = TestContentVariant::class;

        $this->assertEquals(
            $this->getReference(LoadContentNodeData::FIRST_CONTENT_NODE),
            $this->provider->getContentNode($this->getReference('segment_dynamic'))
        );
        $this->assertEquals(
            $this->getReference(LoadContentNodeData::SECOND_CONTENT_NODE),
            $this->provider->getContentNode($this->getReference('segment_static'))
        );
        $this->assertNull($this->provider->getContentNode($this->getReference('segment_dynamic_with_filter')));
    }

    /**
     * @return ClassMetadata
     */
    protected function getContentVariantMetadata(): ClassMetadata
    {
        $em = $this->getContainer()->get('doctrine')->getManagerForClass(Segment::class);
        return $em->getClassMetadata(ContentVariantInterface::class);
    }
}
