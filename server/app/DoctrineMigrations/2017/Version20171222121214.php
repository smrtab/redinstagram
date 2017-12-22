<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171222121214 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE girls DROP COLUMN content;');
        $this->addSql('CREATE SEQUENCE contents_id_seq;');
        $this->addSql('CREATE TABLE contents(
                              id integer NOT NULL DEFAULT nextval(\'contents_id_seq\'),
                              girl_id integer NOT NULL,
                              content character varying(1024) NOT NULL,
                              CONSTRAINT contents_pkey PRIMARY KEY (id));');
        $this->addSql('ALTER TABLE contents
                                ADD CONSTRAINT contents_girls_fk FOREIGN KEY (girl_id)
                                REFERENCES girls (id) ON DELETE CASCADE;');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contents');
        $this->addSql('DROP SEQUENCE contents_id_seq;');
    }
}
