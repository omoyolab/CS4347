CREATE database matchingapp;

USE matchingapp;

CREATE TABLE `matchingapp`.`user` (
`user_id` INT(11) NOT NULL AUTO_INCREMENT,
`email` VARCHAR(255) NOT NULL,
`password` VARCHAR(255) NOT NULL,
`major` VARCHAR(255) NOT NULL,
`college` VARCHAR(255) NOT NULL,
`sex` CHAR(1) NOT NULL,
`image` BLOB NULL,
`registered_date` DATETIME NOT NULL,
`match_id` INT(11) NOT NULL,
`age` INT(11) NOT NULL,
PRIMARY KEY (`user_id`),
UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC) VISIBLE);


CREATE TABLE `matchingapp`.`match` (
`match_id` INT(11) NOT NULL AUTO_INCREMENT,
`zodiac` VARCHAR(255) NOT NULL,
`interest_1` VARCHAR(255) NOT NULL,
`interest_2` VARCHAR(255) NOT NULL,
`interest_3` VARCHAR(255) NOT NULL,
PRIMARY KEY (`match_id`),
UNIQUE INDEX `match_id_UNIQUE` (`match_id` ASC) VISIBLE);

ALTER TABLE `matchingapp`.`user`
ADD INDEX `match_fk_idx` (`match_id` ASC) VISIBLE;
;
ALTER TABLE `matchingapp`.`user`
ADD CONSTRAINT `match_fk`
FOREIGN KEY (`match_id`)
REFERENCES `matchingapp`.`match` (`match_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE `matchingapp`.`user`
ADD COLUMN `name` VARCHAR(235) NOT NULL AFTER `user_id`;



