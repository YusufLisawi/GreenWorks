CREATE TABLE `user`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `firstname` VARCHAR(255) NOT NULL,
    `lastname` VARCHAR(255) NOT NULL,
    `username` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
ALTER TABLE
    `user` ADD INDEX `user_username_index`(`username`);
ALTER TABLE
    `user` ADD INDEX `user_email_index`(`email`);
CREATE TABLE `post`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `ingredient` VARCHAR(255) NOT NULL,
    `steps` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `images` TEXT NOT NULL,
    `user_id` INT NOT NULL
);
ALTER TABLE
    `post` ADD CONSTRAINT `post_user_id_fk` FOREIGN KEY(`user_id`) REFERENCES `user`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;