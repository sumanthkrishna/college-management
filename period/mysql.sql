CREATE TABLE `perioddetails` (
`id` int(6) NOT NULL auto_increment,
`date` varchar(255) NOT NULL default '',
		`period` varchar(255) NOT NULL default '',
		`subjectcode` varchar(255) NOT NULL default '',
		`staffid` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`id`),
UNIQUE KEY `id` (`id`)
)
TYPE=MyISAM AUTO_INCREMENT=1;