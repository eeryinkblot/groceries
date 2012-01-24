<?php

require_once 'config.php';

// Creating the database
$sql = 'CREATE DATABASE IF NOT EXISTS `' . $CFG->db['name'] .'`';
mysql_query($sql);

mysql_select_db($CFG->db['name']);

// Creating Table 'food'
$sql = 'CREATE TABLE `' . $CFG->prefix . 'food` (
			`id` INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`name` VARCHAR(50),
			`calories` INTEGER,
			`carb` DOUBLE UNSIGNED,
			`sugar` DOUBLE UNSIGNED,
			`fat` DOUBLE UNSIGNED,
			`relative_weight` DOUBLE UNSIGNED,
			`actual_weight` DOUBLE UNSIGNED,
			`distributor_id` INTEGER UNSIGNED,
			`manufacturer_id` INTEGER UNSIGNED
		)';
mysql_query($sql);


// Creating Table 'ingredients'
$sql = 'CREATE TABLE `' . $CFG->prefix . 'ingredients` (
			`id` INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`name` VARCHAR(50)
		)';
mysql_query($sql);


// Creating Table 'costs'
$sql = 'CREATE TABLE `' . $CFG->prefix . 'costs` (
			`food_id` INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`cost` DOUBLE UNSIGNED,
			`date` DATE
		)';
mysql_query($sql);


// Creating Table 'manufacturer'
$sql = 'CREATE TABLE `' . $CFG->prefix . 'manufacturer` (
			`id` INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`name` VARCHAR(50)
		)';
mysql_query($sql);


// Creating Table 'distributor'
$sql = 'CREATE TABLE `' . $CFG->prefix . 'distributor` (
			`id` INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`name` VARCHAR(50)
		)';
mysql_query($sql);


?>