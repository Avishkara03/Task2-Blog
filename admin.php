<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Reset and Global Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('/img/2.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            position: relative;
        }
        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.5); /* Transparent white */
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px); /* Blur effect */
            width: 90%;
            max-width: 400px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 10;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .btn {
            display: inline-block;
            width: 100%;
            max-width: 250px;
            padding: 12px;
            margin: 10px 0;
            background-color: #3F88C5;
            color: #ffffff;
            border: none;
            border-radius: 25px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-size: 16px;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
        }
        .btn::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 0%;
            bottom: 0;
            left: 0;
            background-color: #63A6E3;
            transition: height 0.3s ease;
        }
        .btn:hover::before {
            height: 100%;
        }
        .btn:hover {
            background-color: #63A6E3;
            transform: scale(1.05);
        }
        .btn span {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, Admin</h1>
        <a href="<?php echo base_url('/view_blogs_admin'); ?>" class="btn"><span>View Every Blog</span></a>
        <a href="<?php echo base_url('/view_users'); ?>" class="btn"><span>View List of Users</span></a>
        <br>
        <a href="<?php echo base_url('/'); ?>" class="btn"><span>Logout!</span></a>
    </div>
</body>
</html>
