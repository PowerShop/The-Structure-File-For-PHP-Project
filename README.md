# The Structure File For My Any PHP Project
 
# Website Core :computer:

This is the main core of the website. It includes the header, the content and the footer. It also includes the system file. :rocket:

## Dependencies :package:

We have included the following dependencies in our project:

- [Bootstrap CSS v5.2.1](https://getbootstrap.com/docs/5.2/getting-started/introduction/) :art:
- [Bootstrap JavaScript Libraries](https://getbootstrap.com/docs/5.2/getting-started/introduction/) such as Popper.js 2.11.6 and Bootstrap.js 5.2.1 :hammer_and_wrench:
- [Font Awesome Kit 6](https://fontawesome.com/) :mag:
- [jQuery 3.6.3](https://jquery.com/) :spider_web:
- [SweetAlert2 11](https://sweetalert2.github.io/) :candy:

## Installation :wrench:

To install this repository, simply clone the project to your local machine and include the necessary dependencies in your HTML file:

```html
<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  
  <!-- Font Awesome Kit -->
  <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>
  
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- SweetAlert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- Website content goes here -->
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>
```
## Index File :file:
In Index file it include the dependencies from above lists
```
<?php
    // Set the timezone :watch:
    date_default_timezone_set("Asia/Bangkok");

    // Set the error reporting 1 = on, 0 = off :bug:
	@ini_set('display_errors', '0');

    // Include the system file :file_folder:
    require dirname(__FILE__) . '/_sys/_api.php';

    // Redirect :arrows_counterclockwise:
    if ($_GET) {
        // Do nothing :man_shrugging:
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
```
### This code is written in PHP and performs the following actions:

- Sets the timezone to Asia/Bangkok. :watch:
- Sets the error reporting to off. :bug:
- Includes the system file located in the _sys directory. :file_folder:
- Redirects to the home page if no GET parameters are present. :arrows_counterclockwise:
- Includes the appropriate page file located in the _page directory based on the GET parameter passed in the URL.
- If the requested page file does not exist, redirects to the home page.
- The code also uses the rdr() function which is presumably defined in the included _sys/_api.php file to perform the redirection. Emojis are added to make the code more visually appealing and easier to understand... maybe :)

## Usage :rocket:
Once you have installed the project and included the necessary dependencies in your HTML file, you can use the website core as a starting point for your own website. The header, content, and footer sections can be customized to fit your needs, and the included system file can be modified to handle any backend functionality.

## Contributing :thumbsup:
We welcome contributions to our project! If you find any bugs or issues, please open an issue in the repository. If you would like to contribute code, please fork the project and submit a pull request with your changes.

## License :page_facing_up:
This project is licensed under the MIT License. :memo:
