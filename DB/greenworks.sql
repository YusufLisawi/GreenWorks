CREATE TABLE `user`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `firstname` VARCHAR(255) NOT NULL,
    `lastname` VARCHAR(255) NOT NULL,
    `username` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `date_created` DATE NOT NULL
);
ALTER TABLE
    `user` ADD INDEX `user_username_index`(`username`);
ALTER TABLE
    `user` ADD INDEX `user_email_index`(`email`);
CREATE TABLE `post`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `titre` VARCHAR(255) NOT NULL,
    `ingredient` VARCHAR(255) NOT NULL,
    `steps` VARCHAR(255) NOT NULL,
    `created_at` DATE NOT NULL,
    `image_id` VARCHAR(255) NOT NULL,
    `user_id` INT NOT NULL
);
CREATE TABLE `image`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `source` INT NOT NULL,
    `post_id` INT NOT NULL
);
CREATE TABLE `posts`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `post_id` INT NOT NULL
);
ALTER TABLE
    `post` ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `user`(`id`);
ALTER TABLE
    `image` ADD CONSTRAINT `image_post_id_foreign` FOREIGN KEY(`post_id`) REFERENCES `post`(`id`);
ALTER TABLE
    `post` ADD CONSTRAINT `post_image_id_foreign` FOREIGN KEY(`image_id`) REFERENCES `image`(`id`);
ALTER TABLE
    `posts` ADD CONSTRAINT `posts_post_id_foreign` FOREIGN KEY(`post_id`) REFERENCES `post`(`id`);