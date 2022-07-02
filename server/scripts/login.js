function check(form) {
    username = new Array("ray1020", "han989898",);
    password = new Array("ccray1020vr", "cchan9898gtyrr",);

	if(form.userid.value == username[0] && form.pswrd.value == password[0]||form.userid.value == username[1] && form.pswrd.value == password[1]) {
		location.replace('UI/clientarea/han.html')/* The Administrator homepage */
	}
	if(form.userid.value == username[0] && form.pswrd.value == password[0]||form.userid.value == username[0] && form.pswrd.value == password[0]) {
		location.replace('UI/clientarea/ray.html')/* The Administrator homepage */
	}
	else if(form.userid.value == username[0]||form.userid.value == username[0]||form.userid.value == username[0]) {
		alert("帳號或密碼錯誤")
	}
	else {
		alert("請點擊[確定]進行登入")
	}
}