<?php
echo "Let's understand cookies";
echo "<br><br><br>";

//When do not set cookie time, the cookie isn't persistent
setcookie('test_cookie_1', 'xxxtest123456');
setcookie('test_cookie_2', 'yyytest789123', time() + 360);

//Cookie to specific path
setcookie('test_cookie_3', 'zzztest456789', time() + 360, "/marketing");

//Cookie to specific domain
setcookie('test_cookie_4', 'kkktest123456', time() + 720, "/", "www.postcristiano.pt");
setcookie('test_cookie_5', 'hhhtest789123', time() + 720, "/", "localhost");

//Javascript can not access cookie when set HttpOnly
setcookie('test_cookie_6', 'jjjtest456789', time() + 720, "/", "localhost", false, true);


echo "the cookie test value is {$_COOKIE['test_cookie']}";
?>

<script>
    alert('Hiho!')
    alert(document.cookie)
</script>
