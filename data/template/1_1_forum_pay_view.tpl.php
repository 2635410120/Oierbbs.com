<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('pay_view');?><?php include template('common/header'); if(empty($_GET['infloat'])) { ?>
<div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <?php echo $navigation;?></div>
</div>
<div id="ct" class="wp cl">
<div class="mn">
<div class="bm bw0">
<?php } ?>

<div class="f_c">
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">记录</em>
<span>
<?php if(!empty($_GET['infloat'])) { ?><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>')" title="关闭">关闭</a><?php } ?>
</span>
</h3>
<div class="c floatwrap">
<table class="list" cellspacing="0" cellpadding="0">
<thead>
<tr>
<td>用户名</td>
<td>时间</td>
<td><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?></td>
</tr>
</thead>
<?php if($loglist) { if(is_array($loglist)) foreach($loglist as $log) { ?><tr>
<td><a href="home.php?mod=space&amp;uid=<?php echo $log['uid'];?>"><?php echo $log['username'];?></a></td>
<td><?php echo $log['dateline'];?></td>
<td><?php echo $log[$extcreditname];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?></td>
</tr>
<?php } } else { ?>
<tr><td colspan="3">目前没有用户购买此主题</td></tr>
<?php } ?>
</table>
</div>
</div>

<?php if(empty($_GET['infloat'])) { ?>
</div>
</div>
</div>
<?php } include template('common/footer'); ?>