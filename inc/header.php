<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahabaleshwar Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/common.css">
    <style>
    .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }

    @media screen and (max-width:575px) {
        .availability-form {
            margin-top: 25px;
            padding: 0 35px;
        }
    }

    /* Code for Review */
    @import url("https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;700&display=swap");

    .testimonials {
        background: #fff;
        text-align: center;
        width: 95%;
        max-width: 900px;
        padding: 2rem;
        margin: 1.5rem auto;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
    }

    .title {
        font-size: 1.5rem;
    }

    .description {
        font-size: 0.95rem;
        color: #333;
    }

    .slider-container {
        margin-top: 2rem;
        margin: 2rem auto 0 auto;
        position: relative;
        overflow: hidden;
    }

    .slider {
        display: flex;
        flex: 0 0 1;
        width: 300%;
        /* Depends On slide-box Length * 100 */
        transition: all 0.5s linear;
    }

    .slide-box {
        padding: 0 80px;
    }

    .slide-box .comment {
        background-color: #000;
        color: #fff;
        font-size: 0.86rem;
        padding: 1rem 1.5rem;
        margin-bottom: 2rem;
        letter-spacing: 0.4px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        position: relative;
        font-weight: 400;
    }

    .slide-box .comment::before {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -10px;
        height: 20px;
        width: 20px;
        background-color: #000;
        transform: translateX(-50%) rotate(45deg);
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
    }

    .slide-box img {
        max-width: 60px;
        border-radius: 50%;
    }

    .slide-box .name {
        font-size: 1rem;
    }

    .slide-box .job {
        font-size: 0.7rem;
        color: #8d8e97;
        font-weight: 400;
    }

    .control-slider {
        position: absolute;
        z-index: 5;
        top: 50%;
        transform: translateY(-50%);
        height: 40px;
        width: 40px;
        background-color: #fff;
        line-height: 40px;
        color: #333;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
    }

    .btn-left {
        left: 10px;
    }

    .btn-right {
        right: 10px;
    }

    @media screen and (max-width: 500px) {
        .slide-box {
            padding: 0 55px;
        }
    }

    /* Code end for Review */
    </style>
</head>

<body class="bg-light">
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Mahabaleswar Booking</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#headerid" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="headerid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-2" href="hotels.php">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-2" href="aboutus.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-2" href="enquiry.php">Enquiry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-2" href="policy.php">Privacy policy</a>
                    </li>

                </ul>
                <div class="d-flex">

                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#LoginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal"
                        data-bs-target="#RegisterModal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal for Login -->
    <div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center"><i
                                class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot
                                Password?</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Modal End Login -->

    <!-- Modal for Registration -->
    <div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center"><i
                                class="bi bi-person-lines-fill  fs-3 me-2"></i>User Registration</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your details must match with your ID(Adhar card , passport, driving Liscences, etc)
                            that will be required during check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 p-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pin code</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">DOB</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Conform Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>

                            </div>

                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                        </div>

                    </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    <!-- Modal End Login -->