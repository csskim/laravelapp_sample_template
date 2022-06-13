{{-- レイアウト継承 --}}

{{-- ページタイトル指定 --}}

{{-- 登録コンテンツ作成 --}}
<form method="POST" action="{{-- 送信先指定 --}}">
	{{-- CSRF対策 --}}
	<div class="mb-3">
		<label for="boardTitle" class="form-label">タイトル</label>
		<input type="text"
		class="form-control {{-- エラー用クラス設定 --}}"
		id="boardTitle" name="title" {{-- フォーム再取得 --}}>
		{{-- タイトルエラー存在チェック --}}
		<div class="invalid-feedback">
			{{-- エラーメッセージ出力 --}}
		</div>
	</div>
	<div class="mb-3">
		<label for="boardContent" class="form-label">内容</label>
		<textarea class="form-control {{-- エラー用クラス設定 --}}"
		id="boardContent" name="content">{{-- フォーム再取得 --}}</textarea>
		{{-- 内容エラー存在チェック --}}
		<div class="invalid-feedback">
			{{-- エラーメッセージ出力 --}}
		</div>
	</div>
	{{-- 画像項目
	<div class="mb-3">
		<label for="boardImage" class="form-label">画像</label>
		<input type="file"
		class="form-control {{ エラー用クラス設定 }}"
		id="boardImage" name="image">
		{{ 画像エラー存在チェック }}
		<div class="invalid-feedback">
			{{ エラーメッセージ出力 }}
		</div>
	</div>
	--}}
	<div class="d-flex flex-row justify-content-center">
		<a class="btn btn-secondary mx-2" href="{{-- リンク先 --}}">キャンセル</a>
		<button type="submit" class="btn btn-primary mx-2">登録する</button>
	</div>
</form>
