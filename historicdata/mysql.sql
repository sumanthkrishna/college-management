CREATE TABLE `historicdata` (
`id` int(6) NOT NULL auto_increment,
`studentid` varchar(255) NOT NULL default '',
		`year` varchar(255) NOT NULL default '',
		`semester` varchar(255) NOT NULL default '',
		`percentage` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`id`),
UNIQUE KEY `id` (`id`)
)
TYPE=MyISAM AUTO_INCREMENT=1;