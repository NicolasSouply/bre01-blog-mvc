<?php
require_once 'AbstractManager.php';

class UserManager extends AbstractManager {
    
    private $users = [];
    private $nextId = 1;

    public function create($user) {
        $userId = $this->nextId++;
        $this->users[$userId] = $user;
        return $userId;
    }

    public function read($userId) {
        return $this->users[$userId] ?? null;
    }

    public function update($userId, $user) {
        if (isset($this->users[$userId])) {
            $this->users[$userId] = $user;
            return true;
        }
        return false;
    }

    public function delete($userId) {
        if (isset($this->users[$userId])) {
            unset($this->users[$userId]);
            return true;
        }
        return false;
    }
}