<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');?><?php include template('m/header'); ?><body>
<div class="warp">
    <div id="headerbanner" class="topicM" style="display: none"></div>
    <div id="header"></div>
    <div id="refreshWait" class="loading mt10" style="display:none;">
            <div class="loadInco">
                <span class="blockG" id="rotateG_01"></span>
                <span class="blockG" id="rotateG_02"></span>
                <span class="blockG" id="rotateG_03"></span>
                <span class="blockG" id="rotateG_04"></span>
                <span class="blockG" id="rotateG_05"></span>
                <span class="blockG" id="rotateG_06"></span>
                <span class="blockG" id="rotateG_07"></span>
                <span class="blockG" id="rotateG_08"></span>
            </div>正在加载...
     </div>
<div id="topcontainer"></div>
    <div id="container" class="container"></div>
  <div class="loading" id="loadNext" style="display:none;">
            <div class="loadInco">
                <span class="blockG" id="rotateG_01"></span>
                <span class="blockG" id="rotateG_02"></span>
                <span class="blockG" id="rotateG_03"></span>
                <span class="blockG" id="rotateG_04"></span>
                <span class="blockG" id="rotateG_05"></span>
                <span class="blockG" id="rotateG_06"></span>
                <span class="blockG" id="rotateG_07"></span>
                <span class="blockG" id="rotateG_08"></span>
            </div>正在加载...
        </div>
        <div id='loadNextPos'></div>
        <div class="loading" id="showAll" style="display:none;">已显示全部</div>
</div>
<div id="backToTopBtn" class="floatLayer db" style="display:none;"><a href="javascript:;" class="upBtn db"></a></div>
<div class="bottomBar"></div>

<script type="text/javascript">
    window.onload = function (){
    	TC.load("forumdisplay.htm");
        JC.file("secure.js");
    	JC.file("navmenu.js");
    	JC.file("quickreply.js");
    	JC.file("index.js");
        JC.file("emotion.js");
        JC.run();
    };
</script><?php include template('m/footer'); ?>