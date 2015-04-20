<?php

namespace Adit\ProjektBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtension;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ExtendExtensionAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class CreateProjectsEntityMigration implements ExtendExtensionAwareInterface, Migration
{
    private $extendExtension;

    public function setExtendExtension(ExtendExtension $extendExtension)
    {
        $this->extendExtension = $extendExtension;
    }
    /**
     * @inheritdoc
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        /**projectType table
         *id int
         *type string
         */
        $projectType = $schema->createTable('projectType');
        $projectType->addColumn('id', 'integer', ['autoincrement' => true]);
        $projectType->addColumn('type', 'string');
        $projectType->setPrimaryKey(['id']);
        
        /**projectStatus table
         *id int
         *status string
         */
        $projectStatus = $schema->createTable('projectStatus');
        $projectStatus->addColumn('id', 'integer', ['autoincrement' => true]);
        $projectStatus->addColumn('status', 'string');
        $projectStatus->setPrimaryKey(['id']);
        
        /**project table
         *id
         *name
         *typeId {ref projectType}
         *statusId {ref projectStatus}
         *completed
         */
        $project = $schema->createTable('project');
        $project->addColumn('id', 'integer', ['autoincrement' => true]);
        $project->addColumn('name', 'string');
        $project->addColumn('typeId', 'integer', ['notnull' => false]);
        $project->addForeignKeyConstraint(
            $schema->getTable('projectType'),
            ['typeId'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => null]
        );
        $project->addColumn('statusId', 'integer', ['notnull' => false]);
        $project->addForeignKeyConstraint(
            $schema->getTable('projectStatus'),
            ['statusId'],
            ['id'],
            ['onUpdate' => null, 'onDelete' => null]
        );
        $project->addColumn('completed', 'float', ['notnull' => false]);
        $project->addColumn('anticipatedExpenses', 'float', ['notnull' => false]);
        $project->addColumn('anticipatedRevenues', 'float', ['notnull' => false]);
        $project->setPrimaryKey(['id']);
        
        
    }
}