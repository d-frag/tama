<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: text/plain; charset=UTF-8');

    $hostname        = 'ldap2.is.kyusan-u.ac.jp';
    $username        = $_POST['username'];
    $password        = $_POST['password'];
    $directoryServer = 'uid=' . $username . ',ou=userall,dc=kyusan-u,dc=ac,dc=jp';
    $connection      = ldap_connect($hostname);

    if ($connection) {
        ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);

        $bind = @ldap_bind($connection, $directoryServer, $password);
        if ($bind) {
            $_SESSION['auth'] = true;
            header('Location: index.php');
            ldap_close($connection);
            exit;
        }
    }

    ldap_close($connection);
}

header('Location: login.php');
exit;
