<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171220114830 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category_girl(
                              girl_id integer NOT NULL,
                              category_id integer NOT NULL,
                              CONSTRAINT category_girl_pkey PRIMARY KEY (girl_id, category_id));');
        $this->addSql('ALTER TABLE category_girl
                                ADD CONSTRAINT category_girl_girls_fk FOREIGN KEY (girl_id)
                                REFERENCES girls (id) ON DELETE CASCADE;');
        $this->addSql('ALTER TABLE category_girl
                                ADD CONSTRAINT category_girl_categories_fk FOREIGN KEY (category_id)
                                REFERENCES categories (id) ON DELETE CASCADE;');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category_girl');
    }
}
