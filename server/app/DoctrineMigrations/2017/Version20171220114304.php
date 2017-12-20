<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171220114304 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE categories_id_seq;');
        $this->addSql('CREATE TABLE categories(
                              id integer NOT NULL DEFAULT nextval(\'categories_id_seq\'),
                              name character varying(512) NOT NULL,
                              CONSTRAINT categories_pkey PRIMARY KEY (id));');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP SEQUENCE categories_id_seq;');
    }
}
