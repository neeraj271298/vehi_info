<?php
session_start();
session_unset();
echo "<script>alert('logout');
window.location='home.php';
</script>"
?>