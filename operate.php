<?php include_once 'config/init.php'; ?>

<?php
$event = new Event;

$template = new Template('templates/frontpage.php');

$template->title = 'latest events';
$template->events = $event->getAllEvents();
echo $template;
