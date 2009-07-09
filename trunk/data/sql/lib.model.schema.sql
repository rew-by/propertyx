
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- property
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `property`;


CREATE TABLE `property`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`slug` VARCHAR(255),
	`municipality` VARCHAR(255)  NOT NULL,
	`address` VARCHAR(255),
	`area` VARCHAR(255),
	`offer_id` INTEGER  NOT NULL,
	`type_id` INTEGER  NOT NULL,
	`typology_id` INTEGER  NOT NULL,
	`description` TEXT  NOT NULL,
	`state_id` INTEGER  NOT NULL,
	`year` INTEGER,
	`floors` INTEGER,
	`on_floor` INTEGER,
	`surface` FLOAT  NOT NULL,
	`heating` VARCHAR(255),
	`garden` TINYINT,
	`balcony` INTEGER,
	`bath` INTEGER,
	`bedroom` INTEGER,
	`entrance` INTEGER,
	`kitchen_id` INTEGER  NOT NULL,
	`diningroom` TINYINT default 0,
	`livingroom` TINYINT default 0,
	`cellar` TINYINT default 0,
	`lift` TINYINT default 0,
	`attic` TINYINT default 0,
	`parking` INTEGER default 0,
	`price` FLOAT default 0 NOT NULL,
	`is_public` TINYINT default 0 NOT NULL,
	`has_priority` TINYINT default 0,
	`sf_asset_folder_id` INTEGER,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `property_FI_1` (`offer_id`),
	CONSTRAINT `property_FK_1`
		FOREIGN KEY (`offer_id`)
		REFERENCES `offer` (`id`)
		ON DELETE CASCADE,
	INDEX `property_FI_2` (`type_id`),
	CONSTRAINT `property_FK_2`
		FOREIGN KEY (`type_id`)
		REFERENCES `type` (`id`)
		ON DELETE CASCADE,
	INDEX `property_FI_3` (`typology_id`),
	CONSTRAINT `property_FK_3`
		FOREIGN KEY (`typology_id`)
		REFERENCES `typology` (`id`)
		ON DELETE CASCADE,
	INDEX `property_FI_4` (`state_id`),
	CONSTRAINT `property_FK_4`
		FOREIGN KEY (`state_id`)
		REFERENCES `state` (`id`)
		ON DELETE CASCADE,
	INDEX `property_FI_5` (`kitchen_id`),
	CONSTRAINT `property_FK_5`
		FOREIGN KEY (`kitchen_id`)
		REFERENCES `kitchen` (`id`)
		ON DELETE CASCADE,
	INDEX `property_FI_6` (`sf_asset_folder_id`),
	CONSTRAINT `property_FK_6`
		FOREIGN KEY (`sf_asset_folder_id`)
		REFERENCES `sf_asset_folder` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- type
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `type`;


CREATE TABLE `type`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- state
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `state`;


CREATE TABLE `state`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- typology
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `typology`;


CREATE TABLE `typology`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- kitchen
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `kitchen`;


CREATE TABLE `kitchen`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- offer
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `offer`;


CREATE TABLE `offer`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
