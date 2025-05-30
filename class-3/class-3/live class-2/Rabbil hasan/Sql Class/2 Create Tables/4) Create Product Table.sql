CREATE TABLE `products` (
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    FOREIGN KEY(`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
    `category_id` BIGINT(20) UNSIGNED NOT NULL,
    FOREIGN KEY(`category_id`) REFERENCES `categories`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
    `name` VARCHAR(50) NOT NULL,
    `price` VARCHAR(50) NOT NULL,
    `unit` VARCHAR(50) NOT NULL,
    `img_url` VARCHAR(50) NOT NULL,
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
)