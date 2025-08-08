<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفوف والفصول - المدير</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('Madarek Front End/المدير/styles.css') }}">
</head>
<body class="font-arabic bg-gray-50">
    <div class="flex h-screen">
        <nav class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-64 bg-white border-l border-gray-200">
                <div class="flex-grow mt-5 px-3">
                    <ul class="space-y-1">
                        <li><a href="{{ route('manager.dashboard') }}" class="text-gray-700 hover:bg-gray-50 px-3 py-2 rounded-md block">لوحة التحكم</a></li>
                        <li><a href="{{ route('manager.users') }}" class="text-gray-700 hover:bg-gray-50 px-3 py-2 rounded-md block">إدارة المستخدمين</a></li>
                        <li><a href="#" class="bg-gradient-to-r from-amber-400 to-orange-500 text-slate-800 px-3 py-2 rounded-md block shadow">الصفوف والفصول</a></li>
                        <li><a href="{{ route('manager.schedules') }}" class="text-gray-700 hover:bg-gray-50 px-3 py-2 rounded-md block">الجداول الدراسية</a></li>
                        <li><a href="{{ route('manager.attendance') }}" class="text-gray-700 hover:bg-gray-50 px-3 py-2 rounded-md block">الحضور والغياب</a></li>
                        <li><a href="{{ route('manager.marks') }}" class="text-gray-700 hover:bg-gray-50 px-3 py-2 rounded-md block">الدرجات والتقارير</a></li>
                        <li><a href="{{ route('manager.messages') }}" class="text-gray-700 hover:bg-gray-50 px-3 py-2 rounded-md block">الرسائل</a></li>
                        <li><a href="{{ route('manager.announcements') }}" class="text-gray-700 hover:bg-gray-50 px-3 py-2 rounded-md block">الإعلانات</a></li>
                        <li><a href="{{ route('manager.settings') }}" class="text-gray-700 hover:bg-gray-50 px-3 py-2 rounded-md block">إعدادات النظام</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="flex-1 overflow-y-auto">
            <div class="max-w-7xl mx-auto p-6">
                <h2 class="text-2xl font-bold text-gray-900">الصفوف والفصول</h2>
                <div class="mt-6 bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            @forelse($classes as $class)
                                <div class="border rounded-lg p-4">
                                    <div class="text-sm text-gray-500">الصف</div>
                                    <div class="text-lg font-semibold">{{ $class->grade_level }} {{ $class->class_number }}</div>
                                    <div class="mt-2 text-sm text-gray-500">الطاقة الاستيعابية: {{ $class->capacity ?? '—' }}</div>
                                </div>
                            @empty
                                <div class="text-gray-500">لا توجد فصول</div>
                            @endforelse
                        </div>
                        <div class="mt-6">{{ $classes->links() }}</div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('Madarek Front End/المدير/dashboard.js') }}"></script>
    <script src="{{ asset('Madarek Front End/المدير/classes.js') }}"></script>
</body>
</html>


