<?php
require_once __DIR__ . '/header.php';

$id = $_GET['id'] ?? "";
$new = $_GET['new'] ?? false;

echo <<<HTML
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h2>تعديل المرشح: ($id)</h2>
            </div>
            <div class="card-body">
                <form action="#save_filter.php" method="post">
                    <input type="hidden" name="id" value="$id">
                    <input type="hidden" name="new" value="$new">
                    <div class="mb-3">
                        <label for="name" class="form-label">اسم المرشح</label>
                        <input type="text" class="form-control" id="name" placeholder="أدخل اسم المرشح" required>
                    </div>

                    <div class="mb-3">
                        <label for="filterCode" class="form-label">كود المرشح</label>
                        <textarea class="form-control" id="filterCode" rows="5" placeholder="أدخل كود المرشح..."
                            required></textarea>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="public">
                        <label class="form-check-label" for="public">اجعل المرشح عامًا (متاح لجميع المستخدمين)</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">حفظ</button>
                        <a href="dashboard.php" class="btn btn-secondary">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

HTML;

require_once __DIR__ . '/footer.php';
