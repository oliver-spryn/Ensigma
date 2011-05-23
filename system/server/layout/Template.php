<?php
//This script will import the selected template from the database, apply, then fill it for each page

	class Template {
	//Define variables used throughout the template
	//Defined from database
		private $name;
		private $slogan;
		private $template;
		
	//Defined by user
		public $title;
		public $includeTop;
		public $includeBottom;
		
	//Define now
		private $headers = "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://localhost/ensigma/system/stylesheets/universal.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://localhost/ensigma/system/stylesheets/jquery-ui.custom.css\" />
<link type=\"image/gif\" rel=\"shortcut icon\" href=\"https://localhost/admin/images/icon.gif\" />
<noscript><meta http-equiv=\"refresh\" content=\"0; url=https://localhost/admin/enable_javascript.php\"></noscript>
<script type=\"text/javascript\" src=\"https://localhost/admin/javascripts/jQuery/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"https://localhost/admin/javascripts/jQuery/jquery-ui.custom.min.js\"></script>";
		
	//Setup the database-driven variables
		public function __construct() {
			global $db;
			
			$templateData = $db->query("SELECT * FROM `config` WHERE `id` = '1'");
			$this->name = $templateData["name"];
			$this->slogan = $templateData["slogan"];
			$this->template = $templateData["template"];
		}
		
	//Import the template beginning
		public function top() {
			global $config;
			
			$title = $this->title;
			$headers = $this->headers;
			$templateRoot = ROOT . "system/templates/" . $this->template . "/";
			$siteName = $this->name;
			$slogan = $this->slogan;
			
			require_once($config->installRoot . "system/templates/" . $this->template . "/top.php");
		}
		
	//Import the template ending
		public function bottom() {
			global $config;
			
			require_once($config->installRoot . "system/templates/" . $this->template . "/bottom.php");
		}
	}
	
//Instantiate the template class
	$template = new Template();
?>