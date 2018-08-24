<?php

namespace Oro\Bundle\CatalogBundle\Tests\Functional\Controller;

use Oro\Bundle\AttachmentBundle\Entity\File;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Entity\Repository\CategoryRepository;
use Oro\Bundle\CatalogBundle\Tests\Functional\DataFixtures\LoadCategoryData;
use Oro\Bundle\FrontendTestFrameworkBundle\Migrations\Data\ORM\LoadCustomerUserData;
use Oro\Bundle\InventoryBundle\Inventory\LowInventoryProvider;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\LocaleBundle\Tests\Functional\DataFixtures\LoadLocalizationData;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Form;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class CategoryControllerTest extends WebTestCase
{
    const DEFAULT_CATEGORY_TITLE = 'Category Title';
    const DEFAULT_SUBCATEGORY_TITLE = 'Subcategory Title';
    const DEFAULT_CATEGORY_SHORT_DESCRIPTION = 'Category Short Description';
    const DEFAULT_CATEGORY_LONG_DESCRIPTION = 'Category Long Description';
    const DEFAULT_CATEGORY_UNIT_CODE = 'set';
    const DEFAULT_CATEGORY_UNIT_PRECISION = 5;
    const UPDATED_DEFAULT_CATEGORY_TITLE = 'Updated Category Title';
    const UPDATED_DEFAULT_SUBCATEGORY_TITLE = 'Updated Subcategory Title';
    const UPDATED_DEFAULT_CATEGORY_SHORT_DESCRIPTION = 'Updated Category Short Description';
    const UPDATED_DEFAULT_CATEGORY_LONG_DESCRIPTION = 'Updated Category Long Description';
    const UPDATED_DEFAULT_CATEGORY_UNIT_CODE = 'item';
    const UPDATED_DEFAULT_CATEGORY_UNIT_PRECISION = 3;
    const LARGE_IMAGE_NAME = 'large_image.png';
    const SMALL_IMAGE_NAME = 'small_image.png';
    const LARGE_SVG_IMAGE_NAME = 'large_svg_image.svg';
    const SMALL_SVG_IMAGE_NAME = 'small_svg_image.svg';

    /**
     * @var Localization[]
     */
    protected $localizations;

    /**
     * @var Category
     */
    protected $masterCatalog;

    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
        $this->loadFixtures([
            LoadLocalizationData::class,
            LoadProductData::class,
            LoadCategoryData::class
        ]);
        $this->localizations = $this->getContainer()
            ->get('doctrine')
            ->getRepository('OroLocaleBundle:Localization')
            ->findAll();
        $this->masterCatalog = $this->getContainer()
            ->get('doctrine')
            ->getRepository('OroCatalogBundle:Category')
            ->getMasterCatalogRoot();
    }

    public function testGetChangedUrlsWhenSlugChanged()
    {
        /** @var Category $category */
        $category = $this->getReference(LoadCategoryData::FIRST_LEVEL);
        if (method_exists($category, 'setDefaultSlugPrototype')) {
            $category->setDefaultSlugPrototype('old-default-slug');
        }

        $englishLocalization = $this->getContainer()->get('oro_locale.manager.localization')
            ->getDefaultLocalization(false);

        $englishSlugPrototype = new LocalizedFallbackValue();
        $englishSlugPrototype->setString('old-english-slug')->setLocalization($englishLocalization);

        $entityManager = $this->getContainer()->get('doctrine')->getManagerForClass(Category::class);
        $category->addSlugPrototype($englishSlugPrototype);

        $entityManager->persist($category);
        $entityManager->flush();

        /** @var Localization $englishLocalization */
        $englishCALocalization = $this->getReference('en_CA');

        $crawler = $this->client->request('GET', $this->getUrl('oro_catalog_category_update', [
            'id' => $category->getId()
        ]));

        $form = $crawler->selectButton('Save')->form();
        $formValues = $form->getPhpValues();
        $formValues['oro_catalog_category']['slugPrototypesWithRedirect'] = [
            'slugPrototypes' => [
                'values' => [
                    'default' => 'default-slug',
                    'localizations' => [
                        $englishLocalization->getId() => ['value' => 'english-slug'],
                        $englishCALocalization->getId() => ['value' => 'old-default-slug']
                    ]
                ]
            ]
        ];

        $this->client->request(
            'POST',
            $this->getUrl('oro_catalog_category_get_changed_slugs', ['id' => $category->getId()]),
            $formValues
        );

        $expectedData = [
            'Default Value' => ['before' => '/old-default-slug', 'after' => '/default-slug'],
            'English' => ['before' => '/old-english-slug','after' => '/english-slug']
        ];

        $response = $this->client->getResponse();
        $this->assertJsonStringEqualsJsonString(json_encode($expectedData), $response->getContent());
    }

    public function testIndex()
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_catalog_category_index'));
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertEquals('Categories', $crawler->filter('h1.oro-subtitle')->html());
        $this->assertContains(
            'Please select a category on the left or create new one.',
            $crawler->filter('[data-role="content"] .tree-empty-content')->html()
        );
    }

    /**
     * @return int
     */
    public function testCreateCategory()
    {
        $this->getContainer()->get('doctrine')->getRepository('OroCatalogBundle:Category')->getMasterCatalogRoot();

        return $this->assertCreate($this->masterCatalog->getId());
    }

    /**
     * @depends testCreateCategory
     *
     * @param int $id
     *
     * @return int
     */
    public function testCreateSubCategory($id)
    {
        return $this->assertCreate($id, self::DEFAULT_SUBCATEGORY_TITLE);
    }

    /**
     * @depends testCreateCategory
     *
     * @param int $id
     *
     */
    public function testLocalizedValuesCategory($id)
    {
        $this->assertUpdateWithLocalizedValues($id);
    }

    /**
     * @depends testCreateSubCategory
     *
     * @param int $id
     *
     */
    public function testLocalizedValuesSubCategory($id)
    {
        $this->assertUpdateWithLocalizedValues($id, self::DEFAULT_SUBCATEGORY_TITLE);
    }

    /**
     * @depends testCreateCategory
     *
     * @param int $id
     *
     * @return int
     */
    public function testEditCategory($id)
    {
        list($title, $shortDescription, $longDescription, $unitPrecision) = [
            self::DEFAULT_CATEGORY_TITLE,
            self::DEFAULT_CATEGORY_SHORT_DESCRIPTION,
            self::DEFAULT_CATEGORY_LONG_DESCRIPTION,
            [
                'code' => self::DEFAULT_CATEGORY_UNIT_CODE,
                'precision' => self::DEFAULT_CATEGORY_UNIT_PRECISION,
            ]
        ];

        list($newTitle, $newShortDescription, $newLongDescription, $newUnitPrecision) = [
            self::UPDATED_DEFAULT_CATEGORY_TITLE,
            self::UPDATED_DEFAULT_CATEGORY_SHORT_DESCRIPTION,
            self::UPDATED_DEFAULT_CATEGORY_LONG_DESCRIPTION,
            [
                'code' => self::UPDATED_DEFAULT_CATEGORY_UNIT_CODE,
                'precision' => self::UPDATED_DEFAULT_CATEGORY_UNIT_PRECISION,
            ]
        ];

        return $this->assertEdit(
            $id,
            $title,
            $shortDescription,
            $longDescription,
            $unitPrecision,
            $newTitle,
            $newShortDescription,
            $newLongDescription,
            $newUnitPrecision
        );
    }

    /**
     * @depends testCreateSubCategory
     *
     * @param int $id
     *
     * @return int
     */
    public function testEditSubCategory($id)
    {
        list($title, $shortDescription, $longDescription, $unitPrecision) = [
            self::DEFAULT_SUBCATEGORY_TITLE,
            self::DEFAULT_CATEGORY_SHORT_DESCRIPTION,
            self::DEFAULT_CATEGORY_LONG_DESCRIPTION,
            [
                'code' => self::DEFAULT_CATEGORY_UNIT_CODE,
                'precision' => self::DEFAULT_CATEGORY_UNIT_PRECISION,
            ]
        ];

        list($newTitle, $newShortDescription, $newLongDescription, $newUnitPrecision) = [
            self::UPDATED_DEFAULT_CATEGORY_TITLE,
            self::UPDATED_DEFAULT_CATEGORY_SHORT_DESCRIPTION,
            self::UPDATED_DEFAULT_CATEGORY_LONG_DESCRIPTION,
            [
                'code' => self::UPDATED_DEFAULT_CATEGORY_UNIT_CODE,
                'precision' => self::UPDATED_DEFAULT_CATEGORY_UNIT_PRECISION,
            ]
        ];

        return $this->assertEdit(
            $id,
            $title,
            $shortDescription,
            $longDescription,
            $unitPrecision,
            $newTitle,
            $newShortDescription,
            $newLongDescription,
            $newUnitPrecision
        );
    }



    public function testGetChangedUrlsWhenNoSlugChanged()
    {
        $category = $this->getReference(LoadCategoryData::FIRST_LEVEL);

        $crawler = $this->client->request('GET', $this->getUrl('oro_catalog_category_update', [
            'id' => $category->getId()
        ]));

        $form = $crawler->selectButton('Save')->form();
        $formValues = $form->getPhpValues();

        $this->client->request(
            'POST',
            $this->getUrl('oro_catalog_category_get_changed_slugs', ['id' => $category->getId()]),
            $formValues
        );

        $response = $this->client->getResponse();
        $this->assertEquals('[]', $response->getContent());
    }

    public function testMove()
    {
        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_catalog_category_move_form'),
            [
                'selected' => [
                    $this->getReference(LoadCategoryData::THIRD_LEVEL1)->getId()
                ],
                '_widgetContainer' => 'dialog',
            ],
            [],
            $this->generateWsseAuthHeader()
        );

        $form = $crawler->selectButton('Save')->form();
        $form['tree_move[target]'] = $this->getReference(LoadCategoryData::FIRST_LEVEL)->getId();

        $this->client->followRedirects(true);

        /** TODO Change after BAP-1813 */
        $form->getFormNode()->setAttribute(
            'action',
            $form->getFormNode()->getAttribute('action') . '&_widgetContainer=dialog'
        );

        $this->client->submit($form);
        $result = $this->client->getResponse();

        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        /** @var CategoryRepository $repository */
        $repository = $this->getContainer()->get('doctrine')
            ->getManagerForClass('OroCatalogBundle:Category')
            ->getRepository('OroCatalogBundle:Category');
        $category = $repository->findOneByDefaultTitle(LoadCategoryData::THIRD_LEVEL1);
        $this->assertEquals(LoadCategoryData::FIRST_LEVEL, $category->getParentCategory()->getTitle()->getString());
    }

    public function testUploadSVGImages()
    {
        /** @var Category $category */
        $category = $this->getReference(LoadCategoryData::FIRST_LEVEL);
        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_catalog_category_create', ['id' => $category->getId()])
        );

        $fileLocator = $this->getContainer()->get('file_locator');
        $smallImageName = self::SMALL_SVG_IMAGE_NAME;
        $smallImageFile = $fileLocator->locate(
            '@OroCatalogBundle/Tests/Functional/DataFixtures/files/' . $smallImageName
        );
        $largeImageName = self::LARGE_SVG_IMAGE_NAME;
        $largeImageFile = $fileLocator->locate(
            '@OroCatalogBundle/Tests/Functional/DataFixtures/files/' . $largeImageName
        );
        $smallImage = new UploadedFile($smallImageFile, $smallImageName, 'image/svg+xml');
        $largeImage = new UploadedFile($largeImageFile, $largeImageName, 'image/svg+xml');

        $title = 'Category with SVG images';
        /** @var Form $form */
        $form = $crawler->selectButton('Save')->form();
        $form['oro_catalog_category[titles][values][default]'] = $title;
        $form['oro_catalog_category[smallImage][file]'] = $smallImage;
        $form['oro_catalog_category[largeImage][file]'] = $largeImage;
        $form['oro_catalog_category[inventoryThreshold][scalarValue]'] = 0;
        $form['oro_catalog_category[lowInventoryThreshold][scalarValue]'] = 0;

        $form->setValues(['input_action' => 'save_and_stay']);
        $this->client->followRedirects(true);
        $crawler = $this->client->submit($form);
        $result = $this->client->getResponse();

        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $html = $crawler->html();

        $this->assertContains('Category has been saved', $html);
        $this->assertContains($title, $html);
        $this->assertContains(self::SMALL_SVG_IMAGE_NAME, $html);
        $this->assertContains(self::LARGE_SVG_IMAGE_NAME, $html);
        $this->initClient(
            [],
            $this->generateBasicAuthHeader(LoadCustomerUserData::AUTH_USER, LoadCustomerUserData::AUTH_PW)
        );
        $em = $this->getContainer()->get('doctrine')->getManager();
        $attachments = $em->getRepository(File::class)->findBy(['extension' => 'svg']);
        foreach ($attachments as $attachmentFile) {
            $url = $this->getContainer()->get('oro_attachment.manager')
                ->getFilteredImageUrl($attachmentFile, 'category_medium');
            $this->client->request(
                'GET',
                $url
            );
            $result = $this->client->getResponse();
            $this->assertResponseStatusCodeEquals($result, 200);
            $this->assertResponseContentTypeEquals($result, 'image/svg+xml');
        }
    }

    public function testValidationForLocalizedFallbackValues()
    {
        $rootId = $this->masterCatalog->getId();
        $crawler = $this->client->request('GET', $this->getUrl('oro_catalog_category_create', ['id' => $rootId]));
        $form = $crawler->selectButton('Save')->form();

        $bigStringValue = str_repeat('a', 256);
        $formValues = $form->getPhpValues();
        $formValues['oro_catalog_category']['inventoryThreshold']['scalarValue'] = 0;
        $formValues['oro_catalog_category'][LowInventoryProvider::LOW_INVENTORY_THRESHOLD_OPTION]['scalarValue'] = 0;
        $formValues['oro_catalog_category']['titles']['values']['default'] = $bigStringValue;
        $formValues['oro_catalog_category']['slugPrototypesWithRedirect']['slugPrototypes'] = [
            'values' => ['default' => $bigStringValue]
        ];

        $this->client->followRedirects(true);
        $crawler = $this->client->request($form->getMethod(), $form->getUri(), $formValues);

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        $this->assertEquals(
            2,
            $crawler->filterXPath(
                "//li[contains(text(),'This value is too long. It should have 255 characters or less.')]"
            )->count()
        );
    }

    /**
     * @param int    $parentId
     * @param string $title
     * @param string $shortDescription
     * @param string $longDescription
     * @param array  $unitPrecision
     *
     * @return int
     */
    protected function assertCreate(
        $parentId,
        $title = self::DEFAULT_CATEGORY_TITLE,
        $shortDescription = self::DEFAULT_CATEGORY_SHORT_DESCRIPTION,
        $longDescription = self::DEFAULT_CATEGORY_LONG_DESCRIPTION,
        $unitPrecision = [
            'code' => self::DEFAULT_CATEGORY_UNIT_CODE,
            'precision' => self::DEFAULT_CATEGORY_UNIT_PRECISION
        ]
    ) {
        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_catalog_category_create', ['id' => $parentId])
        );

        $fileLocator = $this->getContainer()->get('file_locator');

        $smallImageName = self::SMALL_IMAGE_NAME;
        $smallImageFile = $fileLocator->locate(
            '@OroCatalogBundle/Tests/Functional/DataFixtures/files/' . $smallImageName
        );
        $largeImageName = self::LARGE_IMAGE_NAME;
        $largeImageFile = $fileLocator->locate(
            '@OroCatalogBundle/Tests/Functional/DataFixtures/files/' . $largeImageName
        );

        $smallImage = new UploadedFile($smallImageFile, $smallImageName);
        $largeImage = new UploadedFile($largeImageFile, $largeImageName);

        /** @var Form $form */
        $form = $crawler->selectButton('Save')->form();
        $form['oro_catalog_category[titles][values][default]'] = $title;
        $form['oro_catalog_category[shortDescriptions][values][default]'] = $shortDescription;
        $form['oro_catalog_category[longDescriptions][values][default]'] = $longDescription;
        $form['oro_catalog_category[smallImage][file]'] = $smallImage;
        $form['oro_catalog_category[largeImage][file]'] = $largeImage;
        $form['oro_catalog_category[inventoryThreshold][scalarValue]'] = 0;
        $form['oro_catalog_category[lowInventoryThreshold][scalarValue]'] = 0;
        $form['oro_catalog_category[defaultProductOptions][unitPrecision][unit]'] = $unitPrecision['code'];
        $form['oro_catalog_category[defaultProductOptions][unitPrecision][precision]'] = $unitPrecision['precision'];

        if ($parentId === $this->masterCatalog->getId()) {
            $appendProducts = $this->getProductBySku(LoadProductData::PRODUCT_1)->getId() . ', '
                . $this->getProductBySku(LoadProductData::PRODUCT_2)->getId();
        } else {
            $appendProducts = $this->getProductBySku(LoadProductData::PRODUCT_4)->getId();
        }

        $form['oro_catalog_category[appendProducts]'] = $appendProducts;
        $form->setValues(['input_action' => 'save_and_stay']);

        $this->client->followRedirects(true);
        $crawler = $this->client->submit($form);
        $result = $this->client->getResponse();

        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $html = $crawler->html();
        $this->assertContains('Category has been saved', $html);
        $this->assertContains($title, $html);
        $this->assertContains($shortDescription, $html);
        $this->assertContains($longDescription, $html);
        $this->assertContains($smallImage->getFilename(), $html);
        $this->assertContains($largeImage->getFilename(), $html);
        $this->assertEquals($unitPrecision['code'], $crawler->filter('.unit option[selected]')->attr('value'));
        $this->assertEquals($unitPrecision['precision'], $crawler->filter('.precision')->attr('value'));

        return $this->getCategoryIdByUri($this->client->getRequest()->getRequestUri());
    }

    /**
     * @param int    $id
     * @param string $title
     * @param string $shortDescription
     * @param string $longDescription
     * @param array  $unitPrecision
     * @param string $newTitle
     * @param string $newShortDescription
     * @param string $newLongDescription
     * @param array  $newUnitPrecision
     *
     * @return int
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function assertEdit(
        $id,
        $title,
        $shortDescription,
        $longDescription,
        $unitPrecision,
        $newTitle,
        $newShortDescription,
        $newLongDescription,
        $newUnitPrecision
    ) {
        $crawler = $this->client->request('GET', $this->getUrl('oro_catalog_category_update', ['id' => $id]));
        $form = $crawler->selectButton('Save')->form();
        $formValues = $form->getValues();
        $html = $crawler->html();
        //Verified that actual values correspond with the ones that were set during Category creation
        $this->assertContains('Add note', $html);
        $this->assertContains(self::SMALL_IMAGE_NAME, $html);
        $this->assertContains(self::LARGE_IMAGE_NAME, $html);
        $this->assertFormDefaultLocalized($formValues, $title, $shortDescription, $longDescription);
        $this->assertEquals($unitPrecision['code'], $crawler->filter('.unit option[selected]')->attr('value'));
        $this->assertEquals($unitPrecision['precision'], $crawler->filter('.precision')->attr('value'));

        $testProductOne = $this->getProductBySku(LoadProductData::PRODUCT_1);
        $testProductTwo = $this->getProductBySku(LoadProductData::PRODUCT_2);
        $testProductThree = $this->getProductBySku(LoadProductData::PRODUCT_3);
        $testProductFour = $this->getProductBySku(LoadProductData::PRODUCT_4);
        $appendProduct = $testProductThree;

        if ($title === self::DEFAULT_SUBCATEGORY_TITLE) {
            $appendProduct = $testProductFour;
        };
        $crfToken = $this->getContainer()->get('security.csrf.token_manager')->getToken('category');
        $parameters = [
            'input_action' => 'save_and_stay',
            'oro_catalog_category' => [
                '_token' => $crfToken,
                'appendProducts' => $appendProduct->getId(),
                'removeProducts' => $testProductOne->getId()
            ]
        ];

        $parameters['oro_catalog_category']['titles']['values']['default'] = $newTitle;
        $parameters['oro_catalog_category']['shortDescriptions']['values']['default'] = $newShortDescription;
        $parameters['oro_catalog_category']['longDescriptions']['values']['default'] = $newLongDescription;
        $parameters['oro_catalog_category']['largeImage']['emptyFile'] = true;
        $parameters['oro_catalog_category']['inventoryThreshold']['scalarValue'] = 0;
        $parameters['oro_catalog_category'][LowInventoryProvider::LOW_INVENTORY_THRESHOLD_OPTION]['scalarValue'] = 0;
        $parameters['oro_catalog_category']['defaultProductOptions']['unitPrecision']['unit'] =
            $newUnitPrecision['code']
        ;
        $parameters['oro_catalog_category']['defaultProductOptions']['unitPrecision']['precision'] =
            $newUnitPrecision['precision']
        ;

        foreach ($this->localizations as $localization) {
            $locId = $localization->getId();

            $parameters['oro_catalog_category']['titles']['values']['localizations'][$locId]['value']
                = $localization->getLanguageCode() . $newTitle;
            $parameters['oro_catalog_category']['shortDescriptions']['values']['localizations'][$locId]['value']
                = $localization->getLanguageCode() . $newShortDescription;
            $parameters['oro_catalog_category']['longDescriptions']['values']['localizations'][$locId]['value']
                = $localization->getLanguageCode() . $newLongDescription;
        }
        $this->client->followRedirects(true);
        $crawler = $this->client->request($form->getMethod(), $form->getUri(), $parameters);
        $html = $crawler->html();
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('Category has been saved', $html);

        $form = $crawler->selectButton('Save')->form();
        $formValues = $form->getValues();
        //Verified that values correspond with the new ones that has been set after submit
        $this->assertFormDefaultLocalized($formValues, $newTitle, $newShortDescription, $newLongDescription);
        $this->assertLocalizedValues($formValues, $newTitle, $newShortDescription, $newLongDescription);
        $this->assertNull($this->getProductCategoryByProduct($testProductOne));
        $this->assertNotContains(self::LARGE_IMAGE_NAME, $html);
        $this->assertContains(self::SMALL_IMAGE_NAME, $html);
        $this->assertEquals($newUnitPrecision['code'], $crawler->filter('.unit option[selected]')->attr('value'));
        $this->assertEquals($newUnitPrecision['precision'], $crawler->filter('.precision')->attr('value'));

        if ($title === self::DEFAULT_CATEGORY_TITLE) {
            $productTwoCategory = $this->getProductCategoryByProduct($testProductTwo);
            $productThreeCategory = $this->getProductCategoryByProduct($testProductThree);

            $this->assertCategoryDefaultLocalized(
                $productThreeCategory,
                $newTitle,
                $newShortDescription,
                $newLongDescription
            );

            $this->assertCategoryDefaultLocalized(
                $productTwoCategory,
                $newTitle,
                $newShortDescription,
                $newLongDescription
            );
        }

        if ($title === self::DEFAULT_SUBCATEGORY_TITLE) {
            $productFourCategory = $this->getProductCategoryByProduct($testProductFour);

            $this->assertCategoryDefaultLocalized(
                $productFourCategory,
                $newTitle,
                $newShortDescription,
                $newLongDescription
            );
        }

        return $id;
    }

    /**
     * @param int    $id
     * @param string $title
     * @param string $shortDescription
     * @param string $longDescription
     */
    protected function assertUpdateWithLocalizedValues(
        $id,
        $title = self::DEFAULT_CATEGORY_TITLE,
        $shortDescription = self::DEFAULT_CATEGORY_SHORT_DESCRIPTION,
        $longDescription = self::DEFAULT_CATEGORY_LONG_DESCRIPTION
    ) {
        $crawler = $this->client->request('GET', $this->getUrl('oro_catalog_category_update', ['id' => $id]));
        $form = $crawler->selectButton('Save')->form();
        $formValues = $form->getValues();

        $this->assertEquals($title, $formValues['oro_catalog_category[titles][values][default]']);
        $this->assertEquals(
            $shortDescription,
            $formValues['oro_catalog_category[shortDescriptions][values][default]']
        );
        $this->assertEquals(
            $longDescription,
            $formValues['oro_catalog_category[longDescriptions][values][default]']
        );

        if ($title === self::DEFAULT_CATEGORY_TITLE) {
            $testProductOne = $this->getProductBySku(LoadProductData::PRODUCT_1);
            $testProductTwo = $this->getProductBySku(LoadProductData::PRODUCT_2);

            /** @var Category $productOneCategory */
            $productOneCategory = $this->getProductCategoryByProduct($testProductOne);
            /** @var Category $productTwoCategory */
            $productTwoCategory = $this->getProductCategoryByProduct($testProductTwo);

            $this->assertCategoryDefaultLocalized($productOneCategory, $title, $shortDescription, $longDescription);
            $this->assertCategoryDefaultLocalized($productTwoCategory, $title, $shortDescription, $longDescription);
        }

        if ($title === self::DEFAULT_SUBCATEGORY_TITLE) {
            $testProductFour = $this->getProductBySku(LoadProductData::PRODUCT_4);

            /** @var Category $productOneCategory */
            $productFourCategory = $this->getProductCategoryByProduct($testProductFour);

            $this->assertCategoryDefaultLocalized($productFourCategory, $title, $shortDescription, $longDescription);
        };
    }

    /**
     * @param Category $category
     * @param string $title
     * @param string $shortDescription
     * @param string $longDescription
     */
    protected function assertCategoryDefaultLocalized(Category $category, $title, $shortDescription, $longDescription)
    {
        $this->assertEquals($title, $category->getDefaultTitle());
        $this->assertEquals($shortDescription, $category->getDefaultShortDescription());
        $this->assertEquals($longDescription, $category->getDefaultLongDescription());
    }

    /**
     * @param array  $formValues
     * @param string $title
     * @param string $shortDescription
     * @param string $longDescription
     */
    protected function assertFormDefaultLocalized($formValues, $title, $shortDescription, $longDescription)
    {
        $this->assertEquals($title, $formValues['oro_catalog_category[titles][values][default]']);

        $this->assertEquals(
            $shortDescription,
            $formValues['oro_catalog_category[shortDescriptions][values][default]']
        );

        $this->assertEquals(
            $longDescription,
            $formValues['oro_catalog_category[longDescriptions][values][default]']
        );
    }

    /**
     * @param array  $formValues
     * @param string $title
     * @param string $shortDescription
     * @param string $longDescription
     */
    protected function assertLocalizedValues($formValues, $title, $shortDescription, $longDescription)
    {
        foreach ($this->localizations as $localization) {
            $this->assertEquals(
                $localization->getLanguageCode().$title,
                $formValues['oro_catalog_category[titles][values][localizations]['.$localization->getId().'][value]']
            );

            $locId = $localization->getId();

            $this->assertEquals(
                $localization->getLanguageCode().$shortDescription,
                $formValues['oro_catalog_category[shortDescriptions][values][localizations]['.$locId.'][value]']
            );

            $this->assertEquals(
                $localization->getLanguageCode().$longDescription,
                $formValues['oro_catalog_category[longDescriptions][values][localizations]['.$locId.'][value]']
            );
        }
    }

    /**
     * @param string $uri
     *
     * @return int
     */
    protected function getCategoryIdByUri($uri)
    {
        $router = $this->getContainer()->get('router');
        $parameters = $router->match($uri);

        $this->assertArrayHasKey('id', $parameters);

        return $parameters['id'];
    }

    /**
     * @param string $sku
     *
     * @return Product
     */
    protected function getProductBySku($sku)
    {
        return $this->getContainer()->get('doctrine')
            ->getRepository('OroProductBundle:Product')
            ->findOneBy(['sku' => $sku]);
    }

    /**
     * @param Product $product
     *
     * @return Category|null
     */
    protected function getProductCategoryByProduct(Product $product)
    {
        return $this->getContainer()->get('doctrine')
            ->getRepository('OroCatalogBundle:Category')
            ->findOneByProduct($product);
    }
}
