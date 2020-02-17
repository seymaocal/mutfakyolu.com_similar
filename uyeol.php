<?php
ob_start();
session_start();
include 'admin/islemler/baglan.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/stylesheet2.css">
  </head>
  <body style="background: url(image/login_background.png) ">
<div id="login" class="login">
	<h1>
		<a href="index.php" title="Resimli, Pratik ve Lezzetli Yemek Tarifleri ~ Mutfak Yolu"></a>
	</h1>
	<p class="message register">Bu siteye kayıt ol</p>
	<form name="registerform" id="registerform" action="admin/islemler/islem.php" method="post" novalidate="novalidate">
<p id="user_login-p">
<label for="user_login" id="user_login-label">*Kullanıcı adı<br>
<input type="text" name="kullanici_kadi" id="user_login" class="input" value="" size="20" autocapitalize="off"></label>
</p>
<p id="user_email-p">
<label for="user_email" id="user_email-label">*E-posta<br>
<input type="email" name="kullanici_mail" id="user_email" class="input" value="" size="25"></label>
</p>
<p id="first_name-p"><label id="first_name-label" for="first_name">*Adınız<br><input type="text" name="kullanici_ad" id="first_name" class="input" value=""></label></p>
<p id="last_name-p"><label id="last_name-label" for="last_name">Soyadınız<br><input type="text" name="kullanici_soyad" id="last_name" class="input" value=""></label></p>
<p id="description-p"><label id="description-label" for="description">*Hakkınızda<br>
<span id="description_msg">Profil bilgilerin için biraz biyogrofi bilgisi girebilirsin. Belki görünüme açık olabilir.</span>
<textarea name="kullanici_hakkimizda" id="description"></textarea></label></p>
<p id="pass1-p"><label id="pass1-label" for="pass1">*Şifre<br><input type="password" autocomplete="off" name="kullanici_passwordone" id="pass1"></label></p>
<p id="pass2-p"><label id="pass2-label" for="pass2">*Şifreyi Tekrar Giriniz<br><input type="password" autocomplete="off" name="kullanici_passwordtwo" id="pass2"></label></p>
<div id="pass-strength-result" class="bad"></div>
<p id="pass_strength_msg">Şifrenizi en az 4 karakter uzunluğunda olmalı. Şifrenizi daha güçlü yapmak için aşağıdaki gibi , üst ve küçük harfler, sayılar ve semboller kullanın </p>
<p id="disclaimer-p">


