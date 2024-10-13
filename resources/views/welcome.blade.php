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
    <header class="bg-white shadow-md fixed top-0 left-0 right-0 z-10" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold text-gray-700">
                    <a href="/">Haber Portalı</a>
                </div>
                <div class="hidden md:flex">
                    <a href="/" class="text-gray-600 hover:text-gray-900 px-3 py-2">Ana Sayfa</a>
                    <a href="/haberler" class="text-gray-600 hover:text-gray-900 px-3 py-2">Haberler</a>
                    <a href="/hakkimizda" class="text-gray-600 hover:text-gray-900 px-3 py-2">Hakkımızda</a>
                    <a href="/iletisim" class="text-gray-600 hover:text-gray-900 px-3 py-2">İletişim</a>
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
                <a href="/" class="block text-gray-600 hover:text-gray-900 px-3 py-2">Ana Sayfa</a>
                <a href="/haberler" class="block text-gray-600 hover:text-gray-900 px-3 py-2">Haberler</a>
                <a href="/hakkimizda" class="block text-gray-600 hover:text-gray-900 px-3 py-2">Hakkımızda</a>
                <a href="/iletisim" class="block text-gray-600 hover:text-gray-900 px-3 py-2">İletişim</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-8 mt-20">
        <div class="bg-white p-4 mb-6 rounded-lg shadow-md inline-block">
            <p class="text-gray-800 font-semibold">Hoş Geldin İsim Soyisim!</p>
            <p class="text-gray-800 font-semibold">5454545454</p>
            <p class="text-gray-800 font-semibold">email@gmail.com</p>
            <p class="text-gray-800 font-semibold">Mersin</p>
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mb-6">Son Haberler</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $haberler = [
                    ['baslik' => "Bayram öncesi o vaatlere dikkat: 'Aracınızı kapınıza kadar vale getirecek' deyip... Vatandaşları uyardı", 'ozet' => "Kurban Bayramı'na sayılı günler kalmasıyla birlikte birçok sektörde olduğu gibi 'rent a car'...", 'resim' => 'storage/images/haber1.jpg', 'url' => 'https://www.mynet.com/bayram-oncesi-o-vaatlere-dikkat-aracinizi-kapiniza-kadar-vale-getirecek-deyip-vatandaslari-uyardi-110107137214'],
                    ['baslik' => "700 bin liralık aracını kiraladı, başına gelmeyen kalmadı, şok üstüne şok yaşadı! Cinayet işlenmiş olabilir", 'ozet' => "Araç kiralama şirketi olan Musa Kahraman otomobilini 5 günlüğüne kiraladı. Son GPS...", 'resim' => 'storage/images/haber2.jpg', 'url' => 'https://www.mynet.com/bu-tuzaga-dikkat-arac-kiralamak-isterken-43-bin-lirasindan-oldu-110107171232'],
                    ['baslik' => "Spor Dünyasından Son Dakika: 'Şampiyonlar Ligi' Finali", 'ozet' => "Ankara'da Ali İhsan Karaağaç (45), oğlunu askerlik görevini yapacağı Hatay'a götürmek için yola çıktı.", 'resim' => 'storage/images/haber3.jpg', 'url' => 'https://www.mynet.com/oglunu-askere-goturmek-icin-arac-kiralamak-istedi-suphelenince-gercegi-anladi-110107180089'],
                    ['baslik' => "Otomobil kiralamada bir dönem sona erdi! Artık senelik kiralıyorlar", 'ozet' => "Döviz kurunda yaşanan artış otomobil fiyatlarını da etkiledi. Artan otomobil fiyatlarına sigorta...", 'resim' => 'storage/images/haber4.jpg', 'url' => 'https://finans.mynet.com/haber/detay/ekonomi/otomobil-kiralamada-bir-donem-sona-erdi-artik-senelik-kiraliyorlar/456037/'],
                    ['baslik' => "Şeytanın Aklına Gelmez! Buldukları Yöntemle (Kripto Para) Milyonluk Vurgun Yaptılar", 'ozet' => "Kahramanmaraş'ta akılalmaz dolandırıcılık. Kiraya verdikleri araçlara sistem kuran dolandırıcılar...", 'resim' => 'storage/images/haber5.jpg', 'url' => 'https://www.mynet.com/seytanin-aklina-gelmez-bulduklari-yontemle-milyonluk-vurgun-yaptilar-aralarinda-avukat-polis-ve-noter-de-var-110107066351'],
                    ['baslik' => "Akaryakıtta Yeni Dönem! Geri Sayım Başladı", 'ozet' => "Akaryakıt sektöründe usulsüz fatura uygulamalarının ve vergi kayıplarının önüne...", 'resim' => 'storage/images/haber6.jpg', 'url' => 'https://finans.mynet.com/haber/detay/ekonomi/milyonlarca-arac-sahibini-ilgilendiriyor-akaryakitta-yeni-donem-basliyor/480791/'],
                ];
            @endphp

            @foreach ($haberler as $haber)
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset($haber['resim']) }}" alt="{{ $haber['baslik'] }}" class="w-full h-48 object-cover">
                <div class="p-4 flex-grow flex flex-col justify-between">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $haber['baslik'] }}</h2>
                    <p class="text-gray-600 mb-4">{{ $haber['ozet'] }}</p>
                    <div class="flex justify-between items-center">
                        <a href="{{ $haber['url'] }}" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700 transition duration-300" target="_blank" rel="noopener noreferrer">Devamını Oku</a>
                    </div>
                </div>
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
                    <a href="/kullanim-sartlari" class="text-sm hover:text-gray-300 mx-2">Hakkımızda</a>
                    <a href="/gizlilik-politikasi" class="text-sm hover:text-gray-300 mx-2">Gizlilik Politikası</a>
                    <a href="/kvkk" class="text-sm hover:text-gray-300 mx-2">KVKK</a>
                </div>
                <div class="w-full md:w-1/3 text-center md:text-right mt-4 md:mt-0">
                    <p class="text-sm">&copy; 2024 Haber Portalı. Tüm hakları saklıdır.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>