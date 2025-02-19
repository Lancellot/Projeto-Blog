<?php
session_start();
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_id = filter_input(INPUT_POST, 'post_id', FILTER_VALIDATE_INT);
    $author = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING);
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);

    if ($post_id && $author && $comment) {
        $stmt = $pdo->prepare("INSERT INTO comments (post_id, author, comment) VALUES (?, ?, ?)");
        $stmt->execute([$post_id, $author, $comment]);
    }
    header("Location: posts/post.php?id=$post_id");
    exit;
}
?>