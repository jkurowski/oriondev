-- Prospekt informacyjny per budynek
ALTER TABLE `buildings`
    ADD COLUMN `file_brochure` VARCHAR(255) NULL DEFAULT NULL AFTER `file_webp`;
