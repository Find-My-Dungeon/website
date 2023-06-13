<?php

require_once __DIR__ . '/../utils/mysql.php';

function init_bdd() {
  $sql='
    CREATE TABLE `user` (
      `id_user` int NOT NULL AUTO_INCREMENT,
      `name_user` varchar(45) NOT NULL,
      `first_name_user` varchar(45) NOT NULL,
      `pseudo` varchar(45) NOT NULL,
      `email` varchar(45) NOT NULL,
      `password` varchar(45) NOT NULL,
      `salt` varchar(45) DEFAULT NULL,
      `localisation` varchar(45) DEFAULT NULL,
      `is_admin` tinyint DEFAULT NULL,
      PRIMARY KEY (`id_user`),
      UNIQUE KEY `id_user_UNIQUE` (`id_user`),
      UNIQUE KEY `email_UNIQUE` (`email`),
      UNIQUE KEY `pseudo_UNIQUE` (`pseudo`)
    );
    
    CREATE TABLE `alert` (
      `id_alert` int NOT NULL AUTO_INCREMENT,
      `type_alert` varchar(45) NOT NULL,
      `message` text NOT NULL,
      `id_user_alert` int DEFAULT NULL,
      PRIMARY KEY (`id_alert`),
      UNIQUE KEY `id_notif_UNIQUE` (`id_alert`),
      KEY `id_user_alert_idx` (`id_user_alert`),
      CONSTRAINT `id_user_alert` FOREIGN KEY (`id_user_alert`) REFERENCES `user` (`id_user`)
    );

    CREATE TABLE `character` (
      `id_character` int NOT NULL AUTO_INCREMENT,
      `name_character` varchar(45) NOT NULL,
      `classe` varchar(45) NOT NULL,
      `race` varchar(45) NOT NULL,
      `level` int NOT NULL,
      `resume_character` text,
      `id_user_character` int DEFAULT NULL,
      PRIMARY KEY (`id_character`),
      UNIQUE KEY `id_perso_UNIQUE` (`id_character`),
      KEY `iduser_idx` (`id_user_character`),
      CONSTRAINT `id_user_character` FOREIGN KEY (`id_user_character`) REFERENCES `user` (`id_user`)
    );
    
    CREATE TABLE `story` (
      `id_story` int NOT NULL AUTO_INCREMENT,
      `title` varchar(45) NOT NULL,
      `level_story` int NOT NULL,
      `resume_story` varchar(500) NOT NULL,
      `number_character` int NOT NULL,
      `id_user_story` int DEFAULT NULL,
      PRIMARY KEY (`id_story`),
      UNIQUE KEY `id_story_UNIQUE` (`id_story`),
      KEY `id_user_story_idx` (`id_user_story`),
      CONSTRAINT `id_user_story` FOREIGN KEY (`id_user_story`) REFERENCES `user` (`id_user`)
    );

    CREATE TABLE `participation` (
      `id_participation` int NOT NULL AUTO_INCREMENT,
      `id_user_participation` int NOT NULL,
      `id_character_participation` int DEFAULT NULL,
      `id_story_participation` int DEFAULT NULL,
      PRIMARY KEY (`id_participation`),
      UNIQUE KEY `id_participation_UNIQUE` (`id_participation`),
      KEY `id_user_participation_idx` (`id_user_participation`),
      KEY `id_user_character_idx` (`id_character_participation`),
      KEY `id_user_story_idx` (`id_story_participation`),
      CONSTRAINT `id_character_participation` FOREIGN KEY (`id_character_participation`) REFERENCES `character` (`id_character`) ON DELETE SET NULL ON UPDATE SET NULL,
      CONSTRAINT `id_story_participation` FOREIGN KEY (`id_story_participation`) REFERENCES `story` (`id_story`) ON DELETE SET NULL ON UPDATE SET NULL,
      CONSTRAINT `id_user_participation` FOREIGN KEY (`id_user_participation`) REFERENCES `user` (`id_user`)
    );
  ';

  execute_sql($sql);

  return true;
}
