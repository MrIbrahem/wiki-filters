<?php
require_once __DIR__ . '/header.php';
echo <<<HTML
<div class="container d-flex justify-content-center align-items-center vh-50">
    <div class="card shadow p-4" style="width: 350px;">
        <h4 class="text-center mb-3">تسجيل الدخول</h4>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">اسم المستخدم</label>
                <input type="text" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">كلمة المرور</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">دخول</button>
        </form>
    </div>
</div>

HTML;

require_once __DIR__ . '/footer.php';
