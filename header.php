<!DOCTYPE html>
<html lang="ar" dir="rtl" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://www.mediawiki.org/static/images/icons/mediawikiwiki.svg" type="image/svg+xml">
    <title tt='tool_title'></title>
    <link href="https://tools-static.wmflabs.org/cdnjs/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://tools-static.wmflabs.org/cdnjs/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" rel='stylesheet' type='text/css'>
    <link href="https://tools-static.wmflabs.org/cdnjs/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <script src="https://tools-static.wmflabs.org/cdnjs/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://tools-static.wmflabs.org/cdnjs/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
    <script src="https://tools-static.wmflabs.org/cdnjs/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://tools-static.wmflabs.org/cdnjs/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js"></script>
    <link href="static/style.css" rel="stylesheet">
    <link href="static/theme.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-filter ms-2"></i> لوحة مراقبة التعديلات
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item col-4 col-lg-auto">
                        <a class="nav-link" href="dashboard.php">
                        <i class="fas fa-timeline"></i> المرشحات
                        </a>
                    </li>
                    <li class="nav-item col-4 col-lg-auto">
                        <a class="nav-link" href="filter.php?new=1">
                            <i class="fas fa-plus"></i> مرشح جديد
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="navbar-text nav-item col-4 col-lg-auto">
                        <a class="nav-link" href="#login.php">تسجيل الدخول</a>
                    </div>
                    <button class="navbar-text theme-toggle btn btn-link me-2" aria-label="Toggle theme">
                        <i class="bi bi-moon-stars-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
