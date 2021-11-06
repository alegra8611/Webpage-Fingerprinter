SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE network_recon;
USE network_recon;

CREATE TABLE `recon` (
  `sl_no` int(11) NOT NULL,
  `Device_Fingerprint` varchar(300) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `ipAddress` varchar(300) DEFAULT NULL,
  `Operating_System` varchar(300) DEFAULT NULL,
  `Browser` varchar(300) DEFAULT NULL,
  `location` varchar(300) DEFAULT NULL,
  `incognitos` varchar(300) DEFAULT NULL,
  `vpn_detect` varchar(300) DEFAULT NULL,
  `time_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Indexes for table `recon`
--
ALTER TABLE `recon`
  ADD PRIMARY KEY (`sl_no`),
  ADD UNIQUE KEY `Device_Fingerprint` (`Device_Fingerprint`);

--
-- AUTO_INCREMENT for table `recon`
--
ALTER TABLE `recon`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

