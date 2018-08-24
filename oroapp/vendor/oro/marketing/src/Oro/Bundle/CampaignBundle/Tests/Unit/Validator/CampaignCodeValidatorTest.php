<?php

namespace Oro\Bundle\CampaignBundle\Tests\Unit\Validator;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Violation\ConstraintViolationBuilderInterface;

use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\CampaignBundle\Entity\Campaign;
use Oro\Bundle\CampaignBundle\Entity\CampaignCodeHistory;
use Oro\Bundle\CampaignBundle\Entity\Repository\CampaignRepository;
use Oro\Bundle\CampaignBundle\Validator\CampaignCodeValidator;

class CampaignCodeValidatorTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $registry;

    /**
     * @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $translator;

    /**
     * @var Constraint|\PHPUnit_Framework_MockObject_MockObject $constraint
     */
    protected $constraint;

    /**
     * @var CampaignCodeValidator
     */
    protected $validator;

    protected function setUp()
    {
        $this->registry = $this->createMock(ManagerRegistry::class);
        $this->translator = $this->createMock(TranslatorInterface::class);
        $this->constraint = $this->getMockBuilder(Constraint::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->validator = new CampaignCodeValidator($this->registry, $this->translator);
    }

    public function testValidateIncorrectInstance()
    {
        $value = new \stdClass();

        $this->registry->expects($this->never())
            ->method($this->anything());

        $this->validator->validate($value, $this->constraint);
    }

    public function testValidatePassed()
    {
        $codeHistory = $this->getCampaignCodeHistory();

        $repository = $this->getMockBuilder(CampaignRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->registry->expects($this->once())
            ->method('getRepository')
            ->with('OroCampaignBundle:CampaignCodeHistory')
            ->willReturn($repository);
        $repository->expects($this->once())
            ->method('findOneBy')
            ->with(['code' => 'test'])
            ->willReturn($codeHistory);

        $value = $this->getMockBuilder(Campaign::class)
            ->disableOriginalConstructor()
            ->getMock();
        $value->expects($this->once())
            ->method('getCode')
            ->willReturn('test');
        $value->expects($this->once())
            ->method('getId')
            ->willReturn('1');

        /** @var ExecutionContextInterface|\PHPUnit_Framework_MockObject_MockObject $context */
        $context = $this->createMock(ExecutionContextInterface::class);
        $context->expects($this->never())
            ->method($this->anything());

        $this->validator->initialize($context);
        $this->validator->validate($value, $this->constraint);
    }

    public function testValidateFailed()
    {
        $codeHistory = $this->getCampaignCodeHistory();

        $repository = $this->getMockBuilder(CampaignRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->registry->expects($this->once())
            ->method('getRepository')
            ->with('OroCampaignBundle:CampaignCodeHistory')
            ->willReturn($repository);
        $repository->expects($this->once())
            ->method('findOneBy')
            ->with(['code' => 'test'])
            ->willReturn($codeHistory);

        $value = $this->getMockBuilder(Campaign::class)
            ->disableOriginalConstructor()
            ->getMock();
        $value->expects($this->once())
            ->method('getCode')
            ->willReturn('test');
        $value->expects($this->once())
            ->method('getId')
            ->willReturn('2');

        /** @var ExecutionContextInterface|\PHPUnit_Framework_MockObject_MockObject $context */
        $context = $this->createMock(ExecutionContextInterface::class);
        $violation = $this->createMock(ConstraintViolationBuilderInterface::class);
        $context->expects($this->once())
            ->method('buildViolation')
            ->with($this->constraint->message)
            ->willReturn($violation);
        $violation->expects($this->once())
            ->method('atPath')
            ->with('code')
            ->willReturnSelf();
        $violation->expects($this->once())
            ->method('addViolation');

        $this->validator->initialize($context);
        $this->validator->validate($value, $this->constraint);
    }

    public function testValidateCodeHistoryNotFound()
    {
        $repository = $this->getMockBuilder(CampaignRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->registry->expects($this->once())
            ->method('getRepository')
            ->with('OroCampaignBundle:CampaignCodeHistory')
            ->willReturn($repository);
        $repository->expects($this->once())
            ->method('findOneBy')
            ->with(['code' => 'test'])
            ->willReturn(null);

        $value = $this->getMockBuilder(Campaign::class)
            ->disableOriginalConstructor()
            ->getMock();
        $value->expects($this->once())
            ->method('getCode')
            ->willReturn('test');

        /** @var ExecutionContextInterface|\PHPUnit_Framework_MockObject_MockObject $context */
        $context = $this->createMock(ExecutionContextInterface::class);
        $context->expects($this->never())
            ->method($this->anything());

        $this->validator->initialize($context);
        $this->validator->validate($value, $this->constraint);
    }

    /**
     * @return CampaignCodeHistory|object
     */
    public function getCampaignCodeHistory()
    {
        return $this->getEntity(
            'Oro\Bundle\CampaignBundle\Entity\CampaignCodeHistory',
            [
                'id' => 1,
                'campaign' => $this->getEntity('Oro\Bundle\CampaignBundle\Entity\Campaign', ['id' => 1]),
                'code' => 'test'
            ]
        );
    }
}
