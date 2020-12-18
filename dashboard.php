    <?php

    require_once 'bootstrap/app.php';
    require_once file_header();
    /**
     * check the user is set or not
     * if user is not set then it redirect to login page
     * otherwise it goes to dashboard.php
     */

    if (!isset($_SESSION['login'])) {
        header('Location:login.php');
    }

    // print the email or name of the register user

    else {
        echo $_SESSION['Name'];
        echo '<br>';
        echo $_SESSION['email'];
    }
    ?>
    <!-- Set user role admin -->

    <?php
    /**
     * 2-oct-2020
     * check user role is set 'admin' or not.
     * if user is admin then show all the user detailed
     * i.e name, email and type
     */
    header('Location:users/index.php');

    ?>
