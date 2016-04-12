<?php
	/**
	 * Template Name: Test
	 */
?>



<a href="/test-2?a=status">Git Status</a>
<a href="/test-2?a=list">List</a>
<a href="/test-2?a=addallchanges">Add all changes</a>
<a href="/test-2?a=remove">Remove all changes</a>
<a href="/test-2?a=push">Push</a>
<br />

<?php

if($_REQUEST['a'] === 'status') {
  $output = [];
  exec("git status", $output);
  echo implode('<br />', $output);
}

if($_REQUEST['a'] === 'list') {
  $output = [];
  exec("ls", $output);
  echo implode('<br />', $output);
}

if($_REQUEST['a'] === 'addallchanges') {
  $output = [];
  exec("git add .", $output);
  echo implode('<br />', $output);
}

if($_REQUEST['a'] === 'remove') {
  $output = [];
  exec("git rm -a", $output);
  echo implode('<br />', $output);
}

if($_REQUEST['a'] === 'commit') {
  $output = [];
  exec("git commit" . ($_REQUEST['m'] ? ' -m \"' . $_REQUEST['m'] . '\"' : ''), $output);
  echo implode('<br />', $output);
}

if($_REQUEST['a'] === 'push') {
  $output = [];
  exec("git push origin master", $output);
  echo implode('<br />', $output);
}

//exec("rm -r .git .gitignore");
//exec("git init; git remote add origin https://mymoneymatters:P03p7129github@github.com/mymoneymatters/website.git");

?>