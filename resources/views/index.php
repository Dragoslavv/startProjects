<?php

if ($subpageName === '')
{
    echo 'Displaying all users.' . '<br />';
}
else
{
    $userId = $subpageName;
    echo 'Displaying user #' . $userId . '.<br />';
}

?>