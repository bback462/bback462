<?php
<div class="jumbotron text-center">
  <div class="container">

require_once("header.html");
  <h1>Bear Link</h1>
  <p>HOME</p>



  </div>
</div>

<div class="jumbotron text-center" th:fragment="footer">
  <a type="button" class="btn btn-lg btn-primary" href="/"><span class="glyphicon glyphicon-home"></span> HOME</a>
  <a type="button" class="btn btn-lg btn-primary" href="/profile"><span class="glyphicon glyphicon-user"></span> PROFILE</a>
  <a type="button" class="btn btn-lg btn-primary" href="/matches"><span class="glyphicon glyphicon-heart"></span> MATCHES</a>
  <a type="button" class="btn btn-lg btn-primary" href="/search"><span class="glyphicon glyphicon-search"></span> SEARCH</a>
  <a type="button" class="btn btn-lg btn-primary" href="/faq"><span class="glyphicon glyphicon-list"></span> FAQ</a>

  <p>&copy; 2020 Bear Link</p>
</div>
require_once("nav.html");
?>
