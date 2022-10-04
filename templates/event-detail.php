<?php include 'inc/header.php'; ?>
  <main role="main">
    <section class="jumbotron text-center" style="background-image: url(<?php echo $event->img_url; ?>); background-position: center; background-repeat: no-repeat;background-size: cover; position: relative;">
      <div class="container" >
        <div class="jumbotron-heading" style="color: white; font-size: 2.8rem; font-weight: bold; background-color: rgba(0, 0, 0, 0.6); width: 100%;"><?php echo $event->title; ?></div>
      </div>
    </section>
    <div class="album py-5 bg-light">
      <div class="container">
        <div>
          <a class="btn btn-sm btn-outline-secondary" href="editEvent.php?id=<?php echo $event->id; ?>">Edit</a>
          
          <form style="display:inline;" method="post" action="event.php">
            <input type="hidden" name="del_id" value="<?php echo $event->id; ?>">
            <input type="submit" class="btn btn-sm btn-outline-danger" value="Delete">
          </form>
        </div>
        <p class="date-location" style="color: grey;">
          <?php echo $event->date; ?> <br/>
          <?php echo nl2br($event->location); ?>
        </p>
        <p><?php echo nl2br($event->description); ?></p>
      </div>
    </div>
  </main>
<?php include 'inc/footer.php'; ?>