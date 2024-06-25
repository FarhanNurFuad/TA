<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }
        .topbar {
            width: 100%;
            height: 60px;
            background-color: #343a40;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .topbar .profile {
            position: relative;
            display: inline-block;
        }
        .profile-dropdown {
            display: none;
            position: absolute;
            top: 50px;
            right: 0;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1001;
        }
        .profile-dropdown a {
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            display: block;
        }
        .profile-dropdown a:hover {
            background-color: #f1f1f1;
        }
        .sidebar {
            height: calc(100vh - 60px);
            width: 250px;
            position: fixed;
            top: 60px;
            left: 0;
            background-color: #f8f9fa;
            padding-top: 20px;
            border-right: 1px solid #e0e0e0;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
            border-left: 3px solid transparent;
        }
        .sidebar a:hover .sidebar a.active {
            background-color: #e9ecef;
            border-left: 3px solid #dc3545;
            color: #dc3545;
        }
        .sidebar .btn {
            margin: 20px 15px;
            width: calc(100% - 30px);
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            margin-top: 60px;
            width: calc(100% - 250px);
        }
        .card {
       border: 2px solid #dc3545;
       border-radius: 10px;
   }

   .text-primary {
       color: #dc3545 !important;
   }

   .alert {
       border: 2px solid #dc3545;
       border-radius: 10px;
   }

   .alert-light {
       background-color: #fff !important;
   }

   .alert .btn {
       color: #dc3545;
       border: none;
       background: none;
       font-weight: bold;
   }
   .alert-box {
            display: flex;
            align-items: center;
            border: 1px solid #dc3545;
            border-radius: 10px;
            padding: 10px;
            margin: 20px 15px;
            color: #dc3545;
        }
        .alert-box i {
            margin-right: 10px;
        }
        .alert-box a {
            margin-left: auto;
            text-decoration: none;
        }
        table th {
        color: black;
    }
    table td, table th {
        padding: 10px;
        border: none;
    }
    .form-group label {
        font-weight: bold;
    }
    .form-control {
        border-radius: 10px;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 10px;
    }
    .container {
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="topbar">
        <div class="website-name">
            <h4>Clinic Admin</h4>
        </div>
        <div class="profile">
            <img src="https://via.placeholder.com/40" alt="Profile Picture" class="rounded-circle" onclick="toggleDropdown()">
            <div class="profile-dropdown" id="profileDropdown">
                <a href="#">My Account</a>
                <a href="#">Settings</a>
                <a href="#">Log Out</a>
            </div>
        </div>
    </div>
    <div class="sidebar">
    <div class="d-flex flex-column p-3 bg-light" style="width: 280px;">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link active">
                <i class="fas fa-tachometer-alt"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('appointments') }}" class="nav-link link-dark">
                <i class="fas fa-calendar-check"></i>
                Patient Appointments
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link-dark" href="#" id="patientQueueDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-users"></i>
                Patients Queue
            </a>
            <ul class="dropdown-menu" aria-labelledby="patientQueueDropdown">
                <li><a class="dropdown-item" href="{{ route('queue') }}">Poli Umum</a></li>
                <li><a class="dropdown-item" href="{{ route('queue') }}">Poli Anak</a></li>
                <li><a class="dropdown-item" href="{{ route('queue') }}">Poli Mata</a></li>
                <li><a class="dropdown-item" href="{{ route('queue') }}">Poli THT</a></li>
                <li><a class="dropdown-item" href="{{ route('queue') }}">Poli Spesialis</a></li>
            </ul>
        </li>
    </ul>
    <div class="mt-auto">
        <a href="{{ route('patientscreate') }}" class="btn btn-primary btn-block">
            Add New
        </a>
    </div>
</div>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById('profileDropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }
        window.onclick = function(event) {
            if (!event.target.matches('.profile img')) {
                var dropdowns = document.getElementsByClassName('profile-dropdown');
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === 'block') {
                        openDropdown.style.display = 'none';
                    }
                }
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</html>
