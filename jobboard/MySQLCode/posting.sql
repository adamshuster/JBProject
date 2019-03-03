
CREATE TABLE IF NOT EXISTS `posting` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `job` text NOT NULL,
  `experience` text NOT NULL,
  `location` text NOT NULL,
  `company` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `date`, `job`, `experience`, `location`, `company`) VALUES
(1, '2019-01-14', 'Analyst', 'Entry-Level', 'Baltimore', 'Excelon'),
(2, '2019-01-15', 'Programmer', 'Mid-Level', 'Washington D.C', 'Microsoft'),
(3, '2019-01-21', 'Human Resources Manager ', 'Senior ', 'Baltimore', 'Excelon'),
(4, '2019-01-22', 'Statistician', 'Intern', 'Washington D.C', 'Microsoft'),
(5, '2019-01-16', 'Analyst', 'Senior', 'Pittsburgh', 'Microsoft'),
(6, '2019-01-30', 'Nurse', 'Mid-Level', 'New York', 'MedHealth'),
(7, '2019-01-21', 'Bank Teller', 'Mid-Level', 'Philadelphia', 'Captial One'),
(8, '2019-01-23', 'Insurance Agent', 'Entry Level', 'Chicago', 'All State '),
(9, '2019-01-24', 'Engineer', 'Senior ', 'Atlanta', 'Lockheed Martin '),
(10, '2019-01-16', 'Assistant Manager', 'Mid-Level', 'Washington D.C', 'Starbucks'),
(11, '2019-01-24', 'Project Manager', 'Mid-Level', 'Miami', 'Web MD'),
(12, '2019-01-09', 'Business Analyst', 'Entry-Level', 'Washington D.C', 'Bank Of America ');
