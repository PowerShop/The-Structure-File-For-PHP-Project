<!--
    This is the main core of the website.
    It includes the header, the content and the footer.
    It also includes the system file.

    Include Bootstrap CSS v5.2.1
    Include Bootstrap JavaScript Libraries such as Popper.js 2.11.6 and Bootstrap.js 5.2.1
    Include Font Awesome Kit 6
    Include jQuery 3.6.3
    Include SweetAlert2 11

-->
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- jQuery 3.6.3 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- SweetAlert2 11 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Font Awesome Kit 6 -->
    <script src="https://kit.fontawesome.com/02e207a49a.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<?php
    // Set the timezone
    date_default_timezone_set("Asia/Bangkok");

    // Set the error reporting 1 = on, 0 = off
	@ini_set('display_errors', '0');

    // Include the system file
    require dirname(__FILE__) . '/_sys/_api.php';

    // Redirect
    if ($_GET) {
        #do nothing...
	} else {
		rdr('?page=home', 500);
	}

	if (isset($_GET['page'])) {
		$page = '_page/' . $_GET['page'] . '.php';
		if (file_exists($page)) {
			include $page;
		} else {
			rdr('?page=home', 500);
		}
	}
?>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>