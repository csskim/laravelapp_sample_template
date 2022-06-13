{{-- レイアウト継承 --}}

{{-- ページタイトル指定 --}}

{{-- 詳細コンテンツ作成 --}}
<h1>{{-- タイトル出力 --}}</h1>
<p class="lead">{{-- 内容出力 --}}</p>
{{-- 画像項目
{{ 画像データの存在チェック }}
<img src="{{ 画像URL指定 }}" class="img-thumbnail" width="200px">
--}}
<div class="d-flex flex-row justify-content-center">
{{-- 削除ボタン
	<form method="POST" action="{{ 送信先 }}" onSubmit="{{ 削除コンファーム実行 }}">
		{{ メソッド指定 }}
		{{ CSRF対策 }}
		<button type="submit" class="btn btn-secondary mx-2">削除する</button>
	</form>
--}}
{{-- 編集ボタン
	<a class="btn btn-primary mx-2" href="{{ リンク先 }}">編集する</a>
--}}
</div>
<script>
{{-- 削除コンファーム作成 --}}
</script>