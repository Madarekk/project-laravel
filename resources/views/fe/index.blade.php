<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>روابط جميع الواجهات (للمطور)</title>
    <style>
        body { font-family: Tahoma, Arial, sans-serif; direction: rtl; margin: 40px; }
        ul { line-height: 2; }
        h2 { color: #2c3e50; }
        a { color: #2980b9; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h2>روابط جميع الواجهات في مجلد مدارك (للمطور)</h2>
    <ul>
        <li><b>Login</b>
            <ul>
                <li><a href="{{ route('login') }}">auth/login (Laravel)</a></li>
            </ul>
        </li>
        <li><b>Sign up</b>
            <ul>
                <li><a href="{{ route('register') }}">auth/register (Laravel)</a></li>
            </ul>
        </li>
        <li><b>المدير</b>
            <ul>
                <li><a href="{{ route('manager.dashboard') }}">manager/dashboard (Laravel)</a></li>
            </ul>
        </li>
        <li><b>الإداري</b>
            <ul>
                <li><a href="{{ route('admin.dashboard') }}">admin/dashboard (Laravel)</a></li>
            </ul>
        </li>
        <li><b>المعلم</b>
            <ul>
                <li><a href="{{ route('teacher.dashboard') }}">teacher/dashboard (Laravel)</a></li>
            </ul>
        </li>
        <li><b>ولي الامر</b>
            <ul>
                <li><a href="{{ route('parent.dashboard') }}">parent/dashboard (Laravel)</a></li>
            </ul>
        </li>
        <li><b>الطالب</b>
            <ul>
                <li><a href="{{ route('student.dashboard') }}">student/dashboard (Laravel)</a></li>
            </ul>
        </li>
    </ul>
    <p style="color: #888; font-size: 13px;">هذه الصفحة مؤقتة لتسهيل الوصول للواجهات أثناء التطوير فقط.</p>
</body>
</html>