<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management: Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style_wedding.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

<!-- Burger Icon to toggle sidebar -->
<div class="burger-icon" id="burgerMenu">&#9776;</div>

  <!-- Sidebar -->
  @include('components.navbar')

<!-- FORM -->
<div class="content-container" id="mainContent">
    <!-- Icon added outside the form, top-right of the form -->
    <a href="#" class="top-right-icon">
        <i class="fas fa-home"></i> <!-- Replace with any icon you prefer -->
    </a>

    <div class="container-box col-md-5 col-sm-12">
        <h2 class="mb-4 text-center">Create Your Title</h2>

        <form>
            <div class="mb-3">
                <label for="eventName" class="form-label">Event Name</label>
                <input type="text" class="form-control" id="eventName" placeholder="Enter event name" required>
            </div>
            <div class="mb-3">
                <label for="eventLocation" class="form-label">Location</label>
                <input type="text" class="form-control" id="eventLocation" placeholder="Enter event address" required>
            </div>
            <div class="mb-3">
                <label for="eventDate" class="form-label">Event Date</label>
                <input type="date" class="form-control" id="eventDate" required>
            </div>
            <div class="mb-3">
                <label for="eventTime" class="form-label">Event Time</label>
                <input type="time" class="form-control" id="eventTime" required>
            </div>
            <div class="mb-3 border p-3">
                <label for="eventURL" class="form-label">URL</label>
                <input type="text" class="form-control" id="eventURL" placeholder="Enter event URL" required>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary btn-sm">Create Template</button>
                </div>
            </div>
        </form>
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
