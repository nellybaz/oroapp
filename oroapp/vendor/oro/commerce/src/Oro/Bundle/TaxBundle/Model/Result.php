<?php

namespace Oro\Bundle\TaxBundle\Model;

final class Result extends AbstractResult implements \JsonSerializable
{
    const TOTAL = 'total';
    const SHIPPING = 'shipping';

    const UNIT = 'unit';
    const ROW = 'row';

    const TAXES = 'taxes';
    const ITEMS = 'items';

    /**
     * @var bool
     */
    protected $resultLocked = false;

    /**
     * Creates new Result object from serialized data
     * @param array|null $serialized
     * @return Result
     * @throws \InvalidArgumentException
     */
    public static function jsonDeserialize($serialized)
    {
        if ($serialized === null) {
            return new self();
        } elseif (!is_array($serialized)) {
            throw new \InvalidArgumentException('You cannot deserialize Result from anything, except array or null');
        }

        $result = new self($serialized);
        $result->deserializeAsResultElement(self::TOTAL, $serialized);
        $result->deserializeAsResultElement(self::SHIPPING, $serialized);
        $result->deserializeAsResultElement(self::UNIT, $serialized);
        $result->deserializeAsResultElement(self::ROW, $serialized);
        $result->deserializeTaxesAsTaxResultElement($serialized);

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        // Prevent original object modifying
        $that = clone $this;

        $that->prepareToSerialization();

        return $that->getArrayCopy();
    }

    /**
     * @return ResultElement
     */
    public function getTotal()
    {
        return $this->getOffset(self::TOTAL, new ResultElement());
    }

    /**
     * @return ResultElement
     */
    public function getShipping()
    {
        return $this->getOffset(self::SHIPPING, new ResultElement());
    }

    /**
     * @return ResultElement
     */
    public function getUnit()
    {
        return $this->getOffset(self::UNIT, new ResultElement());
    }

    /**
     * @return ResultElement
     */
    public function getRow()
    {
        return $this->getOffset(self::ROW, new ResultElement());
    }

    /**
     * @return TaxResultElement[]
     */
    public function getTaxes()
    {
        return $this->getOffset(self::TAXES, []);
    }

    /**
     * @return Result[]
     */
    public function getItems()
    {
        return $this->getOffset(self::ITEMS, []);
    }

    /** {@inheritdoc} */
    public function serialize()
    {
        // Prevent original object modifying
        $that = clone $this;

        $that->prepareToSerialization();

        return $that->parentSerialize();
    }

    /**
     * Proxy method to call parent serialization
     *
     * @return string
     */
    private function parentSerialize()
    {
        return parent::serialize();
    }

    public function lockResult()
    {
        $this->resultLocked = true;
    }

    public function unlockResult()
    {
        $this->resultLocked = false;
    }

    /**
     * @return bool
     */
    public function isResultLocked()
    {
        return $this->resultLocked;
    }

    /**
     * @param string $key
     * @param array $serialized
     */
    protected function deserializeAsResultElement($key, array $serialized)
    {
        if (isset($serialized[$key]) && is_array($serialized[$key])) {
            $this->offsetSet($key, new ResultElement($serialized[$key]));
        }
    }

    protected function prepareToSerialization()
    {
        // Remove items because they are shouldn't be serialized
        if ($this->offsetExists(self::ITEMS)) {
            $this->unsetOffset(self::ITEMS);
        }

        // Reset state of resultLocked
        $this->unlockResult();
    }

    /**
     * @param array $serialized
     */
    protected function deserializeTaxesAsTaxResultElement(array $serialized)
    {
        if (isset($serialized[self::TAXES]) && is_array($serialized[self::TAXES])) {
            $taxes = [];
            foreach ($serialized[self::TAXES] as $key => $serializedTaxData) {
                $taxes[$key] = new TaxResultElement($serializedTaxData);
            }
            $this->offsetSet(self::TAXES, $taxes);
        }
    }
}
