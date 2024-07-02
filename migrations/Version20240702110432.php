<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240702110432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD prix_achat DOUBLE PRECISION NOT NULL, CHANGE id_type id_type INT DEFAULT NULL, CHANGE nom_article nom_article VARCHAR(255) NOT NULL, CHANGE volume volume DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP prix_achat, CHANGE nom_article nom_article VARCHAR(50) NOT NULL, CHANGE volume volume INT NOT NULL, CHANGE id_type id_type INT NOT NULL');
    }
}
