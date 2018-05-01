<?php
$pageTitle = "Beretninger";
?>

<?php @include "./resources/templates/header.php"; ?>
    <main>
        <div class="siteContainer">
            <article>
                <h3>Her kan du læse nogle personlige beretninger</h3>
                <hr>
                <ul>
                    <li><a href="sannesberetning.php">Sannes beretning</a></li>
                </ul>
            </article>
            <?php @include "./resources/templates/sidebar.php"; ?>
        </div>
    </main>
<?php @include "./resources/templates/footer.php"; ?>