<?php exit;?>001550567570f0e38baf6aeb58c32c29247729ffd5d7s:49554:"a:2:{s:8:"template";s:49489:"<html><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" /><meta name="format-detection" content="telephone=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE11" />
		<title>【<?php echo $parentCategoryInfo["name"];?><?php echo $categoryInfo["name"];?>】<?php echo $parentCategoryInfo["name"];?>号码 开奖结果查询 - <?php echo $sys["site_title"];?></title>
		<meta name="keywords" content="<?php echo $categoryInfo["keywords"];?>" />
		<meta name="distribution" content="<?php echo $categoryInfo["description"];?>" />
		<link rel="stylesheet" href="/themes/168pc/css/headorfood.css" />
		<link rel="stylesheet" href="/themes/168pc/css/pk10kai.css" />
		<link rel="stylesheet" href="/themes/168pc/css/calendar.css" />
		<link rel="shortcut icon" href="/themes/168pc/img/icon/168favicon.ico/v=2017981058.html">
		<link rel="stylesheet" href="/themes/168pc/css/user_adv.css" />
		<script src="/themes/168pc/js/lib/bootstrap-3.3.0/js/tests/vendor/jquery.min.js"></script>
		<script src="/themes/168pc/js/lib/bootstrap-3.3.0/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/themes/168pc/js/lib/jquery-1.7.2.min.js"></script>
	</head>

	<body>
		<div class="bodybox pk10lzzhfxymbox daxiaodsbox">
					<?php $__Template->display("themes/168pc/head"); ?>
			<div class="haomabox">
				<div class="waring" id="waringbox">
					<div class="flash"><i></i></div>
					温馨提示：因网络问题，开奖结果会有延迟，所以您需要去喝杯咖啡等一会儿！
				</div>
			<div class="haomaqu" id="pk10">
					<div class="haomaqubox">
						<div class="haomaqul">
							<div class="haomaline">
								<div class="haomaimg">
									<a href="<?php echo $parentCategoryInfo["urlname"];?>.html"><img src="<?php echo $parentCategoryInfo["image"];?>" /></a>
								</div>
								<div class="numberqu">
									<div class="nuberqutit">
										<div class="divl">
											<a href="<?php echo $parentCategoryInfo["urlname"];?>.html"><span class="pk10tit">北京PK拾</span></a>第<span class="redfont preDrawIssue"></span>期&nbsp;开奖
										</div>
										<div class="divr">
											全天<span class="totalCount">...</span>期，当前<span class="drawCount">...</span>期,剩<span class="sdrawCount">...</span>期
										</div>
									</div>
									<div class="kajianhao">
										<ul id="jnumber" class="numberbox">
											<li class="nub02 "></li>
											<li class="nub01 "></li>
											<li class="nub10 "></li>
											<li class="nub04 "></li>
											<li class="nub03 "></li>
											<li class="nub06 "></li>
											<li class="nub07 "></li>
											<li class="nub08 "></li>
											<li class="nub05 "></li>
											<li class="nub09 li_after"></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="haomaqur">
							<div class="line linetime" id="timebox">
								<div class="opening opentyle">开奖中...</div>
								<div class="clock cuttime">
									距&nbsp;&nbsp;<span class="nextIssue"></span>&nbsp;&nbsp;期开奖仅有
									<span class="bgtime hour">0</span>
									<span class="hourtxt">时</span>
									<span class="bgtime minute">0</span>
									<span>分</span>
									<span class="bgtime second">0</span>
									<span>秒</span>
								</div>
							</div>
						</div>
					</div>
				<div class="hreflist">
						<ul>
							<li>
								<a href="/<?php echo $parentCategoryInfo["urlname"];?>.html">即时开奖</a>
							</li>
							<?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>4, "limit"=>100));  if(is_array($listList)) foreach($listList as $list){ ?>
  <?php if ($list['class_id']==$categoryInfo['class_id']){ ?>
    <li class="checked"><a href="<?php echo $list["curl"];?>" title="<?php echo $list["name"];?>">
					<span class="n"><?php echo $list["name"];?></span></a></li>
  <?php }else{ ?>
  
    <li><a href="<?php echo $list["curl"];?>" title="<?php echo $list["name"];?>"><i class="icon_global icon_<?php echo $list["i"];?>"></i>
					<span class="n"><?php echo $list["name"];?></span></a></li>
  <?php } ?>
<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="zhlzbox margt20">
				<div class="listhead">
					<div class="listheadl">
						<span class="lmms"><i>3</i>单双大小路珠</span>
					</div>
					<div class="listheadr">
						<div class="listheadrl">
							<span id="today" class="checked">今天</span>
							<span id="yesterday">昨天</span>
							<span id="qianday">前天</span>
						</div>
						<div class="listheadrr">
							<div class="rightime">
								<div id="dateframe">
									<input type="text" class="date" placeholder="">
									<div id="datebox"></div>
									<i class="dropicond"></i>
								</div>
							</div>
							<div>选择日期&nbsp;</div>
						</div>
					</div>
				</div>
				<div class="listbox">
					<div class="checkbox">
						<!--<div id="zhms" class="checkbtnzh">
							<ul class="zhmsmc">
								<li class="title">筛选名次：</li>
								<li class="sinli"><i>1</i>
									<a href="javascript:void(0)">冠军</a>
								</li>
								<li class="sinli"><i>2</i>
									<a href="javascript:void(0)">亚军</a>
								</li>
								<li class="sinli"><i>3</i>
									<a href="javascript:void(0)">第三名</a>
								</li>
								<li class="sinli"><i>4</i>
									<a href="javascript:void(0)">第四名</a>
								</li>
								<li class="sinli"><i>5</i>
									<a href="javascript:void(0)">第五名</a>
								</li>
								<li class="sinli"><i>6</i>
									<a href="javascript:void(0)">第六名</a>
								</li>
								<li class="sinli"><i>7</i>
									<a href="javascript:void(0)">第七名</a>
								</li>
								<li class="sinli"><i>8</i>
									<a href="javascript:void(0)">第八名</a>
								</li>
								<li class="sinli"><i>9</i>
									<a href="javascript:void(0)">第九名</a>
								</li>
								<li class="sinli"><i>10</i>
									<a href="javascript:void(0)">第十名</a>
								</li>
								<li class="sinli"><i>11</i>
									<a href="javascript:void(0)">冠亚和</a>
								</li>
								<li class="zhcheckall">全选</li>
								<li class="zhclear">清空</li>
							</ul>
							<ul class="zhmslz">
								<li class="title">筛选路珠：</li>
								<li class="lztype"><i>2</i>
									<a href="javascript:void(0)">大小</a>
								</li>
								<li class="lztype"><i>1</i>
									<a href="javascript:void(0)">单双</a>
								</li>
								<li class="lztype"><i>3</i>
									<a href="javascript:void(0)">龙虎</a>
								</li>
							</ul>
						</div>
						<div id="dxms" class="checkbtnzh checkbtndx">
							<ul>
								<li class="title">筛选路珠：</li>
								<li class="lztype"><i>2</i>
									<a href="javascript:void(0)">大小</a>
								</li>
								<li class="lztype"><i>1</i>
									<a href="javascript:void(0)">单双</a>
								</li>
								<li class="lztype"><i>3</i>
									<a href="javascript:void(0)">龙虎</a>
								</li>
							</ul>
							<ul class="xuanzhemc">
								<li class="mctitle">选择名次：</li>
								<li class="sinli"><span>1</span>
									<a href="javascript:void(0)">冠军</a>
								</li>
								<li class="sinli"><span>2</span>
									<a href="javascript:void(0)">亚军</a>
								</li>
								<li class="sinli"><span>3</span>
									<a href="javascript:void(0)">第三名</a>
								</li>
								<li class="sinli"><span>4</span>
									<a href="javascript:void(0)">第四名</a>
								</li>
								<li class="sinli"><span>5</span>
									<a href="javascript:void(0)">第五名</a>
								</li>
								<li class="sinli"><span>6</span>
									<a href="javascript:void(0)">第六名</a>
								</li>
								<li class="sinli"><span>7</span>
									<a href="javascript:void(0)">第七名</a>
								</li>
								<li class="sinli"><span>8</span>
									<a href="javascript:void(0)">第八名</a>
								</li>
								<li class="sinli"><span>9</span>
									<a href="javascript:void(0)">第九名</a>
								</li>
								<li class="sinli"><span>10</span>
									<a href="javascript:void(0)">第十名</a>
								</li>
								<li class="sinli"><span>11</span>
									<a href="javascript:void(0)">冠亚和</a>
								</li>
							</ul>
						</div>-->
						<div id="lmms" class="checkbtnzh checkbtnmc">
							<ul>
								<li class="title">筛选名次：</li>
								<li class="sinli"><i>1</i>
									<a href="javascript:void(0)">冠军</a>
								</li>
								<li class="sinli"><i>2</i>
									<a href="javascript:void(0)">亚军</a>
								</li>
								<li class="sinli"><i>3</i>
									<a href="javascript:void(0)">第三名</a>
								</li>
								<li class="sinli"><i>4</i>
									<a href="javascript:void(0)">第四名</a>
								</li>
								<li class="sinli"><i>5</i>
									<a href="javascript:void(0)">第五名</a>
								</li>
								<li class="sinli"><i>6</i>
									<a href="javascript:void(0)">第六名</a>
								</li>
								<li class="sinli"><i>7</i>
									<a href="javascript:void(0)">第七名</a>
								</li>
								<li class="sinli"><i>8</i>
									<a href="javascript:void(0)">第八名</a>
								</li>
								<li class="sinli"><i>9</i>
									<a href="javascript:void(0)">第九名</a>
								</li>
								<li class="sinli"><i>10</i>
									<a href="javascript:void(0)">第十名</a>
								</li>
								<li class="sinli"><i>11</i>
									<a href="javascript:void(0)">冠亚和</a>
								</li>
								<li class="zhcheckall">全选</li>
								<li class="zhclear">清空</li>
							</ul>
							<ul class="xuanzhemc">
								<li class="mctitle">选择路珠：</li>
								<li class="lztype"><span>2</span>
									<a href="javascript:void(0)">大小</a>
								</li>
								<li class="lztype"><span>1</span>
									<a href="javascript:void(0)">单双</a>
								</li>
								<!--<li class="lztype"><span>3</span>
									<a href="javascript:void(0)">龙虎</a>
								</li>
								<li class="lztype"><span>11</span>
									<a href="javascript:void(0)">冠亚和单双</a>
								</li>
								<li class="lztype"><span>12</span>
									<a href="javascript:void(0)">冠亚和大小</a>
								</li>-->

							</ul>
						</div>
					</div>
					<div class="listcontent">
						<div class="box">
							<div id="box11" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													今日累计：单(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box12" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="大">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="小">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box13" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">龙</option>
														<option value="0">虎</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：龙(<span class="count left_count" data="龙">0</span>)&nbsp;&nbsp;虎(<span class="count right_count" data="虎">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box21" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：单(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box22" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box23" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">龙</option>
														<option value="0">虎</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：龙(<span class="count left_count" data="龙">0</span>)&nbsp;&nbsp;虎(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box31" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：单(<span class="count left_count" data="龙">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box32" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="龙">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box33" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">龙</option>
														<option value="0">虎</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：龙(<span class="count left_count" data="龙">0</span>)&nbsp;&nbsp;虎(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box41" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：单(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box42" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box43" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">龙</option>
														<option value="0">虎</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：龙(<span class="count left_count" data="龙">0</span>)&nbsp;&nbsp;虎(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box51" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：单(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box52" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box53" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">龙</option>
														<option value="0">虎</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：龙(<span class="count left_count" data="龙">0</span>)&nbsp;&nbsp;虎(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box61" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：单(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box62" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box71" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：单(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box72" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box81" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：单(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box82" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box91" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：单(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box92" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="龙">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box101" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：单(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box102" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box111" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">单</option>
														<option value="0">双</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：单(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;双(<span class="count right_count" data="单">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div id="box112" class="item item_1   ball_1 ">
								<div class="dsLZ">
									<table class="lz_table_head  g_w1000">
										<tbody>
											<tr>
												<td>连续出现&nbsp;<input class="txtNum" value="1" type="number">&nbsp;次以上&nbsp;
													<select class="secType">
														<option value="1">大</option>
														<option value="0">小</option>
													</select>
													<input type="button" class="btnCheck" onclick="doCheck('ZhongHeMol',1)" value="确定">出现的次数为: <span class="sec_count">0</span>
												</td>
												<td></td>
												<td class="righttd">
													<span class="now_l"></span><span class="jinri">今天</span>&nbsp;累计：大(<span class="count left_count" data="">0</span>)&nbsp;&nbsp;小(<span class="count right_count" data="">0</span>)
													<span class="important"><span class="ifgj"></span>&nbsp;<span class="ifds"></span>&nbsp;&nbsp;&nbsp;最新</span>
												</td>
												<td class="tobottom"></td>
											</tr>
										</tbody>
									</table>
									<div class="item_con" dir="rtl">
										<table class="lz_table_con" border="0" cellpadding="1" cellspacing="1">
											<tbody>
												<tr class="tablebox">
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
					<?php $__Template->display("themes/168pc/foot"); ?>

		<script type="text/javascript" src="/themes/168pc/js/lib/calendar.js"></script>
	</body>
	<script type="text/javascript" src="/themes/168pc/js/lib/config.js"></script>
	<script type="text/javascript" src="/themes/168pc/js/loacal/animate/animate.js"></script>
	<script type="text/javascript" src="/themes/168pc/js/lib/GA.js"></script>
	<script type="text/javascript" src="/themes/168pc/js/loacal/pk10/pk10_daxiaods.js"></script>
	<script type="text/javascript" src="/themes/168pc/js/loacal/pk10/pk10_kai.js"></script>

</html>";s:12:"compile_time";i:1519031570;}";