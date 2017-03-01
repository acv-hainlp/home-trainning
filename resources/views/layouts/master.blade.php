<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

@include ('layouts.nav')


@yield('content')

@include ('layouts.error')


<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top w3-center">
  <button class="w3-btn w3-disabled w3-padding-large w3-margin-bottom w3-margin-top">Previous</button>
  <button class="w3-btn w3-padding-large w3-margin-bottom w3-margin-top">Next »</button>
</footer>

</body>
</html>
