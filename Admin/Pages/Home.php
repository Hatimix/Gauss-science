<?php
echo "<h1>".lang('mainWelcome')."</h1>";
$db->query("SELECT * FROM admin");