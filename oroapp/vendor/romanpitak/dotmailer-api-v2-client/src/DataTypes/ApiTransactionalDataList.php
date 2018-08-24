<?php
/**
 *
 *
 * @author Roman Piták <roman@pitak.net>
 *
 */


namespace DotMailer\Api\DataTypes;


final class ApiTransactionalDataList extends JsonArray
{

    protected function getDataClass()
    {
        return 'ApiTransactionalData';
    }
}
