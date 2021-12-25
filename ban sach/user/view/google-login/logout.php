<?php

//logout.php
require_once('config.php');
//Reset OAuth access token
$google_client->revokeToken();
unset($_SESSION);
//Destroy entire session data.
session_destroy();
//redirect page to index.php
echo 'Vui lòng chờ...';
echo '<script>

              setTimeout(() => {
                window.location.assign("http://localhost/bansach/index.php")
              ;
              }, 1500 );
</script>'


?>