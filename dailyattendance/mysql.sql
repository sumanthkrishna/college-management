CREATE TABLE `dailyattendance` (
`id` int(6) NOT NULL auto_increment,
`studentid` varchar(255) NOT NULL default '',
		`subjectid` varchar(255) NOT NULL default '',
		`date` varchar(255) NOT NULL default '',
		`period` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`id`),
UNIQUE KEY `id` (`id`)
)
TYPE=MyISAM AUTO_INCREMENT=1;