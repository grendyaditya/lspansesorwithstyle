<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title><?= htmlspecialchars($title) ?></title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Light background */
            color: #212529; /* Dark text */
        }

        /* Navbar Styles */
        .navbar {
            background-color: #1f1f1f;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ffffff;
            transition: all 0.3s;
        }

        .navbar-brand:hover {
            color: #ff8c00;
            transform: scale(1.1);
        }

        .nav-link {
            color: #ffffff;
            transition: all 0.3s;
        }

        .nav-link:hover {
            color: #ff8c00;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #1f1f1f;
            color: #ffffff;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .sidebar h5 {
            color: #ff8c00;
        }

        .sidebar .nav-link {
            color: #ffffff;
            margin-bottom: 10px;
            transition: all 0.3s;
        }

        .sidebar .nav-link.active, 
        .sidebar .nav-link:hover {
            background-color: #ff8c00;
            color: #000000;
            border-radius: 5px;
        }

        /* Content Styles */
        .content {
            background-color: #ffffff;
            color: #212529;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            flex-grow: 1;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th {
            background-color: #ff8c00;
            color: #000000;
            padding: 10px;
            text-align: left;
        }

        table td {
            padding: 10px;
            border: 1px solid #dee2e6;
        }

        table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        table tr:hover {
            background-color: #ffefd5;
        }

        /* Footer Styles */
        footer {
            background-color: #1f1f1f;
            color: #aaaaaa;
            text-align: center;
            padding: 10px 0;
        }

        footer p {
            margin: 0;
        }

        footer p a {
            color: #ff8c00;
            text-decoration: none;
        }

        footer p a:hover {
            color: #ffffff;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Management Inventory</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../auth/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>