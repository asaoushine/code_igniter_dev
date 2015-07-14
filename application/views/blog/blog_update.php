<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>フォーム</title>
</head>
<body>
	<?php echo validation_errors();?>
	<?php echo form_open('blog/update/'.$blog['id']); ?>
	<!-- このスクリプトでフォームタグを生成している -->

	<h5>タイトル</h5>
	<input type="text" name="title" value="<?php echo $blog['title'];?>" size="30" />
	<h5>文章</h5>
	<textarea cols="30" name="description" rows="7"><?php echo $blog['description']; ?></textarea>
	<div><input type="submit" value="送信" /></div>
	</form>
</body>
</html>