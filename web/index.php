<?php

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
  $action = filter_input(INPUT_GET, 'action');
}
if($action == 'mineA') {
  $a = 'mine';
  include 'view/assignments.php';
} else if($action == 'teamA') {
  $a = 'team';
  include 'view/assignments.php';
} else {
  include 'view/home.php';
}
