<?php include_once 'config/init.php'; ?>

<?php
$event = new Event;
$event_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
  $data = array();
  $data['title'] = $_POST['title'];
  $data['date'] = $_POST['date'];
  $data['location'] = $_POST['location'];
  $data['summary'] = $_POST['summary'];
  $data['description'] = $_POST['description'];
  $data['img_url'] = $_POST['img_url'];

  if($event->update($event_id, $data)){
    redirect('event.php?id=' . $event_id, 'A New event has been updated', 'success');
  } else {
    redirect('event.php?id=' . $event_id, 'Something went wrong', 'error');
  }
}

$template = new Template('templates/edit-event.php');
$template->event = $event->getEvent($event_id);
echo $template;