<?php

class User {
    private $userId;
    private $username;

    public function __construct($userId, $username) {
        $this->userId = $userId;
        $this->username = $username;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getUsername() {
        return $this->username;
    }

    public function display() {
        echo "User ID: " . $this->userId . ", Username: " . $this->username ;
    }
}

class Article {
    private $articleId;
    private $title;
    private $content;
    private $author;
    private $comments = [];
     
    public function __construct($articleId, $title, $content, User $author) {
        $this->articleId = $articleId;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function getArticleId() {
        return $this->articleId;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function addComment(Comment $comment) {
        $this->comments[] = $comment;
    }

    public function display() {
        echo "Article ID: " . $this->articleId . "<br>" . " Title: " . $this->title . "<br>" . " Author: " . $this->author->getUsername() ;
        echo "Content: " . $this->content ;
        echo "Comments:" ;
        foreach ($this->comments as $comment) {
            $comment->display();
        }
    }
}

class Comment {
    private $commentId;
    private $content;
    private $author;

    public function __construct($commentId, $content, User $author) {
        $this->commentId = $commentId;
        $this->content = $content;
        $this->author = $author;
    }

    public function getCommentId() {
        return $this->commentId;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function display() {
        echo "<br>" . "Comment ID: " . $this->commentId . "<br>" . " Content: " . $this->content . "<br>" . " Author: " . $this->author->getUsername() ;
    }
}

// Example Usage:

// Create users
$user1 = new User(1, "JohnDoe");
$user2 = new User(2, "JaneSmith");

// Create an article
$article = new Article(1, "Introduction to PHP", "This is an article about PHP.", $user1);

// Create comments
$comment1 = new Comment(1, "Great article!", $user2);
$comment2 = new Comment(2, "Looking forward to more content.", $user1);

// Add comments to the article
$article->addComment($comment1);
$article->addComment($comment2);

// Display the article and comments
$article->display();
