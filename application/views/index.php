<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charaset="utf-8">
	<title>自分で設定したindexが表示されるかのテスト</title>
</head>
<body>
	<p>ここがテストの部分です</p>
	<?php 
	class Television{
		public $channelNo;

		function dispChannel(){
			print("現在のチャンネルは... ".$this->channelNo." です！");
		}
	}
	$hoge = new Television();
	$hoge->channelNo = 8;
	$hoge->dispChannel();

	?>
</body>
</html>