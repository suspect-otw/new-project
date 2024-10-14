<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaberlerController extends Controller
{
    public function index()
    {
        $haberler = $this->getHaberler();
        return view('haberler', compact('haberler'));
    }

    private function getHaberler()
    {
        return [
            ['baslik' => "Bayram öncesi o vaatlere dikkat: 'Aracınızı kapınıza kadar vale getirecek' deyip... Vatandaşları uyardı", 'ozet' => "Kurban Bayramı'na sayılı günler kalmasıyla birlikte birçok sektörde olduğu gibi 'rent a car'...", 'resim' => 'storage/images/haber1.jpg', 'url' => 'https://www.mynet.com/bayram-oncesi-o-vaatlere-dikkat-aracinizi-kapiniza-kadar-vale-getirecek-deyip-vatandaslari-uyardi-110107137214'],
            ['baslik' => "700 bin liralık aracını kiraladı, başına gelmeyen kalmadı, şok üstüne şok yaşadı! Cinayet işlenmiş olabilir", 'ozet' => "Araç kiralama şirketi olan Musa Kahraman otomobilini 5 günlüğüne kiraladı. Son GPS...", 'resim' => 'storage/images/haber2.jpg', 'url' => 'https://www.mynet.com/bu-tuzaga-dikkat-arac-kiralamak-isterken-43-bin-lirasindan-oldu-110107171232'],
            ['baslik' => "Spor Dünyasından Son Dakika: 'Şampiyonlar Ligi' Finali", 'ozet' => "Ankara'da Ali İhsan Karaağaç (45), oğlunu askerlik görevini yapacağı Hatay'a götürmek için yola çıktı.", 'resim' => 'storage/images/haber3.jpg', 'url' => 'https://www.mynet.com/oglunu-askere-goturmek-icin-arac-kiralamak-istedi-suphelenince-gercegi-anladi-110107180089'],
            ['baslik' => "Otomobil kiralamada bir dönem sona erdi! Artık senelik kiralıyorlar", 'ozet' => "Döviz kurunda yaşanan artış otomobil fiyatlarını da etkiledi. Artan otomobil fiyatlarına sigorta...", 'resim' => 'storage/images/haber4.jpg', 'url' => 'https://finans.mynet.com/haber/detay/ekonomi/otomobil-kiralamada-bir-donem-sona-erdi-artik-senelik-kiraliyorlar/456037/'],
            ['baslik' => "Şeytanın Aklına Gelmez! Buldukları Yöntemle (Kripto Para) Milyonluk Vurgun Yaptılar", 'ozet' => "Kahramanmaraş'ta akılalmaz dolandırıcılık. Kiraya verdikleri araçlara sistem kuran dolandırıcılar...", 'resim' => 'storage/images/haber5.jpg', 'url' => 'https://www.mynet.com/seytanin-aklina-gelmez-bulduklari-yontemle-milyonluk-vurgun-yaptilar-aralarinda-avukat-polis-ve-noter-de-var-110107066351'],
            ['baslik' => "Akaryakıtta Yeni Dönem! Geri Sayım Başladı", 'ozet' => "Akaryakıt sektöründe usulsüz fatura uygulamalarının ve vergi kayıplarının önüne...", 'resim' => 'storage/images/haber6.jpg', 'url' => 'https://finans.mynet.com/haber/detay/ekonomi/milyonlarca-arac-sahibini-ilgilendiriyor-akaryakitta-yeni-donem-basliyor/480791/'],
        ];
    }
}