<?php include "header.php"; ?>
<?php
if (isset($nav)){
    include "Navbar.php";
}
?>
<div class="container">
    <?php echo $content; ?>
</div>

<?php include "footer.php"; ?>