<label id="disclaimer_title">Kullanım Şartları</label><br>
</p><div id="disclaimer"  style="height: 300px; overflow-x: hidden; overflow-y: scroll;"><p style="text-align: center">Aşağıdaki kullanım şartları, sizin bu web sitesini kullanımınızı ve web sitesine erişiminizi düzenler. Aynı zamanda, bu web sitesinde bulunan ya da bu web sitesi aracılığıyla erişilebilen belirli içerik, veri, materyal ya da bilgiler (“İçerik”) ve sizin web sitesine yükleyebileceğiniz, gönderebileceğiniz ve/veya web sitesinde yayınlayabileceğiniz belirli içerik, veri, materyal ya da bilgiler (“Kullanıcı İçeriği”) veya işlemler için belirli koşul ve şartlar geçerli olabilir. Bu gibi özel koşullar, bu kullanım koşullarına eklenebilir veya yalnızca açıkça belirlenen kapsama göre bu kullanım koşullarının yerini alabilir.</p><br>
<br>
<h2 style="text-align: left"><span style="text-decoration: underline">1. Kullanım Koşullarının Kabulü</span></h2><br>
Bu web sitesine erişim sağlamakla ve siteyi kullanmakla, aşağıdaki Kullanım Koşulları’nın ve Kullanım Koşulları’nda yer alan veya gönderme yapılan tüm hüküm ve koşulların ya da bu web sitesinde belirtilen ek hüküm ve koşulların sizi yasal olarak bağladığını kabul etmiş sayılırsınız. Bu şartların tümünü kabul etmiyorsanız bu web sitesine erişemez veya bu web sitesini kullanamazsınız.<br>
<h2><span style="text-decoration: underline">2. Şartların Değiştirilmesi</span></h2><br>
Bu Kullanım Koşulları MutfakYolu.Com tarafından herhangi bir zamanda değiştirilebilir. Bu şekilde değiştirilmiş kullanım şartları, yayınlandıkları anda geçerli olurlar. Değişiklikler yayınlandıktan sonra web sitesini kullanmaya devam ederek, bu şekilde değiştirilmiş şartları kabul etmiş sayılırsınız. İlgili tüm koşul ve şartları düzenli olarak gözden geçirmeniz önerilir.<br>
<br>
MutfakYolu.Com, web sitesinde ya da içerikte herhangi bir zamanda, uyarı yapmaksızın değişiklik veya güncelleme yapma ya da kullanımı durdurma hakkını saklı tutar. MutfakYolu.Com, sadece kendi takdirine bağlı olarak, herhangi bir kişinin web sitesine veya bunun herhangi bir bölümüne erişimini herhangi bir zamanda ve herhangi bir nedenle, önceden bildirimde bulunmadan sınırlama, reddetme veya sonlandırma hakkını saklı tutar.<br>
<h2><span style="text-decoration: underline">3. Gizlilik Politikası</span></h2><br>
Web sitesi aracılığıyla ya da web sitesi ile bağlantılı olarak sağlanan ya da toplanan kişisel bilgiler, yalnızca MutfakYolu.Com'un gizlilik politikası uyarınca kullanılacaktır ve bu kullanım şartları, sitede yayınlandığı şekliyle gizlilik politikasına tabidir. MutfakYolu.Com sitesinin gizlilik politikası hakkında bilgi edinmek için <a href="" target="_blank">Gizlilik Politikası</a> sayfamızı ziyaret edebilirsiniz.<br>
<h2><span style="text-decoration: underline">4. Sorumluluğun Reddi</span></h2><br>
Sitedeki tüm içerikler ve kullanıcı içerikleri (sınırlama olmaksızın metinler, resimler, grafikler, bağlantılar ve diğer materyaller dâhil) “olduğu gibi” ve “kullanıma sunulduğu gibi” sağlanmaktadır. &nbsp;MutfakYolu.Com&nbsp;ve bağlı kuruluşları, iştirakleri, ortakları, lisans verenleri ve tedarikçileri, işbu belgeyle pazarlanabilirlik, belirli bir amaca uygunluk, telif hakkı ve ticari marka ihlali olmadığına ya da bu web sitesinin çalışması veya içeriğine ilişkin olanlar dahil, her türlü açık veya örtülü beyan ya da garantiyle ilgili sorumluluğu açıkça reddeder. &nbsp;MutfakYolu.Com&nbsp;veya bağlı kuruluşları, iştirakleri, ortakları, lisans verenleri ve tedarikçileri bu web sitesinin ihtiyaçlarınızı karşılayacağı, web sitesinin kesintisiz, güncel, güvenli ya da hatasız olacağı veya web sitesinin kullanımından elde edilecek sonuçların (web sitesindeki bilgi ve materyaller dahil) doğru, tam, kesin, güvenilir ya da herhangi bir biçimde ihtiyaçlarınızı karşılayan sonuçlar olacağına yönelik hiçbir beyan ya da garantide bulunmaz.<br>
<br>
Bu, halka açık bir web sitesidir. Bu web sitesine gönderdiğiniz kullanıcı içerikleri ile ilgili hiçbir gizlilik hükmü beklentisi içinde olamazsınız. Bu web sitesine gizli bilgi göndermemelisiniz.<br>
<br>
MutfakYolu.Com&nbsp;ve bağlı kuruluşları, iştirakleri, ortakları, lisans verenleri ve tedarikçilerinin İnternet, ağ veya sunucu hizmetlerindeki kesintiler ya da ihmallere ilişkin hiçbir yükümlülüğü olmayacaktır ve web sitesinin veya bunun kullanılmasını sağlayan hizmetlerin ya da &nbsp;MutfakYolu.Com&nbsp;tarafından gönderilen elektronik iletişimin virüs ya da diğer zararlı unsurlar içermediğine ilişkin bir garanti vermezler.<br>
<br>
Bu web sitesinden materyal yükleme ya da web sitesini kullanarak başka yollarla materyal ekleme ile ilgili riskler tamamen size aittir. Bu tür materyalin yüklenmesinden dolayı bilgisayar sisteminizde oluşabilecek her türlü hasar veya veri kaybı sizin sorumluluğunuzda olacaktır.<br>
<h2><span style="text-decoration: underline">5. Kayıt</span></h2><br>
Web sitesinin belirli alanlarına erişmek, belirli işlevlerini veya özelliklerini kullanmak için bir katılımcı olarak kaydolmanız gerekebilir. &nbsp;MutfakYolu.Com&nbsp;sitesine kayıt ücretsizdir.<br>
<br>
Kayıt olduğunuzda, eşsiz bir kullanıcı adı veya “nesne kimliği” ve şifre seçmelisiniz ve eşsiz, geçerli, güncel ve doğrulanabilir bir e-posta adresi sağlamalısınız. Aynı kullanıcı adı ya da e-posta adresinin birden fazla defa kullanılmasına izin verilmez; bu yüzden, girdiğiniz ad veya e-posta adresi zaten kullanılıyorsa başka bir tane seçmeniz istenecektir. Size, kayıtlı bilgilerinizi içeren bir onay e-postası göndereceğiz. Bu tür bir e-postanın herhangi bir nedenden ötürü gönderilememesi durumunda, kayıt gerektiren bölüm, işlev veya özelliklere erişiminiz ya da bunları kullanımınız sonlandırılabilir veya reddedilebilir.<br>
<br>
Eksiksiz ve güncel kalması için kaydınızı zamanında güncellemeniz gerekmektedir. Şifrenizin gizliliğinin sağlanması, sadece sizin sorumluluğunuzdadır. Kendi takdirimize bağlı olarak, müstehcen, yakışıksız, kötüleyici veya başka bir biçimde uygunsuz bir kullanıcı adı seçerseniz, kullanıcı adınızı değiştirme ya da web sitesine göndermiş olduğunuz içeriği silme veya kaydınızı reddetme ya da iptal etme hakkımızı saklı tutarız.<br>
<br>
Bilgisayarlarınıza erişimi kısıtlamaktan tamamen siz sorumlusunuz. Yapacağınız ya da yapmayacağınız işlemler ya da ihmalinizden dolayı hesabınız, kullanıcı adınız ve/veya şifreniz altında gerçekleşen tüm etkinliklerin sorumluluğunu kabul edersiniz. Hesabınızla, kullanıcını adınızla ve / veya şifrenizle ilgili herhangi bir yetkisiz işlemden şüphelenir ya da bu tür bir durumun farkına varırsanız, bizimle derhal e-posta aracılığıyla veya İletişim sayfamızdan temas kurmayı kabul edersiniz. Kendi takdirimize göre, herhangi bir belirli e-posta hizmeti ya da ISP’den kaydolmayı engelleyebiliriz.<br>
<h2><span style="text-decoration: underline">6. Katılımcı</span></h2><br>
Web sitesine Kullanıcı İçeriği göndererek, materyalin uygun, yapıcı ve ilgili olacağını ve başka bir kişi veya kuruluş için küçük düşürücü ve rencide edici olabilecek, herhangi bir kişi ya da mülke zarar verebilecek ya da başka bir biçimde bir kişi ya da kuruluşu aşağılayabilecek veya rahatsız edebilecek, (gizlilik ya da kamuya açıklık hakları dâhil) başka bir insanın yasal haklarını ihlal edecek, pornografik, müstehcen, saygısız, kaba, ahlaksız olan veya tehdit içeren, kültürel, etnik veya başka bir açıdan sakıncalı ya da yasadışı etkinliğe telkin veya teşvik eden unsurlar dahil fakat bunlarla sınırlı olmaksızın, yasadışı olabilecek ya da başka bir sebepten yayınlanmaya uygun olmayan öğeler içermeyeceğini kabul edersiniz.<br>
<br>
Herhangi bir materyal göndermeden önce, tüm virüsleri ve diğer bulaşıcı ya da zararlı özellikleri tarayıp kaldırmak için gerekli çabayı göstermeniz gerekmektedir. Web sitesi aracılığıyla zincirleme mektuplar, piramit şemalar, anketler ya da talepler iletemezsiniz. Aynı zamanda, web sitesi aracılığıyla iletilen herhangi bir İçeriğin ve/veya Kullanıcı İçeriğinin kaynağını gizlemek amacıyla ya da web sitesindeki varlığınızı değiştirmek amacıyla sahte başlık açamaz veya kimlikleri ya da diğer verileri değiştiremezsiniz. Web sitelerimizin, sunucularımızın veya ağlarımızın çalışmasına engel olamaz veya bozamazsınız ya da altyapımızı oransız ya da aşırı büyük yük altına sokacak işlemler yapamazsınız.<br>
<br>
Web sitesine gönderilen Kullanıcı İçeriğinin, başkalarının telif hakkı, ticari marka veya patent ya da herhangi bir gizlilik yükümlülüğü dâhil ancak sınırlı kalmaksızın hiçbir mülkiyet hakkını ihlal etmediğini onaylar, beyan ve garanti edersiniz.<br>
<br>
Web sitesine tarafınızdan sağlanan ve fikri mülkiyet hakları korumasına tabi olmayan fikirlerin, gönderilerin veya tartışmaların bir başka katılımcı tarafından, karşılıksız veya yetkisiz olarak kullanılabileceğini onaylar ve kabul edersiniz.</div>
<label id="accept_disclaimer-label" class="accept_check" for="accept_disclaimer"><input type="checkbox" name="accept_disclaimer" id="accept_disclaimer" value="1">&nbsp;Kullanım Şartlarını Okudum, Anladım ve Kabul Ediyorum.</label>

</span></span></p><br> <p id="reg_passmail">Kayıt onayı size e-posta olarak gönderilecektir.</p>
<br class="clear">
<input type="hidden" name="" value="">
<p class="submit"><input type="submit" name="kullanicikaydet" id="wp-submit" class="button button-primary button-large" value="Kayıt ol"></p>


</form>
</div>

</body>
</html>