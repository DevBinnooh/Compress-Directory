<?php query("UPDATE ".$wpdb->prefix."bot_counter SET bot_visits = 0");?>
<div id="message" class="updated fade">
 
Bot Counter Stats <strong>Reseted</strong>.</div>
<div class="wrap">
<h2>Bot Counter Admin</h2>
<?php
get_results("SELECT * FROM ".$wpdb->prefix."bot_counter");
foreach($results as $result)
{
    echo $result->bot_name." : ";
    echo $result->bot_visits."";
}
?>
 
<a href="?page=<?php echo $_GET['page']; ?>&bot-counter=reset">
    Reset Stats
</a>
</div>
