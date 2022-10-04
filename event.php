<?php include_once 'config/init.php'; ?>

<?php
$event = new Event;

if(isset($_POST['del_id'])){
  $del_id = $_POST['del_id'];
  echo $del_id;
  if($event->delete($del_id)){
    redirect('index.php', 'Event Deleted', 'success');
  } else {
    redirect('index.php', 'Failed to delete the Event', 'error');
  }
}

$template = new Template('templates/event-detail.php');

$event_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->event = $event->getEvent($event_id);
echo $template;