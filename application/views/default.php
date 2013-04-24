<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Wiki</title>
    <?=css('public/libs/bootstrap/css/bootstrap.min.css')?>
    <?=css('public/css/default.css')?>
</head>

<body>

	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            <p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">

<div class="row-fluid">
  <div class="span9">

    <div class="hero-unit">
    	<div class="actions">
     	<button id="edit-article" class="btn">Edit</button>
     	<button id="save-article" class="btn btn-primary" style="display:none;">Save</button>
     	<button id="cancel-edit" class="btn" style="display:none;">Cancel</button>
		</div>

		<div id="view-content"><h2 style="color:#ddd">Loading...</h2></div>
		<div id="edit-content" style="display:none;"></div>

  </div>
</div>

<div class="span3">
  <div class="well sidebar-nav"></div>
</div>

</div><!--/row-->

<form action="/articles" method="POST">
  <input type="text" name="title">
  <textarea name="description"></textarea>
  <input type="submit">
</form>


<!-- 	    <div id="main">
	    	<h1>Articles</h1>
	    	<div id="article-box"></div>
	    </div> -->

      <hr>

      <footer>
        <p>&copy; Chris Markle 2013</p>
      </footer>

    </div>
    <?=script('public/libs/jquery-1.7.1.min.js')?>
    <?=script('public/libs/jquery.history.js')?>
    <?=script('public/libs/underscore-min.js')?>
    <?=script('public/libs/backbone-min.js')?>
    <?=script('public/libs/bootstrap/js/bootstrap.min.js')?>

</body>
</html>