<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/home">Noosphere</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/home">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/books">Books</a></li>
          <li><a href="/magazines">Magazines</a></li>
        </ul>
      </li>
      <li><a href="/contacts">Contacts</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
    <?php
      session_start();
      if (isset($_SESSION['is_started']) && $_SESSION['is_started'])
      {
        echo '<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="glyphicon glyphicon-user"></span>Hello, ' . $_SESSION['first_name'] . '!
			<span class="caret"></span>
		</a>
        <ul class="dropdown-menu">
          <li><a href="/profile">Profile</a></li>
          <li><a href="/profile/change_password">Change password</a></li>
        </ul>
      </li>
        <li><a href="/profile/logout"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>';
      }
      else
      {
        echo '<li><a href="/registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
      }
    ?>
    </ul>
  </div>
</nav>