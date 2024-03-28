    <!-- Load jQuery-->
    <script src="<?php echo URL; ?>js/jquery-3.7.1.min.js"></script>

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo URL; ?>";
    </script>

    <!-- Main JavaScript -->
    <script src="<?php echo URL; ?>js/application.js"></script>
    <?php if(isset($page_js)){?>
    <script src="<?php echo URL; ?>js/<?php echo $page_js;?>.js"></script>
    <?php }?>
</body>
</html>