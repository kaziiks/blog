<?php require "components/header.php" ?>
<?php require "components/navbar.php" ?>

<body>
    <form>
        <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
        <button>meklet</button>
    </form>
    <?php if (count($posts) == 0){ ?>
    <p>mekle talak fentanyl (george droydam palidzi :3)</p>
    <?php } ?>

<ul>
<?php foreach($posts as $post){ ?>
    <li><?= $post["content"] ?></li>
<?php } ?>
</ul>

</body>
</html>