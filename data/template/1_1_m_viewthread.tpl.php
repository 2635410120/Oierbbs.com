<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('viewthread');?><?php include template('m/header'); ?><body class="bg">
    <div id="headerbanner" class="topicM" style="display: none"></div>
    <div class="tipInfo" style="display:none;">
        <p class="tipBor">如果喜欢这个话题，请点击右上角图标分享<span class="arrLeft"></span></p>
    </div>
    <div class="maskLayer" style="position:fixed;top:0;display:none;"></div>
    <div id="frombar" class="return" style="display:none;"></div>
    <div class="warp">
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
        <div id="topcontainer" style="display:none;"></div>
        <div class="header topH" style="display:none;"></div>
        <div id="containerHeader" style="display:none;"></div>
        <div class="container conM"></div>
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
        <div class="bottomBar"></div>
    </div>
<script type="text/javascript">
    window.onload = function (){
        TC.load("viewthread.htm");
        TC.load("viewthread_thread.htm");
        JC.file("secure.js");
        JC.file("quickreply.js");
        JC.file("navmenu.js");
        JC.file("viewthread.js");
        JC.file("imageview.js");
        JC.file("emotion.js");
        JC.run();
    };
</script><?php include template('m/footer'); ?>