<?php
$merchantID = "MS1609378169"; 																					//商店代號
$hashKey    = "Cu1rLFd8nI22bWarWDwbrc3T87Ma2dnU"; 																					//HashKey
$hashIV     = "PPBOcGa1IBrm87WC"; 																					//HashIV
$url        = "https://ccore.newebpay.com/MPG/mpg_gateway"; //測試環境URL
$ver        = "1.5";

$ReturnURL       = "https://dlc.puzpaserver.tk/thanks.html"; 			//支付完成 返回商店網址
$NotifyURL_atm   = "https://dlc.puzpaserver.tk/atm_notify.php"; 		//支付通知網址
$NotifyURL_ccard = "https://dlc.puzpaserver.tk/ccard_notify.php"; 	//支付通知網址
$ClientBackURL   = "https://dlc.puzpaserver.tk/pricing.html"; 									//支付取消 返回商店網址

$NTD = 100;											//商品價格
$Order_Title = "vip";		//商品名稱
$ATM_ExpireDate = 3;						//ATM付款到期日
?>