<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #d6d6c2;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #8a8a5c;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 20px 20px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #a3c2c2;
    color: black;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 15px;
    background-color: #b3cccc;

}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
    background-color: #b3cccc;

}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width:600px) {
    .column {
        width: 100%;
        background-color: #b3cccc;
    }
}
</style>
</head>
<body>

<div class="header">

    <h1><img src="H.png"></h1>
</div>

<div class="topnav">
  <a href="home.html">Home</a>
  <a href="artworks.html">Projects</a>
  <a href="about.html">About</a>
   <a href="contact.html">Contact</a>
</div>



  

</body>
<head>
<style>
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>

</head>




</body>
</html>
<body style="background-color: #f2f2f2">






</html>
