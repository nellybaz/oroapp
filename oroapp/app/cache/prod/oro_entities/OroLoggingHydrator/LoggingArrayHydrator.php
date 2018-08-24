<?php
namespace OroLoggingHydrator;

class LoggingArrayHydrator extends \Doctrine\ORM\Internal\Hydration\ArrayHydrator
{
    public function hydrateAll($stmt, $resultSetMapping, array $hints = [])
    {
        if ($logger = $this->_em->getConfiguration()->getAttribute('OrmProfilingLogger')) {
            $logger->startHydration('ArrayHydrator');
            $result = parent::hydrateAll($stmt, $resultSetMapping, $hints);
            $logger->stopHydration(count($result), $resultSetMapping->getAliasMap());
            return $result;
        }
        return parent::hydrateAll($stmt, $resultSetMapping, $hints);
    }
}