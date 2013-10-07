<?php

    // Some initial checks.
    if(file_exists("install")) // Install directory should be deleted after installation is done.
    {
        header("location: install/index.php");
    }