<?php      //�������Ϊͼ������
session_start();
$im=imagecreatefromjpeg("images/photo.jpg");		//������Ƭ
$textcolor=imagecolorallocate($im,56,73,136);//����������ɫΪ��ɫ��ֵΪRGB��ɫֵ
$fnt="STLITI.TTF"; 
$str="ABCDEFGHIGKLMNOPQRSTUVWXYZ0123456789";
$motto="";
for($i=1;$i<=4;$i++){
	$p=rand(0,35);
	$motto.=substr($str,$p,1);
	} 
$_SESSION['yzm']=$motto;
imageTTFText($im,20,0,10,25,$textcolor,$fnt,$motto);      //дTTF���ֵ�ͼ��
imagejpeg($im);       //����JPEGͼ��
imagedestroy($im);    //����ͼ�Σ��ͷ��ڴ�ռ�
?>
