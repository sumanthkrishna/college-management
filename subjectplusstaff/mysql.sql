CREATE TABLE `subjectplusstaff` (
`id` int(6) NOT NULL auto_increment,
`staffid` varchar(255) NOT NULL default '',
    	`courseid` varchar(255) NOT NULL default '',
		`branchid` varchar(255) NOT NULL default '',
		`year` varchar(255) NOT NULL default '',
		`semester` varchar(255) NOT NULL default '',
		`section` varchar(255) NOT NULL default '',
		`subjectid` varchar(255) NOT NULL default '',
		PRIMARY KEY  (`id`),
UNIQUE KEY `id` (`id`)
)
TYPE=MyISAM AUTO_INCREMENT=1;