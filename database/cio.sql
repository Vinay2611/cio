-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 11:57 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cio`
--

-- --------------------------------------------------------

--
-- Table structure for table `vmware_cio_data`
--

CREATE TABLE `vmware_cio_data` (
  `id` int(11) NOT NULL,
  `name_of_organization` varchar(255) NOT NULL,
  `name_of_nominator` varchar(255) NOT NULL,
  `email_of_nominator` varchar(255) NOT NULL,
  `number_of_nominator` varchar(255) NOT NULL,
  `it_head` varchar(255) NOT NULL,
  `no_of_datacenter` varchar(255) NOT NULL,
  `datacenter_virtualized` varchar(255) NOT NULL,
  `business_application` text NOT NULL,
  `multi_hypervisor_environment` varchar(255) NOT NULL,
  `hypervisor_in_environment` text NOT NULL,
  `software_defined_network` varchar(255) NOT NULL,
  `software_defined_network_text` text NOT NULL,
  `hyper_converged_infra` varchar(255) NOT NULL,
  `hyper_converged_infra_text` text NOT NULL,
  `software_defined_solution` varchar(255) NOT NULL,
  `software_defined_solution_text` text NOT NULL,
  `multi_cloud_environment` varchar(255) NOT NULL,
  `multi_cloud_environment_text` text NOT NULL,
  `multi_cloud_environment_deploy` text NOT NULL,
  `other_environment_text` text NOT NULL,
  `public_cloud` text NOT NULL,
  `application_public_cloud` text NOT NULL,
  `hybrid_cloud` varchar(255) NOT NULL,
  `hybrid_cloud_text` text NOT NULL,
  `desktop_virtualization` varchar(255) NOT NULL,
  `desktop_virtualization_case` text NOT NULL,
  `desktop_virtualization_solution` text NOT NULL,
  `enterprise_mobility` text NOT NULL,
  `enterprise_mobility_case` text NOT NULL,
  `window_users` text NOT NULL,
  `modern_management` text NOT NULL,
  `other_management_text` text NOT NULL,
  `management_endpoint_text` text NOT NULL,
  `datacenter_security_per` text NOT NULL,
  `security_breach` varchar(255) NOT NULL,
  `security_breach_text` text NOT NULL,
  `datacenter_traffic_percent` text NOT NULL,
  `zero_trust_security` varchar(255) NOT NULL,
  `zero_trust_security_text` text NOT NULL,
  `detail_text` text NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vmware_cio_data`
--

