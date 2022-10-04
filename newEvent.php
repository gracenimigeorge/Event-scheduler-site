<?php include_once 'config/init.php'; ?>

<?php
$event = new Event;

if(isset($_POST['submit'])){
  $data = array();
  $data['title'] = $_POST['title'];
  $data['date'] = $_POST['date'];
  $data['location'] = $_POST['location'];
  $data['summary'] = $_POST['summary'];
  $data['description'] = $_POST['description'];
  $data['img_url'] = $_POST['img_url'];

  if($event->create($data)){
    redirect('index.php', 'A New event has been created', 'success');
  } else {
    redirect('index.php', 'Something went wrong', 'error');
  }
}

$template = new Template('templates/new-event.php');
echo $template;
?>