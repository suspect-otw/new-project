<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Portalı</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans bg-gray-100">
    <header class="bg-white shadow-md" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold text-gray-700">
                    <a href="#">Haber Portalı</a>
                </div>
                <div class="hidden md:flex">
                    <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2">Ana Sayfa</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2">Haberler</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2">Hakkımızda</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2">İletişim</a>
                </div>
                <div class="md:hidden">
                    <button @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="md:hidden" x-show="isOpen" @click.away="isOpen = false">
                <a href="#" class="block text-gray-600 hover:text-gray-900 px-3 py-2">Ana Sayfa</a>
                <a href="#" class="block text-gray-600 hover:text-gray-900 px-3 py-2">Haberler</a>
                <a href="#" class="block text-gray-600 hover:text-gray-900 px-3 py-2">Hakkımızda</a>
                <a href="#" class="block text-gray-600 hover:text-gray-900 px-3 py-2">İletişim</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Son Haberler</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $haberler = [
                    ['baslik' => 'Yeni Teknoloji Atılımı', 'ozet' => 'Bilim insanları devrim niteliğinde bir buluş açıkladı.'],
                    ['baslik' => 'Ekonomide Yeni Gelişmeler', 'ozet' => 'Merkez Bankası faiz kararını açıkladı.'],
                    ['baslik' => 'Spor Dünyasından Son Dakika', 'ozet' => 'Milli takım önemli bir galibiyet elde etti.'],
                    ['baslik' => 'Kültür Sanat Etkinlikleri', 'ozet' => 'Uluslararası film festivali başlıyor.'],
                    ['baslik' => 'Çevre Koruma Çalışmaları', 'ozet' => 'Yeni geri dönüşüm projesi hayata geçirildi.'],
                    ['baslik' => 'Eğitim Reformu', 'ozet' => 'Yeni müfredat değişiklikleri açıklandı.'],
                ];
            @endphp

            @foreach ($haberler as $haber)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $haber['baslik'] }}</h2>
                    <p class="text-gray-600">{{ $haber['ozet'] }}</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Devamını Oku</a>
                </div>
            @endforeach
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between items-center">
                <div class="w-full md:w-1/3 text-center md:text-left">
                    <h3 class="text-lg font-semibold mb-2">Haber Portalı</h3>
                    <p class="text-sm">Güncel ve doğru habercilik</p>
                </div>
                <div class="w-full md:w-1/3 text-center mt-4 md:mt-0">
                    <a href="#" class="text-sm hover:text-gray-300 mx-2">Kullanım Şartları</a>
                    <a href="#" class="text-sm hover:text-gray-300 mx-2">Gizlilik Politikası</a>
                    <a href="#" class="text-sm hover:text-gray-300 mx-2">KVKK</a>
                </div>
                <div class="w-full md:w-1/3 text-center md:text-right mt-4 md:mt-0">
                    <p class="text-sm">&copy; 2024 Haber Portalı. Tüm hakları saklıdır.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>