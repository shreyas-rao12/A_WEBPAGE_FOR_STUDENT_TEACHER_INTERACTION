***********************************************************
Procedure for Setting up database and running the PHP files
************************************************************

Pre-requisites:

-> Ensure wamp server is installed
-> Ensure that wamp server is running and the icon of wamp is green in taskbar.

------------------------------------------------------------
Step 1: Setting the Database
------------------------------------------------------------

-> Open browser and enter "localhost/phpmyadmin" in url bar and hit enter
-> A login page opens enter username as "root" and hit go (leave password field blank)
-> Click on database tab --> give database name as "test" and click create
-> In the next page enter table name as "table1" and number of columns = 11 and hit go
-> In the next page enter the column details as follows:

	Name	Type	length	default	nullindex

	name	VARCHAR	255	-	-

	usn	VARCHAR	255	-	PRIMARY

	password VARCHAR 255	-	-

	sgpa	VARCHAR	255	NULL	-

	sub0	VARCHAR	255	NULL	-	

	sub1	VARCHAR	255	NULL	-	

	sub2	VARCHAR	255	NULL	-

	sub3	VARCHAR	255	NULL	-

	sub4	VARCHAR	255	NULL	-

	sub5	VARCHAR	255	NULL	-

	sub6	VARCHAR	255	NULL	-

-> CLick on save
-> GO to import tab and and click on browse and select the table1.csv file in the folder
-> Hit Go
-> Go to browse tab and check whether the data is updated.
	(Don't close this browser tab!!)
------------------------------------------------------
step2: running PHP files
------------------------------------------------------
-> copy the enitre folder to to wamp/www
-> go to browser and enter "localhost/index.php" in URL bar and hit enter
	