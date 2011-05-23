<?php
//This script will import the selected template from the database, apply, then fill it for each page

	class Template {
	//Defined from database or script
		private $name;
		private $slogan;
		private $template;
		private $headers;
		
	//Defined by user
		public $title;
		public $includeTop;
		public $includeBottom;
		
	//Setup the database-driven variables
		public function __construct() {
			global $db;
			
		//Site information
			$templateData = $db->query("SELECT * FROM `config` WHERE `id` = '1'");
			$this->name = $templateData["name"];
			$this->slogan = $templateData["slogan"];
			$this->template = $templateData["template"];
			
		//SEO information
			$SEOData = $db->query("SELECT * FROM `seo`", "raw");
			$SEOMeta = "";
			
			while($data = $db->fetch($SEOData)) {
				$SEOMeta .= $data['meta'] . "\n";
			}
			
			$this->headers = "<base href=\"" . ROOT . "\" />
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<meta http-equiv=\"content-language\" content=\"en\" />
<meta name=\"resource-type\" content=\"document\" />

<meta name=\"robots\" content=\"index, follow\" />
<meta name=\"googlebot\" content=\"index, follow\" />
" . $SEOMeta . "
<link rel=\"stylesheet\" type=\"text/css\" href=\"" . ROOT . "system/stylesheets/universal.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"" . ROOT . "system/stylesheets/jquery-ui.custom.css\" />
<link type=\"image/gif\" rel=\"shortcut icon\" href=\"" . ROOT . "system/images/icon.gif\" />
<script type=\"text/javascript\" src=\"" . ROOT . "system/javascripts/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"" . ROOT . "system/javascripts/jquery-ui.custom.min.js\"></script>
";
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