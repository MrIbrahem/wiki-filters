<?php
require_once __DIR__ . '/header.php';
echo <<<HTML
    <div class="container">
        <div class="card card_form">
            <div class="card-header text-center py-3">
                <h2 class="card-title mb-0 d-flex align-items-center justify-content-center">

                </h2>
            </div>
            <div class="card-body">
            <div class="container mt-3 text-center">
                <h1>لوحة مراقبة التعديلات</h1>
                <p>تتبع وفلترة التعديلات عبر مشاريع ويكيميديا ​​بسهولة.</p>
                <a href="#login.php" class="btn btn-outline-primary">سجل دخول للبدء</a>
            </div>

            </div>
            <div class="card-footer text-center py-3">
            </div>
        </div>
    </div>

HTML;

require_once __DIR__ . '/footer.php';
