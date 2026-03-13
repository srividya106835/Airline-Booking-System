<!DOCTYPE html>
<html>

<head>

<title>SkyWings Airline</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
font-family:Arial;
background:#f5f7ff;
}

/* NAVBAR */

.navbar{
background:#001f54;
}

.navbar-brand{
font-weight:bold;
font-size:22px;
color:#fff !important;
}

/* HERO SECTION */

.hero{
height:80vh;
background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),
url("https://images.unsplash.com/photo-1436491865332-7a61a109cc05");
background-size:cover;
background-position:center;
display:flex;
justify-content:center;
align-items:center;
color:white;
text-align:center;
}

.hero h1{
font-size:48px;
font-weight:bold;
}

.search-box{
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 8px 20px rgba(0,0,0,0.2);
margin-top:20px;
}

/* FEATURES */

.features{
padding:60px 0;
}

.feature-card{
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 6px 15px rgba(0,0,0,0.1);
text-align:center;
transition:0.3s;
}

.feature-card:hover{
transform:translateY(-8px);
}

.feature-card h4{
color:#007bff;
}

/* FOOTER */

footer{
background:#001f54;
color:white;
text-align:center;
padding:15px;
margin-top:40px;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark px-4">

<a class="navbar-brand" href="#">✈ SkyWings</a>

<div class="ms-auto">

<a href="login.php" class="btn btn-warning me-2">Login</a>

<a href="register.php" class="btn btn-primary">Register</a>

</div>

</nav>

<!-- HERO -->

<section class="hero">

<div>

<h1>Book Flights Around The World 🌍</h1>

<p>Easy • Fast • Secure Flight Booking</p>

<div class="container search-box">

<form action="search.php" method="POST">

<div class="row g-3">

<div class="col-md-3">

<input type="text" name="source" class="form-control" placeholder="From City" required>

</div>

<div class="col-md-3">

<input type="text" name="destination" class="form-control" placeholder="To City" required>

</div>

<div class="col-md-3">

<input type="date" name="date" class="form-control" required>

</div>

<div class="col-md-3">

<button class="btn btn-primary w-100">Search Flights</button>

</div>

</div>

</form>

</div>

</div>

</section>

<!-- FEATURES -->

<section class="features">

<div class="container">

<div class="row text-center">

<div class="col-md-4">

<div class="feature-card">

<h4>✈ Easy Booking</h4>

<p>Search and book flights instantly.</p>

</div>

</div>

<div class="col-md-4">

<div class="feature-card">

<h4>💳 Secure Payment</h4>

<p>100% safe online transactions.</p>

</div>

</div>

<div class="col-md-4">

<div class="feature-card">

<h4>🎫 Instant Ticket</h4>

<p>Get your ticket immediately.</p>

</div>

</div>

</div>

</div>

</section>

<!-- FOOTER -->

<footer>

<p>© 2026 SkyWings Airline Booking System</p>

</footer>

</body>

</html>