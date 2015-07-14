<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>データ一覧</title>
</head>
<body>
	<p><?php echo anchor('blog/form', "新規追加");?></p>
	<table>
		<?php foreach($blogs as $blog): ?>
		<tr>
			<td><?php echo $blog['id'];?></td>
			<td><?php echo $blog['title'];?></td>
			<td><?php echo $blog['description'];?></td>
			<td><a href="update/<?php echo $blog['id']; ?>">編集</a></td>
			<td><a href="delete/<?php echo $blog['id']; ?>">削除</a></td>
		</tr>
		<?php endforeach;?>
	</table>
</body>
</html>