-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 12:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab1`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `Department_Id` int(3) NOT NULL,
  `Department_Name` varchar(20) DEFAULT NULL,
  `Manager_Id` int(3) DEFAULT NULL,
  `Location_Id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`Department_Id`, `Department_Name`, `Manager_Id`, `Location_Id`) VALUES
(10, 'Administration', 200, 1700),
(20, 'Marketing', 201, 1800),
(50, 'Shipping', 124, 1500),
(60, 'IT', 103, 1400),
(80, 'Sales', 149, 2500),
(90, 'Executive', 100, 1700),
(110, 'Accounting', 205, 1700),
(190, 'Contracting', NULL, 1700);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Employee_Id` int(6) NOT NULL,
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(25) DEFAULT NULL,
  `Email` varchar(25) NOT NULL,
  `Phone_Number` varchar(15) DEFAULT NULL,
  `Hire_Date` date NOT NULL,
  `Job_Id` varchar(10) NOT NULL,
  `Salary` int(8) DEFAULT NULL,
  `Commision_pct` int(2) DEFAULT NULL,
  `Manager_Id` int(6) DEFAULT NULL,
  `Department_Id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Employee_Id`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Hire_Date`, `Job_Id`, `Salary`, `Commision_pct`, `Manager_Id`, `Department_Id`) VALUES
(100, 'Steven', 'King', 'SKING', '515.123.4567', '1987-06-17', 'AD_PRESS', 24000, NULL, NULL, 90),
(101, 'Neena', 'Kocchar', 'NKOCHHAR', '515.123.4568', '1989-09-21', 'AD_VP', 17000, NULL, 100, 90),
(102, 'Lex', 'DE Haan', 'LDEHAAN', '515.123.4569', '1993-01-13', 'AD_VP', 17000, NULL, 100, 90),
(103, 'Alexander', 'Hunold', 'AHUNOLD', '590.423.4567', '0000-00-00', 'IT_PROG', 9000, NULL, 102, 60),
(104, 'Bruce', 'Ernst', 'BERNST', '590.423.4568', '0000-00-00', 'IT_PROG', 6000, NULL, 103, 60),
(107, 'Diana', 'Lorentz', 'DLORENTZ', '590.423.5567', '0000-00-00', 'IT_PROG', 4200, NULL, 103, 60),
(124, 'Kevin', 'Mourgos', 'KMORGOS', '650.123.5234', '0000-00-00', 'ST_MAN', 5800, NULL, 100, 50),
(141, 'Treena', 'Rajs', 'RRAJS', '650.121.5234', '0000-00-00', 'ST_CLERK', 3500, NULL, 124, 50),
(142, 'Curtis', 'Davies', 'CDAVIES', '121.123.5234', '0000-00-00', 'ST_CLERK', 3100, NULL, 124, 50),
(143, 'Randall', 'Matos', 'RMATOS', '121.123.5234', '0000-00-00', 'ST_CLERK', 2600, NULL, 124, 50),
(144, 'Peter', 'Vargas', 'PVARGAS', '121.123.5234', '0000-00-00', 'ST_CLERK', 2500, NULL, 124, 50),
(149, 'Eleni', 'Zlotkey', 'EZLOTKEY', '011.44.1344.429', '2000-01-29', 'SA_MAN', 10500, 0, 100, 80),
(174, 'Ellen', 'Abel', 'EABEL', '44.1644.429017', '0000-00-00', 'SA_REP', 11000, 0, 149, 80),
(176, 'Jnathon', 'Taylor', 'JTAILOR', '44.1644.429021', '0000-00-00', 'SA_MAN', 8600, 0, 149, 80),
(178, 'Kimberely', 'Grant', 'KGRANT', '44.1644.429023', '0000-00-00', 'SA_MAN', 7000, 0, 149, NULL),
(200, 'Jennifer', 'Whalem', 'JWHALEN', '515.123.4444', '0000-00-00', 'ADD_ASST', 4400, NULL, 101, 10),
(201, 'Michael', 'Hartstein', 'MHARSTEIN', '515.123.5555', '0000-00-00', 'MK_MAN', 13000, NULL, 100, 20),
(202, 'Pat', 'Fay', 'PFAY', '603.123.6666', '0000-00-00', 'MK_REP', 6000, NULL, 201, 20),
(205, 'Shelley', 'Higgins', 'SHIGGINS', '515.123.8050', '0000-00-00', 'AC_MGR', 12000, NULL, 101, 110),
(206, 'William', 'Gietz', 'WGIETZ', '515.123.8181', '0000-00-00', 'AC_ACCOUNT', 8300, NULL, 205, 110);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `Location_id` int(4) NOT NULL,
  `Street_Address` varchar(40) DEFAULT NULL,
  `Postal_Code` varchar(12) DEFAULT NULL,
  `City` varchar(30) NOT NULL,
  `State_Province` varchar(25) DEFAULT NULL,
  `Country_ID` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`Location_id`, `Street_Address`, `Postal_Code`, `City`, `State_Province`, `Country_ID`) VALUES
(1400, '2014 Jabberwocky Rd', '26192', 'Southlake', 'Texas', 'US'),
(1500, '2011 Interiors Blvd', '99236', 'South San\r\nFrancisco', 'California', 'US'),
(1700, '2004 Charade Rd', '98199', 'Seattle', 'Washington', 'US'),
(1800, '460 Bloor St. W.', 'ON M5S 1X8', 'Toronto', 'Ontario', 'CA'),
(2500, 'Magdalen Centre- The Oxford Sc.\r\nPark', 'OX9 9ZB', 'OXford', 'Oxford', 'UK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`Department_Id`),
  ADD UNIQUE KEY `Department_Id` (`Department_Id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Employee_Id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`Location_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
