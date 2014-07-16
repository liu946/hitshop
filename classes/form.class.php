<?php
class Form {
	/**
	 * �༭��
	 * @param int $textareaid
	 * @param int $toolbar    ��basic full ��desc����
	 * @param int $color �༭����ɫ
	 * @param string $alowuploadexts �����ϴ�����
	 * @param string $height �༭���߶�
	 * @param string $disabled_page �Ƿ���÷�ҳ���ӱ���
	 */
	public static function editor($textareaid = 'content', $toolbar = 'basic', $height = 200, $color = '', $up=true) {
		$str ='';
		if(!defined('EDITOR_INIT')) {
			$str .= '<script type="text/javascript" src="'.B_PUBLIC.'/js/ckeditor/ckeditor.js"></script>';
			define('EDITOR_INIT', 1);
		}
	
		if($toolbar == 'basic') {
			$toolbar = "['Bold', 'Italic','Underline','Strike','NumberedList', 'BulletedList', 'TextColor','BGColor', 'Link', 'Unlink', '-', 'Image','Flash','Table','Smiley','SpecialChar'],['RemoveFormat'],
		   \r\n";
		} elseif($toolbar == 'full') {
		   $toolbar = "['Source','-','Templates'],
		    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
		    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],['ShowBlocks'],['Image','Capture','Flash'],['Maximize'],
		    '/',
		    ['Bold','Italic','Underline','Strike','-'],
		    ['Subscript','Superscript','-'],
		    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		    ['Link','Unlink','Anchor'],
		    ['Table','HorizontalRule','Smiley','SpecialChar'],
		    '/',
		    ['Styles','Format','Font','FontSize'],
		    ['TextColor','BGColor'],
		    ['attachment'],\r\n";
		  
		} elseif($toolbar == 'desc') {
			$toolbar = "['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'Image', '-','Source'],\r\n";
		
		
		} elseif($toolbar == 'basicnoup') {
			$toolbar = "['Bold', 'Italic','Underline','Strike','NumberedList', 'BulletedList', 'TextColor','BGColor', 'Link', 'Unlink', '-', 'Table','Smiley','SpecialChar'],['RemoveFormat'],
		   \r\n";
		} else {
			$toolbar = '';
		}
		$str .= "<script type=\"text/javascript\">\r\n";
		$str .= "CKEDITOR.replace( '$textareaid',{";

	


		$str .= "height:{$height},";
	
	
		if($color) {
			$str .= "extraPlugins : 'uicolor',uiColor: '$color',";
		}
		
		if($up) {	
			$str .="filebrowserImageUploadUrl:'".B_URL."/upimage',";
			$str .="filebrowserFlashUploadUrl:'".B_URL."/upflash',";
		}
		$str .= "toolbar :\r\n";
		$str .= "[\r\n";
		$str .= $toolbar;
		$str .= "]\r\n";
		//$str .= "fullPage : true";
		$str .= "});\r\n";
		$str .= '</script>';
		return $str;
	}
	/**
	 * ����ʱ��ؼ�
	 * 
	 * @param $name �ؼ�name��id
	 * @param $value ѡ��ֵ
	 * @param $isdatetime �Ƿ���ʾʱ��
	 * @param $loadjs �Ƿ��ظ�����js����ֹҳ�������ز������µĿؼ��޷���ʾ
	 * @param $showweek �Ƿ���ʾ�ܣ�ʹ�ã�true | false
	 */
	public static function date($name, $value = '', $isdatetime = 0, $loadjs = 0) {
		if($value == '0000-00-00 00:00:00') $value = '';
		$id = preg_match("/\[(.*)\]/", $name, $m) ? $m[1] : $name;
		if($isdatetime) {
			$size = 21;
			$format = '%Y-%m-%d %H:%M:%S';
			$showsTime = 12;
		} else {
			$size = 10;
			$format = '%Y-%m-%d';
			$showsTime = 'false';
		}
		$str = '';
		if($loadjs || !defined('CALENDAR_INIT')) {
			define('CALENDAR_INIT', 1);
			$str .= '<script src="'.B_PUBLIC.'/js/date/js/jscal2.js"></script>
   				 <script src="'.B_PUBLIC.'/js/date/js/lang/cn.js"></script>
   				 <link rel="stylesheet" type="text/css" href="'.B_PUBLIC.'/js/date/css/jscal2.css" />
    				<link rel="stylesheet" type="text/css" href="'.B_PUBLIC.'/js/date/css/border-radius.css" />
    				<link rel="stylesheet" type="text/css" href="'.B_PUBLIC.'/js/date/css/steel/steel.css" />';
		}
		$str .= '<input type="text" name="'.$name.'" id="'.$id.'" value="'.$value.'" size="'.$size.'" class="date" readonly>&nbsp;';
		$str .= '<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
		    inputField : "'.$id.'",
		    trigger    : "'.$id.'",
		    dateFormat: "'.$format.'",
		    showTime: '.$showsTime.',
		    minuteStep: 1,
		    onSelect   : function() {this.hide();}
			});
        </script>';
		return $str;
	}

	/**
	 * ��ɫ�ؼ�
	 * 
	 * @param $name �ؼ�name
	 * @param $value ѡ��ֵ
	 */
	public static function color($name, $value = '000000') {
	
		if(!defined('COLOR_INIT')) {
			define('COLOR_INIT', 1);
			$str= '<script src="'.B_PUBLIC.'/js/jscolor/jscolor.js"></script>';
   			
		}
		$str .= '<input class="color" style="width:48px;height:16px;overfrom:hidden" name="'.$name.'" value="'.$value.'" />';
	
		return $str;
	}

}
