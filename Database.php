<?php
// Database.php
class Database {
    private $users = [];
    private $posts = [];

    public function addUser(User $user) {
        $this->users[] = $user;
    }

    public function addPost(Post $post) {
        $this->posts[] = $post;
    }

    public function getUsers() {
        return $this->users;
    }

    public function getPosts() {
        return $this->posts;
    }
}
?>
