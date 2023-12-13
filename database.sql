CREATE TABLE tb_categories (
	cat_id INT(11) NOT NULL AUTO_INCREMENT,
	cat_name VARCHAR(50) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(cat_id)
);

CREATE TABLE tb_posts (
	post_id INT(11) NOT NULL AUTO_INCREMENT,
	post_id_cat INT(11) NOT NULL,
	post_title VARCHAR(100) NOT NULL,
	post_text TEXT NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(post_id)
);

CREATE TABLE tb_users (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL,
	user_password VARCHAR(100) NOT NULL,
	user_full_name VARCHAR(100) DEFAULT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_email)
);

CREATE TABLE `dbpbwl_project10`. (
	`students_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT , 
	`students_nis` VARCHAR(50) NOT NULL , 
	`students_name` VARCHAR(255) NOT NULL , 
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	`updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`students_id`), 
	UNIQUE (`students_nis`)
);

CREATE TABLE `dbpbwl_project10`.`tb_tenpend` (
	`tenpend_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT , 
	`tenpend_nama` VARCHAR(255) NOT NULL AUTO_INCREMENT , 
	`tenpend_nip` VARCHAR(255) NOT NULL , 
	`tenpend_email` VARCHAR(255) NOT NULL , 
	`tenpend_no_telp` VARCHAR(255) NOT NULL , 
	`tenpend_status` VARCHAR(255) NOT NULL , 
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	`updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`tenpend_id`), 
	UNIQUE (`tenpend_nama`)
);

INSERT INTO
	tb_users
VALUES
	(
		1,
		'admin@gmail.com',
		'*4ACFE3202A5FF5CF467898FC58AAB1D615029441',
		'Administrator',
		'2023-11-03 03:40:43',
		NULL
	);