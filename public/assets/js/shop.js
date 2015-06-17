/*削除用アラート*/
function confirm_delete(id){
return window.confirm("ID:"+　id　+"を削除します。\nよろしいですか？");
}

///////////////////////////////////////////////////////////////////

/*ログアウト用アラート*/
function confirm_logout(){
return window.confirm("ログアウトします。\nよろしいですか？");
}

///////////////////////////////////////////////////////////////////
/*更新用アラート*/
function confirm_update(){
	var name = document.querySelector("#name").value;
	var value = document.querySelector("#value").value;
	var pass= document.querySelector("#pass").value;
	var msg = '';
		if(name == ''){
			msg += "名前 を入力してください\n";
		}
		if(value == ''){
			msg += "数値 を入力してください\n";
		}
		if(pass == ''){
			msg += "パスワード を入力してください\n";
		}
		

		if(msg == ''){
			return window.confirm("更新します。よろしいですか？");
		}else{
			alert(msg);
			return false;
		}

}

/////////////////////////////////////////////////////////////////
/*新規用アラート*/
function confirm_regist(){
	var name = document.querySelector("#name").value;
	var value = document.querySelector("#value").value;
	var pass= document.querySelector("#pass").value;
	var msg = '';
		if(name == ''){
			msg += "名前 を入力してください\n";
		}
		if(value == ''){
			msg += "数値 を入力してください\n";
		}
		if(pass == ''){
			msg += "パスワード を入力してください\n";
		}
		

		if(msg == ''){
			return window.confirm("登録します。よろしいですか？");
		}else{
			alert(msg);
			return false;
		}
	
}
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