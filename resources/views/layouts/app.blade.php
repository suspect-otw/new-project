<!DOCTYPE html>
<html lang="tr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Haber Portalı')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="flex flex-col min-h-full font-sans bg-gray-100">
    <header class="bg-white shadow-md fixed top-0 left-0 right-0 z-10" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold text-gray-700">
                    <a href="{{ route('home') }}">Haber Portalı</a>
                </div>
                <div class="hidden md:flex">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2">Ana Sayfa</a>
                    <a href="{{ route('haberler') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2">Haberler</a>
                    <a href="{{ route('hakkimizda') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2">Hakkımızda</a>
                    <a href="{{ route('iletisim') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2">İletişim</a>
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
                <a href="{{ route('home') }}" class="block text-gray-600 hover:text-gray-900 px-3 py-2">Ana Sayfa</a>
                <a href="{{ route('haberler') }}" class="block text-gray-600 hover:text-gray-900 px-3 py-2">Haberler</a>
                <a href="{{ route('hakkimizda') }}" class="block text-gray-600 hover:text-gray-900 px-3 py-2">Hakkımızda</a>
                <a href="{{ route('iletisim') }}" class="block text-gray-600 hover:text-gray-900 px-3 py-2">İletişim</a>
            </div>
        </nav>
    </header>

    <main class="flex-grow container mx-auto px-6 py-8 mt-20">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-auto">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between items-center">
                <div class="w-full md:w-1/3 text-center md:text-left">
                    <h3 class="text-lg font-semibold mb-2">Haber Portalı</h3>
                    <p class="text-sm">Güncel ve doğru habercilik</p>
                </div>
                <div class="w-full md:w-1/3 text-center mt-4 md:mt-0">
                    <a href="{{ route('hakkimizda') }}" class="text-sm hover:text-gray-300 mx-2">Hakkımızda</a>
                    <a href="{{ route('gizlilik-politikasi') }}" class="text-sm hover:text-gray-300 mx-2">Gizlilik Politikası</a>
                    <a href="{{ route('kvkk') }}" class="text-sm hover:text-gray-300 mx-2">KVKK</a>
                </div>
                <div class="w-full md:w-1/3 text-center md:text-right mt-4 md:mt-0">
                    <p class="text-sm">&copy; 2024 Haber Portalı. Tüm hakları saklıdır.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Pop-up -->
    <div id="cookie-consent" class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white p-4 hidden" style="height: 100px;">
        <div class="container mx-auto flex flex-col sm:flex-row items-center justify-between h-full">
            <div class="text-sm mb-2 sm:mb-0">
                Çerezlere izin vermek için kabul edin.
                Daha fazla bilgi için 
                <a href="{{ route('kvkk') }}" class="text-blue-400 hover:underline">KVKK</a> sayfamızı ziyaret edin.
            </div>
            <div class="flex space-x-2">
                <button id="accept-cookies" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                    Kabul Et
                </button>
                <button id="reject-cookies" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                    Reddet
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cookieConsent = document.getElementById('cookie-consent');
            const acceptButton = document.getElementById('accept-cookies');
            const rejectButton = document.getElementById('reject-cookies');

            function hideCookieConsent() {
                cookieConsent.classList.add('hidden');
                sessionStorage.setItem('cookieConsentShown', 'true');
            }

            function showCookieConsent() {
                if (!sessionStorage.getItem('cookieConsentShown')) {
                    cookieConsent.classList.remove('hidden');
                }
            }

            acceptButton.addEventListener('click', hideCookieConsent);
            rejectButton.addEventListener('click', hideCookieConsent);

            showCookieConsent();
        });
    </script>
</body>
</html>