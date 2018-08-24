<?php
namespace OroLoggingHydrator;

class LoggingTranslatableSimpleObjectHydrator extends \Gedmo\Translatable\Hydrator\ORM\SimpleObjectHydrator
{
    public function hydrateAll($stmt, $resultSetMapping, array $hints = [])
    {
        if ($logger = $this->_em->getConfiguration()->getAttribute('OrmProfilingLogger')) {
            $logger->startHydration('TranslatableSimpleObjectHydrator');
            $result = parent::hydrateAll($stmt, $resultSetMapping, $hints);
            $logger->stopHydration(count($result), $resultSetMapping->getAliasMap());
            return $result;
        }
        return parent::hydrateAll($stmt, $resultSetMapping, $hints);
    }
}