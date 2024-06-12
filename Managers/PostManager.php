<?php

class PostManager extends AbstractManager {
    
    private $posts = [];
    private $nextId = 1;

    public function create($post) {
        $postId = $this->nextId++;
        $this->posts[$postId] = $post;
        return $postId;
    }

    public function read($postId) {
        return $this->posts[$postId] ?? null;
    }

    public function update($postId, $post) {
        if (isset($this->posts[$postId])) {
            $this->posts[$postId] = $post;
            return true;
        }
        return false;
    }

    public function delete($postId) {
        if (isset($this->posts[$postId])) {
            unset($this->posts[$postId]);
            return true;
        }
        return false;
    }
    public function getPostsByCategoryId($categoryId) {
        $categoryPosts = [];
        foreach ($this->posts as $postId => $post) {
            if ($post['category_id'] == $categoryId) {
                $categoryPosts[] = array_merge(['id' => $postId], $post);
            }
        }
        return $categoryPosts;
    }
}