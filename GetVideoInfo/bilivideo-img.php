<!doctype html>
<html lang="zh-cn">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/fuckbootstrap.css" rel="stylesheet">
    <!-- Fuck you Bootstrap by Piezi-->
  
      <title>bilibili视频信息查询</title>
      
  </head>
  
  <body>
  <h2><p class="text-center">bilibili视频信息查询</p></h2>
  
  <style>
.img-box{
	padding-bottom:100%;
}
.img-box img{
	position:absolute;
	top:0;
	bottom:0;
	left:0;
	right:0;
	width:100%;
	margin:auto;
}
</style>

<form action="" method="post">
  <div class="form-group">
  <input type="text" name="av" class="form-control" id="exampleInputPassword1" placeholder="请输入视频的AV号">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">提交</button>
</form>
<br>

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
//echo('<br><br>描述='.$ret->pic);
}
?>

  </div>
  </div>
  <br>
  <br>
  
<div class="text-center">
<?php
/* *@通过curl方式获取指定的图片到本地 *@ 完整的图片地址 *@ 要存储的文件名 */ function getImg($url = "", $filename = "") { 
//去除URL连接上面可能的引号
 //$url = preg_replace( '/(?:^['"]+|['"/]+$)/', '', $url ); 
$hander = curl_init(); $fp = fopen($filename,'wb'); curl_setopt($hander,CURLOPT_URL,$url); curl_setopt($hander,CURLOPT_FILE,$fp); curl_setopt($hander,CURLOPT_HEADER,0); curl_setopt($hander,CURLOPT_FOLLOWLOCATION,1); 
//curl_setopt($hander,CURLOPT_RETURNTRANSFER,false);
//以数据流的方式返回数据,当为false是直接显示出来 
curl_setopt($hander,CURLOPT_TIMEOUT,60); curl_exec($hander); curl_close($hander); fclose($fp); Return true; 
}

if(isset($_POST['submit'])){
//echo('<img src="'.$ret->pic.'" class="img-responsive " alt="cover"></div>');
getimg($ret->pic,basename($ret->pic));
echo('<img src="'.basename($ret->pic).'" class="img-responsive " alt="cover"></div>');
//$ch = curl_init();
//curl_setopt ($ch, CURLOPT_URL, $ret->pic);
//curl_setopt ($ch, CURLOPT_REFERER, "http://www.bilibili.com/");
//curl_exec ($ch);
//curl_close ($ch);
}
?>
</div>
<br>
<br>

<p>©2018  <a href="https://blingwang.cn">派兹</a> 版权所有</p>
<p>感谢<a href="https://wxserver.cn">Maggienorth</a>对本工具做出的大力支持</p>
<p>Web frame by<a href="https://v4.bootcss.com"> Bootstrap</a>，遵守<a href="https://github.com/twbs/bootstrap/blob/master/LICENSE">MIT</a>协议。</p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>