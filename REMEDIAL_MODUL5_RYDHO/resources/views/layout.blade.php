<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav mx-auto">
	        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">HOME</a>
	        <a class="nav-link {{ Route::currentRouteName() == 'vaccine' ? 'active' : '' }}" href="/vaccine">VACCINE</a>
	        <a class="nav-link {{ Route::currentRouteName() == 'patient' ? 'active' : '' }}" href="/patient">PATIENT</a>
	    </div>
	  </div>
	</nav>

	@yield('content')

	<br><br>
	<div class="footer navbar-fixed-bottom mt-5">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					Created By <a data-toggle="modal" data-target="#modalFooter" href="javascropt:void(0)">Rydho Helmy Pramoedya - 1202204122</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<div class="modal" id="modalFooter" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title">Kesan Pesan Praktikum</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <table cellpadding="5">
    	<tr>
    		<td>Kesan</td>
    		<td>:</td>
    		<td>[TULIS DISINI]</td>
    	</tr>
    	<tr>
    		<td>Pesan</td>
    		<td>:</td>
    		<td>[TULIS DISINI]</td>
    	</tr>
    </table>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>