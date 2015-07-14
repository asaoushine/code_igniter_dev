<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>フォーム送信後画面</title>
</head>
<body>
	<h3>フォームは正しく送信されました！</h3>
	<p><?php echo anchor('blog/form', "もう一度投稿する！"); ?></p>
	<p><?php echo anchor('blog/index', "一覧を見てみる");?></p>
</body>
</html>