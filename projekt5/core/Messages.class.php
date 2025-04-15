<?php
namespace Core;

class Messages {
    private static ?Messages $instance = null;
    private array $messages = [];

    public static function getInstance(): Messages {
        if (self::$instance === null) {
            self::$instance = new Messages();
        }
        return self::$instance;
    }

    public function add(string $msg): void {
        $this->messages[] = $msg;
    }

    public function getAll(): array {
        return $this->messages;
    }

    public function isEmpty(): bool {
        return empty($this->messages);
    }
}
