<?php

namespace Oro\Component\Layout\Tests\Unit\Block;

use Oro\Component\Layout\ImportLayoutManipulator;
use Oro\Component\Layout\LayoutManipulatorInterface;
use Oro\Component\Layout\Model\LayoutUpdateImport;

class ImportLayoutManipulatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ImportLayoutManipulator
     */
    protected $importLayoutManipulator;

    /**
     * @var LayoutUpdateImport|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $import;

    /**
     * @var LayoutManipulatorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $layoutManipulator;

    public function setUp()
    {
        $this->layoutManipulator = $this->createMock(LayoutManipulatorInterface::class);
        $this->import = $this->getImportMock('import_id', 'import_root', 'import_namespace');
        $this->importLayoutManipulator = new ImportLayoutManipulator($this->layoutManipulator, $this->import);
    }

    /**
     * Replace in parentId and siblingId
     */
    public function testAddWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('add')
            ->with('__root', 'import_root', 'block', [], 'import_root');

        $this->importLayoutManipulator->add('__root', '__root', 'block', [], '__root');
    }

    /**
     * Replace in id, parentId and siblingId
     */
    public function testAddWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('add')
            ->with(
                'import_namespace_id',
                'import_namespace_parentId',
                'block',
                [
                    'additional_block_prefixes' => ['__import_id__id']
                ],
                'import_namespace_siblingId'
            );

        $this->importLayoutManipulator->add('__id', '__parentId', 'block', [], '__siblingId');
    }

    /**
     * Replace in id, parentId and siblingId
     */
    public function testAddWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('add')
            ->with(
                'parent_import_namespace_import_namespace_id',
                'parent_import_namespace_import_namespace_parentId',
                'block',
                [
                    'additional_block_prefixes' => ['__import_id__id', '__parent_import_id__id']
                ],
                'parent_import_namespace_import_namespace_siblingId'
            );

        $this->importLayoutManipulator->add('__id', '__parentId', 'block', [], '__siblingId');
    }

    /**
     * Replace in id
     */
    public function testRemoveWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('remove')
            ->with('import_root');

        $this->importLayoutManipulator->remove('__root');
    }

    /**
     * Replace in id
     */
    public function testRemoveWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('remove')
            ->with('import_namespace_id');

        $this->importLayoutManipulator->remove('__id');
    }

    /**
     * Replace in id
     */
    public function testRemoveWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('remove')
            ->with('parent_import_namespace_import_namespace_id');

        $this->importLayoutManipulator->remove('__id');
    }


    /**
     * Replace in id, parentId and siblingId
     */
    public function testMoveWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('move')
            ->with('import_root', 'import_root', 'import_root', true);

        $this->importLayoutManipulator->move('__root', '__root', '__root', true);
    }

    /**
     * Replace in id, parentId and siblingId
     */
    public function testMoveWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('move')
            ->with('import_namespace_id', 'import_namespace_parentId', 'import_namespace_siblingId');

        $this->importLayoutManipulator->move('__id', '__parentId', '__siblingId');
    }

    /**
     * Replace in id, parentId and siblingId
     */
    public function testMoveWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('move')
            ->with(
                'parent_import_namespace_import_namespace_id',
                'parent_import_namespace_import_namespace_parentId',
                'parent_import_namespace_import_namespace_siblingId'
            );

        $this->importLayoutManipulator->move('__id', '__parentId', '__siblingId');
    }

    /**
     * Replace in id
     */
    public function testAddAliasWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('addAlias')
            ->with('__root', 'import_root');

        $this->importLayoutManipulator->addAlias('__root', '__root');
    }

    /**
     * Replace in id and alias
     */
    public function testAddAliasWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('addAlias')
            ->with('import_namespace_alias', 'import_namespace_id');

        $this->importLayoutManipulator->addAlias('__alias', '__id');
    }

    /**
     * Replace in id and alias
     */
    public function testAddAliasWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('addAlias')
            ->with('parent_import_namespace_import_namespace_alias', 'parent_import_namespace_import_namespace_id');

        $this->importLayoutManipulator->addAlias('__alias', '__id');
    }

    /**
     * Replace nothing
     */
    public function testRemoveAliasWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('removeAlias')
            ->with('__root');

        $this->importLayoutManipulator->removeAlias('__root');
    }

    /**
     * Replace in alias
     */
    public function testRemoveAliasWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('removeAlias')
            ->with('import_namespace_alias');

        $this->importLayoutManipulator->removeAlias('__alias');
    }

    /**
     * Replace in alias
     */
    public function testRemoveAliasWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('removeAlias')
            ->with('parent_import_namespace_import_namespace_alias');

        $this->importLayoutManipulator->removeAlias('__alias');
    }

    /**
     * Replace in id
     */
    public function testSetOptionWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('setOption')
            ->with('import_root', 'optionName', 'optionValue');

        $this->importLayoutManipulator->setOption('__root', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testSetOptionWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('setOption')
            ->with('import_namespace_id', 'optionName', 'optionValue');

        $this->importLayoutManipulator->setOption('__id', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testSetOptionWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('setOption')
            ->with('parent_import_namespace_import_namespace_id', 'optionName', 'optionValue');

        $this->importLayoutManipulator->setOption('__id', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testAppendOptionWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('appendOption')
            ->with('import_root', 'optionName', 'optionValue');

        $this->importLayoutManipulator->appendOption('__root', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testAppendOptionWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('appendOption')
            ->with('import_namespace_id', 'optionName', 'optionValue');

        $this->importLayoutManipulator->appendOption('__id', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testAppendOptionWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('appendOption')
            ->with('parent_import_namespace_import_namespace_id', 'optionName', 'optionValue');

        $this->importLayoutManipulator->appendOption('__id', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testSubtractOptionWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('subtractOption')
            ->with('import_root', 'optionName', 'optionValue');

        $this->importLayoutManipulator->subtractOption('__root', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testSubtractOptionWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('subtractOption')
            ->with('import_namespace_id', 'optionName', 'optionValue');

        $this->importLayoutManipulator->subtractOption('__id', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testSubtractOptionWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('subtractOption')
            ->with('parent_import_namespace_import_namespace_id', 'optionName', 'optionValue');

        $this->importLayoutManipulator->subtractOption('__id', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testReplaceOptionWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('replaceOption')
            ->with('import_root', 'optionName', 'optionValue', 'newOptionValue');

        $this->importLayoutManipulator->replaceOption('__root', 'optionName', 'optionValue', 'newOptionValue');
    }

    /**
     * Replace in id
     */
    public function testReplaceOptionWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('replaceOption')
            ->with('import_namespace_id', 'optionName', 'optionValue', 'newOptionValue');

        $this->importLayoutManipulator->replaceOption('__id', 'optionName', 'optionValue', 'newOptionValue');
    }

    /**
     * Replace in id
     */
    public function testReplaceOptionWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('replaceOption')
            ->with('parent_import_namespace_import_namespace_id', 'optionName', 'optionValue', 'newOptionValue');

        $this->importLayoutManipulator->replaceOption('__id', 'optionName', 'optionValue', 'newOptionValue');
    }

    /**
     * Replace in id
     */
    public function testRemoveOptionWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('removeOption')
            ->with('import_root', 'optionName');

        $this->importLayoutManipulator->removeOption('__root', 'optionName');
    }

    /**
     * Replace in id
     */
    public function testRemoveOptionWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('removeOption')
            ->with('import_namespace_id', 'optionName');

        $this->importLayoutManipulator->removeOption('__id', 'optionName');
    }

    /**
     * Replace in id
     */
    public function testRemoveOptionWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('removeOption')
            ->with('parent_import_namespace_import_namespace_id', 'optionName');

        $this->importLayoutManipulator->removeOption('__id', 'optionName');
    }

    /**
     * Replace in id
     */
    public function testChangeBlockTypeWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('changeBlockType')
            ->with('import_root', 'container');

        $this->importLayoutManipulator->changeBlockType('__root', 'container');
    }

    /**
     * Replace in id
     */
    public function testChangeBlockTypeWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('changeBlockType')
            ->with('import_namespace_id', 'optionName', 'optionValue');

        $this->importLayoutManipulator->changeBlockType('__id', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testChangeBlockTypeWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('changeBlockType')
            ->with('parent_import_namespace_import_namespace_id', 'optionName', 'optionValue');

        $this->importLayoutManipulator->changeBlockType('__id', 'optionName', 'optionValue');
    }

    /**
     * Replace in id
     */
    public function testSetBlockThemeWithRoot()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('setBlockTheme')
            ->with('block_theme', 'import_root');

        $this->importLayoutManipulator->setBlockTheme('block_theme', '__root');
    }

    /**
     * Replace in id
     */
    public function testSetBlockThemeWithNamespace()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('setBlockTheme')
            ->with('block_theme', 'import_namespace_id');

        $this->importLayoutManipulator->setBlockTheme('block_theme', '__id');
    }

    /**
     * Replace in id
     */
    public function testSetBlockThemeWithParent()
    {
        $parentImport = $this->getImportMock('parent_import_id', 'parent_import_root', 'parent_import_namespace');
        $this->import
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnValue($parentImport));

        $this->layoutManipulator->expects($this->once())
            ->method('setBlockTheme')
            ->with('block_theme', 'parent_import_namespace_import_namespace_id');

        $this->importLayoutManipulator->setBlockTheme('block_theme', '__id');
    }

    /**
     * Replace in id
     */
    public function testSetFormTheme()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('setFormTheme')
            ->with('form_theme');

        $this->importLayoutManipulator->setFormTheme('form_theme');
    }

    /**
     * Replace in id
     */
    public function testClear()
    {
        $this->layoutManipulator->expects($this->once())
            ->method('clear');

        $this->importLayoutManipulator->clear();
    }

    /**
     * @param string $id
     * @param string $root
     * @param string $namespace
     *
     * @return LayoutUpdateImport|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getImportMock($id, $root, $namespace)
    {
        $import = $this->createMock(LayoutUpdateImport::class);
        $import->expects($this->any())
            ->method('getId')
            ->will($this->returnValue($id));
        $import->expects($this->any())
            ->method('getRoot')
            ->will($this->returnValue($root));
        $import->expects($this->any())
            ->method('getNamespace')
            ->will($this->returnValue($namespace));

        return $import;
    }
}
