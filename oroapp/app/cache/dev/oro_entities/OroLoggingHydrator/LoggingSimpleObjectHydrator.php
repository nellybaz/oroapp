<?php
namespace OroLoggingHydrator;

class LoggingSimpleObjectHydrator extends \Doctrine\ORM\Internal\Hydration\SimpleObjectHydrator
{
    public function hydrateAll($stmt, $resultSetMapping, array $hints = [])
    {
        if ($logger = $this->_em->getConfiguration()->getAttribute('OrmProfilingLogger')) {
            $logger->startHydration('SimpleObjectHydrator');
            $result = parent::hydrateAll($stmt, $resultSetMapping, $hints);
            $logger->stopHydration(count($result), $resultSetMapping->getAliasMap());
            return $result;
        }
        return parent::hydrateAll($stmt, $resultSetMapping, $hints);
    }
}