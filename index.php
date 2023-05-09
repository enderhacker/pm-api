<?php
if ($_SERVER['REQUEST_URI'] === '/test') {
  echo 'Work';
} else {
  http_response_code(404);
  echo '404 Not Found';
}
?>
