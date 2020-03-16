--
-- Database: `heldnodig`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Id`, `Name`) VALUES
(1, 'Overig'),
(2, 'Boodschappen doen');

-- --------------------------------------------------------

--
-- Table structure for table `Hero`
--

CREATE TABLE `Hero` (
  `Id` int(11) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `DateTimeCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsVerifiedByMail` int(11) NOT NULL DEFAULT '0',
  `LocationZipcode` varchar(100) NOT NULL,
  `LocationCity` varchar(100) DEFAULT NULL,
  `GuidPrivate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `Offer`
--

CREATE TABLE `Offer` (
  `Id` int(11) NOT NULL,
  `RequestId` int(11) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `DateTimePosted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeReviewed` datetime DEFAULT NULL,
  `IsAccepted` tinyint(4) DEFAULT NULL,
  `ReviewedBy` varchar(100) DEFAULT NULL,
  `Description` text NOT NULL,
  `IsVerifiedByMail` int(11) NOT NULL DEFAULT '0',
  `GuidPublic` varchar(100) NOT NULL,
  `GuidPrivate` varchar(100) NOT NULL,
  `IsMailed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Request`
--

CREATE TABLE `Request` (
  `Id` int(11) NOT NULL,
  `LocationZipcode` varchar(8) NOT NULL,
  `LocationCity` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `MaxAmountOfOffers` int(11) DEFAULT NULL,
  `DateTimePosted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeReviewed` datetime DEFAULT NULL,
  `IsAccepted` int(4) DEFAULT NULL,
  `ReviewedBy` varchar(100) DEFAULT NULL,
  `GuidPrivate` varchar(100) NOT NULL,
  `GuidPublic` varchar(100) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `IsVerifiedByMail` tinyint(4) NOT NULL DEFAULT '0',
  `IsActive` int(11) NOT NULL DEFAULT '1',
  `IsCanceled` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Hero`
--
ALTER TABLE `Hero`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Offer`
--
ALTER TABLE `Offer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Request`
--
ALTER TABLE `Request`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Hero`
--
ALTER TABLE `Hero`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Offer`
--
ALTER TABLE `Offer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Request`
--
ALTER TABLE `Request`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
