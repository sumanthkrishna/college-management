CREATE TABLE `coursedetails` (
`id` int(6) NOT NULL auto_increment,
`coursename` varchar(255) NOT NULL default '',
		`courseid` varchar(255) NOT NULL default '',
		`noofyears` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`id`),
UNIQUE KEY `id` (`id`)
);
TYPE=MyISAM AUTO_INCREMENT=1;