<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171219085456 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE girls_id_seq;');
        $this->addSql('CREATE TABLE girls(
                              id id NOT NULL DEFAULT nextval(\'girls_id_seq\'),
                              name character varying(512) NOT NULL,
                              tag character varying(512) NOT NULL,
                              description text,
                              preview character varying(255)
                              CONSTRAINT girls_pkey PRIMARY KEY (id),
                              CONSTRAINT girls_tag_unique UNIQUE (tag));');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
