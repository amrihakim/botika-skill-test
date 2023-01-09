<?php

function is_email_valid($email) {
    if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", trim($email))){
        return 'email valid!';
    }
    return 'email Not valid!';
}

echo is_email_valid('nama@gmail.com');
echo '';
echo is_email_valid('nama@gmail');
echo '';
echo is_email_valid('@gmail.com');
echo '';
echo is_email_valid('nama@.com');