<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220716185137 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE address_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE dish_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "order_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE order_details_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE order_product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE page_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE restaurant_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE restaurant_review_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE user_profile_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE address (id INT NOT NULL, country VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, street VARCHAR(255) NOT NULL, building VARCHAR(255) NOT NULL, office VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE category (id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(1024) NOT NULL, image VARCHAR(1024) DEFAULT NULL, status VARCHAR(1) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE dish (id INT NOT NULL, restaurant_id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(1024) NOT NULL, price INT NOT NULL, weight INT NOT NULL, image VARCHAR(1024) DEFAULT NULL, status VARCHAR(1) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_957D8CB8B1E7706E ON dish (restaurant_id)');
        $this->addSql('CREATE TABLE dish_category (dish_id INT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(dish_id, category_id))');
        $this->addSql('CREATE INDEX IDX_1FB098AA148EB0CB ON dish_category (dish_id)');
        $this->addSql('CREATE INDEX IDX_1FB098AA12469DE2 ON dish_category (category_id)');
        $this->addSql('CREATE TABLE "order" (id INT NOT NULL, customer_id INT NOT NULL, total INT NOT NULL, delivery_total INT NOT NULL, status VARCHAR(1) NOT NULL, created TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_F52993989395C3F3 ON "order" (customer_id)');
        $this->addSql('CREATE TABLE order_details (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE order_product (id INT NOT NULL, dorder_id INT NOT NULL, dish_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_2530ADE6F3B7657 ON order_product (dorder_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2530ADE6148EB0CB ON order_product (dish_id)');
        $this->addSql('CREATE TABLE page (id INT NOT NULL, title VARCHAR(255) NOT NULL, text VARCHAR(4096) NOT NULL, created TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, status VARCHAR(1) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE restaurant (id INT NOT NULL, address_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(2048) NOT NULL, status VARCHAR(1) NOT NULL, work_time VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_EB95123FF5B7AF75 ON restaurant (address_id)');
        $this->addSql('CREATE TABLE restaurant_review (id INT NOT NULL, reviewer_id INT NOT NULL, restaurant_id INT NOT NULL, rating DOUBLE PRECISION NOT NULL, updated TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, created TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, text VARCHAR(2048) NOT NULL, title VARCHAR(255) NOT NULL, status VARCHAR(1) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_88DD7E3770574616 ON restaurant_review (reviewer_id)');
        $this->addSql('CREATE INDEX IDX_88DD7E37B1E7706E ON restaurant_review (restaurant_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, type VARCHAR(1) NOT NULL, status VARCHAR(1) NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, updated TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, created TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        $this->addSql('COMMENT ON COLUMN "user".created IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE user_profile (id INT NOT NULL, consumer_id INT NOT NULL, phone VARCHAR(64) DEFAULT NULL, email VARCHAR(64) DEFAULT NULL, country VARCHAR(2) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D95AB40537FDBD6D ON user_profile (consumer_id)');
        $this->addSql('CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
            BEGIN
                PERFORM pg_notify(\'messenger_messages\', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$ LANGUAGE plpgsql;');
        $this->addSql('DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;');
        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();');
        $this->addSql('ALTER TABLE dish ADD CONSTRAINT FK_957D8CB8B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dish_category ADD CONSTRAINT FK_1FB098AA148EB0CB FOREIGN KEY (dish_id) REFERENCES dish (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dish_category ADD CONSTRAINT FK_1FB098AA12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "order" ADD CONSTRAINT FK_F52993989395C3F3 FOREIGN KEY (customer_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE order_product ADD CONSTRAINT FK_2530ADE6F3B7657 FOREIGN KEY (dorder_id) REFERENCES "order" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE order_product ADD CONSTRAINT FK_2530ADE6148EB0CB FOREIGN KEY (dish_id) REFERENCES dish (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE restaurant ADD CONSTRAINT FK_EB95123FF5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE restaurant_review ADD CONSTRAINT FK_88DD7E3770574616 FOREIGN KEY (reviewer_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE restaurant_review ADD CONSTRAINT FK_88DD7E37B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_profile ADD CONSTRAINT FK_D95AB40537FDBD6D FOREIGN KEY (consumer_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE restaurant DROP CONSTRAINT FK_EB95123FF5B7AF75');
        $this->addSql('ALTER TABLE dish_category DROP CONSTRAINT FK_1FB098AA12469DE2');
        $this->addSql('ALTER TABLE dish_category DROP CONSTRAINT FK_1FB098AA148EB0CB');
        $this->addSql('ALTER TABLE order_product DROP CONSTRAINT FK_2530ADE6148EB0CB');
        $this->addSql('ALTER TABLE order_product DROP CONSTRAINT FK_2530ADE6F3B7657');
        $this->addSql('ALTER TABLE dish DROP CONSTRAINT FK_957D8CB8B1E7706E');
        $this->addSql('ALTER TABLE restaurant_review DROP CONSTRAINT FK_88DD7E37B1E7706E');
        $this->addSql('ALTER TABLE "order" DROP CONSTRAINT FK_F52993989395C3F3');
        $this->addSql('ALTER TABLE restaurant_review DROP CONSTRAINT FK_88DD7E3770574616');
        $this->addSql('ALTER TABLE user_profile DROP CONSTRAINT FK_D95AB40537FDBD6D');
        $this->addSql('DROP SEQUENCE address_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE category_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE dish_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "order_id_seq" CASCADE');
        $this->addSql('DROP SEQUENCE order_details_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE order_product_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE page_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE restaurant_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE restaurant_review_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP SEQUENCE user_profile_id_seq CASCADE');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE dish');
        $this->addSql('DROP TABLE dish_category');
        $this->addSql('DROP TABLE "order"');
        $this->addSql('DROP TABLE order_details');
        $this->addSql('DROP TABLE order_product');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE restaurant_review');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE user_profile');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
