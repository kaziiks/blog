<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>fentr "<?= htmlspecialchars($post ['content'])?>"</h1>

<form method = POST>
<input type="hidden" name="id" value="<?= $post['id'] ?>">

<input type="text" name="content" value="<?= $post['content'] ?? '' ?>">
<button>redige</button>
</form>

<?php if(isset($errors["content"])) { ?>
       <p class = "error"><?= $errors["content"] ?></p>
     <?php } ?>
