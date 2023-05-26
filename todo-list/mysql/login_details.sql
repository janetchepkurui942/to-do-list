CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `type` int(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `logins` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO 'logins'(`id`, `name`, `email`, `password`) VALUES
(2221, 'john', 'johnwick41@yahoo.com', '0721439812');

INSERT INTO 'logins'(`id`, `name`, `email`, `password`) VALUES
(4451, 'linda', 'lindamartins@yahoo.com', '0728456719');

INSERT INTO 'logins'(`id`, `name`, `email`, `password`) VALUES
(2569, 'chloe', 'chloenarks@yahoo.com', '0769823427');

INSERT INTO 'logins'(`id`, `name`, `email`, `password`) VALUES
(6593, 'ben', 'benotis@yahoo.com', '0798165192');



ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`phone_number`);