/////////////////////////////////////////////////////////////////
/*ログイン用アラート*/
function confirm_login(){
	var id = document.querySelector("#id").value;
	var pass= document.querySelector("#pass").value;
	var msg = '';
		if(id == ''){
			msg += "ID を入力してください\n";
		}
		if(pass == ''){
			msg += "パスワード を入力してください\n";
		}

		if(msg == ''){
			return window.confirm("ID:"+ id +" ログインします。よろしいですか？");
		}else{
			alert(msg);
			return false;
		}
}
///////////////////////////////////////////////////////////////////
/*ログアウト用アラート*/
function confirm_logout(){
return window.confirm("ログアウトします。\nよろしいですか？");
}
///////////////////////////////////////////////////////////////////
/*購入用アラート*/
function confirm_sell(){
	return window.confirm("よろしいですか？");
}
///////////////////////////////////////////////////////////////////
/*カート用アラート*/
function alert_cart(){
	var stock = document.querySelector("#stock").value;
		if(stock == 0){
		window.alert('無いものは買えません');
		return false;
		}
}
///////////////////////////////////////////////////////////////////