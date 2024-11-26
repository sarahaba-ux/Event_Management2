<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eventify')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);

        }

        .navbar-brand .logo {
            width: 40px;
        }

        .form-control {
            border-radius: 20px;
        }

        .wedding-sidebar {
            min-height: 100vh;
            margin-top: 10px;
            background-color: rgba(255, 255, 255, 0.5);
            color: #333;
            font-family: Arial, Helvetica, sans-serif;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 70px;
            width: 250px;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
            color: #333;
            padding-top: 60px;
            margin-top: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
            z-index: 999;
        }

        .sidebar-active {
            transform: translateX(0);
        }

        .sidebar a {
            color: #333;
            padding: 15px;
            text-decoration: none;
            display: block;
            transition: 0.1s;
            font-weight: 500;
            border-radius: 8px;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.034);
        }

        .nav-link {
            font-weight: bold;
            color: #333;
        }

        .sidebar .nav-link i {
            margin-right: 8px;
            color: #333;
            opacity: 0.8;
        }

        .shadow-item {
            position: relative;
            width: 100%;
            padding: 10px 0;
            margin: 0;
        }

        .shadow-item::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: calc(100% + 50%);
            height: 3px;
            background-color: transparent;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .shadow-item:hover::after {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .container-box {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }

        .content-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            transition: margin-left 0.3s ease;
            margin: 7rem;
        }

        .content-container.sidebar-active {
            margin-left: 250px;
        }

        .burger-icon {
            cursor: pointer;
            font-size: 30px;
            position: absolute;
            top: 15px;
            left: 30px;
            z-index: 1000;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .content-container {
                margin-left: 0;
            }
        }

        .wedding-sidebar {
            min-height: 100vh;
            margin-top: 10px;
            background-color: rgba(255, 255, 255, 0.5);
            color: #333;
            font-family: Arial, Helvetica, sans-serif;

        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 70px;
            width: 250px;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
            color: #333;
            padding-top: 60px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
            z-index: 999;
        }

        .sidebar-active {
            transform: translateX(0);
        }

        .sidebar a {
            color: #333;
            padding: 15px;
            text-decoration: none;
            display: block;
            font-weight: 500;
            border-radius: 8px;
            font-family: Arial, Helvetica, sans-serif;

        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.034);
        }

        .shadow-item {
            position: relative;
            padding: 10px 0;
        }

        .shadow-item::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: calc(100% + 50%);
            height: 3px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
        }

        .centered-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 100px;
            text-align: center;
            padding: 20px;
            font-family: Arial, Helvetica, sans-serif;

        }

        .centered-content h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .centered-content p {
            font-size: 1.25rem;
            color: #555;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark w-100 px-4"
        style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), rgba(255, 105, 180, 0.5);">
        <div class="burger-icon" id="burgerMenu">
            <i class="fas fa-bars"></i>
        </div>
        <div class="col-md-2 sidebar d-flex flex-column align-items-start p-3 wedding-sidebar" id="sidebarMenu">
            <ul class="nav flex-column" style="margin-top: 20px;">
                <li class="nav-item shadow-item">
                    <a href="{{ route('homepage') }}" class="nav-link"><b>Home</b></a>
                </li>
                <li class="nav-item shadow-item">
                    <a href="event_details.php" class="nav-link"><b>Event details</b></a>
                </li>
                <li class="nav-item shadow-item">
                    <a href="attendees.php" class="nav-link"><b>Attendees</b></a>
                </li>
            </ul>
        </div>

        <a href="#" class="navbar-brand">
            <p style="margin-left: 60px; margin-top: 10px;">EVENTIFY</p>
        </a>

        <div class="d-flex ms-auto">
            <form class="d-flex" style="width: 350px;">
                <div class="input-group" style="border-radius: 0;">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search"
                        aria-describedby="basic-addon1" style="border-radius: 0;">
                </div>
                <button type="submit" class="btn btn-outline-light ms-2"
                    style="border-top-right-radius: 20px !important; border-bottom-right-radius: 20px !important; border-radius: 0;">
                    Search
                </button>
            </form>
            <button class="btn btn-outline-light ms-2 rounded-circle" data-bs-toggle="modal"
                data-bs-target="#loginModal">
                <i class="fas fa-sign-in-alt"></i>
            </button>
        </div>
    </nav>

         @yield('content')


       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var burgerMenu = document.getElementById('burgerMenu');
            var sidebarMenu = document.getElementById('sidebarMenu');

            burgerMenu.addEventListener('click', function () {
                sidebarMenu.classList.toggle('sidebar-active');
                document.getElementById('mainContent').classList.toggle('sidebar-active');
            });
        });
    </script>

</body>

</html>