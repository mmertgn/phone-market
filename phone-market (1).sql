-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Ağu 2017, 13:06:54
-- Sunucu sürümü: 10.1.16-MariaDB
-- PHP Sürümü: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `phone-market`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alt_kategoriler`
--

CREATE TABLE `alt_kategoriler` (
  `id` int(250) NOT NULL,
  `kat_id` int(11) NOT NULL,
  `adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `alt_kategoriler`
--

INSERT INTO `alt_kategoriler` (`id`, `kat_id`, `adi`, `resim`) VALUES
(7, 3, 'Apple', ''),
(8, 3, 'Samsung', ''),
(9, 4, 'Apple', ''),
(10, 3, 'Huawei', ''),
(12, 3, 'LG', ''),
(13, 3, 'Lenovo', ''),
(14, 4, 'Samsung', ''),
(15, 4, 'Casper', ''),
(16, 4, 'Lenovo', ''),
(17, 4, 'Reeder', ''),
(18, 5, 'İphone', ''),
(19, 5, 'Samsung', ''),
(20, 5, 'LG', ''),
(21, 5, 'HTC', ''),
(22, 5, 'Sony', ''),
(23, 3, 'HTC', ''),
(24, 3, 'Sony', ''),
(25, 6, 'Apple', ''),
(26, 6, 'Beats', ''),
(27, 6, 'Samsung', ''),
(28, 6, 'Jabra', ''),
(29, 6, 'JBL', ''),
(30, 6, 'Sennheiser', ''),
(31, 7, 'Nano Glass', ''),
(32, 7, 'Kırılmaz Cam', ''),
(33, 7, 'Tam Kaplayan', ''),
(34, 7, 'Full Body', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(50) NOT NULL,
  `sirketadi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `smtpserver` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `smtpport` int(50) NOT NULL,
  `smtpemail` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda` text COLLATE utf8_turkish_ci NOT NULL,
  `gizlilik` text COLLATE utf8_turkish_ci NOT NULL,
  `sartlar` text COLLATE utf8_turkish_ci NOT NULL,
  `sozlesme` text COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `xkordinat` double NOT NULL,
  `ykordinat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `sirketadi`, `keywords`, `aciklama`, `name`, `smtpserver`, `smtpport`, `smtpemail`, `password`, `adres`, `sehir`, `tel`, `fax`, `email`, `hakkimizda`, `gizlilik`, `sartlar`, `sozlesme`, `facebook`, `instagram`, `twitter`, `xkordinat`, `ykordinat`) VALUES
(1, 'Gülcüler İletişim', 'Mobile Aksesuar,Kılıflar Kapaklar,Ekran Koruyucuları,Kablolar şarj cihazları,Ekran Değişimi,Cepmarket', 'Mobile Aksesuar Dünyası , Kılıflar Kapaklar Ekran Koruyucuları.Kablolar şarj cihazları Şimdi Tamiri Online Yaptık Garantili Kırık Ekran Değişimi Cepmarket.', 'telefon', 'ssl://smtp.gmail.com', 465, 'gulculeriletisim@gmail.com', '34xpfuctz', '100. yıl Mah KARABÜK', 'Karabuk', '053751363569', '05555555', 'gulculeriletisim@gmail.com', '<p><strong>&Ccedil;alışma saatlerimiz:</strong></p>\r\n\r\n<p>&bull; Mağazalarımız haftanın 7 g&uuml;n&uuml; 10:00 22:00 arasında hizmet vermektedir.</p>\r\n\r\n<p>&bull; &Ccedil;ağrı merkezimizden Haftai&ccedil;i 9:00 &ndash; 18:40 hafta sonu 10:00 17:00 saatleri arasında destek hizmeti, haftanın 7 g&uuml;n&uuml; 9:00 22:00 saatleri arasında satış yapılmaktadır.</p>\r\n\r\n<p>&bull; Vatanbilgisayar.com internet sitesinden 7 g&uuml;n 24 saat satış hizmeti verilmektedir.</p>\r\n\r\n<p>&bull; Satış sonrası destek hafta i&ccedil;i : 09:00 &ndash; 18:40 &nbsp;hafta sonu: 09:00 &ndash; 16:00 arasında hizmet vermektedir ve satış sonrası destek ekibinde &ccedil;alışan sayısı satış ekibinde &ccedil;alışan sayısının % 20 si kadardır.</p>\r\n\r\n<p>&nbsp;<strong>Sermayemiz:</strong></p>\r\n\r\n<p>% 100 &uuml;yelerimize&nbsp;aittir.</p>\r\n\r\n<p>&nbsp;<strong>Misyonumuz:</strong></p>\r\n\r\n<p>Mutlu &Ccedil;alışan, Mutlu M&uuml;şteri, Mutlu Tedarik&ccedil;i</p>\r\n\r\n<p>&nbsp;<strong>Vizyonumuz:</strong></p>\r\n\r\n<p>Bu şirkete birincilik yakışır.</p>\r\n\r\n<p>&nbsp;<strong>&Ccedil;alışanlarımız:</strong></p>\r\n\r\n<p>- Doğru işe doğru eleman prensibi ile se&ccedil;ilir, kişisel ve kariyer gelişimlerini destekleyecek eğitimlere katılma imkanı sağlanır.</p>\r\n\r\n<p>- M&uuml;şteri memnuniyet ilkelerine bağlı kalmaları nı ve geliştirmelerini sağlayacak otokontrol ve eğitim sistemleri ile s&uuml;rekli desteklenirler.</p>\r\n\r\n<p>- Aylık ve d&ouml;nemsel performans &ouml;l&ccedil;me değerlendirme sistemleri ile kariyer gelişimleri objektif değerlendirilir ve desteklenir.</p>\r\n\r\n<p>- &Uuml;st pozisyonun gerektirdiği &ouml;zellikleri taşıyıp taşımadıkları sınavlarla belirlenir. - Organizasyonumuz i&ccedil;inde y&uuml;kselebilmeleri i&ccedil;in &ouml;l&ccedil;me değerlendirme sistemlerine katılımları sağlanıp &ouml;ncelik &ccedil;alışanlara verilir.</p>\r\n\r\n<p>- 2015 yılı itibari ile bir kısmı g&uuml;venlik, temizlik firmaları gibi taşeronlar &uuml;zerinde bordrolu, bir kısmı tedarik&ccedil;i firmaların promot&ouml;rleri olmak &uuml;zere 3600&#39;&uuml;n &uuml;zerinde kişi istihdam edilmektedir.</p>\r\n', '<h2><strong>GİZLİLİK VE G&Uuml;VENLİK POLİTİKASI</strong></h2>\r\n\r\n<p>Mağazamızda verilen t&uuml;m servisler ve cepmarket.com.tr adresinde kayıtlı Barış AKAĞA&Ccedil; firmamıza aittir ve firmamız tarafından işletilir.</p>\r\n\r\n<p>Firmamız,&ccedil;eşitli ama&ccedil;larla kişisel veriler toplayabilir. Aşağıda, toplanan kişisel verilerin nasıl ve ne şekilde toplandığı, bu verilerin nasıl ve ne şekilde korunduğu belirtilmiştir.</p>\r\n\r\n<p>&Uuml;yelik veya Mağazamız&nbsp;&uuml;zerindeki &ccedil;eşitli form ve anketlerin doldurulması suretiyle &uuml;yelerin kendileriyle ilgili bir takım kişisel bilgileri (isim-soy isim, firma bilgileri, telefon, adres veya e-posta adresleri gibi) Mağazamız&nbsp;tarafından işin doğası gereği toplanmaktadır.</p>\r\n\r\n<p>Firmamız bazı d&ouml;nemlerde m&uuml;şterilerine ve &uuml;yelerine kampanya bilgileri, yeni &uuml;r&uuml;nler hakkında bilgiler, promosyon teklifleri g&ouml;nderebilir. &Uuml;yelerimiz bu gibi bilgileri alıp almama konusunda her t&uuml;rl&uuml; se&ccedil;imi &uuml;ye olurken yapabilir, sonrasında &uuml;ye girişi yaptıktan sonra hesap bilgileri b&ouml;l&uuml;m&uuml;nden&nbsp;bu se&ccedil;imi değiştirilebilir ya da kendisine gelen bilgilendirme iletisindeki linkle bildirim yapabilir.</p>\r\n\r\n<p>Mağazamız&nbsp;&uuml;zerinden veya eposta ile ger&ccedil;ekleştirilen onay s&uuml;recinde, &uuml;yelerimiz tarafından mağazamıza elektronik ortamdan iletilen kişisel bilgiler, &Uuml;yelerimiz ile yaptığımız &ldquo;Kullanıcı S&ouml;zleşmesi&rdquo; ile belirlenen ama&ccedil;lar ve kapsam dışında &uuml;&ccedil;&uuml;nc&uuml; kişilere a&ccedil;ıklanmayacaktır.</p>\r\n\r\n<p>Sistemle ilgili sorunların tanımlanması ve verilen hizmet ile ilgili &ccedil;ıkabilecek sorunların veya uyuşmazlıkların hızla &ccedil;&ouml;z&uuml;lmesi i&ccedil;in, Firmamız, &uuml;yelerinin IP adresini kaydetmekte ve bunu kullanmaktadır. IP adresleri, kullanıcıları genel bir şekilde tanımlamak ve kapsamlı demografik bilgi toplamak amacıyla da kullanılabilir.</p>\r\n\r\n<p>Firmamız, &Uuml;yelik S&ouml;zleşmesi ile belirlenen ama&ccedil;lar ve kapsam dışında da, talep edilen bilgileri kendisi veya işbirliği i&ccedil;inde olduğu kişiler tarafından doğrudan pazarlama yapmak amacıyla kullanabilir.&nbsp; Kişisel bilgiler, gerektiğinde kullanıcıyla temas kurmak i&ccedil;in de kullanılabilir. Firmamız&nbsp;tarafından talep edilen bilgiler veya kullanıcı tarafından sağlanan bilgiler veya&nbsp;Mağazamız&nbsp;&uuml;zerinden yapılan işlemlerle ilgili bilgiler; Firmamız&nbsp;ve işbirliği i&ccedil;inde olduğu kişiler tarafından, &ldquo;&Uuml;yelik S&ouml;zleşmesi&rdquo; ile belirlenen ama&ccedil;lar ve kapsam dışında da, &uuml;yelerimizin kimliği ifşa edilmeden &ccedil;eşitli istatistiksel değerlendirmeler, veri tabanı oluşturma ve pazar araştırmalarında kullanılabilir.</p>\r\n\r\n<p>Firmamız, gizli bilgileri kesinlikle &ouml;zel ve gizli tutmayı, bunu bir sır saklama y&uuml;k&uuml;m&uuml; olarak addetmeyi ve gizliliğin sağlanması ve s&uuml;rd&uuml;r&uuml;lmesi, gizli bilginin tamamının veya herhangi bir kısmının kamu alanına girmesini veya yetkisiz kullanımını veya &uuml;&ccedil;&uuml;nc&uuml; bir kişiye ifşasını &ouml;nlemek i&ccedil;in gerekli t&uuml;m tedbirleri almayı ve gerekli &ouml;zeni g&ouml;stermeyi taahh&uuml;t etmektedir.</p>\r\n\r\n<h2><strong>KREDİ KARTI G&Uuml;VENLİĞİ</strong></h2>\r\n\r\n<p>Firmamız, alışveriş sitelerimizden alışveriş yapan kredi kartı sahiplerinin g&uuml;venliğini ilk planda tutmaktadır. Kredi kartı bilgileriniz hi&ccedil;bir şekilde sistemimizde saklanmamaktadır.</p>\r\n\r\n<p>İşlemler s&uuml;recine girdiğinizde g&uuml;venli bir sitede olduğunuzu anlamak i&ccedil;in dikkat etmeniz gereken iki şey vardır. Bunlardan biri tarayıcınızın en alt satırında bulunan bir anahtar ya da kilit simgesidir. Bu g&uuml;venli bir internet sayfasında olduğunuzu g&ouml;sterir ve her t&uuml;rl&uuml;&nbsp;bilgileriniz şifrelenerek korunur. Bu bilgiler, ancak satış işlemleri s&uuml;recine bağlı olarak ve verdiğiniz talimat istikametinde kullanılır. Alışveriş sırasında kullanılan kredi kartı ile ilgili bilgiler alışveriş sitelerimizden bağımsız olarak 128 bit SSL (Secure Sockets Layer) protokol&uuml; ile şifrelenip sorgulanmak &uuml;zere ilgili bankaya ulaştırılır. Kartın kullanılabilirliği onaylandığı takdirde alışverişe devam edilir. Kartla ilgili hi&ccedil;bir bilgi tarafımızdan g&ouml;r&uuml;nt&uuml;lenemediğinden ve kaydedilmediğinden, &uuml;&ccedil;&uuml;nc&uuml; şahısların herhangi bir koşulda bu bilgileri ele ge&ccedil;irmesi engellenmiş olur.</p>\r\n\r\n<p>Online olarak kredi kartı ile verilen siparişlerin &ouml;deme/fatura/teslimat adresi bilgilerinin g&uuml;venilirliği firmamiz tarafından Kredi Kartları Dolandırıcılığı&rsquo;na karşı denetlenmektedir. Bu y&uuml;zden, alışveriş sitelerimizden ilk defa sipariş veren m&uuml;şterilerin siparişlerinin tedarik ve teslimat aşamasına gelebilmesi i&ccedil;in &ouml;ncelikle finansal ve adres/telefon bilgilerinin doğruluğunun onaylanması gereklidir. Bu bilgilerin kontrol&uuml; i&ccedil;in gerekirse kredi kartı sahibi m&uuml;şteri ile veya ilgili banka ile irtibata ge&ccedil;ilmektedir.</p>\r\n\r\n<p>&Uuml;ye olurken verdiğiniz t&uuml;m bilgilere sadece siz ulaşabilir ve siz değiştirebilirsiniz. &Uuml;ye giriş bilgilerinizi g&uuml;venli koruduğunuz takdirde başkalarının sizinle ilgili bilgilere ulaşması ve bunları değiştirmesi m&uuml;mk&uuml;n değildir. Bu ama&ccedil;la, &uuml;yelik işlemleri sırasında&nbsp;<strong>128 bit SSL&nbsp;</strong>g&uuml;venlik alanı i&ccedil;inde hareket edilir. Bu sistem kırılması m&uuml;mk&uuml;n olmayan bir uluslararası bir şifreleme standardıdır.</p>\r\n\r\n<p>Bilgi hattı veya m&uuml;şteri hizmetleri servisi bulunan ve a&ccedil;ık adres ve telefon bilgilerininbelirtildiği İnternet alışveriş siteleri g&uuml;n&uuml;m&uuml;zde daha fazla tercih edilmektedir. Bu sayede aklınıza takılan b&uuml;t&uuml;n konular hakkında detaylı bilgi alabilir, online alışveriş hizmeti sağlayan firmanın g&uuml;venirliği konusunda daha sağlıklı bilgi edinebilirsiniz.</p>\r\n\r\n<p>Not:İnternet alışveriş sitelerinde firmanın a&ccedil;ık adresinin ve telefonun yer almasına dikkat edilmesini tavsiye ediyoruz. Alışveriş yapacaksanız alışverişinizi yapmadan &uuml;r&uuml;n&uuml; aldığınız mağazanın b&uuml;t&uuml;n telefon / adres bilgilerini not edin. Eğer g&uuml;venmiyorsanız alışverişten &ouml;nce telefon ederek teyit edin. Firmamıza ait t&uuml;m online alışveriş sitelerimizde firmamıza dair t&uuml;m bilgiler ve firma yeri belirtilmiştir.</p>\r\n\r\n<h1>E-POSTA G&Uuml;VENLİĞİ</h1>\r\n\r\n<p>Mağazamızın M&uuml;şteri Hizmetleri&rsquo;ne, herhangi bir siparişinizle ilgili olarak g&ouml;ndereceğiniz e-postalarda, asla kredi kartı numaranızı veya şifrelerinizi yazmayınız. E-postalarda yer alan bilgiler &uuml;&ccedil;&uuml;nc&uuml; şahıslar tarafından g&ouml;r&uuml;lebilir. Firmamız e-postalarınızdan aktarılan bilgilerin g&uuml;venliğini hi&ccedil;bir koşulda garanti edemez.</p>\r\n\r\n<p>TARAYICI &Ccedil;EREZLERİ</p>\r\n\r\n<p>Firmamız, mağazamızı ziyaret eden kullanıcılar ve kullanıcıların web sitesini kullanımı hakkındaki bilgileri teknik bir iletişim dosyası (&Ccedil;erez-Cookie) kullanarak elde edebilir. Bahsi ge&ccedil;en teknik iletişim dosyaları, ana bellekte saklanmak &uuml;zere bir internet sitesinin kullanıcının tarayıcısına (browser) g&ouml;nderdiği k&uuml;&ccedil;&uuml;k metin dosyalarıdır. Teknik iletişim dosyası site hakkında durum ve tercihleri saklayarak İnternet&rsquo;in kullanımını kolaylaştırır.</p>\r\n\r\n<p>Teknik iletişim dosyası,&nbsp; siteyi ka&ccedil; kişinin ziyaret ettiğini, bir kişinin siteyi hangi ama&ccedil;la, ka&ccedil; kez ziyaret ettiğini ve ne kadar sitede kaldıkları hakkında istatistiksel bilgileri elde etmeye ve kullanıcılar i&ccedil;in &ouml;zel tasarlanmış kullanıcı sayfalarından&nbsp; dinamik olarak reklam ve i&ccedil;erik &uuml;retilmesine yardımcı olur. Teknik iletişim dosyası, ana bellekte veya e-postanızdan veri veya başkaca herhangi bir kişisel bilgi almak i&ccedil;in tasarlanmamıştır. Tarayıcıların pek &ccedil;oğu başta teknik iletişim dosyasını kabul eder bi&ccedil;imde tasarlanmıştır ancak kullanıcılar dilerse teknik iletişim dosyasının gelmemesi veya teknik iletişim dosyasının g&ouml;nderildiğinde uyarı verilmesini sağlayacak bi&ccedil;imde ayarları değiştirebilirler.</p>\r\n\r\n<p>Firmamız, işbu &ldquo;Gizlilik Politikası&rdquo; h&uuml;k&uuml;mlerini dilediği zaman sitede yayınlamak veya kullanıcılara elektronik posta g&ouml;ndermek veya sitesinde yayınlamak suretiyle değiştirebilir. Gizlilik Politikası h&uuml;k&uuml;mleri değiştiği takdirde, yayınlandığı tarihte y&uuml;r&uuml;rl&uuml;k kazanır.</p>\r\n', '<p>&Ouml;N BİLGİLENDİRME FORMU</p>\r\n\r\n<p>1.KONU</p>\r\n\r\n<p>İşbu Satış S&ouml;zleşmesi &Ouml;n Bilgi Formu&rsquo;nun konusu, SATICI&rsquo; nın, SİPARİŞ VEREN/ALICI&rsquo; ya satışını yaptığı, aşağıda nitelikleri ve satış fiyatı belirtilen &uuml;r&uuml;n/&uuml;r&uuml;nlerin satışı ve teslimi ile ilgili olarak 6502 sayılı T&uuml;keticilerin Korunması Hakkındaki Kanun &ndash; Mesafeli S&ouml;zleşmeler Y&ouml;netmeliği (RG:27.11.2014/29188) h&uuml;k&uuml;mleri gereğince tarafların hak ve y&uuml;k&uuml;ml&uuml;l&uuml;klerini kapsamaktadır. İş bu &ouml;n bilgilendirme formunu kabul etmekle ALICI, s&ouml;zleşme konusu siparişi onayladığı takdirde sipariş konusu bedeli ve varsa kargo &uuml;creti, vergi gibi belirtilen ek &uuml;cretleri &ouml;deme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; altına gireceğini ve bu konuda bilgilendirildiğini peşinen kabul eder.</p>\r\n\r\n<p>2. SATICI BİLGİLERİ</p>\r\n\r\n<p>&Uuml;nvanı :&nbsp;Barış AKAĞA&Ccedil;</p>\r\n\r\n<p>Adres : S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Caddesi No:196 Kadık&ouml;y &ndash; İstanbul (S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Camii Karşısı)</p>\r\n\r\n<p>Telefon : +90 216 345 83 84</p>\r\n\r\n<p>Eposta : info@cepmarket.com.tr</p>\r\n\r\n<p>3. ALICI BİLGİLERİ(Bundan sonra ALICI olarak anılacaktır.)</p>\r\n\r\n<p>Teslim edilecek kişi : M&uuml;şteri Adı</p>\r\n\r\n<p>Teslimat Adresi : M&uuml;şteri Fatura Adresi</p>\r\n\r\n<p>Telefon :&nbsp;M&uuml;şteri Telefon No</p>\r\n\r\n<p>Eposta/kullanıcı adı :&nbsp;M&uuml;şteri E-posta Adresi</p>\r\n\r\n<p>4. S&Ouml;ZLEŞME KONUSU &Uuml;R&Uuml;N/&Uuml;R&Uuml;NLER BİLGİLERİ</p>\r\n\r\n<p>4.1 Malın / &Uuml;r&uuml;n/&Uuml;r&uuml;nlerin / Hizmetin temel &ouml;zellikleri (t&uuml;r&uuml;, miktarı, marka/modeli, rengi, adedi) SATICI&rsquo;ya ait internet sitesinde yer almaktadır. &Uuml;r&uuml;n&uuml;n temel &ouml;zelliklerini kampanya s&uuml;resince inceleyebilirsiniz. Kampanya tarihine kadar ge&ccedil;erlidir.</p>\r\n\r\n<p>4.2 Listelenen ve sitede ilan edilen fiyatlar satış fiyatıdır. İlan edilen fiyatlar ve vaatler g&uuml;ncelleme yapılana ve değiştirilene kadar ge&ccedil;erlidir. S&uuml;reli olarak ilan edilen fiyatlar ise belirtilen s&uuml;re sonuna kadar ge&ccedil;erlidir.</p>\r\n\r\n<p>4.3 S&ouml;zleşme konusu mal ya da hizmetin t&uuml;m vergiler d&acirc;hil satış fiyatı aşağıdaki tabloda g&ouml;sterilmiştir.</p>\r\n\r\n<p>Alışveriş Tutarı</p>\r\n\r\n<p>Teslimat Adresi : M&uuml;şteri Fatura Adresi</p>\r\n\r\n<p>Fatura Adresi : M&uuml;şteri Fatura Adresi</p>\r\n\r\n<p>Sipariş Tarihi :&nbsp;Sipariş Tarihi</p>\r\n\r\n<p>5. GENEL H&Uuml;K&Uuml;MLER</p>\r\n\r\n<p>5.1. ALICI, SATICI&rsquo;ya ait internet sitesinde s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n temel nitelikleri, satış fiyatı ve &ouml;deme şekli ile teslimata ilişkin &ouml;n bilgileri okuyup, bilgi sahibi olduğunu, elektronik ortamda gerekli teyidi verdiğini kabul, beyan ve taahh&uuml;t eder. ALICININ; &Ouml;n Bilgilendirmeyi elektronik ortamda teyit etmesi, mesafeli satış s&ouml;zleşmesinin kurulmasından evvel, SATICI tarafından ALICI&rsquo; ya verilmesi gereken adresi, siparişi verilen &uuml;r&uuml;nlere ait temel &ouml;zellikleri, &uuml;r&uuml;nlerin vergiler d&acirc;hil fiyatını, &ouml;deme ve teslimat bilgilerini de doğru ve eksiksiz olarak edindiğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>5.2. S&ouml;zleşme konusu her bir &uuml;r&uuml;n, 30 g&uuml;nl&uuml;k yasal s&uuml;reyi aşmamak kaydı ile ALICI&rsquo; nın yerleşim yeri uzaklığına bağlı olarak internet sitesindeki &ouml;n bilgiler kısmında belirtilen s&uuml;re zarfında ALICI veya ALICI&rsquo; nın g&ouml;sterdiği adresteki kişi ve/veya kuruluşa teslim edilir. Bu s&uuml;re i&ccedil;inde &uuml;r&uuml;n&uuml;n ALICI&rsquo;ya teslim edilememesi durumunda, ALICI&rsquo;nın s&ouml;zleşmeyi feshetme hakkı saklıdır.</p>\r\n\r\n<p>5.3. SATICI, s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; eksiksiz, siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri, kullanım kılavuzları ile teslim etmeyi, her t&uuml;rl&uuml; ayıptan ar&icirc; olarak yasal mevzuat gereklerine sağlam, standartlara uygun bir şekilde işin gereği olan bilgi ve belgeler ile işi doğruluk ve d&uuml;r&uuml;stl&uuml;k esasları d&acirc;hilinde ifa etmeyi, hizmet kalitesini koruyup y&uuml;kseltmeyi, işin ifası sırasında gerekli dikkat ve &ouml;zeni g&ouml;stermeyi, ihtiyat ve &ouml;ng&ouml;r&uuml; ile hareket etmeyi kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>5.4. SATICI, s&ouml;zleşmeden doğan ifa y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n s&uuml;resi dolmadan ALICI&rsquo;yı bilgilendirmek ve a&ccedil;ık&ccedil;a onayını almak suretiyle eşit kalite ve fiyatta farklı bir &uuml;r&uuml;n tedarik edebilir.</p>\r\n\r\n<p>5.5. SATICI, sipariş konusu &uuml;r&uuml;n veya hizmetin yerine getirilmesinin imk&acirc;nsızlaşması halinde s&ouml;zleşme konusu y&uuml;k&uuml;ml&uuml;l&uuml;klerini yerine getiremezse, bu durumu, &ouml;ğrendiği tarihten itibaren 3 g&uuml;n i&ccedil;inde yazılı olarak t&uuml;keticiye bildireceğini, 14 g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde toplam bedeli ALICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>5.6. ALICI, s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n teslimatı i&ccedil;in işbu &Ouml;n Bilgilendirme Formunu elektronik ortamda teyit edeceğini, herhangi bir nedenle s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin &ouml;denmemesi ve/veya banka kayıtlarında iptal edilmesi halinde, SATICI&rsquo; nın s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; teslim y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n sona ereceğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>5.7. ALICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n ALICI veya ALICI&rsquo;nın g&ouml;sterdiği adresteki kişi ve/veya kuruluşa tesliminden sonra ALICI&rsquo;ya ait kredi kartının yetkisiz kişilerce haksız kullanılması sonucunda s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin ilgili banka veya finans kuruluşu tarafından SATICI&rsquo;ya &ouml;denmemesi halinde, ALICI S&ouml;zleşme konusu &uuml;r&uuml;n&uuml; 3 g&uuml;n i&ccedil;erisinde nakliye gideri SATICI&rsquo;ya ait olacak şekilde SATICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>5.8. SATICI, tarafların iradesi dışında gelişen, &ouml;nceden &ouml;ng&ouml;r&uuml;lemeyen ve tarafların bor&ccedil;larını yerine getirmesini engelleyici ve/veya geciktirici hallerin oluşması gibi m&uuml;cbir sebepler halleri nedeni ile s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; s&uuml;resi i&ccedil;inde teslim edemez ise, durumu ALICI&rsquo; ya bildireceğini kabul, beyan ve taahh&uuml;t eder. ALICI da siparişin iptal edilmesini, s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n varsa emsali ile değiştirilmesini ve/veya teslimat s&uuml;resinin engelleyici durumun ortadan kalkmasına kadar ertelenmesini SATICI&rsquo; dan talep etme hakkına haizdir. ALICI tarafından siparişin iptal edilmesi halinde ALICI&rsquo; nın nakit ile yaptığı &ouml;demelerde, &uuml;r&uuml;n tutarı 14 g&uuml;n i&ccedil;inde kendisine nakden ve defaten &ouml;denir. ALICI&rsquo; nın kredi kartı ile yaptığı &ouml;demelerde ise, &uuml;r&uuml;n tutarı, siparişin ALICI tarafından iptal edilmesinden sonra 14 g&uuml;n i&ccedil;erisinde ilgili bankaya iade edilir. ALICI, SATICI tarafından kredi kartına iade edilen tutarın banka tarafından ALICI hesabına yansıtılmasına ilişkin ortalama s&uuml;recin 2 ile 3 haftayı bulabileceğini, bu tutarın bankaya iadesinden sonra ALICI&rsquo; nın hesaplarına yansıması halinin tamamen banka işlem s&uuml;reci ile ilgili olduğundan, ALICI, olası gecikmeler i&ccedil;in SATICI&rsquo; yı sorumlu tutamayacağını kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>6. FATURA BİLGİLERİ</p>\r\n\r\n<p>Ad/Soyad/Unvan :&nbsp;M&uuml;şteri Adı</p>\r\n\r\n<p>Adres : M&uuml;şteri Fatura Adresi</p>\r\n\r\n<p>Telefon : M&uuml;şteri&nbsp;Telefon No</p>\r\n\r\n<p>Eposta/kullanıcı adı :&nbsp;M&uuml;şteri E-posta Adresi</p>\r\n\r\n<p>Fatura teslim : Fatura sipariş teslimatı sırasında fatura adresine sipariş ile birlikte</p>\r\n\r\n<p>teslim edilecektir.</p>\r\n\r\n<p>7. CAYMA HAKKI</p>\r\n\r\n<p>7.1. ALICI; mal satışına ilişkin mesafeli s&ouml;zleşmelerde, &uuml;r&uuml;n&uuml;n kendisine veya g&ouml;sterdiği adresteki kişi/kuruluşa teslim tarihinden itibaren 14 (on d&ouml;rt) g&uuml;n i&ccedil;erisinde, SATICI&rsquo;ya bildirmek şartıyla hi&ccedil;bir hukuki ve cezai sorumluluk &uuml;stlenmeksizin ve hi&ccedil;bir gerek&ccedil;e g&ouml;stermeksizin malı reddederek s&ouml;zleşmeden cayma hakkını kullanabilir. Hizmet sunumuna ilişkin mesafeli s&ouml;zleşmelerde ise, bu s&uuml;re s&ouml;zleşmenin imzalandığı tarihten itibaren başlar. Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile hizmetin ifasına başlanan hizmet s&ouml;zleşmelerinde cayma hakkı kullanılamaz. Cayma hakkının kullanımından kaynaklanan masraflar SATICI&rsquo; ya aittir. ALICI, iş bu s&ouml;zleşmeyi kabul etmekle, cayma hakkı konusunda bilgilendirildiğini peşinen kabul eder.</p>\r\n\r\n<p>7.2. Cayma hakkının kullanılması i&ccedil;in 14 (ond&ouml;rt) g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde SATICI&rsquo; ya iadeli taahh&uuml;tl&uuml; posta, faks veya eposta ile yazılı bildirimde bulunulması ve &uuml;r&uuml;n&uuml;n işbu s&ouml;zleşmede d&uuml;zenlenen d&uuml;zenlenen Cayma Hakkı Kullanılamayacak &Uuml;r&uuml;nler h&uuml;k&uuml;mleri &ccedil;er&ccedil;evesinde kullanılmamış olması şarttır. Bu hakkın kullanılması halinde,</p>\r\n\r\n<p>7.2.1 3. kişiye veya ALICI&rsquo; ya teslim edilen &uuml;r&uuml;n&uuml;n faturası, (İade edilmek istenen &uuml;r&uuml;n&uuml;n faturası kurumsal ise, geri iade ederken kurumun d&uuml;zenlemiş olduğu iade faturası ile birlikte g&ouml;nderilmesi gerekmektedir. Faturası kurumlar adına d&uuml;zenlenen sipariş iadeleri İADE FATURASI kesilmediği takdirde tamamlanamayacaktır.)</p>\r\n\r\n<p>7.2.2. İade formu,</p>\r\n\r\n<p>7.2.3. İade edilecek &uuml;r&uuml;nlerin kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir.</p>\r\n\r\n<p>7.2.4. SATICI, cayma bildiriminin kendisine ulaşmasından itibaren en ge&ccedil; 10 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde toplam bedeli ve ALICI&rsquo; yı bor&ccedil; altına sokan belgeleri ALICI&rsquo; ya iade etmek ve 20 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde malı iade almakla y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>\r\n\r\n<p>7.2.5. ALICI&rsquo; nın kusurundan kaynaklanan bir nedenle malın değerinde bir azalma olursa veya iade imk&acirc;nsızlaşırsa ALICI kusuru oranında SATICI&rsquo; nın zararlarını tazmin etmekle y&uuml;k&uuml;ml&uuml;d&uuml;r. Ancak cayma hakkı s&uuml;resi i&ccedil;inde malın veya &uuml;r&uuml;n&uuml;n usul&uuml;ne uygun kullanılmasın sebebiyle meydana gelen değişiklik ve bozulmalardan ALICI sorumlu değildir.</p>\r\n\r\n<p>7.2.6. Cayma hakkının kullanılması nedeniyle SATICI tarafından d&uuml;zenlenen kampanya limit tutarının altına d&uuml;ş&uuml;lmesi halinde kampanya kapsamında faydalanılan indirim miktarı iptal edilir.</p>\r\n\r\n<p>8. CAYMA HAKKI KULLANILAMAYACAK &Uuml;R&Uuml;NLER</p>\r\n\r\n<p>8.1. a) Fiyatı finansal piyasalardaki dalgalanmalara bağlı olarak değişen ve satıcı veya sağlayıcının kontrol&uuml;nde olmayan mal veya hizmetlere ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>b) T&uuml;keticinin istekleri veya kişisel ihtiya&ccedil;ları doğrultusunda hazırlanan mallara ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>c) &Ccedil;abuk bozulabilen veya son kullanma tarihi ge&ccedil;ebilecek malların teslimine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>&ccedil;) Tesliminden sonra ambalaj, bant, m&uuml;h&uuml;r, paket gibi koruyucu unsurları a&ccedil;ılmış olan mallardan; iadesi sağlık ve hijyen a&ccedil;ısından uygun olmayanların teslimine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>d) Tesliminden sonra başka &uuml;r&uuml;nlerle karışan ve doğası gereği ayrıştırılması m&uuml;mk&uuml;n olmayan mallara ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>e) Malın tesliminden sonra ambalaj, bant, m&uuml;h&uuml;r, paket gibi koruyucu unsurları a&ccedil;ılmış olması halinde maddi ortamda sunulan kitap, dijital i&ccedil;erik ve bilgisayar sarf malzemelerine, veri kaydedebilme ve veri depolama cihazlarına &nbsp;ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>f) Abonelik s&ouml;zleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi s&uuml;reli yayınların teslimine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>g) Belirli bir tarihte veya d&ouml;nemde yapılması gereken, konaklama, eşya taşıma, araba kiralama, yiyecek-i&ccedil;ecek tedariki ve eğlence veya dinlenme amacıyla yapılan boş zamanın değerlendirilmesine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>ğ) Elektronik ortamda anında ifa edilen hizmetler veya t&uuml;keticiye anında teslim edilen gayrimaddi mallara ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>h) Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile ifasına başlanan hizmetlere ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>Kozmetik ve kişisel bakım &uuml;r&uuml;nleri, i&ccedil; giyim &uuml;r&uuml;nleri, mayo, bikini, kitap, kopyalanabilir yazılım ve programlar, DVD, VCD, CD ve kasetler ile kırtasiye sarf malzemeleri (toner, kartuş, şerit vb.) iade edilebilmesi i&ccedil;in ambalajlarının a&ccedil;ılmamış, denenmemiş, bozulmamış ve kullanılmamış olmaları gerekir.</p>\r\n\r\n<p>8.2. SATICI şik&acirc;yet ve itirazları konusunda başvurularını, &nbsp;aşağıdaki kanunda belirtilen parasal sınırlar d&acirc;hilinde t&uuml;keticinin yerleşim yerinin bulunduğu &nbsp;veya t&uuml;ketici işleminin yapıldığı yerdeki &nbsp;t&uuml;ketici sorunları hakem heyetine veya t&uuml;ketici mahkemesine yapabilir. Parasal sınıra ilişkin bilgiler aşağıdadır:</p>\r\n\r\n<p>28/05/2014 tarihinden itibaren ge&ccedil;erli olmak &uuml;zere:</p>\r\n\r\n<p>a) 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun&rsquo;un 68. Maddesi gereği değeri 2.000,00 (ikibin) TL&rsquo;nin altında olan uyuşmazlıklarda il&ccedil;e t&uuml;ketici hakem heyetlerine,</p>\r\n\r\n<p>b) Değeri 3.000,00(&uuml;&ccedil;bin)TL&rsquo; nin altında bulunan uyuşmazlıklarda il t&uuml;ketici hakem heyetlerine,</p>\r\n\r\n<p>c) B&uuml;y&uuml;kşehir stat&uuml;s&uuml;nde bulunan illerde ise değeri 2.000,00 (ikibin) TL ile 3.000,00(&uuml;&ccedil;bin)TL&rsquo; &nbsp;arasındaki uyuşmazlıklarda il t&uuml;ketici hakem heyetlerine başvuru yapılmaktadır.</p>\r\n\r\n<p>İşbu S&ouml;zleşme ticari ama&ccedil;larla yapılmaktadır.</p>\r\n', '<p>MESAFELİ SATIŞ S&Ouml;ZLEŞMESİ</p>\r\n\r\n<p>1.TARAFLAR<br />\r\nİşbu S&ouml;zleşme aşağıdaki taraflar arasında aşağıda belirtilen h&uuml;k&uuml;m ve şartlar &ccedil;er&ccedil;evesinde imzalanmıştır.<br />\r\nA.ALICI ; (s&ouml;zleşmede bundan sonra ALICI olarak<br />\r\nanılacaktır)</p>\r\n\r\n<p>B.&lsquo;SATICI&rsquo; ; (s&ouml;zleşmede bundan sonra SATICI olarak anılacaktır)<br />\r\nAD- SOYAD: Barış AKAĞA&Ccedil;<br />\r\nADRES: S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Caddesi No:196 Kadık&ouml;y &ndash; İstanbul (S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Camii Karşısı)</p>\r\n\r\n<p>İş bu s&ouml;zleşmeyi kabul etmekle ALICI, s&ouml;zleşme konusu siparişi onayladığı takdirde sipariş konusu bedeli ve varsa kargo &uuml;creti,<br />\r\nvergi gibi belirtilen ek &uuml;cretleri &ouml;deme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; altına gireceğini ve bu konuda bilgilendirildiğini peşinen kabul eder.</p>\r\n\r\n<p>2.TANIMLAR<br />\r\nİşbu s&ouml;zleşmenin uygulanmasında ve yorumlanmasında aşağıda yazılı terimler karşılarındaki yazılı a&ccedil;ıklamaları ifade edeceklerdir.</p>\r\n\r\n<p>BAKAN: G&uuml;mr&uuml;k ve Ticaret Bakanı&rsquo;nı,<br />\r\nBAKANLIK: G&uuml;mr&uuml;k ve Ticaret Bakanlığı&rsquo;nı,<br />\r\nKANUN: 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun&rsquo;u,<br />\r\nY&Ouml;NETMELİK: Mesafeli S&ouml;zleşmeler Y&ouml;netmeliği&rsquo;ni<br />\r\n(RG:27.11.2014/29188)<br />\r\nHİZMET: Bir &uuml;cret veya menfaat karşılığında yapılan ya da yapılması taahh&uuml;t edilen mal sağlama dışındaki her t&uuml;rl&uuml; t&uuml;ketici işleminin konusunu ,<br />\r\nSATICI: Ticari veya mesleki faaliyetleri kapsamında t&uuml;keticiye mal sunan veya mal sunan adına veya hesabına hareket eden şirketi,<br />\r\nALICI: Bir mal veya hizmeti ticari veya mesleki olmayan ama&ccedil;larla edinen, kullanan veya yararlanan ger&ccedil;ek ya da t&uuml;zel kişiyi,<br />\r\nSİTE: SATICI&rsquo;ya ait internet sitesini,<br />\r\nSİPARİŞ VEREN: Bir mal veya hizmeti SATICI&rsquo;ya ait internet sitesi &uuml;zerinden talep eden ger&ccedil;ek ya da t&uuml;zel kişiyi,<br />\r\nTARAFLAR: SATICI ve ALICI&rsquo;yı,<br />\r\nS&Ouml;ZLEŞME: SATICI ve ALICI arasında akdedilen işbu s&ouml;zleşmeyi,<br />\r\nMAL: Alışverişe konu olan taşınır eşyayı ve elektronik ortamda kullanılmak &uuml;zere hazırlanan yazılım, ses, g&ouml;r&uuml;nt&uuml; ve benzeri gayri maddi malları ifade eder.</p>\r\n\r\n<p>3.KONU<br />\r\nİşbu S&ouml;zleşme, ALICI&rsquo;nın, SATICI&rsquo;ya ait internet sitesi &uuml;zerinden elektronik ortamda siparişini verdiği aşağıda nitelikleri ve satış fiyatı belirtilen &uuml;r&uuml;n&uuml;n satışı ve<br />\r\nteslimi ile ilgili olarak 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun ve Mesafeli S&ouml;zleşmelere Dair Y&ouml;netmelik h&uuml;k&uuml;mleri gereğince tarafların hak ve y&uuml;k&uuml;ml&uuml;l&uuml;klerini d&uuml;zenler.<br />\r\nListelenen ve sitede ilan edilen fiyatlar satış fiyatıdır. İlan edilen fiyatlar ve vaatler g&uuml;ncelleme yapılana ve değiştirilene kadar ge&ccedil;erlidir.<br />\r\nS&uuml;reli olarak ilan edilen fiyatlar ise belirtilen s&uuml;re sonuna kadar ge&ccedil;erlidir.</p>\r\n\r\n<p>4. SATICI BİLGİLERİ<br />\r\n&Uuml;nvanı: Barış AKAĞA&Ccedil;<br />\r\nAdres: S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Caddesi No:196 Kadık&ouml;y &ndash; İstanbul (S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Camii Karşısı)<br />\r\nTelefon: +90 216 345 83 84<br />\r\nEposta: info@cepmarket.com.tr</p>\r\n\r\n<p>5. ALICI BİLGİLERİ<br />\r\nKargo Alıcısı: M&uuml;şteri Adı<br />\r\nTeslimat Adresi:&nbsp;M&uuml;şteri Fatura Adresi</p>\r\n\r\n<p>6. SİPARİŞ VEREN KİŞİ BİLGİLERİ<br />\r\nAd/Soyad/Unvan: M&uuml;şteri Adı<br />\r\nAdres: M&uuml;şteri Fatura Adresi<br />\r\nTelefon: M&uuml;şteri Telefon No<br />\r\nEposta: M&uuml;şteri E-posta Adresi</p>\r\n\r\n<p>7. S&Ouml;ZLEŞME KONUSU &Uuml;R&Uuml;N/&Uuml;R&Uuml;NLER BİLGİLERİ<br />\r\n7.1. Malın /&Uuml;r&uuml;n/&Uuml;r&uuml;nlerin/ Hizmetin temel &ouml;zelliklerini (t&uuml;r&uuml;, miktarı, marka/modeli, rengi, adedi) SATICI&rsquo;ya ait<br />\r\ninternet sitesinde yayınlanmaktadır. Satıcı tarafından kampanya d&uuml;zenlenmiş ise ilgili &uuml;r&uuml;n&uuml;n temel &ouml;zelliklerini kampanya<br />\r\ns&uuml;resince inceleyebilirsiniz. Kampanya tarihine kadar ge&ccedil;erlidir. 7.2. Listelenen ve sitede ilan edilen fiyatlar satış fiyatıdır.<br />\r\nİlan edilen fiyatlar ve vaatler g&uuml;ncelleme yapılana ve değiştirilene kadar ge&ccedil;erlidir. S&uuml;reli olarak ilan edilen fiyatlar ise belirtilen s&uuml;re sonuna kadar ge&ccedil;erlidir.<br />\r\n7.3. S&ouml;zleşme konusu mal ya da hizmetin t&uuml;m vergiler d&acirc;hil satış fiyatı aşağıda g&ouml;sterilmiştir.</p>\r\n\r\n<p>Alışveriş Tutarı</p>\r\n\r\n<p>7.4. &Uuml;r&uuml;n sevkiyat masrafı olan kargo &uuml;creti SATICI tarafından &ouml;denecektir.</p>\r\n\r\n<p>8. FATURA BİLGİLERİ<br />\r\nAd/Soyad/Unvan: M&uuml;şteri&nbsp;Adı<br />\r\nAdres: M&uuml;şteri Fatura Adresi<br />\r\nTelefon: M&uuml;şteri Telefon No<br />\r\nEposta: M&uuml;şteri E-posta Adresi<br />\r\nFatura teslim : Fatura sipariş teslimatı sırasında fatura adresine sipariş ile birlikte teslim edilecektir.</p>\r\n\r\n<p>9. GENEL H&Uuml;K&Uuml;MLER<br />\r\n9.1. ALICI, SATICI&rsquo;ya ait internet sitesinde s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n temel nitelikleri, satış fiyatı ve &ouml;deme şekli ile<br />\r\nteslimata ilişkin &ouml;n bilgileri okuyup, bilgi sahibi olduğunu, elektronik ortamda gerekli teyidi verdiğini kabul, beyan ve taahh&uuml;t<br />\r\neder. ALICI&rsquo;nın; &Ouml;n Bilgilendirmeyi elektronik ortamda teyit etmesi, mesafeli satış s&ouml;zleşmesinin kurulmasından evvel, SATICI<br />\r\ntarafından ALICI&rsquo; ya verilmesi gereken adresi, siparişi verilen &uuml;r&uuml;nlere ait temel &ouml;zellikleri, &uuml;r&uuml;nlerin vergiler d&acirc;hil<br />\r\nfiyatını, &ouml;deme ve teslimat bilgilerini de doğru ve eksiksiz olarak edindiğini kabul, beyan ve taahh&uuml;t eder.<br />\r\n9.2. S&ouml;zleşme konusu her bir &uuml;r&uuml;n, 30 g&uuml;nl&uuml;k yasal s&uuml;reyi aşmamak kaydı ile ALICI&rsquo; nın yerleşim yeri uzaklığına<br />\r\nbağlı olarak internet sitesindeki &ouml;n bilgiler kısmında belirtilen s&uuml;re zarfında ALICI veya ALICI&rsquo;nın g&ouml;sterdiği adresteki kişi<br />\r\nve/veya kuruluşa teslim edilir. Bu s&uuml;re i&ccedil;inde &uuml;r&uuml;n&uuml;n ALICI&rsquo;ya teslim edilememesi durumunda, ALICI&rsquo;nın s&ouml;zleşmeyi feshetme<br />\r\nhakkı saklıdır.<br />\r\n9.3. SATICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml; eksiksiz, siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri, kullanım<br />\r\nkılavuzları işin gereği olan bilgi ve belgeler ile teslim etmeyi, her t&uuml;rl&uuml; ayıptan ar&icirc; olarak yasal mevzuat gereklerine g&ouml;re<br />\r\nsağlam, standartlara uygun bir şekilde işi doğruluk ve d&uuml;r&uuml;stl&uuml;k esasları d&acirc;hilinde ifa etmeyi, hizmet kalitesini<br />\r\nkoruyup y&uuml;kseltmeyi, işin ifası sırasında gerekli dikkat ve &ouml;zeni g&ouml;stermeyi, ihtiyat ve &ouml;ng&ouml;r&uuml; ile hareket etmeyi kabul,<br />\r\nbeyan ve taahh&uuml;t eder.<br />\r\n9.4. SATICI, s&ouml;zleşmeden doğan ifa y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n s&uuml;resi dolmadan ALICI&rsquo;yı bilgilendirmek ve a&ccedil;ık&ccedil;a onayını almak<br />\r\nsuretiyle eşit kalite ve fiyatta farklı bir &uuml;r&uuml;n tedarik edebilir.<br />\r\n9.5. SATICI, sipariş konusu &uuml;r&uuml;n veya hizmetin yerine getirilmesinin imk&acirc;nsızlaşması halinde s&ouml;zleşme konusu<br />\r\ny&uuml;k&uuml;ml&uuml;l&uuml;klerini yerine getiremezse, bu durumu, &ouml;ğrendiği tarihten itibaren 3 g&uuml;n i&ccedil;inde yazılı olarak t&uuml;keticiye<br />\r\nbildireceğini, 14 g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde toplam bedeli ALICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.<br />\r\n9.6. ALICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n teslimatı i&ccedil;in işbu S&ouml;zleşme&rsquo;yi elektronik ortamda teyit edeceğini, herhangi bir<br />\r\nnedenle s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin &ouml;denmemesi ve/veya banka kayıtlarında iptal edilmesi halinde, SATICI&rsquo;nın s&ouml;zleşme konusu<br />\r\n&uuml;r&uuml;n&uuml; teslim y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n sona ereceğini kabul, beyan ve taahh&uuml;t eder.<br />\r\n9.7. ALICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n ALICI veya ALICI&rsquo;nın g&ouml;sterdiği adresteki kişi ve/veya kuruluşa tesliminden sonra<br />\r\nALICI&rsquo;ya ait kredi kartının yetkisiz kişilerce haksız kullanılması sonucunda s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin ilgili<br />\r\nbanka veya finans kuruluşu tarafından SATICI&rsquo;ya &ouml;denmemesi halinde, ALICI S&ouml;zleşme konusu &uuml;r&uuml;n&uuml; 3 g&uuml;n i&ccedil;erisinde nakliye<br />\r\ngideri SATICI&rsquo;ya ait olacak şekilde SATICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.<br />\r\n9.8. SATICI, tarafların iradesi dışında gelişen, &ouml;nceden &ouml;ng&ouml;r&uuml;lemeyen ve tarafların bor&ccedil;larını yerine getirmesini<br />\r\nengelleyici ve/veya geciktirici hallerin oluşması gibi m&uuml;cbir sebepler halleri nedeni ile s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; s&uuml;resi i&ccedil;inde<br />\r\nteslim edemez ise, durumu ALICI&rsquo;ya bildireceğini kabul, beyan ve taahh&uuml;t eder. ALICI da siparişin iptal edilmesini, s&ouml;zleşme<br />\r\nkonusu &uuml;r&uuml;n&uuml;n varsa emsali ile değiştirilmesini ve/veya teslimat s&uuml;resinin engelleyici durumun ortadan kalkmasına kadar ertelenmesini<br />\r\nSATICI&rsquo;dan talep etme hakkını haizdir. ALICI tarafından siparişin iptal edilmesi halinde ALICI&rsquo;nın nakit ile yaptığı<br />\r\n&ouml;demelerde, &uuml;r&uuml;n tutarı 14 g&uuml;n i&ccedil;inde kendisine nakden ve defaten &ouml;denir. ALICI&rsquo;nın kredi kartı ile yaptığı &ouml;demelerde<br />\r\nise, &uuml;r&uuml;n tutarı, siparişin ALICI tarafından iptal edilmesinden sonra 14 g&uuml;n i&ccedil;erisinde ilgili bankaya iade edilir. ALICI, SATICI<br />\r\ntarafından kredi kartına iade edilen tutarın banka tarafından ALICI hesabına yansıtılmasına ilişkin ortalama s&uuml;recin 2 ile 3<br />\r\nhaftayı bulabileceğini, bu tutarın bankaya iadesinden sonra ALICI&rsquo;nın hesaplarına yansıması halinin tamamen banka işlem<br />\r\ns&uuml;reci ile ilgili olduğundan, ALICI, olası gecikmeler i&ccedil;in SATICI&rsquo;yı sorumlu tutamayacağını kabul, beyan ve taahh&uuml;t eder.<br />\r\n9.9. SATICININ, ALICI tarafından siteye kayıt formunda belirtilen veya daha sonra kendisi tarafından g&uuml;ncellenen adresi, e-posta<br />\r\nadresi, sabit ve mobil telefon hatları ve diğer iletişim bilgileri &uuml;zerinden mektup, e-posta, SMS, telefon g&ouml;r&uuml;şmesi ve diğer<br />\r\nyollarla iletişim, pazarlama, bildirim ve diğer ama&ccedil;larla ALICI&rsquo;ya ulaşma hakkı bulunmaktadır. ALICI, işbu s&ouml;zleşmeyi<br />\r\nkabul etmekle SATICI&rsquo;nın kendisine y&ouml;nelik yukarıda belirtilen iletişim faaliyetlerinde bulunabileceğini kabul ve beyan etmektedir.<br />\r\n9.10. ALICI, s&ouml;zleşme konusu mal/hizmeti teslim almadan &ouml;nce muayene edecek; ezik, kırık, ambalajı yırtılmış vb. hasarlı ve<br />\r\nayıplı mal/hizmeti kargo şirketinden teslim almayacaktır. Teslim alınan mal/hizmetin hasarsız ve sağlam olduğu kabul edilecektir.<br />\r\nTeslimden sonra mal/hizmetin &ouml;zenle korunması borcu, ALICI&rsquo;ya aittir. Cayma hakkı kullanılacaksa mal/hizmet kullanılmamalıdır.<br />\r\nFatura iade edilmelidir.<br />\r\n9.11. ALICI ile sipariş esnasında kullanılan kredi kartı hamilinin aynı kişi olmaması veya &uuml;r&uuml;n&uuml;n ALICI&rsquo;ya tesliminden evvel,<br />\r\nsiparişte kullanılan kredi kartına ilişkin g&uuml;venlik a&ccedil;ığı tespit edilmesi halinde, SATICI, kredi kartı hamiline ilişkin kimlik<br />\r\nve iletişim bilgilerini, siparişte kullanılan kredi kartının bir &ouml;nceki aya ait ekstresini yahut kart hamilinin bankasından kredi<br />\r\nkartının kendisine ait olduğuna ilişkin yazıyı ibraz etmesini ALICI&rsquo;dan talep edebilir. ALICI&rsquo;nın talebe konu bilgi/belgeleri<br />\r\ntemin etmesine kadar ge&ccedil;ecek s&uuml;rede sipariş dondurulacak olup, mezkur taleplerin 24 saat i&ccedil;erisinde karşılanmaması halinde ise<br />\r\nSATICI, siparişi iptal etme hakkını haizdir.<br />\r\n9.12. ALICI, SATICI&rsquo;ya ait internet sitesine &uuml;ye olurken verdiği kişisel ve diğer sair bilgilerin ger&ccedil;eğe uygun olduğunu,<br />\r\nSATICI&rsquo;nın bu bilgilerin ger&ccedil;eğe aykırılığı nedeniyle uğrayacağı t&uuml;m zararları, SATICI&rsquo;nın ilk bildirimi &uuml;zerine<br />\r\nderhal, nakden ve defaten tazmin edeceğini beyan ve taahh&uuml;t eder.<br />\r\n9.13. ALICI, SATICI&rsquo;ya ait internet sitesini kullanırken yasal<br />\r\nmevzuat h&uuml;k&uuml;mlerine riayet etmeyi ve bunları ihlal etmemeyi baştan kabul ve taahh&uuml;t eder. Aksi takdirde, doğacak t&uuml;m hukuki ve cezai<br />\r\ny&uuml;k&uuml;ml&uuml;l&uuml;kler tamamen ve m&uuml;nhasıran ALICI&rsquo;yı bağlayacaktır.<br />\r\n9.14. ALICI, SATICI&rsquo;ya ait internet sitesini hi&ccedil;bir şekilde kamu d&uuml;zenini bozucu, genel ahlaka aykırı, başkalarını rahatsız ve<br />\r\ntaciz edici şekilde, yasalara aykırı bir ama&ccedil; i&ccedil;in, başkalarının maddi ve manevi haklarına tecav&uuml;z edecek şekilde<br />\r\nkullanamaz. Ayrıca, &uuml;ye başkalarının hizmetleri kullanmasını &ouml;nleyici veya zorlaştırıcı faaliyet (spam, virus, truva atı, vb.) işlemlerde bulunamaz.<br />\r\n9.15. SATICI&rsquo;ya ait internet sitesinin &uuml;zerinden, SATICI&rsquo;nın kendi kontrol&uuml;nde olmayan ve/veya başkaca &uuml;&ccedil;&uuml;nc&uuml; kişilerin<br />\r\nsahip olduğu ve/veya işlettiği başka web sitelerine ve/veya başka i&ccedil;eriklere link verilebilir. Bu linkler ALICI&rsquo;ya y&ouml;nlenme<br />\r\nkolaylığı sağlamak amacıyla konmuş olup herhangi bir web sitesini veya o siteyi işleten kişiyi desteklememekte ve Link<br />\r\nverilen web sitesinin i&ccedil;erdiği bilgilere y&ouml;nelik herhangi bir garanti niteliği taşımamaktadır.<br />\r\n9.16. İşbu s&ouml;zleşme i&ccedil;erisinde sayılan maddelerden bir ya da birka&ccedil;ını ihlal eden &uuml;ye işbu ihlal nedeniyle cezai ve hukuki<br />\r\nolarak şahsen sorumlu olup, SATICI&rsquo;yı bu ihlallerin hukuki ve cezai sonu&ccedil;larından ari tutacaktır. Ayrıca; işbu ihlal nedeniyle,<br />\r\nolayın hukuk alanına intikal ettirilmesi halinde, SATICI&rsquo;nın &uuml;yeye karşı &uuml;yelik s&ouml;zleşmesine uyulmamasından dolayı tazminat talebinde bulunma hakkı saklıdır.</p>\r\n\r\n<p>10. CAYMA HAKKI<br />\r\n10.1. ALICI; mesafeli s&ouml;zleşmenin mal satışına ilişkin olması durumunda, &uuml;r&uuml;n&uuml;n kendisine veya g&ouml;sterdiği adresteki<br />\r\nkişi/kuruluşa teslim tarihinden itibaren 14 (on d&ouml;rt) g&uuml;n i&ccedil;erisinde, SATICI&rsquo;ya bildirmek şartıyla hi&ccedil;bir hukuki ve cezai<br />\r\nsorumluluk &uuml;stlenmeksizin ve hi&ccedil;bir gerek&ccedil;e g&ouml;stermeksizin malı reddederek s&ouml;zleşmeden cayma hakkını kullanabilir. Hizmet sunumuna<br />\r\nilişkin mesafeli s&ouml;zleşmelerde ise, bu s&uuml;re s&ouml;zleşmenin imzalandığı tarihten itibaren başlar. Cayma hakkı s&uuml;resi sona<br />\r\nermeden &ouml;nce, t&uuml;keticinin onayı ile hizmetin ifasına başlanan hizmet s&ouml;zleşmelerinde cayma hakkı kullanılamaz. Cayma hakkının<br />\r\nkullanımından kaynaklanan masraflar SATICI&rsquo; ya aittir. ALICI, iş bu s&ouml;zleşmeyi kabul etmekle, cayma hakkı konusunda<br />\r\nbilgilendirildiğini peşinen kabul eder.<br />\r\n10.2. Cayma hakkının kullanılması i&ccedil;in 14 (ond&ouml;rt) g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde SATICI&rsquo; ya iadeli taahh&uuml;tl&uuml; posta, faks veya<br />\r\neposta ile yazılı bildirimde bulunulması ve &uuml;r&uuml;n&uuml;n işbu s&ouml;zleşmede d&uuml;zenlenen Cayma Hakkı Kullanılamayacak<br />\r\n&Uuml;r&uuml;nler h&uuml;k&uuml;mleri &ccedil;er&ccedil;evesinde kullanılmamış olması şarttır. Bu hakkın kullanılması halinde,<br />\r\na) 3. kişiye veya ALICI&rsquo; ya teslim edilen &uuml;r&uuml;n&uuml;n faturası,<br />\r\n(İade edilmek istenen &uuml;r&uuml;n&uuml;n faturası kurumsal ise, iade ederken kurumun d&uuml;zenlemiş olduğu iade faturası ile birlikte g&ouml;nderilmesi<br />\r\ngerekmektedir. Faturası kurumlar adına d&uuml;zenlenen sipariş iadeleri İADE FATURASI kesilmediği takdirde tamamlanamayacaktır.)<br />\r\nb) İade formu,<br />\r\nc) İade edilecek &uuml;r&uuml;nlerin kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir.<br />\r\nd) SATICI, cayma bildiriminin kendisine ulaşmasından itibaren en ge&ccedil; 10 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde toplam bedeli ve ALICI&rsquo;yı bor&ccedil;<br />\r\naltına sokan belgeleri ALICI&rsquo; ya iade etmek ve 20 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde malı iade almakla y&uuml;k&uuml;ml&uuml;d&uuml;r.<br />\r\ne) ALICI&rsquo; nın kusurundan kaynaklanan bir nedenle malın değerinde bir azalma olursa veya iade imk&acirc;nsızlaşırsa ALICI kusuru oranında<br />\r\nSATICI&rsquo; nın zararlarını tazmin etmekle y&uuml;k&uuml;ml&uuml;d&uuml;r. Ancak cayma hakkı s&uuml;resi i&ccedil;inde malın veya &uuml;r&uuml;n&uuml;n usul&uuml;ne uygun<br />\r\nkullanılması sebebiyle meydana gelen değişiklik ve bozulmalardan ALICI sorumlu değildir.<br />\r\nf) Cayma hakkının kullanılması nedeniyle SATICI tarafından d&uuml;zenlenen kampanya limit tutarının altına d&uuml;ş&uuml;lmesi halinde<br />\r\nkampanya kapsamında faydalanılan indirim miktarı iptal edilir.</p>\r\n\r\n<p>11. CAYMA HAKKI KULLANILAMAYACAK &Uuml;R&Uuml;NLER ALICI&rsquo;nın isteği veya a&ccedil;ık&ccedil;a kişisel ihtiya&ccedil;ları<br />\r\ndoğrultusunda hazırlanan ve geri g&ouml;nderilmeye m&uuml;sait olmayan, i&ccedil; giyim alt par&ccedil;aları, mayo ve bikini altları, makyaj malzemeleri,<br />\r\ntek kullanımlık &uuml;r&uuml;nler, &ccedil;abuk bozulma tehlikesi olan veya son kullanma tarihi ge&ccedil;me ihtimali olan mallar, ALICI&rsquo;ya teslim<br />\r\nedilmesinin ardından ALICI tarafından ambalajı a&ccedil;ıldığı takdirde iade edilmesi sağlık ve hijyen a&ccedil;ısından uygun olmayan<br />\r\n&uuml;r&uuml;nler, teslim edildikten sonra başka &uuml;r&uuml;nlerle karışan ve doğası gereği ayrıştırılması m&uuml;mk&uuml;n olmayan &uuml;r&uuml;nler,<br />\r\nAbonelik s&ouml;zleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi s&uuml;reli yayınlara ilişkin mallar, Elektronik ortamda<br />\r\nanında ifa edilen hizmetler veya t&uuml;keticiye anında teslim edilen gayrimaddi mallar, ile ses veya g&ouml;r&uuml;nt&uuml; kayıtlarının, kitap,<br />\r\ndijital i&ccedil;erik, yazılım programlarının, veri kaydedebilme ve veri depolama cihazlarının, bilgisayar sarf malzemelerinin, ambalajının<br />\r\nALICI tarafından a&ccedil;ılmış olması halinde iadesi Y&ouml;netmelik gereği m&uuml;mk&uuml;n değildir. Ayrıca Cayma hakkı s&uuml;resi sona ermeden<br />\r\n&ouml;nce, t&uuml;keticinin onayı ile ifasına başlanan hizmetlere ilişkin cayma hakkının kullanılması da Y&ouml;netmelik gereği m&uuml;mk&uuml;n değildir.<br />\r\nKozmetik ve kişisel bakım &uuml;r&uuml;nleri, i&ccedil; giyim &uuml;r&uuml;nleri, mayo, bikini, kitap, kopyalanabilir yazılım ve programlar, DVD, VCD, CD ve<br />\r\nkasetler ile kırtasiye sarf malzemeleri (toner, kartuş, şerit vb.) iade edilebilmesi i&ccedil;in ambalajlarının a&ccedil;ılmamış, denenmemiş,<br />\r\nbozulmamış ve kullanılmamış olmaları gerekir.</p>\r\n\r\n<p>12. TEMERR&Uuml;T HALİ VE HUKUKİ SONU&Ccedil;LARI ALICI, &ouml;deme işlemlerini kredi kartı ile yaptığı durumda<br />\r\ntemerr&uuml;de d&uuml;şt&uuml;ğ&uuml; takdirde, kart sahibi banka ile arasındaki kredi kartı s&ouml;zleşmesi &ccedil;er&ccedil;evesinde faiz &ouml;deyeceğini ve bankaya<br />\r\nkarşı sorumlu olacağını kabul, beyan ve taahh&uuml;t eder. Bu durumda ilgili banka hukuki yollara başvurabilir; doğacak masrafları ve<br />\r\nvek&acirc;let &uuml;cretini ALICI&rsquo;dan talep edebilir ve her koşulda ALICI&rsquo;nın borcundan dolayı temerr&uuml;de d&uuml;şmesi halinde, ALICI,<br />\r\nborcun gecikmeli ifasından dolayı SATICI&rsquo;nın uğradığı zarar ve ziyanını &ouml;deyeceğini kabul, beyan ve taahh&uuml;t eder</p>\r\n\r\n<p>13. YETKİLİ MAHKEME<br />\r\nİşbu s&ouml;zleşmeden doğan uyuşmazlıklarda şikayet ve itirazlar, aşağıdaki kanunda belirtilen parasal sınırlar d&acirc;hilinde<br />\r\nt&uuml;keticinin yerleşim yerinin bulunduğu veya t&uuml;ketici işleminin yapıldığı yerdeki t&uuml;ketici sorunları hakem heyetine veya<br />\r\nt&uuml;ketici mahkemesine yapılacaktır. Parasal sınıra ilişkin bilgiler aşağıdadır:<br />\r\n28/05/2014 tarihinden itibaren ge&ccedil;erli olmak &uuml;zere: a) 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun&rsquo;un 68.<br />\r\nMaddesi gereği değeri 2.000,00 (ikibin) TL&rsquo;nin altında olan uyuşmazlıklarda il&ccedil;e t&uuml;ketici hakem heyetlerine,<br />\r\nb) Değeri 3.000,00(&uuml;&ccedil;bin)TL&rsquo; nin altında bulunan uyuşmazlıklarda il t&uuml;ketici hakem heyetlerine,<br />\r\nc) B&uuml;y&uuml;kşehir stat&uuml;s&uuml;nde bulunan illerde ise değeri 2.000,00 (ikibin) TL ile 3.000,00(&uuml;&ccedil;bin)TL&rsquo; arasındaki uyuşmazlıklarda<br />\r\nil t&uuml;ketici hakem heyetlerine başvuru yapılmaktadır.<br />\r\nİşbu S&ouml;zleşme ticari ama&ccedil;larla yapılmaktadır.</p>\r\n\r\n<p>14. Y&Uuml;R&Uuml;RL&Uuml;K<br />\r\nALICI, Site &uuml;zerinden verdiği siparişe ait &ouml;demeyi ger&ccedil;ekleştirdiğinde işbu s&ouml;zleşmenin t&uuml;m şartlarını kabul etmiş sayılır.<br />\r\nSATICI, siparişin ger&ccedil;ekleşmesi &ouml;ncesinde işbu s&ouml;zleşmenin sitede ALICI tarafından okunup kabul edildiğine dair<br />\r\nonay alacak şekilde gerekli yazılımsal d&uuml;zenlemeleri yapmakla y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>\r\n', 'face', 'insta', 'twit', 41.025607, 29.010678);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gununfirsati`
--

CREATE TABLE `gununfirsati` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `kampfiyat` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gununfirsati`
--

INSERT INTO `gununfirsati` (`id`, `urun_id`, `kampfiyat`) VALUES
(2, 1, '2300.00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `istek_listesi`
--

CREATE TABLE `istek_listesi` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `istek_listesi`
--

INSERT INTO `istek_listesi` (`id`, `kullanici_id`, `urun_id`) VALUES
(2, 3, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kampanyaurun`
--

CREATE TABLE `kampanyaurun` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `firsat_resmi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `madde1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `madde2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `madde3` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `madde4` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kampanyaurun`
--

INSERT INTO `kampanyaurun` (`id`, `urun_id`, `firsat_resmi`, `madde1`, `madde2`, `madde3`, `madde4`) VALUES
(1, 45, '1.jpg', 'F/P Ürünü', '3GB RAM', '13MP Kamera', '5.2" Ekran');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(100) NOT NULL,
  `kat_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kat_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kat_keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `kat_adi`, `kat_aciklama`, `kat_keywords`) VALUES
(3, 'Cep Telefonu', 'cep telefonu satışımızlarımız vardır.', 'mobil,telefon,cep,tel,android,iphone'),
(4, 'Tablet', 'Büyük ekranlı cihazlar daha geniş kullanım alanı', 'tablet,mobil,android,ipad,minipc'),
(5, 'Kılıflar', 'Silikon Kılıflar , Korumalı Kılıflar , Aynalı Kılıflar , Bumper Kılıflar Size özel Yüzlerce özel Kılıf Binlerce Renkli Model Cepmarket Mobile Aksesuar Dünyası', 'Silikon Kılıflar , Korumalı Kılıflar , Aynalı Kılıflar , Bumper Kılıflar'),
(6, 'Kulaklıklar', 'Kablolu kulaklıklar , Kablosuz kulaklıklar , iphone samsung lg htc sony tüm markalar için orjinal kulaklık aynı gün ücretsiz kargo ile', 'Kablolu kulaklıklar , Kablosuz kulaklıklar'),
(7, 'Ekran Koruyucular', 'Ekran Koruyucular , her marka cihaz & modele uygun kırılmaz camlar nano glaslar şeffaf ve mat koruma setleri şimdi çok uygun fiyatlarla!', 'nano glaslar, şeffaf,mat, koruma setleri');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `adsoy` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `postkod` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `sifirlama_key` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adsoy`, `email`, `sifre`, `yetki`, `durum`, `tarih`, `adres`, `sehir`, `ilce`, `postkod`, `tel`, `sifirlama_key`) VALUES
(1, 'Misafir Kullanıcı', '-', '-', 'Üye', 'Beklemede', '2017-06-30 08:20:06', '-', '-', '-', '-', '-', ''),
(3, 'Mustafa Mert Gün ', 'm.mertgn@gmail.com', '123', 'Admin', 'Onayli', '2017-07-06 00:13:49', '', '', '', '78050', '05375136356', '5uWxvi9eXTdpsjDq'),
(12, 'Samed Gulculer', 'iverson@hotmail.com', '123', 'Üye', 'Onaylı', '2017-06-23 22:51:30', 'Bandırma', 'Balıkesir', 'Bandırma', '78050', '05375136356', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

CREATE TABLE `mesaj` (
  `id` int(20) NOT NULL,
  `adsoy` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `yorum` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`id`, `adsoy`, `email`, `tel`, `konu`, `mesaj`, `durum`, `tarih`, `yorum`) VALUES
(13, 'Mert Gün', 'm.mertgn@gmail.com', '05375136356', 'İlk Mesaj', 'Merhaba samed nasılsın', 1, '2017-06-23 14:08:35', ''),
(18, 'Mert Günn', 'cosonic88@gmail.com', 'deneme', 'deneme', '1234', 0, '2017-06-23 20:28:04', ''),
(19, 'Mert Gün1', 'cosonic88@gmail.com', '0555555555', 'deneme', 'asdasdas', 0, '2017-06-23 20:30:27', ''),
(20, 'Mert Gün1', 'm.mertgn@gmail.com', '0555555555', 'asdfn', 'asdasdsadsa', 0, '2017-06-23 20:38:25', ''),
(21, 'Mert Gün1', 'm.mertgn@gmail.com', '053751363569', 'asdfn', 'qwertyuıo', 0, '2017-06-23 20:40:03', ''),
(22, 'Mert Gün1', 'm.mertgn@gmail.com', '053751363569', 'deneme', '1234567890*-', 0, '2017-06-23 20:40:46', ''),
(23, 'Mert Gün1', 'm.mertgn@gmail.com', '0555555555', 'deneme', '21323123', 0, '2017-06-23 20:41:31', ''),
(24, 'Mert Gün1', 'm.mertgn@gmail.com', '053751363569', 'deneme', '1321321', 0, '2017-06-23 20:41:43', ''),
(25, 'Mert Gün', 'm.mertgn@gmail.com', '053751363569', 'deneme', '123456789', 0, '2017-06-23 20:43:19', ''),
(26, 'Mert Gün1', 'm.mertgn@gmail.com', '053751363569', 'deneme', '12312312', 0, '2017-06-23 20:44:19', ''),
(27, 'Samed Gulculer', 'mmert99@hotmail.com', '0555555555', 'deneme', '12321231', 0, '2017-06-23 20:46:15', ''),
(28, 'Samed Gulculer', 'm.mertgn@gmail.com', '0555555555', 'deneme', '12312312', 0, '2017-06-23 20:46:45', ''),
(29, 'Samed Gulculer', 'm.mertgn@gmail.com', '053751363569', 'deneme', '12231123123123', 0, '2017-06-23 20:47:44', ''),
(30, 'Mert Gün1', 'm.mertgn@gmail.com', '053751363569', 'deneme', 'zxczxcxzc', 0, '2017-06-23 20:49:08', ''),
(31, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'deneme', 0, '2017-08-01 20:50:42', ''),
(32, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:00', ''),
(33, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:10', ''),
(34, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:13', ''),
(35, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:25', ''),
(36, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:28', ''),
(37, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:29', ''),
(38, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:30', ''),
(39, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:30', ''),
(40, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:31', ''),
(41, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:32', ''),
(42, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:33', ''),
(43, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:52:35', ''),
(44, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdsada', 0, '2017-08-01 20:53:48', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `resim` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`id`, `urun_id`, `resim`) VALUES
(79, 1, '9487600844850.jpg'),
(80, 1, '9487600713778.jpg'),
(81, 1, '9487600681010.jpg'),
(82, 45, 'Telefon_7945428.jpg'),
(83, 45, 'Telefon_7945429.jpg'),
(84, 45, 'Telefon_7945430.jpg'),
(85, 46, '278721982_tn50_0.jpg'),
(86, 46, '278721982_tn50_1.jpg'),
(87, 46, '278721982_tn50_R_399057_0.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepetteki_urunler`
--

CREATE TABLE `sepetteki_urunler` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IP` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `tutar` decimal(7,2) NOT NULL,
  `odemedurumu` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `siparisdurumu` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adsoy` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `postkod` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `musteri_id`, `tarih`, `IP`, `tutar`, `odemedurumu`, `siparisdurumu`, `adres`, `ilce`, `sehir`, `tel`, `adsoy`, `postkod`) VALUES
(1, 3, '2017-07-06 00:37:31', '', '2500.00', 'Onaylı', 'Onaylı', 'Doğancılar Caddesi', 'Üsküdar', 'İstanbul', '05375136356', 'Mustafa Gün', '78050'),
(10, 3, '2017-07-06 09:29:51', '::1', '5752.99', 'Beklemede', 'Onaylı', '1248499', 'Bandırma', 'Balıkesir', '05375136356', 'Samed Gülcüler', '78050'),
(24, 12, '2017-07-06 10:43:29', '::1', '3553.99', 'Beklemede', 'Onaylı', 'asd', 'Bandırma', 'Balıkesir', '05375136356', 'Samed Gulculer', '78050');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_urunler`
--

CREATE TABLE `siparis_urunler` (
  `id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `miktar` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `siparis_urunler`
--

INSERT INTO `siparis_urunler` (`id`, `musteri_id`, `siparis_id`, `urun_id`, `miktar`, `tarih`) VALUES
(7, 3, 1, 46, 1, '2017-07-06 00:33:55'),
(8, 3, 10, 46, 0, '2017-07-06 09:29:51'),
(9, 3, 10, 1, 0, '2017-07-06 09:29:51'),
(14, 12, 24, 1, 0, '2017-07-06 10:43:29'),
(15, 12, 24, 45, 0, '2017-07-06 10:43:29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklamasi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `resim`, `kategori_id`, `urun_id`, `adi`, `aciklamasi`) VALUES
(10, '12.jpg', 0, 1, 'Değişen tek şey, her şey.', '4.7" Dokunmatik Ekran - 4K Video Çekerken 12 MP Fotoğraf Çekme - 3D Touch Özelliğine Sahip Retina HD Ekran'),
(11, '13.jpg', 0, 46, 'Zirvedeki Yerinizi Alın!', 'Bir kameradan daha fazlası Yeni Galaxy S8''i ilk deneyimleyecek kişilerden biri olun!'),
(12, 'p9-lite-2017-premier-silikon-2.jpg', 5, 0, 'Silikon Kılıflarda Kampanya', 'Kılıf + Cam Ücretsiz Kargo');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE `sorular` (
  `id` int(11) NOT NULL,
  `soru` text COLLATE utf8_turkish_ci NOT NULL,
  `cevap` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`id`, `soru`, `cevap`) VALUES
(1, '<p><span style="color:#e74c3c"><strong><span style="font-size:16px">Kargo S&uuml;resi</span></strong></span></p>\r\n', '<p><span style="color:#f39c12"><span style="font-size:16px"><strong>T&uuml;m T&uuml;rkiye&rsquo;ye kargo aynı g&uuml;n &Uuml;CRETSİZ olarak yapılmaktadır</strong></span></span></p>\n\n<p><span style="color:#f39c12"><span style="font-size:16px"><strong>Kargo Firması olarak Yurti&ccedil;i Kargo ile &ccedil;alışmaktayız.</strong></span></span></p>\n'),
(2, '<p><span style="color:#e74c3c"><strong><span style="font-size:16px">Kusurlu &Uuml;r&uuml;n</span></strong></span></p>\r\n', '<p><span style="font-size:16px"><strong><span style="color:#f39c12">Kargodan gelen &uuml;r&uuml;nlerde oluşabilecek sorunlar ve olası hatalardan dolayı kullanılamayacak halde olan &uuml;r&uuml;nlerinizi değişim i&ccedil;in bizlere g&ouml;nderebilirsiniz.</span></strong></span></p>\r\n'),
(3, '<p><span style="color:#e74c3c"><strong><span style="font-size:16px">Kolay &Ouml;deme</span></strong></span></p>\r\n', '<p><span style="font-size:16px"><span style="color:#f39c12"><strong>&Ouml;demelerinizi dilerseniz Kredi Kartı&nbsp;ile &ouml;deyebilir, havale eft yapabilir, şubemizden nakit olarak&rsquo;ta &ouml;deyebilirsiniz.</strong></span></span></p>\r\n'),
(4, '<p><span style="color:#e74c3c"><strong><span style="font-size:16px">Kargo &Uuml;creti</span></strong></span></p>\r\n', '<p><span style="font-size:16px"><span style="color:#f39c12"><strong>T&uuml;m T&uuml;rkiye&rsquo;ye kargo &Uuml;CRETSİZ olarak&nbsp;g&ouml;nderilmektedir.</strong></span></span></p>\r\n'),
(5, '<p><span style="color:#e74c3c"><span style="font-size:16px"><strong>&Uuml;r&uuml;n Değişimi</strong></span></span></p>\r\n', '<p><span style="font-size:16px"><span style="color:#f39c12"><strong>Yanlış yada kusurlu &uuml;r&uuml;nde değişim yapılabilmektedir. Değişimlerde kargo adresi olarak</strong></span></span></p>\r\n\r\n<p><span style="font-size:16px"><span style="color:#f39c12"><strong>( 100. Yıl Mahallesi , Merkez/Karab&uuml;k) Adresini Kullanabilirsiniz.</strong></span></span></p>\r\n\r\n<p><span style="font-size:16px"><span style="color:#f39c12"><strong>Bizlere mail adresimizden de ulaşabilirsiniz.</strong></span></span></p>\r\n'),
(6, '<p><span style="color:#e74c3c"><span style="font-size:16px"><strong>Taksitli &Ouml;deme</strong></span></span></p>\r\n', '<p><span style="font-size:16px"><span style="color:#f39c12"><strong>&Ouml;demelerinizi dilerseniz Kredi Kartı&nbsp;ile&nbsp;taksitli yapabilir dilerseniz tek &ccedil;ekim yapabilirsiniz.</strong></span></span></p>\r\n\r\n<p><span style="font-size:16px"><span style="color:#f39c12"><strong>Kredi kartına 12 taksite kadar taksit yapılabilmektedir.</strong></span></span></p>\r\n'),
(7, '<p><span style="color:#e74c3c"><span style="font-size:16px"><strong>Hesap Bilgileri</strong></span></span></p>\r\n', '<p><span style="font-size:16px"><span style="color:#f39c12"><strong>Hesap bilgileri alışverişi tamamladığınız fatura adresinde belirtilmektedir.</strong></span></span></p>\r\n\r\n<p><span style="font-size:16px"><span style="color:#f39c12"><strong>Havale ile yapılan alışverişlerde e-posta adresinizi doğru girdiğinizden emin olun.</strong></span></span></p>\r\n'),
(8, '<p><strong><span style="color:#e74c3c"><span style="font-size:16px">&Uuml;r&uuml;n İadesi</span></span></strong></p>\r\n', '<p><span style="font-size:16px"><strong><span style="color:#f39c12">Kusurlu arızalı yada&nbsp;yanlış &uuml;r&uuml;nler i&ccedil;in iade yapabilirsiniz.</span></strong></span></p>\r\n\r\n<p><span style="font-size:16px"><strong><span style="color:#f39c12">İadelerde kargo adresi olarak ( 100. Yıl Mahallesi , Merkez/Karab&uuml;k) Adresini Kullanabilirsiniz.</span></strong></span></p>\r\n\r\n<p><span style="font-size:16px"><strong><span style="color:#f39c12">Bizlere mail adresimizden de ulaşabilirsiniz.</span></strong></span></p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `adi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `altKatId` int(11) NOT NULL,
  `katId` int(11) NOT NULL,
  `miktar` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `e_fiyat` decimal(7,2) NOT NULL,
  `y_fiyat` decimal(7,2) NOT NULL,
  `satis_sayisi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `uzunaciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `puan` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `oysayisi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `adi`, `altKatId`, `katId`, `miktar`, `e_fiyat`, `y_fiyat`, `satis_sayisi`, `resim`, `uzunaciklama`, `aciklama`, `keywords`, `tarih`, `puan`, `oysayisi`) VALUES
(1, 'Apple iPhone 6S 32 GB (Apple Türkiye Garantili)', 7, 3, '10', '3204.90', '2300.00', '250', '9487600844850.jpg', '<h2>Apple iPhone 6S &Ouml;zellikleri</h2>\r\n\r\n<h2>Bu &uuml;r&uuml;n Apple T&uuml;rkiye Firmasının Garantisi altındadır. &ldquo;Apple T&uuml;rkiye Garantili&rdquo; &uuml;r&uuml;nlerde 2 yıl s&uuml;resince, T&uuml;rkiye geneline yayılmış KVK , Teleservis ve diğer t&uuml;m Apple yetkili servislerinden garanti kapsamı dahilinde &uuml;cretsiz faydalanabilirsiniz. 2 yıl sonrasında ise, Apple yetkili servislerinden &uuml;cretli bir şekilde faydalanmaya devam edebilirsiniz. Telefonunuzda oluşan herhangi bir arıza durumunda t&uuml;m AppleT&uuml;rkiye servis noktalarından hizmet alabilirsiniz. Apple T&uuml;rkiye yetkili servis bilgilerine Apple M&uuml;şteri Hizmetleri &uuml;zerinden veya aşağıda yer alan adresten ulaşabilirsiniz. https://support.apple.com/tr-tr/repair</h2>\r\n\r\n<p><img src="http://images.hepsiburada.net/assets/Telefon/ProductDesc/akilli-telefon-apple-iphone-6s-6s-plus-html1.jpg" /></p>\r\n\r\n<h3>Artık t&uuml;m Kurallar Değişiyor</h3>\r\n\r\n<p>Teknolojinin sunduğu t&uuml;m imkanlardan yararlanılarak tasarlanan&nbsp;<strong>Apple iPhone 6S&nbsp;</strong>, hem işlevsel hem de g&ouml;rsel a&ccedil;ıdan ayrıcalıklı bir akıllı telefona sahip olmanıza olanak tanıyor. Sağladığı &uuml;st d&uuml;zey performansı, yenilik&ccedil;i tasarımı, anı ger&ccedil;ek&ccedil;i pozlarla yakalayan gelişmiş kamerası, t&uuml;m işlemlerinizi kolayca yapmanızı sağlayan dokunmatik 3D Touch &ouml;zellikleri ile Apple&nbsp;<strong>Apple iPhone 6S modelleri&nbsp;</strong>, benzeri telefonlar arasındaki farkını ortaya koyuyor. Apple&nbsp;<strong>Apple iPhone 6S &ouml;zellikleri&nbsp;</strong>arasında dikkat &ccedil;eken ve kullanıcıları tarafından olduk&ccedil;a beğenilen 12 MP gelişmiş iSight kamerası, 1080p HD kalitedeki videolara nazaran d&ouml;rt kata kadar y&uuml;ksek &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;k sağlayan 4K video kaydetme &ouml;zelliği sunuyor. 5 MP FaceTime HD &ouml;n kamerası ile de hem &quot;selfie&quot; &ccedil;ekimlerinizde hem de g&ouml;r&uuml;nt&uuml;l&uuml; sohbetlerde otoportre kalitesinde g&ouml;r&uuml;n&uuml;m sağlıyor. iPhone 6S i&ccedil;in geliştirilen Live Photos &ouml;zelliği, fotoğraf &ccedil;ekimi &ouml;ncesi ve sonrası hareketlerinizi ve sesleri kaydederek tek bir dokunuşla hareketli g&ouml;r&uuml;nt&uuml;ler elde etmenize imkan veriyor.</p>\r\n\r\n<h3>Teknolojide Bir Sonraki Noktaya Ge&ccedil;in</h3>\r\n\r\n<p>Multi-Touch &ouml;zelliğini hayatımıza sokan iPhone, yeni nesil 3D Touch &ouml;zelliği ile de teknolojiyi farklı bir deneyimle yaşamanıza olanak sağlıyor. Ekrana basarken uyguladığınız kuvveti algılayarak ekran &uuml;zerindeki her şeyi &ccedil;ok daha hızlı ve basit&ccedil;e yapmanıza imkan sunuyor. Apple iPhone 6S &ouml;zellikleri arasında yepyeni bir deneyim sunan Taptic Engine, sağladığı k&uuml;&ccedil;&uuml;k dokunuşlarla sizi ger&ccedil;ek zamanlı geri bildirimlerle cevaplandırıyor. Her bir par&ccedil;asında inovasyon barındıran Apple iPhone 6S fiyatı ile de paranızın tam karşılığını almanıza imkan veriyor. Tasarımındaki k&ouml;kl&uuml; yeniliklerle estetiğin yanında işlevselliği ve dayanıklılığı hedef edinen Apple iPhone 6S modelleri, 7000 serisi al&uuml;minyumdan &uuml;retiliyor. Havacılık end&uuml;strisinde de kullanılan bu alaşımla dayanıklılığı artırılan&nbsp;<strong>iPhone 6S&nbsp;</strong>; uzay grisi, g&uuml;m&uuml;ş, altın rengi ve roze altın rengi se&ccedil;enekleri ile her beğeniye uygun tercihler sunuyor. Akıllı telefonlarda kullanılan camlar arasında en g&uuml;&ccedil;l&uuml; ve en dayanıklı olma &ouml;zelliğine sahip cam y&uuml;zey kısımları, telefonunuzun uzun &ouml;m&uuml;rl&uuml; olmasına b&uuml;y&uuml;k destek sağlıyor.</p>\r\n\r\n<p><img src="http://images.hepsiburada.net/assets/Telefon/ProductDesc/akilli-telefon-apple-iphone-6s-6s-plus-html2.jpg" /></p>\r\n\r\n<p><img src="http://images.hepsiburada.net/assets/Telefon/ProductDesc/akilli-telefon-apple-iphone-6s-6s-plus-html3.jpg" /></p>\r\n\r\n<h3>Ger&ccedil;ek Fotoğraflar, Daha Canlı Anılar</h3>\r\n\r\n<p>Akıllı telefonlar i&ccedil;indeki en gelişmiş &ccedil;ipe sahip olan Apple iPhone 6S, &ouml;zel olarak tasarlanan 64 bit A9 &ccedil;ipten aldığı g&uuml;&ccedil;le masa&uuml;st&uuml; bilgisayarların sağladığı oranda y&uuml;ksek performans sunuyor. Yoğun grafik i&ccedil;eren en favori oyunların ve performans isteyen uygulamaların %70 daha hızlı CPU ve %90 daha hızlı GPU ile keyfine varılmasını benzersiz bir performans ile destekliyor. IOS 9 işletim sisteminin t&uuml;m artılarından yaralanacağınız benzersiz bir teknoloji sunuyor. Online oyunların, uygulamaların ve İnternet&#39;te s&ouml;rf keyfinin kesintisizce tadına varılmasını sağlayan ultra hızlı veri bağlantısını destekleyen Apple iPhone 6S modelleri, olduk&ccedil;a hızlı ve g&uuml;venilir WiFi bağlantısı sağlıyor. iPhone kullanmanın ayrıcalığını hissettiren gelişmiş parmak izi sens&ouml;r&uuml;, telefonun kilidini a&ccedil;manızı olduk&ccedil;a kolay h&acirc;le getiriyor.</p>\r\n\r\n<h3>En Gelişmiş Teknoloji En İyi Akıllı Telefonda</h3>\r\n\r\n<p>3G bağlantıda 240 saate kadar bekleme ve 14 saate kadar konuşma s&uuml;resine sahip olan Apple iPhone 6S, 16 milyon ekran renk &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;ğ&uuml; ile 4,7 in&ccedil; ekranından hayatın t&uuml;m renklerini g&ouml;r&uuml;nt&uuml;lemenize imkan sağlıyor. 4,5 G uyumlu telefon, akıllı telefona dair bildiğiniz t&uuml;m kuralları değiştirerek sizi teknolojinin bir sonraki noktasına taşıyor. G&uuml;ndelik hayatınızın hızlı akışına yetişerek sizi asla yarı yolda bırakmayan Apple iPhone 6S &ouml;zellikleri, hareketli yaşamayı tarz edinen kullanıcılar i&ccedil;in ideal &ccedil;&ouml;z&uuml;m sağlıyor. 1715 mAh g&uuml;c&uuml;nde Li-Ion pil t&uuml;r&uuml; ile hayat bulan iPhone 6S, sosyal medyanın aktif kullanıcılarına kesintisiz keyif sunuyor. Profesyonel kamera &ouml;zellikleri, hızlı veri bağlantısı ve en yeni işletim sistemi avantajları sunan Apple iPhone 6S akıllı telefon, kusursuz tasarım kalitesi ve kullanıcısına sunduğu &uuml;st sınıf avantajları ile klas bir tercih olarak beğeninizi kazanıyor.</p>\r\n\r\n<p><img src="http://images.hepsiburada.net/assets/Telefon/ProductDesc/akilli-telefon-apple-iphone-6s-6s-plus-html4.jpg" /></p>\r\n', 'Apple iPhone 6S 32 GB (Apple Türkiye Garantili) en iyi fiyatla Gülcüler İletişim''den satın alın! Şimdi indirimli fiyatla sipariş verin, ayağınıza gelsin!', 'iphone,telefon,mobil,cihaz,4g,ios', '2017-07-01 16:54:46', '25', '6'),
(44, 'Samsung Galaxy S6', 8, 3, '10', '1500.00', '1399.00', '15', 'samsung-galaxy-s6-cep-telefonu-51806_500.jpg', '<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n', 'Samsung yeni amiral gemisi', 'telefon,android,galaxy,s6', '2017-07-01 16:54:48', '20', '6'),
(45, 'Huawei P8', 10, 3, '15', '1000.00', '1250.00', '', 'Telefon_7945429.jpg', '<h2>Bu &uuml;r&uuml;n Huawei T&uuml;rkiye Firmasının Garantisi altındadır. Telefonunuzda oluşan herhangi bir arıza durumunda t&uuml;m Huawei T&uuml;rkiye servis noktalarından hizmet alabilirsiniz. Huawei ile ilgili her t&uuml;rl&uuml; sorun i&ccedil;in 444 7 988 numaralı Huawei M&uuml;şteri Hattını kullanabilirsiniz.</h2>\r\n\r\n<p><br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<h2>Huawei P8 &Ouml;zellikleri</h2>\r\n\r\n<p><img src="http://images.hepsiburada.net/assets/Telefon/ProductDesc/akilli-telefon-huawei-p8-html1.jpg" /></p>\r\n\r\n<h3>Huawei P8 Şimdi Hepsiburada&#39;da!</h3>\r\n\r\n<p><strong>Huawei P8,&nbsp;</strong>yenilik&ccedil;i tasarım, dayanıklılık ve performans anlayışıyla dikkat &ccedil;eken inovatif bir &uuml;r&uuml;n ve lider akıllı telefon modelleri arasında bulunuyor. K&ouml;şeli ve tuşsuz dizaynı, olduk&ccedil;a modern g&ouml;r&uuml;n&uuml;rken &uuml;st&uuml;n teknik &ouml;zellikleri de cihazın &ouml;nc&uuml; &uuml;r&uuml;n &ccedil;eşitleri arasında yer almasını sağlıyor. Uygun fiyatlı, gelişmiş tasarım detaylarına sahip olan bir akıllı telefon modeli almayı d&uuml;ş&uuml;n&uuml;yorsanız Huawei P8&#39;in ayrıntılarına g&ouml;z atabilirsiniz. 144.9 mm. uzunluk, 72.1 mm. genişlik, 6.4 mm. kalınlık ve 144 gr. ağırlık &ouml;l&ccedil;&uuml;lerine sahip olan Huawei P8, inceliğiyle olduğu kadar Corning Gorilla Glass 3 kaplı arka ve &ouml;n y&uuml;z&uuml;yle de fark yaratmayı başarıyor. B&ouml;ylece cihaz, sadece ekran a&ccedil;ısından değil; arka kapak a&ccedil;ısından da &ccedil;izilmelere ve darbelere karşı dayanıklılık kazanıyor. %71.4 gibi olduk&ccedil;a ideal bir ekran-g&ouml;vde oranına sahip olan &uuml;r&uuml;n&uuml;n inceltilmiş ekran kenarları, &uuml;r&uuml;ne olduk&ccedil;a zarif bir g&ouml;r&uuml;nt&uuml; kazandırıyor. Siyah ve beyaz olmak &uuml;zere 2 temel renk se&ccedil;eneğiyle satışa sunulan Huawei P8, estetik g&ouml;r&uuml;nt&uuml;s&uuml; ile birlikte uyumlu renkleriyle de stil sahibi ve şık bir se&ccedil;enek h&acirc;lini alıyor. 5.2 in&ccedil; ekran boyutu sayesinde tek elle kullanım imkanı da sunan akıllı telefon modeli, g&ouml;r&uuml;nt&uuml; kalitesi bakımından g&uuml;&ccedil;lendirilmiş IPS-NEO LCD panel ile geliyor. Gelişmiş ekran &ouml;zelliklerinin yanı sıra kamera &ouml;zellikleriyle de avantaj sağlayan &uuml;r&uuml;n, 13 MP değerindeki arka kamera dışında 8 MP&#39;lik bir &ouml;n kamerayı da i&ccedil;eriyor. Cihazın ana kamerasında &quot;autofocus&quot;, &ccedil;ift LED flaş ve OIS (Optical Image Stabilization) gibi ek &ouml;zellikler de bulunuyor. &Uuml;r&uuml;n&uuml;n 24 bit ses kalitesine sahip olan hoparl&ouml;r&uuml; ise video ve m&uuml;zikleri &ccedil;ok daha berrak bir şekilde duymanıza imkan veriyor.</p>\r\n\r\n<h3>&Uuml;st&uuml;n Teknik &Ouml;zellikler</h3>\r\n\r\n<p>8 &ccedil;ekirdekli olduk&ccedil;a g&uuml;&ccedil;l&uuml; bir işlemciye sahip olan&nbsp;<strong>Huawei P8 modelleri,&nbsp;</strong>aynı zamanda 3 GB RAM ve 16 GB dahili hafıza detaylarıyla da performans a&ccedil;ısından diğer bir&ccedil;ok akıllı telefon modeline g&ouml;re &uuml;st&uuml;nl&uuml;k sağlıyor. Ek olarak, micro SD kart destekleyen &uuml;r&uuml;n&uuml;n harici belleği, 256 GB&#39;ye kadar genişletilebiliyor. İşletim sistemi olarak Android 4.4.2 KitKat, aray&uuml;z olarak ise Emotion 3.1 UI kullanan cihaz, Android 5.0.2 Lollipop s&uuml;r&uuml;m&uuml;ne g&uuml;ncellenebiliyor. Nano SIM uyumlu olan Huawei P8 &ouml;zellikleri arasında 3G ile beraber 4G de bulunuyor. &Uuml;r&uuml;n&uuml;n desteklediği bağlantı t&uuml;rleri arasında ise GPS, Bluetooth 4.1, NFC ve Wi-Fi mevcut. Ayrıca, cihazdaki gyro sens&ouml;r&uuml; sayesinde son d&ouml;nemin en trend teknolojik akımlarından biri olan sanal ger&ccedil;ekliği eksiksiz ve kusursuz şekilde deneyimleyebilirsiniz.</p>\r\n\r\n<p><img src="http://images.hepsiburada.net/assets/Telefon/ProductDesc/akilli-telefon-huawei-p8-html2.jpg" /></p>\r\n\r\n<p><img src="http://images.hepsiburada.net/assets/Telefon/ProductDesc/akilli-telefon-huawei-p8-html3.jpg" /></p>\r\n\r\n<h3>Huawei P8 ile Tanışın!</h3>\r\n\r\n<p>0.47 W/kg. SAR değerine ve 2680 mAh bir bataryaya sahip olan &uuml;r&uuml;n&uuml;n kutu i&ccedil;eriği; kullanım kılavuzu, garanti belgesi, USB kablo, şarj adapt&ouml;r&uuml; ve kulaklıktan oluşuyor. Dilerseniz cihazı uyumlu olduğu ekran koruyucu, kılıf ve ara&ccedil; şarj aleti gibi pek &ccedil;ok orijinal aksesuarlarla da destekleyebilirsiniz. B&ouml;ylece akıllı telefonunuzu daha verimli kullanabilir ya da meydana gelebilecek k&ouml;t&uuml; s&uuml;rprizlerden korumuş olursunuz. &Ccedil;ift renkli, zarif &ccedil;izgilerden oluşan rafine tasarımı, ince yapısına rağmen &uuml;st d&uuml;zeydeki dayanıklılığı ve malzeme kalitesi ile Huawei P8, estetik g&ouml;r&uuml;nt&uuml;s&uuml;ne ek olarak sağlamlığı da beraberinde getiriyor. Sadece dokunmatik tuşlardan oluşan &ouml;n y&uuml;z&uuml;; telefonun sade ve şık dizayn anlayışını pekiştirirken ses tuşları; a&ccedil;ma-kapama tuşu; SIM kart ve Micro SD girişleri, cihazın sağ kısmında sıralanıyor. Tatmin edici bir dayanıklılığa, teknik &ouml;zelliklere ve tasarıma sahip olan &uuml;st segment bir akıllı telefon modeli arıyor fakat fiyatının da uygun olmasını istiyorsanız Huawei P8&#39;i değerlendirebilirsiniz. G&ouml;r&uuml;nt&uuml;s&uuml;, &ouml;zellikleri ve sağlamlığıyla olduğu kadar&nbsp;<strong>Huawei P8 fiyatı&nbsp;</strong>ile de dikkat &ccedil;ekici bir &uuml;r&uuml;n olarak &ouml;ne &ccedil;ıkıyor.</p>\r\n', 'Huawei P8 en iyi fiyatla satın alın! Şimdi indirimli fiyatla online sipariş verin, Huawei P8 ayağınıza gelsin!', 'android,phone,telefon,ceptelefonu,huawei,p8', '2017-07-01 17:42:15', '28', '6'),
(46, 'Samsung Galaxy S8 G950 64GB (Samsung Türkiye Garantili)', 8, 3, '20', '4299.00', '3449.00', '', '278721982_tn50_0.jpg', '<h2>Bir kameradan daha fazlası</h2>\r\n\r\n<h3>Yeni Galaxy S8?i ilk deneyimleyecek kişilerden biri olun</h3>\r\n\r\n<p><img src="http://shop.samsung.com/tr/Themes/Samsung/Content/dream/images/feature-camera.jpg" /></p>\r\n\r\n<h4>Her anı yakalamak i&ccedil;in yaratılmış bir kamera</h4>\r\n\r\n<p>Galaxy S8 ve S8+&#39;ın kameralarıyla t&uuml;m anıları yaşandığı anda yakalayın. 12MP Dual Pixel arka kamera ve 8MP &ouml;n kamera, yaşanan m&uuml;kemmel anları &ccedil;ok hızlı ve net bir şekilde g&uuml;nd&uuml;z veya gece demeden yakalar.</p>\r\n\r\n<p><img src="http://shop.samsung.com/tr/Themes/Samsung/Content/dream/images/feature-speed.jpg" /></p>\r\n\r\n<h4>Yağmurda bile &ccedil;ok hızlı</h4>\r\n\r\n<p>Telefonunuzu kullanmaktan hi&ccedil; vazge&ccedil;emeyeceksiniz. Bu y&uuml;zden Galaxy S8 ve S8+ d&uuml;nyanın ilk 10nm işlemcisini kullanır. &Ccedil;ok hızlı ve &ccedil;ok g&uuml;&ccedil;l&uuml; olmasının yanı sıra batarya verimliliği de sağlar. Buna ek olarak artırılabilir hafızası, IP68 sertifikasına sahip suya ve toza dayanıklılığı ile telefonunuzu elinizden bırakmak istemeyeceksiniz.</p>\r\n\r\n<p><img src="http://shop.samsung.com/tr/Themes/Samsung/Content/dream/images/feature-iris.jpg" /></p>\r\n\r\n<h4>Kusursuz g&uuml;venlik</h4>\r\n\r\n<p>Meraklı bakışlar, Galaxy S8 ve S8+&#39;ın iris tarama &ouml;zelliği sayesinde hi&ccedil;bir zaman sorun olmaz. G&ouml;zlerinizde bulunan iris tabakasının bir benzeri yoktur ve size &ouml;zeldir, hatta iki g&ouml;z&uuml;n&uuml;z bile birbirinden farklıdır ve neredeyse kopyalanması imkansızdır. Bu da telefonunuzun ve t&uuml;m i&ccedil;eriğinizin sadece size ait olması demektir. Buna ek olarak y&uuml;z tanıma &ouml;zelliği de g&uuml;venliğiniz i&ccedil;in bir başka se&ccedil;enektir.<small>*İris tabakası g&ouml;z&uuml;n&uuml;z&uuml;n renkli ve halka şeklindeki kısmını ifade eder.</small></p>\r\n\r\n<p><img src="http://shop.samsung.com/tr/Themes/Samsung/Content/dream/images/feature-sound.jpg" /></p>\r\n\r\n<h4>Net ve Berrak Ses</h4>\r\n\r\n<p>Seste m&uuml;kemmelliğin peşinde koşanlar: S8 ve S8+&#39;da sesi olması gerektiği gibi kusursuz ve net bir şekilde duyacaksınız. &Ccedil;&uuml;nk&uuml; S8 ve S8+ y&uuml;ksek kaliteli 32-bit PCM ve DSD64/128 ses teknolojisini destekler. Ayrıca AKG tarafından geliştirilmiş kulaklıkları &uuml;st d&uuml;zey ses kalitesine sahiptir ve kulaklarınıza &ccedil;ok daha rahat bir şekilde oturur.</p>\r\n', 'Samsung Galaxy S8 G950 64GB (Samsung Türkiye Garantili) GittiGidiyor''da. Ürün özellikleri ve uygun fiyatları ile Samsung Galaxy S8 G950 64GB (Samsung Türkiye Garantili) ve benzer ürünler için Samsung kategorimize göz atın. 278721982', 'samsung galaxy s8 g950 64gb (samsung türkiye garantili),cep telefonu & aksesuar,cep telefonu,samsung,samsung,galaxy,s8,g950,64gb,(samsung,türkiye,garantili),samsung galaxy s8 g950 64gb (samsung türkiye garantili) fiyat,samsung galaxy s8 g950 64gb (samsung', '2017-07-01 16:54:52', '30', '6');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_yorumlari`
--

CREATE TABLE `urun_yorumlari` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `yorum_yapan_id` int(11) NOT NULL,
  `yorum_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_yorumlari`
--

INSERT INTO `urun_yorumlari` (`id`, `urun_id`, `yorum_yapan_id`, `yorum_icerik`, `tarih`, `durum`) VALUES
(1, 46, 3, 'Gerçekten güzel ürün çok memnun kaldım.', '2017-08-09 19:01:51', 'Onaylı'),
(4, 46, 1, 'Yorum bırakma sistemi çok güzel olmuş :)', '2017-08-09 19:01:54', 'Onaylı');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alt_kategoriler`
--
ALTER TABLE `alt_kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gununfirsati`
--
ALTER TABLE `gununfirsati`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `istek_listesi`
--
ALTER TABLE `istek_listesi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kampanyaurun`
--
ALTER TABLE `kampanyaurun`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepetteki_urunler`
--
ALTER TABLE `sepetteki_urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sorular`
--
ALTER TABLE `sorular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_yorumlari`
--
ALTER TABLE `urun_yorumlari`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alt_kategoriler`
--
ALTER TABLE `alt_kategoriler`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `gununfirsati`
--
ALTER TABLE `gununfirsati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `istek_listesi`
--
ALTER TABLE `istek_listesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `kampanyaurun`
--
ALTER TABLE `kampanyaurun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- Tablo için AUTO_INCREMENT değeri `sepetteki_urunler`
--
ALTER TABLE `sepetteki_urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Tablo için AUTO_INCREMENT değeri `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `sorular`
--
ALTER TABLE `sorular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- Tablo için AUTO_INCREMENT değeri `urun_yorumlari`
--
ALTER TABLE `urun_yorumlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
