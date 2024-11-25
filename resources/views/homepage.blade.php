<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Remove border or outline from cards */
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Styling for hover effect (optional) */
        .card:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease;
        }
    </style>
</head>
<body>

<!-- Burger Icon to toggle sidebar -->
<div class="burger-icon" id="burgerMenu">&#9776;</div>

@include('components.navbar')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 offset-md-2 mt-4" id="mainContent">
            <div class="row g-4 justify-content-center px-4">
                <h1>Welcome, {{ $username ?? 'Guest' }}!</h1>

                <!-- First Row: 2 Columns -->
                <div class="col-md-6 col-sm-12 mb-4">
                    <a href="{{ route('form') }}">
                        <div class="card-container">
                            <div class="card p-3 wedding-card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Wedding</b></h5>
                                    <p>Description of wedding event.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <a href="{{ route('form') }}">
                        <div class="card-container">
                            <div class="card p-3 birthday-card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Birthday</b></h5>
                                    <p>Description of birthday event.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Second Row: 2 Columns -->
                <div class="col-md-6 col-sm-12 mb-4">
                    <a href="{{ route('form') }}">
                        <div class="card-container">
                            <div class="card p-3 graduation-card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Graduation</b></h5>
                                    <p>Description of graduation event.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <a href="{{ route('form') }}">
                        <div class="card-container">
                            <div class="card p-3 housewarming-card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Housewarming Party</b></h5>
                                    <p>Description of housewarming party.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script to toggle sidebar visibility -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var burgerMenu = document.getElementById('burgerMenu');
        var sidebarMenu = document.getElementById('sidebarMenu');

        burgerMenu.addEventListener('click', function() {
            sidebarMenu.classList.toggle('sidebar-active');
            document.getElementById('mainContent').classList.toggle('sidebar-active');
        });
    });
</script>

</body>
</html>
