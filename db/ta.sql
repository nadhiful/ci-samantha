-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 19, 2014 at 10:02 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ta`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_beli`
-- 

CREATE TABLE `tbl_beli` (
  `id_beli` int(4) NOT NULL auto_increment,
  `kd_barang` varchar(7) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `beli` int(12) NOT NULL,
  PRIMARY KEY  (`id_beli`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `tbl_beli`
-- 

INSERT INTO `tbl_beli` VALUES (1, 'Z-0001', 'Pulsa All Operator', '2014-07-01', 100000);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_harga`
-- 

CREATE TABLE `tbl_harga` (
  `id_harga` tinyint(6) NOT NULL auto_increment,
  `kode_harga` varchar(6) NOT NULL,
  `harga_beli` int(6) NOT NULL,
  `harga_jual` int(12) NOT NULL,
  PRIMARY KEY  (`id_harga`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `tbl_harga`
-- 

INSERT INTO `tbl_harga` VALUES (1, 'AS5', 5550, 6500);
INSERT INTO `tbl_harga` VALUES (2, 'AS50', 10550, 11500);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_stok`
-- 

CREATE TABLE `tbl_stok` (
  `kd_barang` varchar(7) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `beli` int(12) NOT NULL,
  PRIMARY KEY  (`kd_barang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `tbl_stok`
-- 

INSERT INTO `tbl_stok` VALUES ('Z-0001', 'Pulsa All Operator', 47500);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_trans`
-- 

CREATE TABLE `tbl_trans` (
  `id_trans` int(5) NOT NULL auto_increment,
  `kode_harga` varchar(6) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor` varchar(12) NOT NULL,
  `beli` int(6) NOT NULL,
  `harga` int(12) NOT NULL,
  PRIMARY KEY  (`id_trans`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `tbl_trans`
-- 

INSERT INTO `tbl_trans` VALUES (1, '5', '2014-07-01', '08997107288', 5500, 6500);
INSERT INTO `tbl_trans` VALUES (5, '5', '2014-07-01', '08997107288', 5500, 6500);
INSERT INTO `tbl_trans` VALUES (6, '5', '2014-07-01', '08997107288', 5500, 6500);
INSERT INTO `tbl_trans` VALUES (7, '5', '2014-07-01', '08997107288', 5500, 6500);
INSERT INTO `tbl_trans` VALUES (8, '10', '2014-07-01', '08997107288', 10500, 11000);
INSERT INTO `tbl_trans` VALUES (9, '20', '2014-07-02', '08997107288', 20000, 21000);

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `userid` int(4) NOT NULL auto_increment,
  `fname` varchar(12) NOT NULL,
  `lname` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (1, 'seri1', 'bedu', 'aq', '1');
