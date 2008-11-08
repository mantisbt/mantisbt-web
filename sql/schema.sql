-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2008 at 09:13 PM
-- Server version: 5.0.45
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `mantisbt_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `mantis_user_directory_entry`
--

CREATE TABLE IF NOT EXISTS `mantis_user_directory_entry` (
  `id` int(11) NOT NULL auto_increment,
  `hash` varchar(33) default NULL,
  `date_submitted` date NOT NULL default '0000-00-00',
  `company_name` varchar(50) NOT NULL default '""',
  `contact_name` varchar(50) NOT NULL default '""',
  `contact_email` varchar(255) NOT NULL default '""',
  `website_url` varchar(255) NOT NULL default '""',
  `mantis_url` varchar(255) NOT NULL default '""',
  `comments` text NOT NULL,
  `comments_about_company` text NOT NULL,
  `status` int(1) NOT NULL default '0',
  `high_profile` int(1) NOT NULL default '0',
  `testimonial` smallint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1110 ;

