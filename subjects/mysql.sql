CREATE TABLE `subjectdetails` (
`id` int(6) NOT NULL auto_increment,
`coursename` varchar(255) NOT NULL default '',
		`branchname` varchar(255) NOT NULL default '',
		`year` varchar(255) NOT NULL default '',
		`semester` varchar(255) NOT NULL default '',
		`subjectname` varchar(255) NOT NULL default '',
		`subjectid` varchar(255) NOT NULL default '',
		`staticid` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`id`),
UNIQUE KEY `id` (`id`)
)
TYPE=MyISAM AUTO_INCREMENT=1;