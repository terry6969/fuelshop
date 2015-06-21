function confirmDelete(i){
	var a = window.confirm('id:'+i+'を削除します。よろしいですか？');
	return a;
}

function confirmUserregist(obj){
	var name = $('#user_n').val();
	var id = $('#user_i').val();
	var pass = $('#user_p').val();
	var zankin = $('#user_z').val();

	var msg = '';
	if (name == ''){
		msg = '名前を入力してください\n';
	}
	if (id == ''){
		msg += 'IDを入力してください\n';
	}
	if (pass == ''){
		msg += 'パスワードを入力してください\n';
	}
	if (zankin == ''){
		msg += '残金を入力してください';
	}
	if (msg == ''){
		return window.confirm('登録します。よろしいですか？');
	}else{
		alert(msg);
		return false;
	}
}
function confirmUserupdate(obj){
	var name = $('#user_n').val();
	var id = $('#user_i').val();
	var pass = $('#user_p').val();
	var zankin = $('#user_z').val();

	var msg = '';
	if (name == ''){
		msg = '名前を入力してください\n';
	}
	if (id == ''){
		msg += 'IDを入力してください\n';
	}
	if (pass == ''){
		msg += 'パスワードを入力してください\n';
	}
	if (zankin == ''){
		msg += '残金を入力してください';
	}
	if (msg == ''){
		return window.confirm('更新します。よろしいですか？');
	}else{
		alert(msg);
		return false;
	}
}