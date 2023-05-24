
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `blood_bank`

CREATE DATABASE IF NOT EXISTS `dbms_blood` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbms_blood`;




-- Table structure for table `blood_bank`


CREATE TABLE IF NOT EXISTS `blood_bank` (
  `bb_id` varchar(20) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `quantity` int NOT NULL,
  `location` varchar(20) NOT NULL,
   PRIMARY KEY (`bb_id`,`blood_group`)
   --    CONSTRAINT `b_idiF` FOREIGN KEY (`blood_group`) REFERENCES `blood_stock` (`blood_group`) ON DELETE CASCADE
 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data for the table blood bank

insert  into `blood_bank`(`bb_id`,`blood_group`,`quantity`) values 
('bb1','A+','10');

-- Table structure for table `receptionist`

CREATE TABLE IF NOT EXISTS `receptionist` (
  `r_id` varchar(20) NOT NULL,
  `bb_id` varchar(20) NOT NULL,
  `r_name` varchar(20) NOT NULL,
  `contact` decimal(10) NOT NULL,
   PRIMARY KEY (`r_id`),
 CONSTRAINT `bb_idiF` FOREIGN KEY (`bb_id`) REFERENCES `blood_bank` (`bb_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data for the table receptionist

insert  into `receptionist`(`r_id`,`bb_id`,`r_name`,`contact`) values
('r1','bb1','Demo',9988998899);

-- Table structure for table `Donor`

CREATE TABLE IF NOT EXISTS `donor` (
  `d_id` varchar(20) NOT NULL,
  `r_id` varchar(20) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` decimal(10) NOT NULL,
   `blood_group` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `medical_issue` varchar(100) NOT NULL ,
   PRIMARY KEY (`d_id`),
 CONSTRAINT `r_idiF` FOREIGN KEY (`r_id`) REFERENCES `receptionist` (`r_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data for the table donor

insert  into `donor`(`d_id`,`r_id`,`d_name`,`address`,`contact`,`blood_group`,`dob`,`medical_issue`) values
('d1','r1','Don','mnglur',9988998899,'',"27/10/2002","");

-- Table structure for table `Blood`

CREATE TABLE IF NOT EXISTS `blood` (
  `b_id` varchar(20) NOT NULL,
  `bb_id` varchar(20) NOT NULL,
  `d_id` varchar(20) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `units` int  NOT NULL,
 
   PRIMARY KEY (`b_id`),
 CONSTRAINT `d_idiF` FOREIGN KEY (`d_id`) REFERENCES `donor` (`d_id`) ON DELETE CASCADE,
 CONSTRAINT `bb_F` FOREIGN KEY (`bb_id`) REFERENCES `blood_bank` (`bb_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data for the table blood

insert  into `blood`(`b_id`,`bb_id`,`d_id`,`blood_group`,`units`) values
('b1','bb1','d1','A+','550');


-- Table structure for table `patient`

-- Table structure for table `hospital`

CREATE TABLE IF NOT EXISTS `hospital` (
  `hosp_id` varchar(20) NOT NULL,
  `bb_id` varchar(20) NOT NULL,
  `hosp_name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,

  `contact_no` decimal(10) NOT NULL,

   PRIMARY KEY (`hosp_id`,`bb_id`),
   CONSTRAINT `bb_id_ibfk_1` FOREIGN KEY (`bb_id`) REFERENCES `blood_bank` (`bb_id`) ON DELETE CASCADE


) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` varchar(20) NOT NULL,
  `hosp_id` varchar(20) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `contact`  decimal(10) NOT NULL,
  `units_needed` int ,
   PRIMARY KEY (`p_id`,`hosp_id`),
  CONSTRAINT `hosp_id_ibfk_1` FOREIGN KEY (`hosp_id`) REFERENCES `hospital` (`hosp_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE IF NOT EXISTS `deleted_patients` (
  `p_id` varchar(20) NOT NULL,
  `hosp_id` varchar(20) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `contact`  decimal(10) NOT NULL,
  `units_needed` int 
   
 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('SuperAdmin', '12345678'),
('test_user', 'qwertyuiop');
 


--  stored procedure 
DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_bloodbank` ()   BEGIN
 select * from blood_bank;
 END$$

DELIMITER ;
s
-- Triggers `patient`
--
DELIMITER $$
CREATE TRIGGER `delete_patient` BEFORE DELETE ON `patient` FOR EACH ROW insert into deleted_patients (p_id,hosp_id,p_name,blood_group,contact,units_needed)
values (old.p_id,old.hosp_id,old.p_name,old.blood_group,old.contact,old.units_needed)
$$
DELIMITER ;

