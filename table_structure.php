<?php

include('connection.php');

// Users Table
$users = "CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    phone_number VARCHAR(15),
    address TEXT,
    role ENUM('admin', 'customer') DEFAULT 'customer',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);";

// Categories Table
$categories = "CREATE TABLE IF NOT EXISTS categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    parent_id INT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (parent_id) REFERENCES categories(category_id) ON DELETE CASCADE
);";

// Products Table
$products = "CREATE TABLE IF NOT EXISTS products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock_quantity INT DEFAULT 0,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(category_id) ON DELETE CASCADE
);";

// // Orders Table (make sure it's created before others reference it)
// $orders = "CREATE TABLE IF NOT EXISTS orders (
//     order_id INT AUTO_INCREMENT PRIMARY KEY,
//     user_id INT NOT NULL,
//     order_status ENUM('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',
//     payment_status ENUM('unpaid', 'paid', 'failed') DEFAULT 'unpaid',
//     total_amount DECIMAL(10, 2) NOT NULL,
//     shipping_address TEXT NOT NULL,
//     payment_method ENUM('credit_card', 'paypal', 'bank_transfer', 'cash_on_delivery') DEFAULT 'cash_on_delivery',
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
// );";

// // Wishlists Table
// $wishlists = "CREATE TABLE IF NOT EXISTS wishlists (
//     wishlist_id INT AUTO_INCREMENT PRIMARY KEY,
//     user_id INT NOT NULL,
//     product_id INT NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
//     FOREIGN KEY (product_id) REFERENCES products(product_id) ON DELETE CASCADE,
//     UNIQUE (user_id, product_id)  -- Ensure that a user can add a product only once to their wishlist
// );";

// // Carts Table
// $carts = "CREATE TABLE IF NOT EXISTS carts (
//     cart_id INT AUTO_INCREMENT PRIMARY KEY,
//     user_id INT NOT NULL,
//     product_id INT NOT NULL,
//     quantity INT DEFAULT 1,  -- Default quantity is 1
//     order_id INT DEFAULT NULL,  -- Link to orders once the cart is converted into an order
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
//     FOREIGN KEY (product_id) REFERENCES products(product_id) ON DELETE CASCADE,
//     FOREIGN KEY (order_id) REFERENCES orders(order_id) ON DELETE SET NULL,  -- Allow to set order_id as NULL until the cart is converted into an order
//     UNIQUE (user_id, product_id)  -- Ensure that a user can add a specific product only once to the cart
// );";

// // Order Items Table
// $order_items = "CREATE TABLE IF NOT EXISTS order_items (
//     order_item_id INT AUTO_INCREMENT PRIMARY KEY,
//     order_id INT NOT NULL,
//     product_id INT NOT NULL,
//     quantity INT DEFAULT 1,
//     price DECIMAL(10, 2) NOT NULL,
//     total_price DECIMAL(10, 2) NOT NULL,  -- This is quantity * price
//     FOREIGN KEY (order_id) REFERENCES orders(order_id) ON DELETE CASCADE,
//     FOREIGN KEY (product_id) REFERENCES products(product_id) ON DELETE CASCADE
// );";

// // Blogs Table
// $blogs = "CREATE TABLE IF NOT EXISTS blogs (
//     blog_id INT AUTO_INCREMENT PRIMARY KEY,
//     title VARCHAR(255) NOT NULL,
//     content TEXT NOT NULL,
//     author_id INT NOT NULL,
//     image VARCHAR(255) DEFAULT NULL,  -- Optional image for the blog post
//     status ENUM('draft', 'published', 'archived') DEFAULT 'draft',
//     published_at TIMESTAMP NULL DEFAULT NULL,  -- Timestamp for when the post is published
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     FOREIGN KEY (author_id) REFERENCES users(user_id) ON DELETE SET NULL
// );";

// // Contacts Table
// $contacts = "CREATE TABLE IF NOT EXISTS contacts (
//     contact_id INT AUTO_INCREMENT PRIMARY KEY,
//     user_id INT DEFAULT NULL,  -- Optional: If the contact is from a registered user
//     name VARCHAR(255) NOT NULL,  -- Name of the person submitting the inquiry
//     email VARCHAR(255) NOT NULL,
//     phone_number VARCHAR(15) DEFAULT NULL,  -- Optional: If provided by the contact
//     subject VARCHAR(255) NOT NULL,  -- Subject of the inquiry
//     message TEXT NOT NULL,  -- The content of the inquiry or feedback
//     status ENUM('new', 'in_progress', 'resolved', 'closed') DEFAULT 'new',  -- Status of the inquiry
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- Time when the inquiry was created
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  -- Time when the inquiry was last updated
//     FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE SET NULL
// );";

// Combine all queries in one array
$sqlQueries = [
    $users,
    $categories,
    $products,
    // $orders,
    // $wishlists,
    // $carts,
    // $order_items,
    // $blogs,
    // $contacts
];

// Execute each query using query
foreach ($sqlQueries as $query) {
    if (!$connection->query($query)) {
        echo "Error: " . $connection->error . "<br>";
    }
}
