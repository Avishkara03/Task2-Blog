<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blogs</title>
    <link rel="stylesheet" href="<?= base_url('styles.css') ?>"> <!-- Link to your CSS file using base_url -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Adjusted from center to flex-start */
            min-height: 100vh; /* Use min-height to ensure full viewport height */
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0; /* Light gray background color */
        }
        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 90%;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .blog-container {
            margin-bottom: 30px;
            padding: 20px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        .blog-container h3 {
            color: #3F88C5;
            margin-bottom: 15px;
        }
        .blog-container .blog-image {
            margin-bottom: 10px;
            border-radius: 5px;
            max-width: 100%;
            height: auto; /* Ensures images maintain aspect ratio */
            max-height: 300px; /* Set maximum height for images */
        }
        .blog-container .bio,
        .blog-container .about {
            color: #555;
            margin-bottom: 10px;
        }
        .no-blogs {
            color: #777;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3F88C5;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #63A6E3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>All Blogs</h1>
        <div>
            <?php if (!empty($blogs)) : ?>
                <?php foreach ($blogs as $blog) : ?>
                    <div class="blog-container">
                        <h3><?= $blog['name'] ?></h3>
                        <p class="bio"><?= $blog['bio'] ?></p>
                        <?php if (!empty($blog['photo_path'])) : ?>
                            <!-- Debugging: Check image path -->
                            <img src="<?= base_url($blog['photo_path']) ?>" alt="<?= $blog['name'] ?>" class="blog-image">
                        <?php else : ?>
                            <!-- Debugging: Show placeholder if no image -->
                            <p class="no-image">No image available</p>
                        <?php endif; ?>
                        <p class="about"><?= $blog['about'] ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="no-blogs">No blogs found.</p>
            <?php endif; ?>
        </div>
        <a href="<?= base_url('index.php/welcome') ?>" class="btn">Home</a>
    </div>
</body>
</html>
