<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة ولي الأمر - مدارِك</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50">
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">مرحباً {{ auth()->user()->full_name ?? 'ولي الأمر' }}</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <a href="#" class="bg-white shadow rounded p-4 text-center">أبنائي</a>
            <a href="#" class="bg-white shadow rounded p-4 text-center">الرسائل</a>
        </div>
    </div>
    
</body>
</html>




