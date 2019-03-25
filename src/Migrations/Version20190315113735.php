<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190315113735 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE zaznam CHANGE zmena_dielu zmena_dielu VARCHAR(255) NOT NULL, CHANGE zmena_skrutkovania zmena_skrutkovania VARCHAR(255) NOT NULL, CHANGE zmena_procesu zmena_procesu VARCHAR(255) NOT NULL, CHANGE zmena_bezpecnostneho_skrutkovania zmena_bezpecnostneho_skrutkovania VARCHAR(255) NOT NULL, CHANGE zmena_pracovneho_postupu zmena_pracovneho_postupu VARCHAR(255) NOT NULL, CHANGE pozadovane_kontroly pozadovane_kontroly VARCHAR(255) NOT NULL, CHANGE mnozstvo mnozstvo_dielov LONGTEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE zaznam CHANGE zmena_dielu zmena_dielu VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE zmena_skrutkovania zmena_skrutkovania VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE zmena_procesu zmena_procesu VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE zmena_bezpecnostneho_skrutkovania zmena_bezpecnostneho_skrutkovania VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE zmena_pracovneho_postupu zmena_pracovneho_postupu VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE pozadovane_kontroly pozadovane_kontroly VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE mnozstvo_dielov mnozstvo LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
