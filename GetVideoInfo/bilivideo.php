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
  
      <title>bilibili视频信息查询</title>
  </head>
  
  <body>
  <div class="container">
  <h2><p class="text-center">bilibili视频信息查询</p></h2>
  </div>
  
  <div class="container">
<form action="" method="post">
  <div class="form-group">
  <input type="text" name="av" class="form-control" id="exampleInputPassword1" placeholder="请输入视频的AV号">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">提交</button>
</form>
</div>
<br>

<div class="container">
 <div class="card bg-light text-dark">
 <div class="card-body">
 <?php
if(isset($_POST['submit'])){
$av=$_POST['av'];
//echo $av;
$url='http://api.bilibili.com/view?type=json&appkey=在此输入你的App Key&id='.$av;  
$json = file_get_contents($url );  
//echo $json;
$ret=json_decode($json);  
//var_dump($ret);
echo('标题='.$ret->title);
echo('<br>描述='.$ret->description);
//请加入显示封面图片的功能 pic
echo('<br>UP主='.$ret->author);
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
<p>Web frame by<a href="https://v4.bootcss.com"> Bootstrap</a>，遵守<a href="https://github.com/twbs/bootstrap/blob/master/LICENSE">MIT</a>协议。</p>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
