CREATE TABLE `logindetails` (
`id` int(6) NOT NULL auto_increment,
`username` varchar(255) NOT NULL default '',
		`password` varchar(255) NOT NULL default '',
		`permission` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`id`),
UNIQUE KEY `id` (`id`)
);