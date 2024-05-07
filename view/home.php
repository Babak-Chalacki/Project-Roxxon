<!-- <body style="background-color:gray;"> -->


    <?php include "header.php" ?>
    <style>
     body {
            background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            color: #fff;
            font-family: Arial, sans-serif;
        }
        #share-media{
          color:rgb(0,100,240);
        }
        #share-media:hover{
          border-width: 3px;
          color:blue;
          font-size:large;
          cursor: pointer;
        }
    </style>
    <div class="container-fluid">
        <!-- first nav -->
        <nav class="navbar navbar-expand-lg navbar-expand-md  navbar-dark bg-dark">
            <div class="container">

                <div class="container-fluid">
                    <button class="btn btn-dark d-xxl-none d-xl-none d-lg-none d-md-none d-sm-block " type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                        aria-controls="offcanvasScrolling">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/ifsxxxte.json" trigger="hover" colors="primary:#d1fad7"
                            style="width:25px;height:25px">
                        </lord-icon>
                    </button>
                    <a class="btn btn-dark d-xxl-none d-xl-none d-lg-none d-md-none d-sm-block " class="navbar-brand"
                        href="#">
                        <img src="img/roxxon-power.webp" alt="Logo" width="200" height="44"
                            class="d-inline-block align-text-top">
                    </a>


                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="navbar-brand" href="#">
                                    <img src="img/roxxon-power.webp" alt="Bootstrap" width="230" height="54">
                                </a>
                            </li>
                            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link flashy" href="index.php">Main page</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link flashy" href="profile.php">Profile</a>
                                    </li>


                                </ul>
                            </div>
                        </ul>
                        <div class="box">
                            <form name="search">
                                <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
                            </form>
                            <i class="fas fa-search"></i>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- first nav -->
        <!-- second nav -->
        <nav id="first_nav" class="navbar navbar-expand-lg navbar-expand-md  navbar-dark bg-dark">
            <div class="container">

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link flashy" href="#">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link flashy" href="#">COMICS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link flashy" href="#">CHARACTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link flashy" href="#">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link flashy" href="#">TV SHOWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link flashy" href="#">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link flashy" href="#">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link flashy" href="#">MORE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- second nav -->

    </div>






    <div class="container mb-5">
        <!-- new post section -->
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <div class="col-12">


                    <div class="card ">
                        <div class="card-header">
                            what's on your mind ? new post
                        </div>
                        <div class="card-body">
                            <form action="" method="post" id="my-post">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Write your title</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div>
                                    <label id="share-media" for="formFileLg" class="form-label">Share your Media</label>
                                    <input hidden class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>

                        </div>
                        </form>
                        <div class="card-footer text-body-secondary">
                            <button form="my-post" class="btn-primary btn" type="submit">Publish new post</button>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- new post section  -->

        <!-- poeple post list -->


        <div class="row justify-content-center mt-5">
            <?php // foreach():  ?>
 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mt-5">
                <div class="col-12">


                    <div class="card ">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-2">
                                    <img src="https://picsum.photos/1200" class=" rounded-circle img-fluid" alt="">
                                </div>
                                <div class="col-10">
                                    <a style="color:black;" href="#"><b>
                                            <p>john</p>
                                        </b></a>
                                    <small>
                                        <p class="text-secondary">7 hours ago</p>
                                    </small>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <img src="https://picsum.photos/id/237/800/500" class=" img-fluid" alt="">
                        </div>
                        <div class="card-footer text-body-secondary">
                            <button type="button" class=" justify-content-center btn btn-primary">
                                <i class="fa-solid fa-thumbs-up"></i> <span class="badge text-bg-secondary">4</span>
                            </button>
                        </div>
                    </div>



                </div>
 </div>
 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mt-5">
                <div class="col-12">


                    <div class="card ">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-2">
                                    <img src="https://picsum.photos/1200" class=" rounded-circle img-fluid" alt="">
                                </div>
                                <div class="col-10">
                                    <a style="color:black;" href="#"><b>
                                            <p>john</p>
                                        </b></a>
                                    <small>
                                        <p class="text-secondary">7 hours ago</p>
                                    </small>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <img src="https://picsum.photos/id/237/800/500" class=" img-fluid" alt="">
                        </div>
                        <div class="card-footer text-body-secondary">
                            <button type="button" class=" justify-content-center btn btn-primary">
                                <i class="fa-solid fa-thumbs-up"></i> <span class="badge text-bg-secondary">4</span>
                            </button>
                        </div>
                    </div>



                </div>
 </div>
 
            <?php // endforeach; ?>
        </div>


        <!-- poeple post list -->


    </div>















    <!-- side bar -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <!-- <h5 class="offcanvas-title nav-link" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5> -->
            <button style="margin-left: 150px;" type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link flashy" href="index.php">Main page</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link flashy" href="profile.php">Profile</a>
              </li>
                <li class="nav-item active">
                    <a class="nav-link flashy" href="#">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link flashy" href="#">COMICS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link flashy" href="#">CHARACTERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link flashy" href="#">MOVIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link flashy" href="#">TV SHOWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link flashy" href="#">GAMES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link flashy" href="#">VIDEOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link flashy" href="#">MORE</a>
                </li>
            </ul>
        </div>


    </div>
    <!-- side bar -->

    <?php include "footer.php" ?>