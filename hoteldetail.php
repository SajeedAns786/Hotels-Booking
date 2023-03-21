<?php
include('inc/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-12 my-5 mb-4 px-4">
            <h2 class="fw-bold">
                Hotel Name
            </h2>
            <div style="font-size:14px">
                <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
                <span class="text-secondary">></span>
                <a href="hotels.php" class="text-secondary text-decoration-none">HOTELS</a>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 px-4 ">
            <div id="roomCarousal" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#roomCarousal" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#roomCarousal" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#roomCarousal" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/carousel/IMG_15372.png" class="d-block w-100 rounded" height="300px" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/carousel/IMG_40905.png" height="300px" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/carousel/IMG_62045.png" height="300px" class="d-block w-100 rounded" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousal" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#roomCarousal" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- put slik here -->




        </div>
        <div class="col-lg-5 col-md-12 px-4">
            <div class="card md-4 border-0 shadow-sm rounded-3">
                <div class="card-body">
                    <h4>₹200 per night</h4>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="features mb-4 mt-2">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap me- mb-1">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap me- mb-1">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap me- mb-1">
                            1 Balcony
                        </span>

                        <span class="badge rounded-pill bg-light text-dark text-wrap me- mb-1">
                            3 sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap me- mb-1">
                            WIFI
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap me- mb-1">
                            TV
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap me- mb-1">
                            AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap me- mb-1">
                            Room heater
                        </span>
                    </div>
                    <a href="#" class="btn   w-100 text-white custom-bg  mb-2  shadow-none ">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4 px-4">
            <div class="mb-4">
                <h5>Description</h5>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit ipsum aliquid inventore
                    reprehenderit. Molestiae officia esse nesciunt praesentium nulla dolor?
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 px-4 mt-3">
            <!-- Map -->
            <iframe class="w-100 rounded"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3767.4840696338!2d72.99255213093565!3d19.217723995667367!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bf01be673b93%3A0x82945e32788b08b0!2sFirst%20Homebuy%20Realty%20LLP!5e0!3m2!1sen!2sin!4v1678953464803!5m2!1sen!2sin"
                width="600" height="365px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-8 col-md-12 px-4  mt-3">
            <!-- <h4 class="text-center ">Ratings and Reviews</h4> -->
            <div class="card ">
                <div class="card-header text-center  fs-5 fw-bold">Your 2 Min Of Review Can
                    Help Others To
                    Book Hotels</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3 text-center">
                            <h3 class="color2 mt-4 mb-4">
                                4
                                </span> / 5</b>

                            </h3>

                            <h3>
                                <span> 250
                                </span> Review
                                <?php
                                                    //}
                                                    ?>
                            </h3>
                        </div>
                        <div class="col-sm-5">
                            <p class="my-1">
                            <div class="progress-label-left"><b>Staff (20 %)</b> </div>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-striped progress-bar-animated "
                                    role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                    id="five_star_progress"
                                    style="width: 20%;background-color:#2ec1ac;<?php //echo $fiveStarRatingPercent; ?>">
                                </div>
                            </div>
                            </p>
                            <p class="my-2">
                            <div class="progress-label-left"><b>Facilities (30 %)</b> </div>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-striped progress-bar-animated "
                                    role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                    id="four_star_progress"
                                    style="width: 30%;background-color:#2ec1ac;<?php //echo $fourStarRatingPercent;?>">
                                </div>
                            </div>
                            </p>
                            <p class="my-2">
                            <div class="progress-label-left"><b>Cleanliness (90 %)</b> </div>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"
                                    style="width: 90%;background-color:#2ec1ac;<?php //echo $threeStarRatingPercent;?>">
                                </div>
                            </div>
                            </p>
                            <p class="my-2">
                            <div class="progress-label-left"><b>Comfort (60 %)</b> </div>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"
                                    style="width: 60%;background-color:#2ec1ac;<?php // $twoStarRatingPercent;?>">
                                </div>
                            </div>
                            </p>
                            <p class="my-2">
                            <div class="progress-label-left"><b>Value for Money (50 %)</b> </div>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"
                                    style="width: 50%;background-color:#2ec1ac;<?php //echo $oneStarRatingPercent;?>">
                                </div>
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h3 class="mt-4 mb-3 color2" style="margin-bottom: 0.5em;">Write Review</h3>
                            <button type="button" name="add_review" id="add_review"
                                class="btn btn-dark shadow-none restore" data-bs-toggle="modal"
                                data-bs-target="#review_modal">Review</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container mt-5">

    <table class="table">
        <thead class="table-dark">
            <td>Room type</td>
            <td>Sleeps</td>
            <td>Price for -- nights</td>
            <td>Select rooms</td>
            <td>Prices</td>
        </thead>
        <tbody>
            <td>1 large double bed</td>
            <td>couples</td>
            <td>-----</td>
            <td>Filter</td>
            <td>price according to room</td>
        </tbody>
        <tbody>
            <td>1 large double bed</td>
            <td>couples</td>
            <td>-----</td>
            <td>Filter</td>
            <td>price according to room</td>
        </tbody>
        <tbody>
            <td>1 large double bed</td>
            <td>couples</td>
            <td>-----</td>
            <td>Filter</td>
            <td>price according to room</td>
        </tbody>
    </table>
</div>
<!--rating modal start-->
<div id="review_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title color1">Submit Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="submit_rating.php" method="post" enctype="multipart/form-data">
                    <h4 class=" mt-2">
                        <div class="row">
                            <div class="col-lg-7 col-5 color2">
                                <p>Staff</p>
                            </div>
                            <div class="col-lg-5 col-7">
                                <div class="rate">
                                    <input type="radio" id="star5" name="staff" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="staff" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="staff" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="staff" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="staff" value="1" checked />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                    </h4>
                    <h4 class=" mt-2">
                        <div class="row">
                            <div class="col-lg-7 col-5 color2">
                                <p>Facilities</p>
                            </div>
                            <div class="col-lg-5 col-7">
                                <div class="rate">
                                    <input type="radio" id="star52" name="facilities" value="5" />
                                    <label for="star52" title="text2">5 stars</label>
                                    <input type="radio" id="star42" name="facilities" value="4" />
                                    <label for="star42" title="text2">4 stars</label>
                                    <input type="radio" id="star32" name="facilities" value="3" />
                                    <label for="star32" title="text2">3 stars</label>
                                    <input type="radio" id="star22" name="facilities" value="2" />
                                    <label for="star22" title="text2">2 stars</label>
                                    <input type="radio" id="star12" name="facilities" value="1" checked />
                                    <label for="star12" title="text2">1 star</label>
                                </div>
                            </div>
                        </div>
                    </h4>
                    <h4 class=" mt-2">
                        <div class="row">
                            <div class="col-lg-7 col-5 color2">
                                <p>Cleanliness</p>
                            </div>
                            <div class="col-lg-5 col-7">
                                <div class="rate">
                                    <input type="radio" id="star53" name="cleanliness" value="5" />
                                    <label for="star53" title="text3">5 stars</label>
                                    <input type="radio" id="star43" name="cleanliness" value="4" />
                                    <label for="star43" title="text3">4 stars</label>
                                    <input type="radio" id="star33" name="cleanliness" value="3" />
                                    <label for="star33" title="text3">3 stars</label>
                                    <input type="radio" id="star23" name="cleanliness" value="2" />
                                    <label for="star23" title="text3">2 stars</label>
                                    <input type="radio" id="star13" name="cleanliness" value="1" checked />
                                    <label for="star13" title="text3">1 star</label>
                                </div>
                            </div>
                        </div>
                    </h4>
                    <h4 class=" mt-2">
                        <div class="row">
                            <div class="col-lg-7 col-5 color2">
                                <p>Comfort</p>
                            </div>
                            <div class="col-lg-5 col-7">
                                <div class="rate">
                                    <input type="radio" id="star54" name="comfort" value="5" />
                                    <label for="star54" title="text4">5 stars</label>
                                    <input type="radio" id="star44" name="comfort" value="4" />
                                    <label for="star44" title="text4">4 stars</label>
                                    <input type="radio" id="star34" name="comfort" value="3" />
                                    <label for="star34" title="text4">3 stars</label>
                                    <input type="radio" id="star24" name="comfort" value="2" />
                                    <label for="star24" title="text4">2 stars</label>
                                    <input type="radio" id="star14" name="comfort" value="1" checked />
                                    <label for="star14" title="text4">1 star</label>
                                </div>
                            </div>
                        </div>
                    </h4>
                    <h4 class=" mt-2">
                        <div class="row">
                            <div class="col-lg-7 col-5 color2">
                                <p>Value of Money</p>
                            </div>
                            <div class="col-lg-5 col-7">
                                <div class="rate">
                                    <input type="radio" id="star55" name="value" value="5" />
                                    <label for="star55" title="text5">5 stars</label>
                                    <input type="radio" id="star45" name="value" value="4" />
                                    <label for="star45" title="text5">4 stars</label>
                                    <input type="radio" id="star35" name="value" value="3" />
                                    <label for="star35" title="text5">3 stars</label>
                                    <input type="radio" id="star25" name="value" value="2" />
                                    <label for="star25" title="text5">2 stars</label>
                                    <input type="radio" id="star15" name="value" value="1" checked />
                                    <label for="star15" title="text5">1 star</label>
                                </div>
                            </div>
                        </div>
                    </h4>
                    <div class="form-group my-4" style="display:none">
                        <!--<label for="project" class="form-label">Name of Project</label>-->
                        <select id="inputState" name="cat" id="cat" class="form-select">
                            <option value="<?php //echo htmlentities($result->PackageId); ?>">
                                <?php //echo htmlentities($result->PackageName); ?>
                            </option>
                        </select>
                    </div>
                    <div class="form-group my-4">
                        <input type="text" name="user_name" id="user_name" class="form-control"
                            placeholder="Enter Your Name" required />
                    </div>
                    <div class="form-group my-4">
                        <textarea name="user_review" id="user_review" class="form-control"
                            placeholder="Type Comment Here" required></textarea>
                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-dark shadow-none" id="save_review">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--rating modal end-->


<?php
include('inc/footer.php');
?>