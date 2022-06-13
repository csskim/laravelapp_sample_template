{{-- レイアウト継承 --}}

{{-- ページタイトル指定 --}}

{{-- 編集コンテンツ作成 --}}
<form method="POST" action="{{-- 送信先指定 --}}" {{-- データ形式指定 --}}>
	{{-- メソッド指定 --}}
	{{-- CSRF対策 --}}
	<div class="mb-3">
		<label for="boardTitle" class="form-label">タイトル</label>
		<input type="text"
		class="form-control {{-- エラー用クラス設定 --}}"
		id="boardTitle" name="title" value="{{-- デフォルト値指定 --}}">
		{{-- タイトルエラー存在チェック --}}
		<div class="invalid-feedback">
			{{-- エラーメッセージ出力 --}}
		</div>
	</div>
	<div class="mb-3">
		<label for="boardContent" class="form-label">内容</label>
		<textarea class="form-control {{-- エラー用クラス設定 --}}"
		id="boardContent" name="content">{{-- デフォルト値指定 --}}</textarea>
		{{-- 内容エラー存在チェック --}}
		<div class="invalid-feedback">
			{{-- エラーメッセージ出力 --}}
		</div>
	</div>
	{{-- 画像項目
	<div class="mb-3">
		<label for="boardImage" class="form-label">画像</label>
		{{ 画像存在チェック }}
		<div class="form-check mb-3">
			<input type="checkbox" class="form-check-input" name="imageDeleteFlag">
			<label class="form-check-label">画像削除</label>
		</div>
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
		<a class="btn btn-secondary mx-2" href="{{-- リンク先指定 --}}">キャンセル</a>
		<button type="submit" class="btn btn-primary mx-2">更新する</button>
	</div>
</form>
