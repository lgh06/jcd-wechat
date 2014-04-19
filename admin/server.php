<?php
header('Content-Type:text/html;charset=utf-8');
	$parentdir = dirname(dirname(__FILE__));
	define("UPLOADDIR",$parentdir.'/upload');//最前最后都不带斜杠
	@require_once $parentdir.'/common/db/db_mysql.class.php';
	@$upfile=$_REQUEST["upfile"];
	
	
	
	
	//判断上传是否是图片格式jpg","jpeg","gif","png
	$alltype=array("image/pjpeg","image/jpeg","image/gif","image/png");
	if(in_array(strtolower(trim($_FILES['upfile']['type'])), $alltype)){
		$image_dd=@getimagesize($_FILES['upfile']['tmp_name']);//获取图片宽，高，类型，文本字符串,返回是一个四维数组
		if( (!is_array($image_dd))||(exif_imagetype($_FILES['upfile']['tmp_name'])==false))
		{ exit("文件不是图片。请重传。");}
		
	}else{
		echo '<script type="text/javascript">alert("商品图片格式不正确!")</script>';
		exit;
	}
	
	//图片大小,小于2M
	if($_FILES['upfile']['size'] > 2*1024*1024){
		echo '<script type="text/javascript">alert("上传商品图片大小不能超过2M!")</script>';
		exit;
	}
	
	//改文件名，改路径
	$source=$_FILES['upfile']['tmp_name'];
	//var_dump($source);
	//加入时间戳修改文件名
	$arr=explode(".", $_FILES['upfile']['name']);
	$filename=$arr[0].'-'.time().'.'.$arr[1];//新文件名
	$dest= UPLOADDIR.'/'.$filename;//新地址
	
	//目录不存在 则创建目录
	
	if(!is_dir(dirname($dest))){
	mkdir(UPLOADDIR,0755);
	
	}
	
	/* //对Windows的路径分割符做判断。Linux：/ Windows: \
	if(strcmp(PATH_SEPARATOR,"\\")== 0){
	$dest = str_replace("/","\\",$dest);
	echo "enter";
	} 
	echo $dest;
	*/
	if(is_uploaded_file($source)){
		if(move_uploaded_file($source, $dest)){
			echo '<script type="text/javascript">alert("上传成功")</script>';
		}else{
			echo '<script type="text/javascript">alert("上传失败!")</script>';
			exit;
		}
	}else{
		echo '<script type="text/javascript">alert("非法上传!")</script>';
		exit;
	}

