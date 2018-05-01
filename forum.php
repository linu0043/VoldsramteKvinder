<?php 
$pageTitle = "Forum";
$css = "forum";
?>

<?php @include "./resources/templates/header.php"; ?>
    <main>
        <div class="siteContainer">
            <article>
                <iframe src="./thirdparty/phpBB3/index.php" frameborder="0"></iframe>
            </article>
        </div>
    </main>
<?php @include "./resources/templates/footer.php"; ?>