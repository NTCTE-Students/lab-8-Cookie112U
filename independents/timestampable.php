<?php

trait Timestampable {
    private $createdAt;
    private $updatedAt;

    public function setCreatedAt($date) {
        $this->createdAt = $date;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setUpdatedAt($date) {
        $this->updatedAt = $date;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

class Post {
    use Timestampable;
}

class Comment {
    use Timestampable;
}

$post = new Post();
$post->setCreatedAt(date("Y-m-d H:i:s"));
print("Дата создания поста: " . $post->getCreatedAt() . "<br>");

$comment = new Comment();
$comment->setUpdatedAt(date("Y-m-d H:i:s"));
print("Дата обновления комментария: " . $comment->getUpdatedAt() . "<br>");
