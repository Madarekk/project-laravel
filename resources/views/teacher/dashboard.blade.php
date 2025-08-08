<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة المعلم - مدارِك</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50">
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">مرحباً {{ auth()->user()->full_name ?? 'المعلم' }}</h1>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <a href="#" class="bg-white shadow rounded p-4 text-center">دروسي</a>
            <a href="#" class="bg-white shadow rounded p-4 text-center">الطلاب</a>
            <a href="#" class="bg-white shadow rounded p-4 text-center">الرسائل</a>
        </div>
    </div>
</body>
</html>




