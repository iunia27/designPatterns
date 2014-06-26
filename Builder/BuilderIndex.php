<?php

require_once('HTMLPageBuilder.php');
require_once('HTMLPageDirector.php');

$pageBuilder = new HTMLPageBuilder();  //create a pagebuilder
$pageDirector = new HTMLPageDirector($pageBuilder);  //create a page director
$pageDirector->buildPage();  //build the page      
$page = $pageDirector->GetPage();  // retreive the page
writeln($page->showPage());   //show the page