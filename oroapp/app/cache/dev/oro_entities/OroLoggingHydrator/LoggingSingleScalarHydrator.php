<?php
namespace OroLoggingHydrator;

class LoggingSingleScalarHydrator extends \Doctrine\ORM\Internal\Hydration\SingleScalarHydrator
{
    public function hydrateAll($stmt, $resultSetMapping, array $hints = [])
    {
        if ($logger = $this->_em->getConfiguration()->getAttribute('OrmProfilingLogger')) {
            $logger->startHydration('SingleScalarHydrator');
            $result = parent::hydrateAll($stmt, $resultSetMapping, $hints);
            $logger->stopHydration(count($result), $resultSetMapping->getAliasMap());
            return $result;
        }
        return parent::hydrateAll($stmt, $resultSetMapping, $hints);
    }
}