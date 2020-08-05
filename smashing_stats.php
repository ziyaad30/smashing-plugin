<h2 class="wp-heading-inline">Dashboard</h2>
<?php
$response = wp_remote_get( 'https://api.github.com/users/blobaugh' );
print_r($response);
?>
