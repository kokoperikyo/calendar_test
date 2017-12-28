<?php
require('calphp.php');
require('haruaki.php');
$holiday1=0;
$holiday2=0;
$holiday3=0;
 if($month == 12){
	$holiday1=23;//天皇誕生日(固定)
  $w = date('w', mktime(0, 0, 0,12,23, $year));//振替休日処理
  if($w==0){//日曜日は0
	$holiday1++;//次の日が休日になる
	}
}

 if($month == 11){
	$holiday1=3;//文化の日(固定)
  $w = date('w', mktime(0, 0, 0,11,3, $year));//振替休日処理
  if($w==0){//日曜日は0
	$holiday1++;//次の日が休日になる
	}
	$holiday2=23;//勤労感謝の日（固定）
  $w = date('w', mktime(0, 0, 0,11,23, $year));//振替休日処理
  if($w==0){//日曜日は0
	$holiday2++;//次の日が休日になる
	}
}

 if($month == 10){//体育の日（第2月曜日）
  for($i=8; $i<15; $i++){//第2月曜日は8日～14日の間
  $w = date('w', mktime(0, 0, 0, 10,$i, $year));
  if($w==1){			
	$holiday1=$i;		//月曜日は1なので1のときの$iを代入
	}
   }
}

 if($month == 9){
	$holiday1=$autumn["$year"];//秋分の日
  $w = date('w', mktime(0, 0, 0,9,$holiday1, $year));//振替休日処理
  if($w==0){//日曜日は0
	$holiday1++;//次の日が休日になる
	}
  for($i=15; $i<22; $i++){//敬老の日（第3月曜日）第3月曜日は15日～21日の間
  $w = date('w', mktime(0, 0, 0, 9,$i, $year));
  if($w==1){
	$holiday2=$i;
	}
   }
$a=$holiday1-$holiday2;
if($a == 2){
	$holiday3=$holiday2++;//国民の祝日に挟まれた日は休日になる
	}
}

 if($month == 8){
	$holiday1=11;//山の日(固定)
  $w = date('w', mktime(0, 0, 0,8,11, $year));//振替休日処理
  if($w==0){//日曜日は0
	$holiday1++;//次の日が休日になる
	}
}

 if($month == 7){//海の日（第3月曜日）
  for($i=15; $i<22; $i++){//第3月曜日は15日～21日の間
  $w = date('w', mktime(0, 0, 0, 7,$i, $year));
  if($w==1){
	$holiday1=$i;
	}
   }
}

 if($month == 5){
	$holiday1=3;//憲法記念日(固定)
	$holiday2=4;//みどりの日(固定)
	$holiday3=5;//こどもの日(固定)
}

 if($month == 4){
	$holiday1=29;//昭和の日(固定)
  $w = date('w', mktime(0, 0, 0,4,29, $year));//振替休日処理
  if($w==0){//日曜日は0
	$holiday1++;//次の日が休日になる
	}
}

//3月春分の日
 if($month == 3){
	$holiday1=$spring["$year"];//春分の日
  $w = date('w', mktime(0, 0, 0,3,$holiday1, $year));//振替休日処理
  if($w==0){//日曜日は0
	$holiday1++;//次の日が休日になる
	}
}

 if($month == 2){
	$holiday1=11;//建国記念の日(固定)
  $w = date('w', mktime(0, 0, 0,2,11, $year));//振替休日処理
  if($w==0){//日曜日は0
	$holiday1++;//次の日が休日になる
	}
}

 if($month == 1){
	$holiday1=1;//元日（固定）
  $w = date('w', mktime(0, 0, 0,1,1, $year));//振替休日処理
  if($w==0){//日曜日は0
	$holiday1++;//次の日が休日になる
	}
  for($i=8; $i<15; $i++){//成人の日（第2月曜日）第2月曜日は8日～14日の間
  $w = date('w', mktime(0, 0, 0,1,$i, $year));
  if($w==1){			
	$holiday2=$i;
	}
   }
}
?>