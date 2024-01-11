<?php
// index.php
require_once 'User.php';
require_once 'Post.php';
require_once 'Database.php';

// Create users
$user1 = new User('john_doe', 'john@example.com');
$user2 = new User('jane_doe', 'jane@example.com');

// Create posts
$post1 = new Post('First Post', 'This is the content of the first post.', $user1);
$post2 = new Post('Second Post', 'This is the content of the second post.', $user2);

// Create a database and add users/posts
$database = new Database();
$database->addUser($user1);
$database->addUser($user2);
$database->addPost($post1);
$database->addPost($post2);

// Display users and posts
echo "Users:\n";
foreach ($database->getUsers() as $user) {
    echo "Username: " . $user->getUsername() . ", Email: " . $user->getEmail() . "\n";
}

echo "\nPosts:\n";
foreach ($database->getPosts() as $post) {
    echo "Title: " . $post->getTitle() . "\n";
    echo "Content: " . $post->getContent() . "\n";
    echo "Author: " . $post->getAuthor()->getUsername() . "\n\n";
}
?>
