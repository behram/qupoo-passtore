<? ob_start(); ?> 
<? require('db.php'); ?>
<? if(isset($_COOKIE['uid_2'])&&$_COOKIE['umail_2']&&$_COOKIE['upass_2']&&$_COOKIE['uresim_2']&&$_COOKIE['umail']&&$_COOKIE['uid']&&$_COOKIE['upass']&&$_COOKIE['uresim']){
$uid_h=htmlspecialchars($_COOKIE['uid']);$email_h=htmlspecialchars($_COOKIE['umail']);$pass_h=htmlspecialchars($_COOKIE['upass']);$image_h=htmlspecialchars($_COOKIE['uresim']); 
$sor_h = mysql_query("SELECT * FROM users WHERE user_id='$uid_h' AND user_email='$email_h' AND user_password='$pass_h' AND user_image='$image_h' ");$sonuc_h = mysql_num_rows($sor_h);
if($sonuc_h==0){header("Location:ps_login.php"); }}else{ header("Location:ps_login.php");}

 $read=$_SERVER['HTTP_USER_AGENT'];$msie=strpos($read,"MSIE")? true: false;$moz=strpos($read,"Firefox")? true: false;$chrome=strpos($read,"Chrome")? true: false; 
?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="ico.gif" type="image/x-icon">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="google-site-verification" content="-h8VembAD1ugd5FBF1jTZY3wYtw-QJvKu20YxgJbkLo" />

