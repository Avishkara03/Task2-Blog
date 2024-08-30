<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <style>
        /* Reset and Global Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 90%;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 16px;
            color: #333;
            text-align: left;
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button[type="submit"],
        .btn {
            display: inline-block;
            width: 100%;
            max-width: 200px;
            padding: 12px;
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
            margin: 10px 0;
            position: relative;
            overflow: hidden;
        }
        button[type="submit"]::before,
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
        button[type="submit"]:hover::before,
        .btn:hover::before {
            height: 100%;
        }
        button[type="submit"]:hover,
        .btn:hover {
            background-color: #63A6E3;
            transform: scale(1.05);
        }
        button[type="submit"] span,
        .btn span {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create a Blog</h1>
        <form action="<?php echo base_url('/save_blog'); ?>" method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio" rows="4" maxlength="300" required></textarea>
            </div>
            <div>
                <label for="about">About:</label>
                <textarea id="about" name="about" rows="4" maxlength="400" required></textarea>
            </div>
            <div>
                <label for="photo">Upload Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>
            </div>
            <button type="submit"><span>Save Blog</span></button>
        </form>
        <br>
        <a href="<?php echo base_url('/index.php/welcome'); ?>" class="btn"><span>Home</span></a>
    </div>
</body>
</html>
