<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150413091653 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE project ADD anticipatedExpenses DOUBLE PRECISION NOT NULL, ADD anticipatedRevenues DOUBLE PRECISION NOT NULL, CHANGE completed completed DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE oro_search_index_text ADD CONSTRAINT FK_A0243539126F525E FOREIGN KEY (item_id) REFERENCES oro_search_item (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE oro_search_index_text DROP FOREIGN KEY FK_A0243539126F525E');
        $this->addSql('ALTER TABLE project DROP anticipatedExpenses, DROP anticipatedRevenues, CHANGE completed completed DOUBLE PRECISION DEFAULT NULL');
    }
}
