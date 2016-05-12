<? ob_start(); ?>
<?
require('db.php'); 
 if(isset($_COOKIE['uid_2'])&&$_COOKIE['umail_2']&&$_COOKIE['upass_2']&&$_COOKIE['uresim_2']&&$_COOKIE['umail']&&$_COOKIE['uid']&&$_COOKIE['upass']&&$_COOKIE['uresim']){
$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h==1){header("Location:index.php"); }}

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="ico.gif" type="image/x-icon">
<head>

<meta name="google-site-verification" content="-h8VembAD1ugd5FBF1jTZY3wYtw-QJvKu20YxgJbkLo" />


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="qupoo,qupoo.com,site bul,site keşfet,şifre sakla,üye ol,bilgi sakla,qupooKaşif,passtore,password,username,membership,üyelik,websiteler,anasayfa,eniyi siteler,siteler,qupoo passtore,hız,sörf,sosyal ağ,sosyal siteler" />
<meta name="description" content="qupoo.com mükemmel bir anasayfa uygulaması.Üyelik girişlerini yapabilir.Bilgilerini güvenle saklayabilir.qupooKaşif ile siteleri keşfedebilirsin." />
<link rel="shortcut icon" href="icon.png">
<script src="js/jquery.min.js" type="text/javascript"></script> 
<meta name="rating" content="All" /> 
<meta name="robots" content="index, follow" />
<title>PASStore | Giriş Yap</title>
<style>
.giris_yap{position:relative;margin-left:auto;margin-right:auto;margin-top:15%;width:450px;height:270px;background-color:rgba(250,250,250,1);padding-top:35px;border-radius:45px 0px;}
input{width:300px;height:35px;border-radius:3px;margin-left:75px;margin-right:75px;margin-bottom:20px;font:Arial, Helvetica, sans-serif;text-align:center;font-size:15px;border:#999 2px solid;}
.subm{border:none;width:150px;float:right;margin-right:75px;color:#FFF;cursor:pointer;background-color: rgb(80, 145, 255);border-radius:15px 0px;}
input:focus{outline:rgb(77,144,254) 2px solid;}
h4{line-height:10px;}
.subm:hover{background:rgb(90,180,255);}
.subm:focus{outline:none;}
h5:hover{text-decoration:underline;}
.hata{float:right;margin-right:75px;margin-top:-20px;color:#F00;}	
.ustdiv{position:fixed;width:100%;background-color:rgba(0,200,255,1);height:80px;z-index:9;-webkit-box-shadow:0px 0px 10px 3px #000;-ms-box-shadow:0px 0px 10px 3px #000;box-shadow:0px 0px 10px 3px #000;top:0px;left:0px;}
 .ustdiv .q_sonuc_yaz{text-align:center;margin-left:250px;margin-right:200px;font-family:"Segoe UI";font-size:20px;color:rgb(255,225,255);width:800px;}
 
 
 .bol_nedir{width:300px;height:0px;position:absolute;background:#FFF;font:.8em "Segoe UI";position:absolute;top:0px;z-index:9999;overflow:hidden;-webkit-user-select: all;}

</style>
</head>

<body>
<style>body{background-image:url(p_back.png);}</style>
<div class="ustdiv">
<div class="q_sonuc_yaz">
<div style='line-height:80px;font-size:35px;' class="ps_sonuc">
<?
$email=htmlspecialchars($_POST['ptore_mail']);
$pass=htmlspecialchars($_POST['ptore_pass']);
$passmd=md5($pass);
$sorgu = mysql_query("SELECT * FROM users WHERE user_email='$email' AND user_password='$passmd'");
$sonuc = mysql_num_rows($sorgu);
if($sonuc==1){ 


		$query5 = mysql_query("SELECT * FROM `users` WHERE `user_email`='$email'"); 
		$result5 = mysql_fetch_assoc($query5); 
		$uid=$result5['user_id']; 
		$resim=$result5['user_image'];
		$openclose= $result5['open_close'];
			
		setcookie("uid",$uid,time()+600);
		setcookie("umail",$email,time()+600);
		setcookie("upass",$passmd,time()+600);
		setcookie("uresim",$resim,time()+600);
		setcookie("uid_2",md5($uid),time()+600);
		setcookie("umail_2",md5($email),time()+600);
		setcookie("upass_2",md5($passmd),time()+600);
		setcookie("uresim_2",md5($resim),time()+600);
		header("Location:index.php");}
?>

</div>
</div></div></div><img src="qupoo_logo_go/qupooo_logo4.png" style="position:fixed;z-index:99;left:60px;top:0px;"/>



<div class="giris_yap">
<form method="post">
<span style="margin-left:80px;"><b>Email:</b></span></br><input type="text" name="ptore_mail" value="<?=$email;?>" />
<span class="hata">
<? if($email==""){}else{$sorgu1 = mysql_query("SELECT * FROM users WHERE user_email='$email'");$sonuc1 = mysql_num_rows($sorgu1);if($sonuc1==0){echo "Email hatalı";}}?>
</span></br>

<span style="margin-left:80px;"><b>Şifre:</b></span></br><input type="password" name="ptore_pass"/>

<span class="hata">
<? if($pass==""){}else{$sorgu2 = mysql_query("SELECT * FROM users WHERE  user_password='$passmd'");$sonuc2 = mysql_num_rows($sorgu2);if($sonuc2==0){echo "Şifre hatalı";} }?>

</span></br>
<input type="submit" class="subm" style="margin-top:20px;font-weight:bold;" value="Güvenli giriş"  /></br>
</form>
<a href="http://qupoo.com"><h5 style="float:right;margin-right:-20px;font-family:"Segoe UI";">Üye değil misin?</h5></a>
</div>

<img src="ques1.png" style="top:0px;position:absolute;z-index:99999;height:80px;cursor:pointer;left:0px;width:60px;" id="quesac_qps" title="Bu bölümde neler yapılabilir?"/>
<div class="bol_nedir" id="bune_qps" style="left:60px;height:0px;top:0px;">
<div style="width:100%;height:5px;margin:0px;background:rgb(0,200,255)"></div>
<img src="x.png" style="position:absolute;right:3px;top:8px;cursor:pointer;" id="quescl_qps"/>
<h2 style="color:rgb(0,200,255);font-weight:100;text-align:center;line-height:0px;">Bu bölümde neler yapılabilir?</h2><hr style="border:rgb(0,200,255) 1px dashed;"/>
<ul style="list-style-type:none;margin:0px;margin-left:-25px;margin-right:10px;">
<li>-PASStore yani şifre ve hesap bilgisi deposu burada qupoo's bölümünde eklediğiniz kullanıcı ad ve emailleri yeniden düzenleyebilirsiniz. Ayrıca bu hesaplarınızın şifre gibi diğer hesap ayrıntılarını da 3 farklı şekilde şifrelenen qupoo şifrenizin anahtarınız olduğu bu bölümde güvenli bir şekilde saklayabilirsiniz.</li><hr/>
<li>-<span style="color:#F00"><b>Dikkat!</b></span>Üyelik girişinizi yaparken url satırında <span style="color:#F00">passtore.qupoo.com</span> yazdığına dikkat ediniz. Aksi bir durumda qupooYardım bölümünden durumu bize kesinlikle bildiriniz.</li><hr />
<li>-Ayrıca tarayıcınız tarafından sorulan <span style="color:#F00">Şifreniz kaydedilsin mi?</span> sorusunu kesinlikle hayır olarak işaretlemeniz güvenliğiniz için önerilir.</li><hr />
<li>-PASStore oturumunuz otomatik olarak 15 dk. sonra kapatılır eğer ki işiniz daha erken biterse oturumu kapatmayı unutmayınız.</li>
</ul>
</div>
<script>$(document).ready(function(){$('#quesac_qps').click(function(event){$('#bune_qps').animate({height:"430px"}, 500 );$(this).attr("src","ques2.png");})
$('#quescl_qps').click(function(event){$('#bune_qps').animate({height:"0px"}, 500 );$("#quesac_qps").attr("src","ques1.png");})})</script>


</body>
</html>

<? ob_end_flush(); ?>