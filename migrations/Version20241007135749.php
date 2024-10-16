<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241007135749 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP INDEX `primary` ON album_style');
        $this->addSql('ALTER TABLE album_style ADD PRIMARY KEY (album_id, style_id)');
        $this->addSql('ALTER TABLE album_style RENAME INDEX idx_f34d20b81137abcf TO IDX_4505F24C1137ABCF');
        $this->addSql('ALTER TABLE album_style RENAME INDEX idx_f34d20b8bacd6074 TO IDX_4505F24CBACD6074');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX `PRIMARY` ON album_style');
        $this->addSql('ALTER TABLE album_style ADD PRIMARY KEY (style_id, album_id)');
        $this->addSql('ALTER TABLE album_style RENAME INDEX idx_4505f24c1137abcf TO IDX_F34D20B81137ABCF');
        $this->addSql('ALTER TABLE album_style RENAME INDEX idx_4505f24cbacd6074 TO IDX_F34D20B8BACD6074');
    }
}
