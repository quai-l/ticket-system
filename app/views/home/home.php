<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/ticket-system/public/css/global.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid px-5">

            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/ticket-system/public/media/trc.jfif" height="50" alt="">
                <span class="ms-3 fw-bold">
                    Tanzania Railways Corporation
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">

                <ul class="navbar-nav align-items-center">

                    <li class="nav-item">
                        <a class="nav-link active-nav" href="#">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Tickets
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Reservations
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-globe"></i>
                            English
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#loginModal">
                            Log in
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    <!-- HERO SECTION -->
    <section class="hero-section">

        <div class="container">

            <div class="booking-card">

                <!-- Top Row -->
                <div class="top-options">

                    <div>
                        <label class="radio-label">
                            <input type="radio" checked>
                            Sales
                        </label>
                    </div>

                    <div class="trip-type">

                        <label class="radio-label">
                            <input type="radio" name="trip" checked>
                            One Way
                        </label>

                        <label class="radio-label ms-4">
                            <input type="radio" name="trip">
                            Round Trip
                        </label>

                    </div>

                </div>

                <hr>

                <!-- Search Form -->
                <form>

                    <div class="row g-4">

                        <div class="col-lg-3">
                            <label class="form-label">
                                From
                            </label>

                            <select class="form-select custom-input">
                                <option>Select Station</option>
                            </select>
                        </div>

                        <div class="col-lg-3">
                            <label class="form-label">
                                To
                            </label>

                            <select class="form-select custom-input">
                                <option>Select Station</option>
                            </select>
                        </div>

                        <div class="col-lg-3">
                            <label class="form-label">
                                Departure Date
                            </label>

                            <input type="date" class="form-control custom-input">
                        </div>

                        <div class="col-lg-3">
                            <label class="form-label">
                                Return Date
                            </label>

                            <input type="date" class="form-control custom-input">
                        </div>

                    </div>

                    <hr class="my-5">

                    <div class="bottom-row">

                        <div class="passenger-box">

                            <span class="me-4">
                                Passengers
                            </span>

                            <button type="button" class="qty-btn">
                                -
                            </button>

                            <span id="passengerCount">
                                1
                            </span>

                            <button type="button" class="qty-btn">
                                +
                            </button>

                        </div>

                        <button class="search-btn">
                            Search
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <?php require_once __DIR__ . '/../auth/auth.php'; ?>

</body>

</html>