<?php

require_once('Controllers/exampleLesson.php');
require_once('Models/exampleLesson.php');
require_once('Views/exampleLesson.php');

$exampleLesson = new exampleLessonController;
$exampleLesson->addListItem('item toevoegen');
$exampleLesson->html();
