<?php

namespace Acme\ProjektBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtension;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtensionAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class CreateProjectsEntityMigration implements ExtendExtensionAwareInterface, Migration
{
    private $extendExtension;
    
    public function setExtendExtension (ExtendExtension $extendExtension)
    {
        $this->extendExtension = $extendExtension;
    }
    
    public function up(Schema $schema, QueryBag $queries)
    {
        
    }
}
