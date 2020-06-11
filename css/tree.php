<?php

include 'inc.general.php';
$cmd = Util::makeVar('cmd');
$treeID = Util::makeVar('treeID');
$branchID = Util::makeVar('branchID');
$branchContent = Util::makeVar('branchContent');
$forks = Util::makeVar('forks');
$revision = Util::makeVar('revision');
$tree = new DecisionTree($treeID);
if (!empty($revision)) {
    $tree->loadRevision($revision);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interactive Decision Tree - Editor</title>
<link href="css/editor.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/editor.js"></script>
</head>

<body>
<h1>Interactive Decision Tree - Editor</h1>
<div id="debug"></div>
<?php 
switch ($cmd) {
    case 'edit-tree':
    case 'new-tree':