<meta name="keywords" content="qupoo,qupoo.com,site bul,site keşfet,şifre sakla,üye ol,bilgi sakla,qupooKaşif,passtore,password,username,membership,üyelik,websiteler,anasayfa,eniyi siteler,siteler,qupoo passtore,hız,sörf,sosyal ağ,sosyal siteler" />
<meta name="description" content="qupoo.com mükemmel bir anasayfa uygulaması.Üyelik girişlerini yapabilir.Bilgilerini güvenle saklayabilir.qupooKaşif ile siteleri keşfedebilirsin." />
<link rel="shortcut icon" href="icon.png">
<meta name="rating" content="All" /> 
<meta name="robots" content="index, follow" />
<title>qupoo | PASStore</title>
<script src="js/jquery.min.js" type="text/javascript"></script> 
</head>
<style>
table,tr,td{font-family:"Segoe UI";}
.passtore{z-index:9}
.passtore a:link{color:rgba(0,0,0,0);}
.passtore table{margin-left:auto;margin-right:auto;margin-top:47px;background:rgba(255,255,255,0.8);box-shadow: -1px 0px 10px 0px #bbb inset,1px 0px 10px 0px #bbb inset;padding:10px;border:none;}
.passtore td{border-radius:0px;text-align:center;border:none;}
.passtore input{width:90%;height:100%;border:none;box-shadow:#999 0px 0px 5px inset;border-radius:0px;line-height:30px;padding:0% 5%;}
.passtore input:focus{outline:none;box-shadow:rgb(0,200,255) 0px 0px 5px;}
.passtore input:disabled{background:rgba(255,255,255,0.9);}
.passtore td{height:35px;}
.passtore td img:hover{opacity:0.7;}

.passtore td font{background:rgb(252,252,252);padding:4px 10px 6px 10px;border-radius:3px;box-shadow:#ccc 0px 0px 3px inset;}

.passtore .sec{background:rgb(240,240,240);cursor:pointer;box-shadow:#666 0px 0px 3px inset;}

 
.passtore .sec:hover{box-shadow:#666 0px 0px 3px;background:rgb(250,250,250);}

.passtore .sec img{margin-top:3px;}

.passtore .plus:hover{opacity:0.7;}
.passtore .refresh{height:23px;}
.passtore table{margin-bottom:200px;}
.passtore .ustdiv{position:fixed;width:100%;background-color:rgba(250,250,250,0.9);height:50px;z-index:9;-webkit-box-shadow:0px 0px 10px 3px #fff;-ms-box-shadow:0px 0px 10px 3px #000;box-shadow:0px 0px 5px #999;top:0px;left:0px;}
.passtore .ustdiv .q_sonuc_yaz{text-align:center;margin-left:250px;margin-right:200px;font-family:"Lucida Grande", sans-serif;font-size:20px;color:rgb(255,225,255);width:800px;}
.passtore .nopa{position:relative;height:20px;float:right;margin-top:-27px;margin-right:5px;cursor:pointer;opacity:0.1;}
.passtore .nopa:hover{opacity:0.9;}
.passtore span{cursor:pointer;}
.passtore .cevap_1{font-size:30px;float:left;line-height:40px;margin-left:30px;font-weight:bolder;}
.passtore .cevap_1:hover{color:#F00;}
.passtore .cevap_3:hover{color:#F00;}
.passtore .cevap_2{font-size:30px;float:right;line-height:40px;margin-right:30px;font-weight:bolder;}
.passtore .cevap_2:hover{color:rgb(0,200,255);}
.passtore .question_01{position:relative;margin-left:auto;margin-right:auto;margin-top:10px; height:60px;width:300px;background:#0F0;border-radius:5px;display:none;line-height:10px;}
.passtore .question_02{position:relative;margin-left:auto;margin-right:auto;margin-top:10px; height:60px;width:300px;background:#0F0;border-radius:5px;display:none;line-height:10px;}
.passtore .reques{font-size:15px;line-height:20px;margin-left:auto;margin-right:auto;color:#000;cursor:default;margin-top:0px;}


 .bol_nedir{width:300px;height:0px;position:absolute;background:#FFF;font:.8em "Segoe UI";position:fixed;top:0px;z-index:9999;overflow:hidden;-webkit-user-select: all;}
</style>

<body>
<img src="ques1.png" style="top:0px;position:fixed;z-index:99999;height:50px;cursor:pointer;left:0px;" id="quesac_qps" title="Bu bölümde neler yapılabilir?"/>
<div class="bol_nedir" id="bune_qps" style="left:50px;height:0px;top:0px;">
<div style="width:100%;height:5px;margin:0px;background:rgb(0,200,255)"></div>
<img src="x.png" style="position:absolute;right:3px;top:8px;cursor:pointer;" id="quescl_qps"/>
<h2 style="color:rgb(0,200,255);font-weight:100;text-align:center;line-height:0px;">Bu bölümde neler yapılabilir?</h2><hr style="border:rgb(0,200,255) 1px dashed;"/>
<ul style="list-style-type:none;margin:0px;margin-left:-25px;margin-right:10px;">
<li>-PASStore yani şifre ve hesap bilgisi deposu burada qupoo's bölümünde eklediğiniz kullanıcı ad ve emailleri yeniden düzenleyebilirsiniz. Ayrıca bu hesaplarınızın şifre gibi diğer hesap ayrıntılarını da 3 farklı şekilde şifrelenen qupoo şifrenizin anahtarınız olduğu bu bölümde güvenli bir şekilde saklayabilirsiniz.</li><hr/>
<li>-Herhangi bir değişiklik yaptıktan sonra kaydet'e tıklayarak bilgilerinizi güncelleyebilir. Kaldır'a tıklayarak bilgilerinizi kalıcı bir şekilde silebilirsiniz.</li><hr />
<li>-Bu bölümde SSL sertifikası ile veri alışverişi yapılmaktadır.Yani veri güvenliği üst düzeydedir.</li><hr />
<li>-Güvenliğiniz için PASStore bölümü 15 dk. içinde otomatik olarak oturumunuzu kapatır.Eğerki 15 dk. dan daha az bir sürede işleminizi bitirirseniz çıkış yapmayı unutmayınız.</li><hr />
<li>-Ayrıca sistemde olmayan websitelerdeki varsa üyelik bilgilerinizi de en altta bulunan + yani ekle bölümüne tıklayarak buraya ekleyerek bilgilenizi güvenle saklayabilirsiniz.</li>
</ul>
</div>
<script>$(document).ready(function(){$('#quesac_qps').click(function(event){$('#bune_qps').animate({height:"500px"}, 500 );$(this).attr("src","ques2.png");})
$('#quescl_qps').click(function(event){$('#bune_qps').animate({height:"0px"}, 500 );$("#quesac_qps").attr("src","ques1.png");})})</script>
<div class="passtore">
<div class="ustdiv">
<a href="singout.php"><img src="small_icons/sing_out.png" style="float:right;margin-top:5px;background:rgba(50,50,50,0.4); border-radius:200px;margin-right:5px;" title="Güvenli çıkış" height="40"/></a>
<div class="q_sonuc_yaz">
<div style='line-height:50px;font-size:35px;' class="ps_sonuc">
<span id="cevap_gelen"></span>
<div class="question_01 fadeout">
<span class="reques">Silmek istediğinize emin misiniz?</span>
<span class="cevap_1">EVET</span>
<span class="cevap_2">HAYIR</span>
</div>
<div class="question_02 fadeout">
<img class="row_id" style="display:none;"/>
<span class="reques">Silmek istediğinize emin misiniz?</span>
<span style="font-size:30px;float:left;line-height:40px;margin-left:30px;font-weight:bolder;" id="" class="cevap_3">EVET</span>
<span style="font-size:30px;float:right;line-height:40px;margin-right:30px;font-weight:bolder;" class="cevap_2">HAYIR</span>
</div>
</div></div></div><img src="qupoo_logo_go/qupooo_logo4.png" style="position:fixed;z-index:99;left:60px;top:5px;" height="40"/>

<table border="1" cellspacing="5" cellpadding="0" align="center" width="950">
<tr align="center">

<td width="200" style="font-weight:200;"><font>Site | Konu</font></td>
<td width="200" style="font-weight:200;"><font >Username | Mail</font></td>
<td width="200" style="font-weight:200;"><font>Şifre</font></td>
<td width="200" style="font-weight:200;"><font>Not</font></td>
<td width="50" style="font-weight:200;"><font>Yenile</font></td>
<td width="50" style="font-weight:200;"><font>Git</font></td>
<td width="50" style="font-weight:200;"><font>Kaldır</font></td>
</tr>


<?
$uid=$_COOKIE['uid'];
for($x=1;$x<50;$x++){
$sira = mysql_query("SELECT * FROM `users_all_memberships` WHERE `user_id`='$uid'"); 
$result_siteid = mysql_fetch_assoc($sira); 
$site_id=$result_siteid[$x];
if($site_id==0){}else{

$sites_all = mysql_query("SELECT * FROM `sites_all` WHERE `site_id`='$site_id'");
$result_sitesall = mysql_fetch_assoc($sites_all); 
$table_n=$result_sitesall['site_table_name'];
$site_url=$result_sitesall['site_url'];

$table = mysql_query("SELECT * FROM `$table_n` WHERE `user_id`='$uid'");
$result_table = mysql_fetch_assoc($table); 
$username=$result_table['user_email'];
$userpass=$result_table['user_password'];
$userinfo=$result_table['user_extra_information'];
echo '<tr >
<form class="'.$table_n.'">
<td><input type="text" value="'.$site_url.'" disabled="disabled"/></td>
<td ><input type="text" value="'.$username.'" name="mail_unameupd" autocomplete="off"/></td>

<td><input type="password" value="'.$userpass.'" name="passupd" class="gost"/><input type="text" value="" style="display:none;" class="gost2"/><img src="small_icons/eye_inv.png"  class="nopa"></td>
<td ><input type="text" value="'.$userinfo.'" name="extraupd"/></td>
<input type="hidden" name="tname" value="'.$table_n.'" >
</form> 
<td class="sec guncel"><img src="small_icons/refresh.png"  class="refresh"/></td>
<td class="sec"><a href="'.$site_url.'" target="_blank"><img src="small_icons/link.png" class="link" /></a></td>
<td class="sec remove" id="'.$table_n.'"><img src="small_icons/trash.png" id="'.$x.'"/></td>
</tr>';
}}
$sorgu = mysql_query("SELECT * FROM `users_extra_memberships` WHERE `user_id`='$uid'");
while($sonuc = mysql_fetch_row($sorgu)) {
echo '<tr >
<form class="'.$sonuc[5].'">
<td><input type="text" value="'.$sonuc[1].'" name="issue_upd"/></td>
<td ><input type="text" value="'.$sonuc[2].'" name="mail_unameupd"/></td>
<td ><input type="password" value="'.$sonuc[3].'" name="passupd" class="gost"/><input type="text" value="'.$sonuc[3].'" style="display:none;" class="gost2"/><img src="small_icons/eye_inv.png"  class="nopa"></td>
<td ><input type="text" value="'.$sonuc[4].'" name="extraupd"/></td>
<input type="hidden" value="'.$sonuc[5].'" name="rowupd_id"/>
</form>
<td class="sec yenile"><img src="small_icons/refresh.png"  class="refresh"/></td>
<td class="sec"><a href="'.$sonuc[1].'"><img src="small_icons/link.png" class="link" /></a></td>
<td class="sec remove_ext" id="'.$sonuc[5].'"><img src="small_icons/trash.png"/></td>
</tr>';
}

?>
<tr >
<td style="opacity:0;"></td>
<td  style="opacity:0;"></td>
<td class="plus sec" style="position:absolute;width:220px;margin-left:-25px;" id="ekle_sutun"><img src="small_icons/plus2.png" style="height: 20px;position:absolute;margin-left:100px;margin-top:7px;" /><input style="height:0px;opacity:0;"/><img src="small_icons/eye_inv.png"  class="nopa" style="opacity:0;"></td>
<td  style="opacity:0;"></td>
<td style="opacity:0;"></td>
<td style="opacity:0;"></td>
</tr>


<tr style="display:none;" class="acilck">
<td  ><font>Site | Konu</font></td>
<td  ><font>Username | Mail</font></td>
<td  ><font>Şifre</font></td>
<td  ><font>Not</font></td>
<td ><font>Ekle</font></td>
<td  ><font>İptal</font></td>
<td><font>Daha</font></td>
</tr>

<tr style='display:none;' class='acilck' id="111">
<form id="form_1">

<td><input type='text' name="site_issue" /></td>
<td ><input type='text' name="name_email"/></td>
<td ><input type='password' name="pass"/></td>
<td ><input type='text' name="extra_info"/></td>
</form>
<td class='sec' id="ekle_1"><img src='small_icons/plus_32.png'  style='height: 18px;' /></td>
<td class='sec iptal'><img src='small_icons/Black_Remove.png' style='height:16px;' class='refresh' /></td>
<td class='sec' id="daha_1"><img src='small_icons/insert.png' class='link' /></td>
</tr>

<tr style='display:none;' id="222">
<form id="form_2">

<td><input type='text' name="site_issue" /></td>
<td ><input type='text' name="name_email"/></td>
<td ><input type='password' name="pass"/></td>
<td ><input type='text' name="extra_info"/></td>
</form>
<td class='sec' id="ekle_2"><img src='small_icons/plus_32.png'  style='height: 18px;' /></td>
<td class='sec iptal'><img src='small_icons/Black_Remove.png' style='height:16px;' class='refresh' /></td>
<td class='sec' id="daha_2"><img src='small_icons/insert.png' class='link' /></td>
</tr>

<tr style='display:none;' id="333">
<form id="form_3">

<td><input type='text' name="site_issue" /></td>
<td ><input type='text' name="name_email"/></td>
<td ><input type='password' name="pass"/></td>
<td ><input type='text' name="extra_info"/></td>
</form>
<td class='sec' id="ekle_3"><img src='small_icons/plus_32.png'  style='height: 18px;' /></td>
<td class='sec iptal'><img src='small_icons/Black_Remove.png' style='height:16px;' class='refresh' /></td>
<td class='sec' id="daha_3"><img src='small_icons/insert.png' class='link' /></td>
</tr>

<tr style='display:none;' id="444">
<form id="form_4">

<td><input type='text' name="site_issue" /></td>
<td ><input type='text' name="name_email"/></td>
<td ><input type='password' name="pass"/></td>
<td ><input type='text' name="extra_info"/></td>
</form>
<td class='sec' id="ekle_4"><img src='small_icons/plus_32.png'  style='height: 18px;'/></td>
<td class='sec iptal'><img src='small_icons/Black_Remove.png' style='height:16px;' class='refresh' /></td>
<td class='sec' id="daha_4"><img src='small_icons/insert.png' class='link' /></td>
</tr>

<tr style='display:none;' id="555">
<form id="form_5">

<td><input type='text' name="site_issue" /></td>
<td ><input type='text' name="name_email"/></td>
<td ><input type='password' name="pass"/></td>
<td ><input type='text' name="extra_info"/></td>
</form>
<td class='sec' id="ekle_5"><img src='small_icons/plus_32.png'  style='height: 18px;' /></td>
<td class='sec iptal'><img src='small_icons/Black_Remove.png' style='height:16px;' class='refresh' /></td>
<td class='sec'></td>
</tr>
</table>
</div>
<style>body{background-image:url(p_back.png);}</style>
<script>
$(document).ready(function(){

$('#ekle_sutun').click(function(event){ $(".acilck").fadeIn(800); })
$('input').live('focusin',function() {$(this).parent().css("borderColor","#0f0");});
$('input').live('focusout',function() {$(this).parent().css("borderColor","rgb(0,200,255)");});
$('.iptal').live('click',function() {$(this).parent().fadeOut();});
$('.cevap_2').live('click',function() {$(".fadeout").css("display","none");});
var acilck=$("#dahada").html();

$('#daha_1').click(function(event){ $("#222").fadeIn(); });
$('#daha_2').click(function(event){ $("#333").fadeIn(); });
$('#daha_3').click(function(event){ $("#444").fadeIn(); });
$('#daha_4').click(function(event){ $("#555").fadeIn(); });
$('#ekle_1').live('click',function() {$.ajax({type: 'POST',url: 'passtore_useradd.php',data:$("#form_1").serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})});
$('#ekle_2').live('click',function() {$.ajax({type: 'POST',url: 'passtore_useradd.php',data:$("#form_2").serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})});
$('#ekle_3').live('click',function() {$.ajax({type: 'POST',url: 'passtore_useradd.php',data:$("#form_3").serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})});
$('#ekle_4').live('click',function() {$.ajax({type: 'POST',url: 'passtore_useradd.php',data:$("#form_4").serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})});
$('#ekle_5').live('click',function() {$.ajax({type: 'POST',url: 'passtore_useradd.php',data:$("#form_5").serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})});


$('.remove').live('click',function() {
$(".question_01").css("display","none");
$(".question_02").fadeIn();
var tname=$(this).attr("id");
var imgid=$(this).find("img").attr("id");
$(".cevap_3").attr("id",tname);
$(".row_id").attr("id",imgid);
});

$('.cevap_3').live('click',function() { 
$(".fadeout").css("display","none");
var tname_reel=$(this).attr("id");
var row_id=$(".row_id").attr("id");
$("."+tname_reel).parent().fadeOut();
$.ajax({type: 'POST',url: 'ps_mem_del.php',data:{tname:tname_reel,row_id:row_id},success: function(veri){$('#cevap_gelen').html(veri);}})
});


$('.remove_ext').live('click',function() {
var ext_reid=$(this).attr("id");
$(".question_02").css("display","none");
$(".question_01").fadeIn();
$(".cevap_1").attr("id",ext_reid)
});

$('.cevap_1').live('click',function() {
$(".fadeout").css("display","none");
var cevap_id=$(this).attr("id");
$("."+cevap_id).parent().fadeOut();
$.ajax({type: 'POST',url: 'ps_ext_mem_del.php',data:{row_id:cevap_id},success: function(veri){$('#cevap_gelen').html(veri);}}) 
});


$('.yenile').live('click',function() {var up_id=$(this).parent().find("form").attr("class");
$.ajax({type: 'POST',url: 'ps_infoupd.php',data:$('.'+up_id).serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})  });

$('.guncel').live('click',function() {
var up_qpid=$(this).parent().find("form").attr("class");
$.ajax({type: 'POST',url: 'ps_infoupdfq.php',data:$('.'+up_qpid).serialize(),success: function(veri){$('#cevap_gelen').html(veri);}})  });

$('.gost').live('focusin',function() {$(this).parent().find("img").css("opacity","1");});
$('.gost').live('focusout',function() {$(this).parent().find("img").css("opacity","0.1");});



$('.nopa').live('mouseover',function() {

var val_asil=$(this).parent().find('.gost').attr("value");
$(this).parent().find('.gost2').attr("value",val_asil);

$(this).parent().find(".gost").css("display","none");
$(this).parent().find(".gost2").css("display","block")

});


$('.nopa').live('mouseout',function() {
$(this).parent().find(".gost2").css("display","none")
$(this).parent().find(".gost").css("display","block");
});;})

</script>
</body>
</html>
<? ob_end_flush(); ?>