INSERT INTO `vmware_cio_data` (`id`, `name_of_organization`, `name_of_nominator`, `email_of_nominator`, `number_of_nominator`, `it_head`, `no_of_datacenter`, `datacenter_virtualized`, `business_application`, `multi_hypervisor_environment`, `hypervisor_in_environment`, `software_defined_network`, `software_defined_network_text`, `hyper_converged_infra`, `hyper_converged_infra_text`, `software_defined_solution`, `software_defined_solution_text`, `multi_cloud_environment`, `multi_cloud_environment_text`, `multi_cloud_environment_deploy`, `other_environment_text`, `public_cloud`, `application_public_cloud`, `hybrid_cloud`, `hybrid_cloud_text`, `desktop_virtualization`, `desktop_virtualization_case`, `desktop_virtualization_solution`, `enterprise_mobility`, `enterprise_mobility_case`, `window_users`, `modern_management`, `other_management_text`, `management_endpoint_text`, `datacenter_security_per`, `security_breach`, `security_breach_text`, `datacenter_traffic_percent`, `zero_trust_security`, `zero_trust_security_text`, `detail_text`, `dateTime`) VALUES
(1, 'Shobiz', 'Vinay', 'demo@gmail.com', '64564565', 'Developer', '2', 'on', 'Nominator', 'No', 'vSphere,Hyper-V', 'on', 'Nominator', 'on', 'Details', 'on', 'Nominator', 'on', 'Nominator', 'VMC on AWS,Azure  VMware cloud service Providers (Netmagic, Sify, Nxtgen),Other', '', 'Azure,VMware cloud service Providers (Netmagic, Sify, Nxtgen)', 'Business Critical (Production)', 'on', 'Nominator', 'on', 'Internet Separation,Optimize hardware for Training / Learning & development,Improve / Simplify manageability & operations,Application Lifecycle management', 'Other', 'No', 'Field Mobility Management,Enabling BYO,Application Management', 'less than 500,More than 5000', 'SCCM,VMWare Unified Endpoint Management', '', 'Nominator', '25%-50%', 'No', 'Nominator', '25%-50%', 'Yes', 'Nominator', 'demo', '2019-03-12 12:25:06'),
(2, 'Excellence', 'Demo', 'demo@gmail.com', '9887343287438324', 'CIo', '2', '< 25%', 'Key business', 'Yes', 'vSphere,Hyper-V,KVM', 'Yes', 'Please', 'No', '', 'No', '', 'No', '', '', '', 'Azure,IBM,VMware cloud service Providers (Netmagic, Sify, Nxtgen)', 'Both', 'Yes', 'Please share', 'No', '', '', 'No', '', 'less than 500,2500-5000', 'SCCM,Others, please specify', '', 'Biggest', '25%-50%', 'No', '', '< 25%', 'No', '', 'Improving', '2019-03-18 12:57:17'),
(3, 'Demo', 'Demo', 'demo', '9834753849343434', 'Demo', '3-5', '25%- 50%', 'Business appllication', 'Yes', '', 'No', '', 'No', '', 'No', '', 'No', '', '', '', '', '', 'No', '', 'No', '', '', 'No', '', '', '', '', 'Nominator', '< 25%', 'No', '', '25%-50%', 'No', '', 'fd', '2019-03-18 13:03:54'),
(4, 'Demo', 'Demo', 'demo', '9834753849343434', 'Demo', '3-5', '25%- 50%', 'Business appllication', 'Yes', '', 'No', '', 'No', '', 'No', '', 'No', '', '', '', '', '', 'No', '', 'No', '', '', 'No', '', '', '', '', 'Nominator', '< 25%', 'No', '', '25%-50%', 'No', '', 'fd', '2019-03-18 13:14:45'),
(5, 'Demo', 'Demo', 'demo', '9834753849343434', 'Demo', '3-5', '25%- 50%', 'Business appllication', 'Yes', '', 'No', '', 'No', '', 'No', '', 'No', '', '', '', '', '', 'No', '', 'No', '', '', 'No', '', '', '', '', 'Nominator', '< 25%', 'No', '', '25%-50%', 'No', '', 'fd', '2019-03-18 13:16:42'),
(6, 'Shobiz', 'Demo', 'demo@gmail.com', '89594859', 'CIO / Head', '2', '< 25%', 'SAP', 'Yes', 'vSphere,Hyper-V,KVM,AHV,Others', 'Yes', 'Please share', 'Yes', 'TEst', 'Yes', 'Solution ', 'Yes', 'Details', 'VMC on AWS,IBM Cloud for VMware Solutions ,Azure  VMware cloud service Providers (Netmagic, Sify, Nxtgen)', '', 'AWS,VMware cloud service Providers (Netmagic, Sify, Nxtgen)', 'Business Critical (Production)', 'Yes', 'Test', 'Yes', 'Optimize hardware for Training / Learning & development,Borderless ODC,Improve / Simplify manageability & operations', 'Citrix', 'Yes', 'Field Mobility Management,Enabling BYO', 'less than 500', 'SCCM,Others, please specify', 'Other detaiuls', 'Test', '< 25%', 'Yes', 'Please', '< 25%', 'Yes', 'Details', 'Text', '2019-03-18 13:25:38'),
(7, 'Shobiz', 'Demo', 'demo@gmail.com', '89594859', 'CIO / Head', '2', '< 25%', 'SAP', 'Yes', 'vSphere,Hyper-V,KVM,AHV,Others', 'Yes', 'Please share', 'Yes', 'TEst', 'Yes', 'Solution ', 'Yes', 'Details', 'VMC on AWS,IBM Cloud for VMware Solutions ,Azure  VMware cloud service Providers (Netmagic, Sify, Nxtgen)', '', 'AWS,VMware cloud service Providers (Netmagic, Sify, Nxtgen)', 'Business Critical (Production)', 'Yes', 'Test', 'Yes', 'Optimize hardware for Training / Learning & development,Borderless ODC,Improve / Simplify manageability & operations', 'Citrix', 'Yes', 'Field Mobility Management,Enabling BYO', 'less than 500', 'SCCM,Others, please specify', 'Other detaiuls', 'Test', '< 25%', 'Yes', 'Please', '< 25%', 'Yes', 'Details', 'Text', '2019-03-18 13:27:02'),
(8, 'Shobiz\'s', 'Shobiz nominator \'s', 'demo@gmail.com', '9876543210', 'IT head', '2', '25%- 50%', 'Test\'s', 'No', '', 'No', '', 'Yes', 'Test\'s', 'Yes', 'Test\'s', 'No', 'Test\'ds', '', '', 'VMware cloud service Providers (Netmagic, Sify, Nxtgen)', 'Business Critical (Production)', 'No', '', 'No', '', '', 'No', '', '2500-5000', 'VMWare Unified Endpoint Management,Others, please specify', 'T\'ss', 'g', '< 25%', 'Yes', 'Test\'s', 'Not aware', 'No', '', 'Test\'s', '2019-04-12 12:13:13'),
(9, 'Shobiz\'s', 'Shobiz nominator \'s', 'demo@gmail.com', '9876543210', 'IT head', '2', '25%- 50%', 'Test\'s', 'No', 'Hyper-V', 'Yes', 'Test\'s', 'Yes', 'TEdgfg13`2`1', 'Yes', '231\"fhf', 'Yes', 'sfdsd\'gkj', 'VMC on AWS,Azure  VMware cloud service Providers (Netmagic, Sify, Nxtgen)', '', 'Azure,VMware cloud service Providers (Netmagic, Sify, Nxtgen)', 'Less Critical (Test/Dev)', 'Yes', 'fds\'hfd', 'No', '', '', 'No', '', 'less than 500,2500-5000', 'VMWare Unified Endpoint Management', '', 'test\'s', '< 25%', 'Yes', 'TEst\'s', '25%-50%', 'No', '', 'Test\'sq', '2019-04-12 12:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `vmware_ctday`
--

CREATE TABLE `vmware_ctday` (
  `id` int(11) NOT NULL,
  `eventcity` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `is_agree` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vmware_ctday`
--

INSERT INTO `vmware_ctday` (`id`, `eventcity`, `email_id`, `first_name`, `last_name`, `company_name`, `designation`, `city`, `postal_code`, `phone_no`, `is_agree`, `date_time`) VALUES
(1, '', 'demo@gmail.com', 'John\'s', 'D`souza', 'Test', '', 'Mumbai', '4534', '435345', 'YES', '2019-05-03 07:22:58'),
(2, '', '', '', '', '', '', 'Select City', '', '', 'YES', '2019-05-03 07:33:41'),
(3, '', '', '', '', '', '', 'Select City', '', '', 'YES', '2019-05-03 07:33:45'),
(4, '', 'demo@gmail.com', 'John\'s', 'D`souza', 'Test', 'Designation', 'Select City', '324234', '435345', 'YES', '2019-05-03 07:35:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vmware_cio_data`
--
ALTER TABLE `vmware_cio_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vmware_ctday`
--
ALTER TABLE `vmware_ctday`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vmware_cio_data`
--
ALTER TABLE `vmware_cio_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vmware_ctday`
--
ALTER TABLE `vmware_ctday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
