CREATE TABLE `studentdetails` (
`id` int(6) NOT NULL auto_increment,
`studentname` varchar(255) NOT NULL default '',
		`studentid` varchar(255) NOT NULL default '',
		`mobileno` varchar(255) NOT NULL default '',
		`fathermobileno` varchar(255) NOT NULL default '',
		`email` varchar(255) NOT NULL default '',
		`address` varchar(255) NOT NULL default '',
		`imagepath` varchar(255) NOT NULL default '',
		`yearofjoining` varchar(255) NOT NULL default '',
		`coursename` varchar(255) NOT NULL default '',
		`department` varchar(255) NOT NULL default '',
		`year` varchar(255) NOT NULL default '',
		`section` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`id`),
UNIQUE KEY `id` (`id`)
)
TYPE=MyISAM AUTO_INCREMENT=1;