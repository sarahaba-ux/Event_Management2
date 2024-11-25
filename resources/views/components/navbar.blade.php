<head>
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<nav class="navbar navbar-dark w-100 px-4" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), rgba(255, 105, 180, 0.5);">
    <!-- SIDEBAR -->
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

    <!-- Logo on the left -->
    <a href="#" class="navbar-brand">
        <p style="margin-left: 60px; margin-top: 10px;">EVENTIFY</p>
    </a>

    <!-- Search bar with icon and Search button -->
    <div class="d-flex ms-auto"> <!-- 'ms-auto' pushes items to the right -->
        <form class="d-flex" style="width: 350px;"> <!-- Extended width of the search bar -->
            <!-- Icon inside the search input -->
            <div class="input-group" style="border-radius: 0;">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" style="border-radius: 0;">
            </div>
        
            <!-- Search button -->
            <!-- Search button -->
<button type="submit" class="btn btn-outline-light ms-2" style="border-top-right-radius: 20px !important; border-bottom-right-radius: 20px !important; border-radius: 0;">
    Search
</button>

        </form>

        <!-- Login Icon button -->
        <button class="btn btn-outline-light ms-2 rounded-circle" data-bs-toggle="modal" data-bs-target="#loginModal">
            <i class="fas fa-sign-in-alt"></i> <!-- Font Awesome login icon -->
        </button>
    </div>
</nav>

<!-- STYLE FOR NAVBAR -->
<style>
    /* Optional: Additional styling for the navbar if needed */
    .navbar {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Adds a subtle shadow under the navbar */
    }

    .navbar-brand .logo {
        width: 40px;
    }

    .form-control {
        border-radius: 20px; /* Rounded corners for the search bar */
    }

    /* STYLE FOR SIDEBAR */
    .wedding-sidebar {
        min-height: 100vh;
        margin-top: 10px;
        background-color: rgba(255, 255, 255, 0.5); /* Lighter background with slight transparency */
        color: #333; /* Dark text for better contrast */
        font-family: 'Dancing Script', cursive, Arial, sans-serif;  /* Serif font for sidebar */
    }

    .sidebar {
        position: fixed;
        left: 0;
        top: 70px;
        width: 250px;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.5); /* Transparent white */
        color: #333; /* Darker text for contrast */
        padding-top: 60px; /* Adjust to give space for the header */
        margin-top: 20px; /* Added margin-top for spacing */
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3); /* Shadow for modern look */
        border-radius: 15px; /* Rounded corners */
        transition: transform 0.3s ease; /* Smooth slide-in effect */
        transform: translateX(-100%); /* Initially hide the sidebar */
        z-index: 999;
    }

    /* Show sidebar when active */
    .sidebar-active {
        transform: translateX(0); /* Slide-in sidebar */
    }

    /* Sidebar Links Styling */
    .sidebar a {
        color: #333; /* Dark text for contrast */
        padding: 15px;
        text-decoration: none;
        display: block;
        transition: 0.1s; /* Smooth transition for hover effects */
        font-weight: 500;
        border-radius: 8px;
    }

    /* Hover Effect for Sidebar Links */
    .sidebar a:hover {
        background-color: rgba(255, 255, 255, 0.034); /* Slightly transparent white on hover */
    }

    /* Sidebar Navigation */
    .nav-link {
        font-weight: bold;
        color: #333; /* Ensure text is dark enough */
    }

    /* Icon Styling */
    .sidebar .nav-link i {
        margin-right: 8px; /* Space between icon and text */
        color: #333;
        opacity: 0.8;
    }

    /* Shadow Effect Below Each Item */
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
        height: 3px; /* Height of the shadow */
        background-color: transparent;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    /* Stronger shadow on hover */
    .shadow-item:hover::after {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Stronger shadow on hover */
    }

    /* Container Box for Forms */
    .container-box {
        background: rgba(255, 255, 255, 0.8); /* Slightly transparent white background */
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    }

    /* Content Container Flexbox Styling */
    .content-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full screen height */
        transition: margin-left 0.3s ease; /* Smooth shift when sidebar is toggled */
        margin-left: 0; /* Default margin */
    }

    /* Adjust content margin when sidebar is shown */
    .content-container.sidebar-active {
        margin-left: 250px; /* Adjust for sidebar width */
    }

    /* Burger Icon Styling */
    .burger-icon {
        cursor: pointer;
        font-size: 30px;
        position: absolute;
        top: 15px;
        left: 30px; /* Move burger icon to the left */
        z-index: 1000; /* Ensure it's always on top */
    }

    /* Responsive Design: Adjust sidebar for smaller screens */
    @media (max-width: 768px) {
        .sidebar {
            width: 200px; /* Slightly smaller sidebar on smaller screens */
        }

        .content-container {
            margin-left: 0; /* Remove the left margin for small screens */
        }
    }
</style>
