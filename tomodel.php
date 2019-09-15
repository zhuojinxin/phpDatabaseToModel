<?php
/**
 * Created by PhpStorm.
 * User: zhuojinxin
 * Date: 2019/9/15 0015
 * Time: 上午 10:52
 */
$str="   \$table->string('title');
            \$table->text('detail');
            \$table->text('img');
            \$table->string('luyin');
            \$table->unsignedInteger('user_id');
            \$table->tinyInteger('is_xuanshan')->comment('yincang');
            \$table->integer('my_price')->nullable()->comment('yincang');
            \$table->tinyInteger('is_person')->nullable()->comment('yincang');
            \$table->integer('jiti_jifen')->nullable()->comment('yincang');
            \$table->tinyInteger('is_shexian')->comment('yincang');
            \$table->integer('kaituan_jifen')->comment('yincang');";
$shuchu="";
$out=explode(";",$str);
for($i=0;$i<count($out)-1;$i++){
    $out2=explode("->",$out[$i]);
    $out2=$out2[1];
	$result = array();
	preg_match_all("/(?:\()(.*)(?:\))/i",$out2, $result);
	$out2=$result[1][0];
	$shuchu.=$out2;
	$shuchu.=",";
}
echo $shuchu;