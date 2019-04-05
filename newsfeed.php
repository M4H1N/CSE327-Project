<?php
    include 'newsfeedprocess.php';
?>


<!doctype html>
<html lang="en">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- My CSS LINK -->
    <link rel="stylesheet" type="text/css" href="css/newsfeed.css">
    <title>NewsFeed!</title>
    <!-- Adding jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--My JavaScript-->
    <script type="text/JavaScript" src="js/newsfeed.js"></script>
  </head>


  <body>

    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      
      <!-- Button For Toggling Navbar -->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#target">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Username and Navbar profile picture generated by php -->
      <span class="navbar-text ml-auto">
          <a href="profile.php">
          <?php
            echo $username;
          ?>
          </a>
      </span>
      <a class="navbar-brand "><img id="userImage" src="image/avatar/<?php echo $dp; ?>.png" alt="smoke" width="50px" height="50px"></a>

      <!-- Wrapping the collapse items inside a div -->
      <div class="collapse navbar-collapse" id="target">

        <!-- Search Bar and Search button -->
        <form class="form-inline ml-auto" action="searchusers.php" method="post">
          <input class="form-control mr-sm-2" name="searchkey" type="search" placeholder="Search" aria-label="Search">
          <button type="btn btn-light my-sm-0" type="submit">Search</button>
        </form>

        <!-- Link List -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="newsfeed.php" class="nav-link">NewsFeed</a>
          </li>
        </ul>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link">Strategy</a>
          </li>
        </ul>
        <ul class="navbar-nav d-block d-sm-block d-md-none">
          <li class="nav-item">
            <a class="nav-link">Friend List</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="logoutprocess.php" class="nav-link">Logout</a>
          </li>
        </ul>
        <!-- End List -->

      </div>
      <!-- End Div -->

    </nav>
    <!-- End Nav -->

    <!-- This div containes friend list -->
    <div class="float-md-right col-md-2 mb-1 d-none d-sm-none d-md-block" id="friendlistdiv">
      <div class = "bg-dark text-light col-12 mb-2">

        <div class="row border border-primary">
          <div class="col-12">
            <h5>Friend list</h5>
          </div>
        </div>

        <div class="row border border-danger" id="friendlist">
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>
          <div class="col-12 mb-2 mt-2">
            <a class="text-light" href="">Username</a>
          </div>

        </div>

      </div>

    </div>






    <!-- This div containes post textfield and post button -->
    <div class="ml-0 col-md-10 bg-dark text-light float-md-left" id = "postcontainer">
    
      <div class="form-horizontal">
        <div class="col-sm-12 mb-3">
          <h6 class="mt-3">Write your post</h6>
          <textarea class="form-control" id="userpost" placeholder="Write your post"></textarea>
        </div>
        <div class="col-sm-1 mb-3">
          <button id="postbtn" class="btn btn-info">Post</button>
        </div>

      </div>

    </div>
    
    





    <!-- This div containes all News feed post-->
    <div class="ml-0 col-md-10 bg-dark text-light float-md-left" id="container1">

      <!-- Post Div -->
      <div class="container-fluid" id="postdiv">

        <div class="container-fluid">
          <div class="row">
              <h3><b>NewsFeed</b></h3>
          </div>
        </div>

        <!-- This is a indevidual post-->
        <div class="container-fluid indpost">

          <!-- Username and time -->
          <div class="row p-1">
            <div class="col-sm-9 nametime">
              <h5>Username</h5>
            </div>
            <div class="col-sm-3 nametime">
              <small>Date and Time</small>
            </div>
          </div>
          <!-- End of  username and time -->

          <!-- Post content -->
          <div class="row p-1 postcontent">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero cumque aliquid eaque voluptas, ipsam sunt molestiae 
            incidunt odio itaque expedita, ad accusamus reprehenderit consectetur error doloremque quam repellendus necessitatibus! 
            Rerum?</p>
          </div>
          
          <!-- Buttons for like shere and comment -->
          <div class="row p-1">
            <div class="col-xs-10">
              <form action="">
                <button type="submit" class="btn btn-success">Like</button>
                <button type="submit" class="btn btn-primary ">Share</button>
                <button type="submit" class="btn btn-warning">Comment</button>
              </form>
            </div>
            <div class="col-xs-2 ml-auto">
              <form action="">
                <input type="hidden" name="postid" id="postid" value="">
                <button type="submit" class = "btn btn-danger ">Delete Post</button>
              </form>
            </div>
          </div>
          
        </div>
        <!-- End of indi Post-->

        

      
      </div>
      <!-- End of Post Div-->






    </div>
    <!-- End of div containing all post, image and buttons -->


    <!-- Optional JavaScript -->
    <!-- Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>