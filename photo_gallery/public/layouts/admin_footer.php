</div>
<div id="footer">Copyright <?php echo date("Y", time()); ?>,S. Thomas McCarthy</div>
</body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>