<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .notification {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            width: 90%;
            max-width: 800px;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
        }
    </style>
</head>

<body>
    <!-- Alert Notification -->
    @if ($errors->any())
        <div class="alert alert-danger notification">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="mb-3">
                <label for="role" class="form-label">Select Role</label>
                <select id="role" name="role" class="form-select" required>
                    <option value="">-- Select Role --</option>
                    <option value="admin">Admin</option>
                    <option value="organizer">Organizer</option>
                </select>
            </div>

            <!-- Admin Fields -->
            <div id="adminFields" style="display: none;">
                <div class="mb-3">
                    <label for="admin_username" class="form-label">Admin Username</label>
                    <input type="text" class="form-control" id="admin_username" name="admin_username">
                </div>
                <div class="mb-3">
                    <label for="admin_key" class="form-label">Admin Unique Key</label>
                    <input type="text" class="form-control" id="admin_key" name="admin_key">
                </div>
                <div class="mb-3">
                    <label for="admin_password" class="form-label">Admin Password</label>
                    <input type="password" class="form-control" id="admin_password" name="admin_password">
                </div>
            </div>

            <!-- Organizer Fields -->
            <div id="organizerFields" style="display: none;">
                <div class="mb-3">
                    <label for="organizer_username" class="form-label">Organizer Username</label>
                    <input type="text" class="form-control" id="organizer_username" name="organizer_username">
                </div>
                <div class="mb-3">
                    <label for="organizer_password" class="form-label">Organizer Password</label>
                    <input type="password" class="form-control" id="organizer_password" name="organizer_password">
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script>
        document.getElementById('role').addEventListener('change', function () {
            const role = this.value;
            document.getElementById('adminFields').style.display = role === 'admin' ? 'block' : 'none';
            document.getElementById('organizerFields').style.display = role === 'organizer' ? 'block' : 'none';
        });
    </script>
</body>

</html>