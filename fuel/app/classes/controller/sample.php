<?php


class Controller_Sample extends Controller
{


	public function action_index(){
		return Response::forge(View::forge('sample/image_upload_view'));
	}

	public function action_image_upload_view(){
		return Response::forge(View::forge('sample/image_upload_view'));
	}


	public function action_image_upload(){
		// ファイルアップロード時の設定
		// 基本設定は fuel/app/config/upload.php に定義されている（保存先とか）
		// ここでは、アップロードするファイル名を何にするかを設定しています。
		Upload::process(
		   array(
		      'new_name' => 'test',
		    )
		);

		// アップロードするファイルのチェック
		// fuel/app/config/upload.php に定義されている「ext_whitelist」という項目に、アップロードできるファイルの種類を設定済み。
		// それに一致しなかった場合アップロードできないように is_valid を使ってチェックしている。
		if (Upload::is_valid())
		{
			// 実際のファイルのアップロード処理部分
		    Upload::save();
		}
	}
}