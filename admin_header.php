
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>admin panel</title>
    
</head>
<body>
    <header class="header">
        <div class="flex">
            <a href="admin_panel.php" class="logo"></a>
            <nav class="navbar">
                <a href="#">Home</a>
                <a href="#">Products</a>
                <a href="#">Order</a>
                <a href="#">User</a>
                <a href="#">Messages</a>
            </nav>
            <div class="icons">
                <i class="bi bi-person" id="user-btn"></i>
                <i class="bi bi-list" id="menu-btn"></i>
            </div>
            <div class="user-box">
                <p>username: <span><?php echo $_SESSION['admin_name']; ?></span></p>
                <p>email: <span><?php echo $_SESSION['admin_email']; ?></span></p>
                <form method="post" action="#"> 
                    <button type="submit" class="logout-btn">Log out</button>
                </form>
            </div>
        </div>
    </header>
    <div class="banner">
        <div class="detail">
            <h1>Admin Dashboard</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
    <div class="line"></div>
    <!-- Add additional content here -->
</body>
</html>


