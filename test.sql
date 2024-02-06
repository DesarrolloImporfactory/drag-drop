CREATE TABLE `optionbuilder__settings` (
  `section` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`section`,`key`),
  UNIQUE KEY `optionbuilder__settings_section_key_unique` (`section`,`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
