<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210513150559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, montant_facture DOUBLE PRECISION NOT NULL, num_facture INT NOT NULL, apercu VARCHAR(191) DEFAULT NULL, statut_facture VARCHAR(191) NOT NULL, envoye_le DATETIME DEFAULT NULL, modifie_le DATETIME DEFAULT NULL, supprimer_le DATETIME DEFAULT NULL, INDEX IDX_FE866410A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE galerie (id INT AUTO_INCREMENT NOT NULL, propriete_id INT DEFAULT NULL, url VARCHAR(191) NOT NULL, caption VARCHAR(191) NOT NULL, INDEX IDX_9E7D159018566CAF (propriete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE package (id INT AUTO_INCREMENT NOT NULL, type_package_id INT DEFAULT NULL, nom_package VARCHAR(191) NOT NULL, prix_package DOUBLE PRECISION NOT NULL, date_expiration DATETIME NOT NULL, nbr_propriete INT NOT NULL, nb_vedet_prop INT NOT NULL, des_prop VARCHAR(191) NOT NULL, etat TINYINT(1) NOT NULL, INDEX IDX_DE686795E94F7DDA (type_package_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE propriete (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, nom_propriete VARCHAR(191) NOT NULL, des_propriete VARCHAR(191) NOT NULL, adr_propriete VARCHAR(191) DEFAULT NULL, localisation VARCHAR(191) NOT NULL, ville VARCHAR(191) NOT NULL, etat TINYINT(1) DEFAULT NULL, commune VARCHAR(191) DEFAULT NULL, date_ajout DATETIME DEFAULT NULL, date_modif_propriete DATETIME DEFAULT NULL, superficie VARCHAR(191) NOT NULL, statut VARCHAR(191) NOT NULL, photo_propriete VARCHAR(191) DEFAULT NULL, video VARCHAR(191) DEFAULT NULL, tour_virtuel VARCHAR(191) DEFAULT NULL, walkscore VARCHAR(191) DEFAULT NULL, requete VARCHAR(191) DEFAULT NULL, vues INT DEFAULT NULL, nbr_piece INT NOT NULL, salle_eau INT NOT NULL, piscine VARCHAR(191) DEFAULT NULL, panneau_solaire VARCHAR(191) DEFAULT NULL, garage VARCHAR(191) DEFAULT NULL, type VARCHAR(191) NOT NULL, spa TINYINT(1) DEFAULT NULL, prix INT NOT NULL, INDEX IDX_73A85B93A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_package (id INT AUTO_INCREMENT NOT NULL, nom_type_package VARCHAR(191) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, package_id INT NOT NULL, email VARCHAR(180) NOT NULL, nom VARCHAR(191) NOT NULL, prenom VARCHAR(191) NOT NULL, adresse VARCHAR(191) NOT NULL, telephone VARCHAR(191) NOT NULL, logo VARCHAR(191) NOT NULL, cote INT NOT NULL, accreditation VARCHAR(191) NOT NULL, etat TINYINT(1) DEFAULT NULL, date_creation DATETIME DEFAULT NULL, date_modification DATETIME DEFAULT NULL, date_suppression DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649F44CABFF (package_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE866410A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE galerie ADD CONSTRAINT FK_9E7D159018566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
        $this->addSql('ALTER TABLE package ADD CONSTRAINT FK_DE686795E94F7DDA FOREIGN KEY (type_package_id) REFERENCES type_package (id)');
        $this->addSql('ALTER TABLE propriete ADD CONSTRAINT FK_73A85B93A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F44CABFF FOREIGN KEY (package_id) REFERENCES package (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F44CABFF');
        $this->addSql('ALTER TABLE galerie DROP FOREIGN KEY FK_9E7D159018566CAF');
        $this->addSql('ALTER TABLE package DROP FOREIGN KEY FK_DE686795E94F7DDA');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE866410A76ED395');
        $this->addSql('ALTER TABLE propriete DROP FOREIGN KEY FK_73A85B93A76ED395');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE galerie');
        $this->addSql('DROP TABLE package');
        $this->addSql('DROP TABLE propriete');
        $this->addSql('DROP TABLE type_package');
        $this->addSql('DROP TABLE user');
    }
}
