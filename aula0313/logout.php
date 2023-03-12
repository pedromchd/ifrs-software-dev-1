<?php

session_cache_expire(30);
session_start();

session_unset();
session_destroy();

header('Location: /');