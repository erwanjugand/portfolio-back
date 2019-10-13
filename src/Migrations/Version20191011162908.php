<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191011162908 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE work_work_filter (work_id INT NOT NULL, work_filter_id INT NOT NULL, INDEX IDX_CBFC79FCBB3453DB (work_id), INDEX IDX_CBFC79FCB19D1A0B (work_filter_id), PRIMARY KEY(work_id, work_filter_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE work_work_filter ADD CONSTRAINT FK_CBFC79FCBB3453DB FOREIGN KEY (work_id) REFERENCES work (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE work_work_filter ADD CONSTRAINT FK_CBFC79FCB19D1A0B FOREIGN KEY (work_filter_id) REFERENCES work_filter (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill CHANGE created created DATETIME NOT NULL, CHANGE updated updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE created created DATETIME NOT NULL, CHANGE updated updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE work CHANGE date_realization date_realization DATETIME NOT NULL, CHANGE created created DATETIME NOT NULL, CHANGE updated updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE work_filter CHANGE created created DATETIME NOT NULL, CHANGE updated updated DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE work_work_filter');
        $this->addSql('ALTER TABLE skill CHANGE created created DATETIME DEFAULT \'2019-01-01 01:01:01\' NOT NULL, CHANGE updated updated DATETIME DEFAULT \'2019-01-01 01:01:01\' NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE created created DATETIME DEFAULT \'2019-01-01 01:01:01\' NOT NULL, CHANGE updated updated DATETIME DEFAULT \'2019-01-01 01:01:01\' NOT NULL');
        $this->addSql('ALTER TABLE work CHANGE date_realization date_realization DATETIME DEFAULT \'2019-01-01 01:01:01\' NOT NULL, CHANGE created created DATETIME DEFAULT \'2019-01-01 01:01:01\' NOT NULL, CHANGE updated updated DATETIME DEFAULT \'2019-01-01 01:01:01\' NOT NULL');
        $this->addSql('ALTER TABLE work_filter CHANGE created created DATETIME DEFAULT \'2019-01-01 01:01:01\' NOT NULL, CHANGE updated updated DATETIME DEFAULT \'2019-01-01 01:01:01\' NOT NULL');
    }
}
