<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220715184944 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant_review ADD restaurant_id INT NOT NULL');
        $this->addSql('ALTER TABLE restaurant_review ADD CONSTRAINT FK_88DD7E37B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_88DD7E37B1E7706E ON restaurant_review (restaurant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE restaurant_review DROP CONSTRAINT FK_88DD7E37B1E7706E');
        $this->addSql('DROP INDEX IDX_88DD7E37B1E7706E');
        $this->addSql('ALTER TABLE restaurant_review DROP restaurant_id');
    }
}
