<?php

require_once __DIR__ . '/header.php';

$filters = [
    1 => "مرشح 1",
    2 => "مرشح 2",
    3 => "مرشح 3",
    4 => "مرشح 4",
    5 => "مرشح 5",
    6 => "مرشح 6",
];
?>

<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h2>مرشحاتي</h2>
        </div>
        <div class="card-body">
            <div class="container mt-4">
                <div class="row row-cols-3">
                    <?php

                    foreach ($filters as $id => $name) {
                        echo <<<HTML
        <div class="col mb-4">
            <div class="card shadow-sm mb-3">
                <div class="card-header">
                    <h5 class="card-title">$name</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">تفاصيل المرشح هنا...</p>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a href="monitor.php?id=$id" class="btn btn-sm btn-success">مراقبة</a>
                        <a href="filter.php?id=$id" class="btn btn-sm btn-warning">تعديل</a>
                    </div>
                </div>
            </div>
        </div>
    HTML;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>
<?php

require_once __DIR__ . '/footer.php';
