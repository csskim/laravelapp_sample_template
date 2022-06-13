{{-- レイアウト継承 --}}

{{-- ページタイトル指定 --}}

{{-- 一覧コンテンツ作成 --}}
{{-- 登録ボタン
<a class="btn btn-primary float-end" href="{{ リンク先指定 }}">
	登録する
</a>
--}}
<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col" style="width: 30%">
				#
				{{-- ソート機能
				<a href="{{ 昇順 }}">&uarr;</a>
				<a href="{{ 降順 }}">&darr;</a>
				--}}
			</th>
			<th scope="col">
				タイトル
				{{-- ソート機能
				<a href="{{ 昇順 }}">&uarr;</a>
				<a href="{{ 降順 }}">&darr;</a>
				--}}
			</th>
			<th scope="col" style="width: 30%">
				更新日時
				{{-- ソート機能
				<a href="{{ 昇順 }}">&uarr;</a>
				<a href="{{ 降順 }}">&darr;</a>
				--}}
			</th>
		</tr>
	</thead>
	<tbody>
		{{-- 掲示板情報繰り返し出力 --}}
		<tr>
			<td>{{-- 番号 --}}</td>
			<td>{{-- タイトル --}}</td>
			<td>{{-- 更新日時 --}}</td>
		</tr>
	</tbody>
</table>
{{-- ページネーション出力 --}}