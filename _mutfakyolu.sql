-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 May 2019, 07:32:16
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mutfakyolu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket`
--

CREATE TABLE `anket` (
  `soru_id` int(11) NOT NULL,
  `soru` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `secenek_id` int(11) NOT NULL,
  `secenek` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `oy_sayisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anket`
--

INSERT INTO `anket` (`soru_id`, `soru`, `secenek_id`, `secenek`, `oy_sayisi`) VALUES
(1, 'aşağıdakilerden hangisini daha çok seversiniz?', 1, 'çorba', 6),
(2, '', 2, 'tatlı', 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ust` int(2) NOT NULL,
  `kategori_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_ust`, `kategori_seourl`, `kategori_sira`) VALUES
(1, 'Yemek Tarifleri', 0, '', 0),
(2, 'Çorba Tarifleri', 0, '', 1),
(3, 'Diğer Tarifler', 0, '', 2),
(4, 'Hamur işi Tarifleri', 0, '', 3),
(5, 'Tatlı Tarifleri', 0, '', 4),
(6, 'Tarifler', 0, '', 5),
(7, 'Pratik Yemekler', 1, '', 0),
(8, 'Pilav Tarifleri', 1, '', 0),
(9, 'Etli Yemek Tarifleri', 1, '', 0),
(10, 'Balık Tarifleri', 1, '', 0),
(11, 'Deniz Ürünleri Tarifleri', 1, '', 0),
(12, 'Kış Yemekleri Tarifleri', 1, '', 0),
(13, 'Makarna Tarifleri', 1, '', 0),
(14, 'Sebze Yemeği Tarifleri', 1, '', 0),
(15, 'Aperatif Yemek tarifleri', 1, '', 0),
(16, 'Yöresel Yemek Tarifleri', 3, '', 0),
(17, 'Diyet Yemekleri', 3, '', 0),
(18, 'Dünya Mutfağı Tarifleri', 3, '', 0),
(19, 'Kırmızı Et Tarifleri', 3, '', 0),
(20, 'Börek Tarifleri', 4, '', 0),
(21, 'Çörek Tarifleri', 4, '', 0),
(22, 'Poğaça Tarifleri', 4, '', 0),
(23, 'Kek Tarifleri', 4, '', 0),
(24, 'Kurabiye Tarifleri', 4, '', 0),
(25, 'Ekmek Tarifleri', 4, '', 0),
(26, 'Pizza Tarifleri', 4, '', 0),
(27, 'Makaron Tarifleri', 4, '', 0),
(28, 'Pasta Tarifleri', 5, '', 0),
(29, 'Dondurma Tarifleri', 5, '', 0),
(30, 'Hamurlu Tatlı Tarifleri', 5, '', 0),
(31, 'Sütlü Tatlı Tarifleri', 5, '', 0),
(32, 'Soğuk Tatlılar', 5, '', 0),
(33, 'Kahvaltılık Tarifler', 6, '', 0),
(34, 'Salata Tarifleri', 6, '', 0),
(35, 'Turşu tarifleri', 6, '', 0),
(36, 'Sos Tarifleri', 6, '', 0),
(37, 'Reçel Tarifleri', 6, '', 0),
(38, 'İçecek Tarifleri', 6, '', 0),
(39, 'Meze tarifleri', 6, '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_kadi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL DEFAULT '1',
  `kullanici_hakkimizda` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_soyad`, `kullanici_kadi`, `kullanici_mail`, `kullanici_password`, `kullanici_yetki`, `kullanici_durum`, `kullanici_hakkimizda`) VALUES
(4, '2019-03-18 17:11:44', '', '', 'admin', '', 'admin', 'admin@gmail.com', '123456', '2', 1, ''),
(6, '2019-03-22 12:56:23', '', '', 'şeyma', 'öçal', 'seymaocal', 'seymaocal.97@gmail.com', 'e10adc3949', '1', 1, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tarif`
--

CREATE TABLE `tarif` (
  `tarif_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `tarif_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tarif_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tarif_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tarif_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `tarif_malzeme` text COLLATE utf8_turkish_ci NOT NULL,
  `tarif_nasil_yapilir` text COLLATE utf8_turkish_ci NOT NULL,
  `tarif_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tarif_keyword` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tarif_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `tarif_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tarif_sira` int(2) NOT NULL,
  `tarif_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kac_kisilik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hazirlik_süresi` int(11) NOT NULL,
  `pisme_suresi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tarif`
--

INSERT INTO `tarif` (`tarif_id`, `kategori_id`, `tarif_zaman`, `tarif_ad`, `tarif_seourl`, `tarif_detay`, `tarif_malzeme`, `tarif_nasil_yapilir`, `tarif_video`, `tarif_keyword`, `tarif_durum`, `tarif_resimyol`, `tarif_sira`, `tarif_link`, `kac_kisilik`, `hazirlik_süresi`, `pisme_suresi`) VALUES
(22, 5, '2019-05-10 04:14:54', 'Kireçte Hatay Kabak Tatlısı', '', 'Bir kahvaltı mekanında tattığım ve tadını çok beğendiğim kireçte bekletilen Kireçte Hatay Kabak Tatlısı tarifini ve püf noktalarını size veriyorum. Mutfak Yolu okurlarımız olarak bu yöresel tatlı tarifini mutlaka deneyin. Malzemeleri kolayca bulunabiliyor ve yapımı basit ama sabır isteyen karşılığında enfes bir tatlıya (keza ben şekerleme diyorum) sahip olacaksınız. O halde hep birlikte bakalım kireçte hatay kabak tatlısı nasıl yapılıyor?', '5 litre su (temiz bir kovaya) 3 yemek kaşığı sönmemiş kireç Orta boy kabağın yarısı Hatay Kabak Tatlısı Şerbeti İçin Malzemeler 3 su bardağı şeker 3 su bardağı su', '1- Öncelikle genişçe bir kovanın içerisine suyu ve kireci koyuyoruz. İyice karıştırdıktan sonra bir gece bekliyoruz. Ertesi gün yüze çıkan sadece suyunu kullanacağız. 2- Kabuğundan ayırdığımız kabaklarımızı ince şekilde dilimlere kesiyoruz. Sonra da genişçe bir kaba alıyoruz. 3- Berraklaşan suyu kabaklarımızın üzerine döküyoruz. Dikkat etmeniz gereken şey ise mutlaka kirece dokunmamanız berrak kısmı kullanmanız. 4- Bu işlemi de tamamladıktan sonra kabakları bir gece kireçli suda bekletiyoruz. 5- Ardından geniş bir tencerede kabak tatlısının şerbetini yapıyoruz. 6- Kireçli suda bekleyen kabakları bir saat kadar temiz suda bekletiyoruz ve 4 – 5 su musluk suyunda yıkıyoruz. 7- Şerbetin içine attıktan sonra en kısık ve en küçük ocakta pişmeye alıyoruz. Şerbet dibe inene kadar (yaklaşık 2-3 saat) pişiriyoruz.  Hatay Kabak Tatlısı Püf Noktası: Kireci dibinden almamaya dikkat edin. Sabırla bekletme aşamalarını uygulayın. Mutlaka iyice durulayın. Şeffaf kabakları elde etmek için kabağı sert seçin. Herkese şimdiden kucak dolusu bir afiyet olsun.', '', 'aa', '1', 'tarifimg/tarif/23174242392731329790kirecte-hatay-kabak-tatlisi-tarifi.jpg', 0, '', '6', 20, 35),
(23, 19, '2019-03-21 22:48:24', 'Ocakta Çoban Kavurma Tarifi', '', 'Lezzetli mi lezzetli Ocakta Çoban Kavurma tarifini veriyorum. Sac kavurma ile benzerliği elbette var. Bu tarif evde çoban kavurma yapmak isteyenlere. Bu nefis çoban kavurmayı denedikten sonra sac kavurma ile farklarını yorum yaparak bize bildirin. Şimdiden Afiyet olsun.\r\n', '750 gram kuzu / dana kuşbaşı 3 orta boy domates 6 diş sarımsak 15 adet arpacık soğan / normal uzunlamasına doğranmış soğan da olur 1 dolmalık yeşil biber 2 dolmalık kırmızı biber 1 yemek kaşığı tereyağı 2 yemek kaşığı sıvı yağ 2 dal taze kekik veya 1 çay kaşığı kuru kekik Yeteri kadar tuz 1 tatlı kaşığı pul biber', '1. Çoban kavurmasını yapmaya geçmeden önce tüm malzemeleri ayıklayın ve yıkayın.  2. Soğanları ince yemeklik biçimde doğrayın. Sonrasında biberlerin de yemeklik olarak doğrayın. Ardından domateslerin kabuklarını soyun ve bunları da yemeklik doğrayıp her bir malzemeyi ayrı kaplara alın.     3. Sarımsakları da minik olarak kıyın ve bir tabağa alın. Kuzu etini de bir defalık soğuk suyun altında yıkayıp suyunu süzün.  4. Tencerenin içine tereyağını atıp eritin ve eriyen yağın üzerine de kuzu etini koyup suyunu salana kadar sürekli karıştırarak pişirin.  5. Suyunu alıp çeken kuzu eti üzerine önce doğradığınız kırmızı ve yeşil biberleri ilave ederek kavurma işlemine devam edin.  6. Geçen 5 dakika sürenin sonunda kavurma üzerine sarımsak ve soğan da ilave edin. Tercihinize göre dilerseniz doğramayarak tüm olarak da ekleyebilirsiniz. Arpacık soğanları ben genelde tüm olarak atmayı tercih ediyorum.  7. Domates dışındaki tüm malzemeleri ekleme işlemi bittikten sonra tenceredeki etleri kavurma işlemine bir müddet daha devam edin.  8. Daha sonra da pişmeye yakın içine tuzu, pul biberini ve kekiği de ekleyin.  9. En son malzeme olarak da doğranmış domatesleri de kavurma üzerine ekleyip pişen etler ve sebzeler özleşip güzel kokusunu salana dek pişirin.  Güzelce tencerede pişirdiğiniz çoban kavurmayı servis tabaklarına alıp sıcak olarak servis edin. Bu çoban kavurma yanına güzel bir pirinç pilavı harika olacaktır.', '', 'Ocakta Çoban Kavurma Tarifi', '1', 'tarifimg/tarif/28601286362841429215ocakta-coban-kavurma-tarifi-.jpg', 0, '', '6-8', 40, 35),
(24, 33, '2019-05-10 04:10:56', 'Peynirli Bayat Ekmek Kızartması Tarifi', '', 'Sabah kahvaltıları için muhteşem bir pratik kahvaltı tarifi olan Peynirli Bayat Ekmek Kızartması tarifini vereceğim. Güzel bir Pazar sabahıydı. Evde iki tane ekmek var ama bayat. Aşağıya inip ekmek almaya çok üşendiğim bir sabahtı. Kara kara düşünürken aslında herkesin bildiği bir kahvaltılık yapayım dedim veee. Ekmeği dilimleyip üzerini kendi zevkime göre doldurup fırına verdim. İtalyanların bruschettası gibi hem onların varsa bizim de anam babam usulü fırında ekmek kızartmamız var. Çok lezzetli o ekmek dilimlerinin tarifi hemen aşağıda. Biz bayat ekmek ile yapılan bir tarif olarak dedik ama tabi ki yumurtalı peynirli ekmek kızartmamız taze ekmek ile de yapılabiliyor.', '1 adet bayat ekmek 2 yumurta Yarım kase beyaz peynir 1 parça dil peyniri 3 adet tatlı yeşil kıl biber 1 tatlı kaşığı margarin Üzerine Susam, çörek otu', '1. Bayat Ekmeği keskin bir bıçak yardımıyla ince ince dilimleyin. 2. Yumurta, ufalanmış beyaz peynir, tel tel ayrılmış dil peyniri ve margarin ile bir harç yapın. 3. Fırın tepsisini çok az margarin ile yağlayıp ekmek dilimlerini dizin. Ekmeklerin üzerine yaptığınız karışımdan kaşık ile yayarak koyun. Kalın sürmeyin ki çiğ kalmasın. 4. Sonra harcı sürdüğünüz ekmeklerin üzerine küçük parçalar halinde doğranmış biberlerden de serpiştirin. 5. Arkasından ekmeklerin üzerine susam ve çörek otu serpin. Çok lezzetli hale geliyorlar bu sayede. 6. Peynirli bayat ekmek kızartmasını pişirmek için de önceden ısıtılmış 170 derece fırında ortalama 10 – 15 dakika kadar kontrollü olarak pişirin. Afiyet olsun.', '', 'aa', '1', 'tarifimg/tarif/31762276472389927549firinda-peynirli-bayat-ekmek-kizartmasi-tarifi.jpg', 0, '', '5', 30, 35),
(25, 19, '2019-03-21 22:49:14', 'Sacda Kuzu Kavurma Tarifi', '', 'Et yemekleri çeşitlerinden biri olan Sacda Kuzu Kavurma tarifini vermek istiyorum. Şöyle biberli, domatesli, soğanlı kavurmaya ne dersiniz? Yumuşacık kuzu etleri sacda piştikten sonra tam ağızlara layık olacak diye düşünüyorum. Sözlerimi de çok fazla uzatmadan, sizi özel bir et yemeği tarifi olan Kuzu Sac Kavurma Tarifi ile baş başa bırakıyorum. Şimdiden Mutfak Yolu okurlarımıza Afiyet olsun.', '1 kilogram kuşbaşı doğranmış kuzu eti 2 yemek kaşığı kadar sıvı yağ 1 yemek kaşığı tereyağı 2 tane orta boy soğan 2 orta boy domates 3 orta boy köy biberi 1 tatlı kaşığı tuz 1 çay kaşığı pul biber 1 çay kaşığı kekik 1 çay kaşığı karabiber', '1. İşe öncelikle iyice temizlenmiş sac tavayı biraz kızdırarak içindeki mikropları öldürün. Sonrasında içerisine sıvı yağını aktararak kızdırın.     2. Sacda iyice kızan yağın üstüne kuşbaşı doğranmış kuzu etlerini yavaşça ilave edin.  3. Sonra da kuzu etlerini harlı ateşin üstündeki sacda önce suyunu salıp sonra suyunu tekrar çekene kadar iyicene arada bir karıştırarak kavurun.  4. Bir müddet sonra etler hafifçe  kızardığında da uzun iri parçalar halinde doğranmış olan soğanları da sac tavaya ilave edin ve şöyle bir karıştırın.  5. Eklenen soğanlar güzelce soteledikten sonra da doğranmış yeşil biberleri de sacın içerisine ekleyin. Sac kavurmayı yüksek ateşte pişirdiğimiz için malzemeler dibine yapışmaması adına ara ara karıştırmakta fayda var.  6. Eklediğiniz yeşil biberleri de soteledikten sonra üzerine kabuklarından ayrılmış ve küp doğranmış domatesleri de ekleyin.  7. Domatesler de güzelce piştikten sonra sac içerisine 1 yemek kaşığı tereyağını da ekleyin ve karıştırın.  8. Malzeme listesindeki baharatların tümünü ekleyip 3 dakika kadar karıştırdıktan sonra ocağın altını kapatın ve hazırladığınız kuzu kavurmayı misafirlere sıcak olarak servis edin.', '', 'Sacda Kuzu Kavurma Tarifi', '1', 'tarifimg/tarif/20864260243142629154sacda-kuzu-kavurma-tarifi.jpg', 0, '', '6', 20, 25),
(26, 14, '2019-03-21 22:49:46', 'Nefis Etli Sebzeli Güveç Tarifi', '', 'Güveç yemekleri genelde çok lezzetli ve bir o kadar da sağlıklı oluyor. Dumanı üstünde nefis Etli Sebzeli Güveç tarifini vermek istiyorum. Şuna eminim ki sebzeli yemekleri sevenler özellikle çok seveceğiniz bu lezzetli yemeğe bayılacaksınız.Besleyici ve vitamin deposu güveçte sebze yemeği özel günlerde de pilavların yanına harika olur. Mesela ben bu nefis güveç yemeği yanına Tereyağlı Arpa Şehriyeli Pirinç Pilavı harika olur diye düşünüyorum\r\n\r\n', '600 gram kuzu eti (kuşbaşı doğranmış) 100 gram kuyruk yağı (sevmeyenler kullanmayabilir) 1 çay bardağı sıcak su 6 küçük boy patates 200 gram kadar arpacık soğan / normal soğan da olur 2 orta boy havuç 3 yemek kaşığı kadar zeytinyağı 1 yemek kaşığı kadar domates salçası 1 tatlı kaşığı kadar biber salçası 2 diş sarımsak Yarım çay kaşığı taze çekilmiş tane karabiber 3 dal kekik 1 dal taze biberiye 1 – 2 çay kaşığı kadar tuz', '1. İşe öncelikle kuyruk yağından başlıyoruz. Kuyruk yağını alarak bir bıçak yardımı ile küçük küçük parçalara ayırın.  2. Sonrasında sarımsak ve soğanları alarak güzelce kabuklarını soyarak öylece bırakın.  3. Havuçları alarak güzelce yıkayın ve kabuklarını soyarak ince ince halkalar olarak şeklinde doğrayın. Taze olan patatesleri alarak iyicene yıkayın. Eğer küçük patatesler kullanıyorsanız kabuklarını soymadan iki eş parçaya bölün.  4. Yemeği pişirmek için kullanacağınız güveci ocağın üzerine koyarak ısıtmaya başlayın. Kuyruk yağını güveç kabına atarak erimesini sağlayın. Ardından da üzerine zeytin yağını ekleyerek bir süre karıştırarak kavurmasını sağlayın.     5. Ardından da üzerine kuşbaşı kuzu etlerini ilave ederek kavurma işlemine kaldığınız yerden devam edin.  6. Etlerin rengi döndüğünde soğan ve sarımsakları da güveç kabı içerisine ilave ederek iyicene karıştırarak harmanlayın.  7. Bir müddet sonra etler iyice renk almaya başlayacaktır. Rengi iyice karardığında güvece doğranan havuçları da ekleyin. Biraz daha arada kavuşturarak kavurmaya devam edin.  8. Sonrasında domates ve biber salçasını da üzerine ekleyerek yeniden karıştırın.  10. Sonra üzerine patatesleri de ekleyerek öylece bırakın. Kekik ve biberiye ilavesi de yapın. Yemeğe çok güzel aroma ve tat verecektir. Hemen ardından tuzu, karabiberi ve sıcak suyu güvecin içerisine azar azar ekleyin.  11. Bir yağlı kağıtla güvecin üzerini sıkıca kapatın. Sonra da güvecin kapağını üzerine kapatın. Kısık bir ateş üzerinde güvecin kaynamasını bekleyin. Burada iki tercih hakkımız var. Kaynama ve pişme işleminin tamamını ocaktaki ateşin üzerinde de yapabiliriz ya da kaynadıktan sonra fırının içinde kalan pişirme işlemine devam edebiliriz.  12. Lezzetli olsun diye fırında pişireceksek önceden ısıtmış olduğunuz 180 derecelik fırının içine kaynamakta olan güveci alın. 30 – 45 dakika kadar bir sürede pişirin.  13. Bu sürenin sonunda da güveci fırından çıkartarak yamayacak bir zemin üzerine koyun. Kapağını dikkatlice açın ve ilk sıcaklığın çıkması için birkaç dakika kadar dinlendirin.  14. Sonrasında da çok fazla soğutmadan servis yaparak sevdiklerinize unutulmaz bir lezzet deneyimi yaşatın.  Dikkat: Pişirme güvecinde kırık veyahut olmamasına dikkat etmelisiniz. İlk defa kullanacağınız bir güveç aldıysanız öncelikle temiz ve nemli bez kullanarak güvecinizi temizleyin.', '', 'Nefis Etli Sebzeli Güveç Tarifi', '1', 'tarifimg/tarif/30537297812960929743nefis-etli-sebzeli-guvec-tarifi.jpg', 0, '', '4', 40, 50),
(27, 1, '2019-03-21 22:50:27', 'Ocakta Orman Kebabı Tarifi', '', 'Osmanlı Mutfağından et severler için seçtiğim bu enfes kebabı sizlerin huzuruna sunuyorum. Orman Kebabı tarifi içinde bol sebze ve tabi ki et var. Bol bezelyeli ve sulu et yemeği olan orman kebabını çok seveceksiniz. Ana yemek olarak çok sevilen bir yemek olması ile birlikte oldukça da lezzetlidir. Etli yemekleri sulu halde severler için güzel bir yemek tarifi olacağından eminim. Sizler de özel günlerinizde bu lezzetli yemeği hazırlayarak sevdiklerinize sunabilirsiniz. Lezzeti damaklarda kalacak harika bir et yemeği olacağından hiç şüphe duymuyorum. O halde şimdi Orman Kebabı Nasıl Yapılır? tarifimize geçelim hemen.\r\n', '1 kilogram kuşbaşı doğranmış kuzu eti 1 büyük boy kuru soğan 1,5 su bardağı kadar bezelye 2 adet büyük boy domates 1 büyük boy havuç 1 büyük boy patates 2 tane kereviz sapı 1 yemek kaşığı biber salçası + 1 yemek kaşığı domates salçası 3 su bardağı sıcak et suyu veya sebze suyu 1 yemek kaşığı beyaz un 2 yemek kaşığı sıvı yağ + 1 tatlı kaşığı tereyağı 1 defne yaprağı 1 tatlı kaşığı tuz Yarım tatlı kaşığı karabiber Yarım tatlı kaşığı pul biber', '1. İşe öncelikle sıvı yağı tencereye ilave ederek başlayın ve kızdırın. Kuşbaşı etleri hafifçe una bulayın. Sonrasında tencereye atacağınız sırada etleri silkeleyin. Tencerenin içerisine etleri atın. Renk değiştirene kadar 10 dakika kadar güzelce soteleyin.     2. Sonra doğramış olduğunuz soğanları da aynı tencerenin içine alarak birazcık soteleyin. Tereyağını ekleyerek soteleme işlemini sürdürün.  3. Sarımsakları alarak kabuklarını soyun ve incecik doğrayın. Soğanlar bir müddet sonra canlılığını kaybedince doğradığınız sarımsakları ilave edin. Soteleme işlemine devam edin.  4. Kereviz saplarını alarak incecik doğrayın. Hemen ardından ilave edin.  5. Soğanlar iyiden iyiye canlılığını yitirince salçaları ilave edin. Birazcık kavurun. Yemeklik olarak doğradığınız domatesleri ilave edin.  6. Sonrasında patatesleri alarak küp küp güzelce doğrayın. Domatesler yumuşadığı anda patates parçalarını, bezelyeleri ve havucu tencereye koyarak karıştırarak pişirin. Arkasından da kuzu etlerini tencereye atın.  7. Sonra da 3 bardak sıcak et suyunu ya da sebze suyunu alarak tencerenin içerisine azar azar aktarın.  8. Karabiber, defne yaprağı ve tuzu ilave ederek kaynayana kadar bekleyin. Kaynamaya başladığında ocağın altını kısın.  9. Ateşin altını kıstıktan sonra da tencerenin kapağını kapatın. Arada bir karıştırarak ortalama 45 dakika kadar bir sürede kısık ateşte yemeğinizi güzelce pişirin.  10. Süre sonunda yemeği son bir kez karıştırıp biraz dinlendirdikten sonra yanına güzel bir pirinç pilavı da hazırlayarak servis yapabilirsiniz. Şimdiden afiyet olsun! ?', '', 'Ocakta Orman Kebabı Tarifi', '1', 'tarifimg/tarif/21721287962547426400ocakta-orman-kebabi-tarifi.jpg', 0, '', '4 Kişilik', 40, 45),
(28, 39, '2019-03-21 22:51:32', 'Kuşbaşılı Ali Nazik Tarifi', '', 'Bazı yemeklerin hikayeleri vardır. Bunlardan bir tanesi de Kuşbaşılı Ali Nazik mezesi tarifi oluyor. Osmanlı Mutfağında sevilen Alinazik tarihi şöyle. Yavuz Sultan Selim Gaziantep’e gitmek için yola çıkıyor. Bunun haberini duyan yerli halk hazırlıklara başlıyorlar. Padişahın ağzına layık nefis nefis yemekler bir birinden güzel tatlılar yapılıyor. Ama öyle bir yemek yapılmış ki patlıcanın, yoğurdun ve etin tadı harmanlanmış. Bu yemeği oldukça beğenen Yavuz Sultan Selim “Hangi eli nazik yaptı bu yemeği? ” diye çevresindekilere soruyor. Sonrasında tarifini anlatanlar sayesinde osmanlı mutfağından günümüze kadar Alinazik olarak geliyor.  Yavuz Sultan Selim’in beğendiği bu çok lezzetli yemeği sizinde beğenmenizi umut ederek Ali Naziğin tarifine geçiyorum.\r\n', ' 250 gram kuşbaşı et  50 gram tereyağı 1 yemek kaşığı kadar biber salçası  1 diş sarımsak  1 çay kaşığı toz kırmızı biber  1 çay kaşığı kadar tuzPatlıcanlı Karışım Malzemeleri3 tane közlenmiş patlıcan1 kase sarımsaklı yoğurt1 çay kaşığı kadar tuz', '1. Kullabileceğiniz derince bir tava alarak içerisine tereyağını koyarak işe başlayın. Ardından doğramış olduğunuz sarımsağı da ilave ederek hafif soteleyin.     2. Sonrasında kuşbaşı etleri küçük küçük doğrayın. Etleri de ilave ederek güzelce karıştırın. Tavanızın kapağını kapatarak 7 dakika kadar bir süre boyunca kısık bir ateşte suyunu bırakıp pişene kadar bekletin.  3. Süre sonunda pişmiş olacaktır. Salça, pul biber ve tuz ilave ederek tat verin. Sonra ocaktan indirebilirsiniz.  4. Bir tane ekmek kesme tahtası alarak önceden közlemiş olduğunuz patlıcanları üzerine alın. Sonra bıçak kullanarak iyice kıyın. Kıyarken bir tutam tuz atabilirsiniz.  5. Bir kase alarak içerisine yoğurt ve sarımsak koyun. Sonra kıymış olduğunuz patlıcanları bu kasenin içerisine atarak iyice karıştırın.  6. Hemen sonrasında servis yapacağınız tabağınızın içerisine yoğurtlu patlıcanlı olan karışımı aktararak orta kısmını çukur bırakmaya çalışın bunun için ortasına küçük bir tas koyup ardından karışımı aktarmanız yeterli olacaktır.  7. Son olarak pişmiş olan kuşbaşı etleri çukurun içerisine atarak güzelce basın. Arzu ederseniz sosunu da gezdirerek servis yapabilirsiniz. Afiyet olsun  Ali Nazik Nasıl Servis Edilir ? Kırmızı biber ve tereyağı kullanarak yanına güzel bir sos hazırlayabilirsiniz. Hazırladığınız bu sosu da mezenin üzerinde gezdirerek lezzetine lezzet katabilirsiniz. Yoğurt kullanımında süzme yoğurt kullanılması kıvamının artması açısından daha güzel olacaktır. Dilerseniz mezeyi süslemek için yanına közlenmiş soğan ve üzerine bir kaç dal maydanoz kıyabilirsiniz. Daha güzel görünür ve daha lezzetli olur.', '', 'Kuşbaşılı Ali Nazik Tarifi', '1', 'tarifimg/tarif/28857299622845126435kusbasili-ali-nazik-tarifi.jpg', 0, '', '4-6', 35, 35),
(29, 7, '2019-03-21 22:52:06', 'Kavurmalı Kaşarlı Tost Tarifi', '', 'Sucuklu ve kaşarlı tost başta olmak bir çok tost çeşidi vardır. Daha önce hiç Kavurmalı Kaşarlı Tost yediniz mi? Bence diğer tostlardan çok lezzetli. Dana etinden ya da kuzu etinden elde edilen kavurma oldukça lezzetlidir. Genellikle Kurban bayramında evler kavurma ile dolar, taşar. Tereyağı ile süper ikili olan kavurma oldukça doyurucudur. Lafı daha fazla uzatmadan Kavurmalı tost nasıl yapılır ona bakalım.\r\n\r\n', '100 gram kavurma 4 dilim tost ekmeği 2 tatlı kaşığı tereyağı 4 dilim kaşar peyniri 4 tane kornişon turşu 1,5 çay kaşığı karabiber 1,5 çay kaşığı tuz', '1. Tost yapımına öncelikle kavurmayı dilimlemek ile başlayın. Ardından turşuları da alarak uzunlamasına dilimleyin. Bu arada uç kısımlarını kesmeyi unutmayın.  2. Kaşar peynirlerini alarak dilimlere ayırın. Daha sonra tere yağını alarak ekmeklerin iç kısmına sürün. Fazla kalın sürmemeye dikkat edin.     3. Tereyağı sürmüş olduğunuz 2 tane tost ekmeğinin üzerine dilimlemiş olduğunuz kavurmaları ekleyin. Kavurmanın üzerine karabiber ve tuzu serpin.  4. Ardından turşuları da eşit olarak kavurmaların ilave edin. Sonrasında da turşuların üzerine kaşar peyniri dilimlerini ekleyin ve tostun üzerini kapatın.  5. Dilerseniz en üstte ki ekmek diliminin üzerine de tereyağı sürerek lezzetine lezzet katabilirsiniz. Ancak bu şekilde tostun kalorisi de artacaktır.  6. Hazırlamış olduğunuz tostları tost makinesi arasına alarak kapağını kapatın ve bastırın. Tost içindeki peynirleri iyice eriyip kavurmalarla özdeşleşene kadar bir müddet bastırın. Sonrasında sıcak sıcak servis yapabilirsiniz. Afiyet olsun', '', 'Kavurmalı Kaşarlı Tost Tarifi', '1', 'tarifimg/tarif/20361283913026021229kavurmali-tost-tarifi.jpg', 0, '', '8-10', 40, 40);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `tarif_id` int(11) NOT NULL,
  `yorum_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_onay` int(11) DEFAULT '0',
  `begen` int(11) NOT NULL DEFAULT '0',
  `yoruma_yorum_id` int(11) NOT NULL,
  `yoruma_yorum` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `begenilen_yorum_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `kullanici_id`, `tarif_id`, `yorum_ad`, `yorum_email`, `yorum_detay`, `yorum_onay`, `begen`, `yoruma_yorum_id`, `yoruma_yorum`, `begenilen_yorum_id`) VALUES
(2, 0, 31, 'hilal', 'hilal@gmail.com', 'güzel tarif', 2, 0, 0, '', 0),
(3, 0, 31, 'hilal', 'seymaocal.97@gmail.com', 'güzel tarif', 2, 1, 0, '', 0),
(22, 0, 29, 'seyma', 'seymaocal.97@gmail.com', 'beğendim,çok güzel tarif', 2, 2, 0, '', 0),
(42, 0, 29, '', 'seymaocal.97@gmail.com', '', 2, 0, 22, 'yoruma yorum mesajı', 0),
(48, 6, 29, '', 'hilal.97@gmail.com', '', 0, 0, 0, '', 42),
(51, 6, 29, '', 'deneme.97@gmail.com', '', 0, 0, 0, '', 22),
(53, 0, 28, 'hilal', 'hilal@gmail.com', 'güzel tarif', 2, 1, 0, '', 0),
(54, 0, 30, 'hilal', 'seymaocal.97@gmail.com', 'güzel tarif', 2, 1, 0, '', 0),
(55, 0, 28, 'seyma', 'seymaocal.97@gmail.com', 'beğendim,çok güzel tarif', 2, 2, 0, '', 0),
(56, 6, 28, '', 'hilal@gmail.com', '', 0, 0, 0, '', 53);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anket`
--
ALTER TABLE `anket`
  ADD PRIMARY KEY (`soru_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`tarif_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anket`
--
ALTER TABLE `anket`
  MODIFY `soru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `tarif`
--
ALTER TABLE `tarif`
  MODIFY `tarif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
