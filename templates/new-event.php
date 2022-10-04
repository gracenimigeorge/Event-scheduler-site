<?php include 'inc/header.php'; ?>
  <main role="main">
    <section class="jumbotron text-center">
      <div class="container" >
        <h1 class="jumbotron-heading">Create New Event</h1>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <form method="post" action="newEvent.php">
          <div class="form-group">
            <label>Event Title</label>
            <input type="text" class="form-control" name="title" required>
          </div>
          <div class="form-group">
            <label>Start and End Date</label>
            <input placeholder="ex:september 17-20, 2022" type="text" class="form-control" name="date">
          </div>
          <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location">
          </div>
          <div class="form-group">
            <label>summary</label>
            <textarea type="text" class="form-control" name="summary"></textarea>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea type="text" class="form-control" name="description"></textarea>
          </div>
          <div class="form-group">
            <label>Image URL</label>
            <input type="text" class="form-control" name="img_url">
          </div>
          <input type="submit" class="btn btn-outline-secondary" value="Submit" name="submit">
          <input type="reset"  class="btn btn-outline-secondary" value="Reset">
          <!-- <div style = "position:relative;left:850px;top:-30px;">           -->
          <a href="#top">Back to Top</a>
          </div>
        </form>
      </div>
    </div>
  </main>
  
<?php include 'inc/footer.php'; ?>