<!doctype html>
<html lang="zh-cn">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/fixbootstrap.css" rel="stylesheet">
    <!-- Fuck you Bootstrap by Piezi-->
  
      <title>bilibili_tools-视频信息查询</title>
  </head>
  
  <body>
  <div class="container">
  <h1><p class="text-center">bilibili工具</p></h1>
  <h2><p class="text-center">视频信息查询</p></h2>
  </div>
  
<div class="container">
<form action="" method="post">
  <div class="form-group">
  <input type="text" name="av" class="form-control" id="exampleInputPassword1" placeholder="请输入视频的AV号">
  </div>
  <center><button type="submit" name="submit" class="btn btn-primary">提交</button></center>
</form>
<br>
</div>

<div class="container">
 <div class="card bg-light text-dark">
 <div class="card-body">
<?php
if(isset($_POST['submit'])){
$av=$_POST['av'];
//echo $av;
$url='http://api.bilibili.com/view?type=json&appkey=请在此填入你的App Key&id='.$av;  
$json = file_get_contents($url );  
//echo $json;
$ret=json_decode($json);  
//var_dump($ret);
echo('标题='.$ret->title);
//请加入显示封面图片的功能 pic
echo('<br><br>UP主='.$ret->author);
echo('<br><br>描述='.$ret->description);
}
?>
  </div>
  </div>
  </div>
  <br>

    <div class="container">
   <div class="card bg-light text-dark">
 <div class="card-body">
 <?php
if(isset($_POST['submit'])){
$av=$_POST['av'];
//echo $av;
$url='http://api.bilibili.com/archive_stat/stat?aid='.$av;  
$json = file_get_contents($url );  
//echo $json;
$ret=json_decode($json);  
//var_dump($ret);
if($ret->code==0){
//var_dump($ret);
echo('AV号='.$ret->data->aid);
echo('<br>播放量='.$ret->data->view);
echo('<br>弹幕='.$ret->data->danmaku);
echo('<br>回复='.$ret->data->reply);
echo('<br>播放量='.$ret->data->view);
echo('<br>收藏='.$ret->data->favorite);
echo('<br>硬币='.$ret->data->coin);
echo('<br>分享='.$ret->data->share);
echo('<br>目前排名='.$ret->data->now_rank);
echo('<br>历史最高排名='.$ret->data->his_rank);
echo('<br>推荐='.$ret->data->like);
echo('<br>状态正常，识别码='.$ret->code);
}
else
echo('状态异常，请检查AV号是否有误。识别码='.$ret->code);
}
?>
</div>
  </div>
  </div>
<br>
<br>

<div class="container">
<p>©2018  <a href="https://blingwang.cn">派兹</a> 版权所有</p>
<p>感谢<a href="https://wxserver.cn">Maggienorth</a>对本工具做出的大力支持</p>
<p>Web frame by<a href="https://getbootstrap.com/"> Bootstrap</a>，遵守<a href="https://github.com/twbs/bootstrap/blob/master/LICENSE">MIT</a>协议。</p>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>