<?php
namespace OroLoggingHydrator;

class LoggingScalarHydrator extends \Doctrine\ORM\Internal\Hydration\ScalarHydrator
{
    public function hydrateAll($stmt, $resultSetMapping, array $hints = [])
    {
        if ($logger = $this->_em->getConfiguration()->getAttribute('OrmProfilingLogger')) {
            $logger->startHydration('ScalarHydrator');
            $result = parent::hydrateAll($stmt, $resultSetMapping, $hints);
            $logger->stopHydration(count($result), $resultSetMapping->getAliasMap());
            return $result;
        }
        return parent::hydrateAll($stmt, $resultSetMapping, $hints);
    }
}