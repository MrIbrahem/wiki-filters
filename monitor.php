<?php
require_once __DIR__ . '/header.php';
echo <<<HTML
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h2 class="mb-2">مراقبة التعديلات</h2>
            </div>
            <div class="card-body">

        <div class="table table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="">
                    <tr>
                        <th>#</th>
                        <th>المستخدم</th>
                        <th>الصفحة</th>
                        <th>التعديل</th>
                        <th>الوقت</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- مثال لتعديل -->
                    <tr>
                        <td>1</td>
                        <td><a href="#">Ahmad123</a></td>
                        <td><a href="#">مقالة ويكيبيديا</a></td>
                        <td>تمت إضافة محتوى جديد</td>
                        <td>قبل 5 دقائق</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">عرض</a>
                            <a href="#" class="btn btn-sm btn-danger">تراجع</a>
                        </td>
                    </tr>
                    <!-- يمكن تكرار هذه الصفوف لكل تعديل جديد -->
                </tbody>
            </table>
        </div>
            </div>
        </div>

    </div>

HTML;

require_once __DIR__ . '/footer.php';
