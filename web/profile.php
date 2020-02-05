<html xmlns:th="http://www.thymeleaf.org" th:replace="~{fragments/layout :: layout (~{::body},'profile')}">
<body>
  <div class="jumbotron text-center">
    <div class="container">
      <h1>Bear Link</h1>
      <p>PROFILE</p>

<?php echo "profile test"; ?>

<form class="loginform">
    <br><label>User Name</label><br>
    <input type="text" name="displayfn" placeholder="someone"><br>
    <br><label>First Name</label><br>
    <input type="text" name="displayfn" placeholder="First Name"><br>
    <br><label>Last Name</label><br>
    <input type="text" name="displayln" placeholder="Last Name"><br>
    <br><label>Phone Number</label><br>
    <input type="tel" name="displaypn" placeholder="###-###-####"><br>
    <br><label>Email Address</label><br>
    <input type="email" name="displayemail" placeholder="someone@somewhere.com"><br>

    <!--
    <br><label>Password</label><br>
    <input type="password" name="createpassword" placeholder="********"><br>
    -->

    <br><button>Update Profile</button><br>
</form>

<form class="aboutyourself">

    <!--
    <img src="guy-glasses-logo.jpg" alt="guy-glasses-photo" >
    -->

    <br><label>Tell Us About Yourself</label><br>
    <textarea rows="80" cols="120"></textarea>
    <br><button>Update Profile</button><br>
</form>


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


</body>
</html>
