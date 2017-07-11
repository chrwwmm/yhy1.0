<?php
    //添加联系我们信息部分代码
    require_once('config.php');
    $site    = $_POST['site']; //地址
    $tel     = $_POST['tel'];    //电话
    $qq  = $_POST['qq'];//qq
    $email   = $_POST['email'];    //电子邮件
    $producesite   = $_POST['producesite'];    //生产地址
    if(empty($site)){
        echo "<script>alert('请填写地址');history.go(-1);</script>";
    }else if(empty($tel)){
        echo "<script>alert('请填写电话');history.go(-1);</script>";
    }else if(empty($qq)){
        echo "<script>alert('请填写qq');history.go(-1);</script>";
    }else if(empty($email)){
        echo "<script>alert('请填写电子邮件');history.go(-1);</script>";
    }else if(empty($producesite)){
        echo "<script>alert('请填写生产地址');history.go(-1);</script>";
    }else{
    	$sql = "UPDATE contact set site='$site',tel='$tel',qq='$qq',email='$email',producesite='$producesite'";
    	$res = mysql_query($sql);
    	if($res){
        	echo "<script>alert('修改公司信息成功');location.href='../admin/contact.php'</script>";
    	}else{
        	echo "<script>alert('修改公司信息失败');history.go(-1);</script>";
    	}
    }
?>