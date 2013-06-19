CREATE TABLE `departmentdetails` (
`id` int(6) NOT NULL auto_increment,
`coursename` varchar(255) NOT NULL default '',
		`departmentname` varchar(255) NOT NULL default '',
		`departmentid` varchar(255) NOT NULL default '',
		`yearno` varchar(255) NOT NULL default '',
		`noofsections` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`id`),
UNIQUE KEY `id` (`id`)
)
TYPE=MyISAM AUTO_INCREMENT=1;