<?php


$kullaniciadi ="b191210036@hotmail.com";
 $ka =$_POST['ad'];
 $sifre=$_POST['sifre'];
 $sifremiz=12345;

	if($ka==$kullaniciadi && $sifre==$sifremiz)
	{
		 echo "HOŞGELDİNİZ";
		 echo $_POST["ad"]."ı ile giriş yaptınız.";
		 echo "<br> <a href='index-h.html'> Ana Sayfa</a>";
		 
	}
	else
	{
		echo "yanlıs <br>";
		echo "<br> <a href='index-l.html'> Tekrar Dene</a>";
		
	}

?>