<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($post["content"]) ?> </h1>

<a href="edit?id=<?= $post["id"] ?>">rediget</a>

<form action= "/delete" method="POST">
<input type="hidden" name="id" value="<?= htmlspecialchars($post['id'])?>">
<button type="submit">dzest</button>


<?php require "views/components/footer.php" ?> 