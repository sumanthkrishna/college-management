CREATE TABLE `staffdetails` (
`id` int(6) NOT NULL auto_increment,
`staffname` varchar(255) NOT NULL default '',
		`staffid` varchar(255) NOT NULL default '',
		`mobileno` varchar(255) NOT NULL default '',
		`emailid` varchar(255) NOT NULL default '',
		`address` varchar(255) NOT NULL default '',
		`qualification` varchar(255) NOT NULL default '',
		`designation` varchar(255) NOT NULL default '',
		`experience` varchar(255) NOT NULL default '',
		`imagepath` varchar(255) NOT NULL default '',
		`doj` varchar(255) NOT NULL default '',
		`department` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`id`),
UNIQUE KEY `id` (`id`)
)
TYPE=MyISAM AUTO_INCREMENT=1;