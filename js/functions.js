function Captcha(div){
	document.getElementById(div).src='captcha.php?' + Math.random();
}