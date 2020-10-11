<html>
	<head>
		<title>User Dashboard</title>

		<link rel = "stylesheet" type = "text/css" href = "css/user-dashboard.css" />
	</head>

<body>

<?php 
		include("components/symbols.php");
?>

<?php 
		include("components/user-sidenav.php");
?>


<section class="page-content">

  <section class="search-and-user">
    <form>
      <input type="search" placeholder="Search ...">
      <button type="submit" aria-label="submit form">
        <svg aria-hidden="true">
          <use xlink:href="#search"></use>
        </svg>
      </button>
    </form>
    <div class="admin-profile">
      <span class="greeting">Hello User</span>
      <div class="notifications">
        <span class="badge">5</span>
        <svg>
          <use xlink:href="#users"></use>
        </svg>
      </div>
    </div>
  </section>

  <div class="container">
    <h1>Borrowed Books</h1>
    <ul>
      <li>demo 1</li>
      <li>demo 2</li>
    </ul>
  </div>

<?php 
		include("components/footer.php");
?>

</section>


<script src="js/user-dashboard.js"></script>
</body>
</html>