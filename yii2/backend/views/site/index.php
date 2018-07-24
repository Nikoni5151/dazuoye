<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully landed on our management backstage.</p>

        <p>信息相关</p>

        <p>
            <a class="btn btn-lg btn-success" href="<?php echo Url::to(['np-member/index']) ?>">浏览成员</a>
            <a> </a>
            <a class="btn btn-lg btn-success" href="<?php echo Url::to(['site/teamwork']) ?>">作业下载</a>
            <a> </a>
            <a class="btn btn-lg btn-success" href="<?php echo Url::to(['np-message/index']) ?>">留言管理</a>
        </p>

        <p>世界杯相关</p>

        <p>
            <a class="btn btn-lg btn-success" href="<?php echo Url::to(['wc-country/index']) ?>">查看国家</a>
            <a> </a>
            <a class="btn btn-lg btn-success" href="<?php echo Url::to(['wc-coach/index']) ?>">查看教练</a>
            <a> </a>
            <a class="btn btn-lg btn-success" href="<?php echo Url::to(['wc-team/index']) ?>">查看球队</a>
            <a> </a>
            <a class="btn btn-lg btn-success" href="<?php echo Url::to(['wc-player/index']) ?>">查看球员</a>
            <a> </a>
            <br/><br/>
            <a class="btn btn-lg btn-success" href="<?php echo Url::to(['wc-match/index']) ?>">查看比赛</a>
            <a> </a>
            <a class="btn btn-lg btn-success" href="<?php echo Url::to(['wc-place/index']) ?>">查看场地</a>
            <a> </a>
            <a class="btn btn-lg btn-success" href="<?php echo Url::to(['wc-moment/index']) ?>">精彩瞬间</a>
        </p>

    </div>

    <?php /*
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
    */ ?>
</div>
