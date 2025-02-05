<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>

<h1>homemade fentanyl</h1>

<form method = "POST">
<label><input name="content" value="<?= $_POST['content'] ?? "" ?>" /></label>
<button>FEntanyl</button>
</form>

<?php if(isset($errors["content"])) { ?>
       <p class = "error"><?= $errors["content"] ?></p>
     <?php } ?>