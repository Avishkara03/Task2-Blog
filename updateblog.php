<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update My Blogs</title>
    <style>
        /* Reset and Global Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('<?= base_url('/img/7.avif') ?>'); /* Updated background image URL */
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Ensures the background image remains fixed */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            opacity: 0.9; /* Adjust opacity as desired for transparency */
            position: relative;
            padding: 20px;
            overflow-y: auto; /* Enable vertical scrolling */
        }
        .container {
            width: 90%;
            max-width: 800px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8); /* Background color with transparency */
            border-radius: 15px;
            backdrop-filter: blur(10px); /* Blur effect for modern browsers */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            min-height: 120vh; /* Ensure the container height exceeds viewport height for scrolling */
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .blog-card {
            margin-bottom: 30px;
            padding: 20px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.5s ease-in-out;
        }
        .blog-card h2 {
            color: #3F88C5;
            margin-bottom: 15px;
        }
        .blog-form label {
            color: #555;
            margin-bottom: 5px;
            display: block;
            text-align: left;
        }
        .blog-form input[type="text"],
        .blog-form textarea,
        .blog-form input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        .blog-form button,
        .btn {
            display: inline-block;
            width: 100%;
            padding: 10px;
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
            font-weight: bold;
        }
        .blog-form button:hover,
        .btn:hover {
            background-color: #63A6E3;
            transform: scale(1.05);
        }
        .btn.delete {
            background-color: #ff4d4d;
        }
        .btn.delete:hover {
            background-color: #ff6666;
        }
        .blog-card img {
            margin-bottom: 10px;
            border-radius: 5px;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update My Blogs</h1>
        <?php if (!empty($blogs)) : ?>
            <?php foreach ($blogs as $blog) : ?>
                <div class="blog-card">
                    <h2>Blog</h2>
                    <form class="blog-form" action="<?= base_url('/update_blog/' . $blog['id']) ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $blog['id'] ?>">
                        <label for="name">Blog Name:</label>
                        <input type="text" name="name" value="<?= $blog['name'] ?>" required>
                        <label for="bio">Bio:</label>
                        <textarea name="bio" required><?= $blog['bio'] ?></textarea>
                        <label for="about">About:</label>
                        <textarea name="about" required><?= $blog['about'] ?></textarea>
                        <label for="photo">Photo:</label>
                        <?php if (!empty($blog['photo_path'])) : ?>
                            <img src="<?= base_url($blog['photo_path']) ?>" alt="<?= $blog['name'] ?>" width="100">
                        <?php endif; ?>
                        <input type="file" name="photo">
                        <button type="submit">Update Blog</button>
                    </form>
                    <br>
                    <form action="<?= base_url('/delete_blog/' . $blog['id']) ?>" method="post">
                        <button class="btn delete" type="submit" onclick="return confirm('Are you sure you want to delete this blog?')">Delete Blog</button>
                    </form>
                    <br>
                    <a href="<?= base_url('/index.php/welcome') ?>" class="btn">Go Back</a>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No blogs found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
