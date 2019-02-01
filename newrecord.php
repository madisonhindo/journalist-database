
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Add a Journalist!</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/addedstyles.css">
</head>

<body>
<div id="container" class="col-centered">
<div class="row">
<div class="col col-centered text-center">
<h1 class="display-3">Add a Journalist!</h1>

<p class="text-center"><a href="index.php">View the current list.</a></p>
</div>
</div>

<div id="journalistentry" class="text-center">
<div class="row">
<div class="col-lg-8 col-md-5 col-sm-8 col-centered">

<form id="journoform" method="post" autocomplete="off">
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="name" placeholder="Name" maxlength="70" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
      <div class="col-sm-10">
        <input type="text" name="twitter" class="form-control" id="twitter" placeholder="Twitter Handle" maxlength="40" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="publication" class="col-sm-2 col-form-label">Publication</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="publication" id="publication" placeholder="Former Publication" maxlength="100" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="specialties" class="col-sm-2 col-form-label">Specialties</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="specialties" id="specialties" placeholder="Specialties" maxlength="140" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="location" class="col-sm-2 col-form-label">Location</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="location" id="location" placeholder="City, State Abbreviation" maxlength="60" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="col text-center">
        <input class="btn btn-primary text-center" type="submit" id="submit" value="Submit">
      </div>
    </div>
  </form>
</div>
</div>

<div id="respond">
    <p>Thank you for submitting the form!</p>
    <p><a href="newrecord.php">Return to the form</a></p>
</div>
</div>
</div> 
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/enter.js"></script>
</body>
</html>
