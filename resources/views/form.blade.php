<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css">
</head>
<body>
<div class="container">

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</div>
<div class="container">
	<h1>User Register...</h1>
	<form method="get" action="http://local.apicodal.com/verifydata">
		<div class="form-group">
			<input type="text" name="uname" value="{{ old('uname') }}" placeholder="User Name" class="form-control">
		</div>
		<div class="form-group">
			<input type="email" name="uemail"  value="{{ old('uemail') }}" placeholder="Email ID" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="upassword"  value="{{ old('upassword') }}" placeholder="Password" class="form-control">
		</div>
		<div class="form-group">
			<input type="text" name="ucontact"  value="{{ old('ucontact') }}" placeholder="Contact Number" class="form-control">
		</div>
		<input type="submit" name="submit" class="btn btn-primary">


	</form>

	 @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

</div>

</body>
</html>
