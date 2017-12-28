<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>シフトカレンダー</title>
  <!--link rel="stylesheet" href="calcss.css"-->
</head>
<body>

<?php 	require('calphp.php');
	require('calsyuku.php');
	//require('test.php');
	require('calcss.php');//読み込み
?>

<?php echo $year; ?>年<?php echo $month; ?>月のカレンダー
<br>
<table>
    <tr>　　　　　　　		<!--日～土を見出しで固定-->
        <th>日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th>土</th>
    </tr>
 
    <tr>
    <?php $count = 0; ?>　				<!--横方向の数をカウントする役割-->
    <?php foreach ($calendar as $key => $value): ?>		<!--要素の取り出し-->
 
        <td class="day_number">
        <?php $count++; ?>　				<!--１マスごとに空白または数字が入るたびにカウントしていく-->
        <?php echo $value['day']; ?>				<!--dayに格納されていた空白か日にちを挿入-->



	<?php if($value['day'] != '') :?>			<!--空白にボタンを作っても意味がないので-->
	<?php if($count == 1 || $count == 7 || $value['day'] == $holiday1 || $value['day'] == $holiday2 || $value['day'] == $holiday3) :?>	<!--1=日曜日、2=土曜日-->
	<form class="kyuuzithu" method="post" action="">
	<input type="checkbox" value="12時">12時
	</form>
	<?php endif ;?>
	
	<form class="heizithu" method="post" action="">
	<input type="checkbox" value="17時">17時
	<input type="checkbox" value="18時">18時
	<br>
	<input type="checkbox" value="18時30分">18時30分
	</form>
	<?php endif ;?>

	

        </td>
 
    <?php if ($count == 7): ?>				<!--カレンダーは横に7マスなので７つカウントしたら改行したい-->
    </tr>
    <tr>							<!--改行-->
    <?php $count = 0; ?>				<!--カウントをリセット-->
    <?php endif; ?>
 
    <?php endforeach; ?>
    </tr>
</table>

</body>
</html>