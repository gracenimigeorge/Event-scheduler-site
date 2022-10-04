<?php include 'inc/header.php'; ?>
<main role="main" class="new">
  

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Events</h1>
      <p class="lead text-muted">EventO brings people together through live experiences. Discover events that match your passions, or create your own events with our tools.</p>
    </div>
  </section>

  <div class="album py-5 bg-light new">
    <div class="container">
      <div class="row">
      <?php foreach($events as $event): ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="<?php echo $event->img_url; ?>" style="max-height: 15rem"/></a>
            <div class="card-body">
              <a href="event.php?id=<?php echo $event->id; ?>"><h4><?php echo $event->title; ?></h4></a>
              <p class="card-text"><?php echo $event->summary; ?></p>
              <p class="date-location" style="color: grey; font-size: .9rem;">
                <?php echo $event->date; ?> <br/>
                <?php echo nl2br($event->location); ?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!-- <div style = "position:relative;left:950px;top:-30px;">           -->

  <a href="#top">Back to Top</a>
</main>

<?php include 'inc/footer.php'; ?>