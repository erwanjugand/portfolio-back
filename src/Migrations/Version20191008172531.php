<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191008172531 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE experience ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL, ADD description VARCHAR(255) NOT NULL, ADD date_realization DATETIME NOT NULL');
        $this->addSql('ALTER TABLE skill ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE user ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE work ADD description VARCHAR(1023) NOT NULL, ADD date_realization DATETIME NOT NULL, ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE work_filter ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE experience DROP created, DROP updated, DROP description, DROP date_realization');
        $this->addSql('ALTER TABLE skill DROP created, DROP updated');
        $this->addSql('ALTER TABLE user DROP created, DROP updated');
        $this->addSql('ALTER TABLE work DROP description, DROP date_realization, DROP created, DROP updated');
        $this->addSql('ALTER TABLE work_filter DROP created, DROP updated');
    }
}
