<?php
//This script is created during the automated setup process, and contains the core configuration and definitions of the system, which will be used globally.

//Define the configuration class
	class Config {
		public $dbHost = "localhost";
		public $dbPort = "3306";
		public $dbUserName = "ensigma";
		public $dbPassword = "4.0eXcite!";
		public $dbName = "ensigma";
		
		public $installDomain = "localhost/ensigma/";
		public $installRoot = "/xampp/htdocs/ensigma/";
		
		public $folderPermissions = "0777";
		public $encryptedSalt = "%(*&NSJ(&jd&81245";
		public $sessionSuffix = "HJF789HF6";
	}
?>