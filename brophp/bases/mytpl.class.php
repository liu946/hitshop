<?php
/** ******************************************************************************
 * brophp模板引擎Smarty类的扩展，用于初使化成员属性和重载Smarty类中的方法。 * 
 * ******************************************************************************/
	class Mytpl extends Smarty {
		/**
		 * 构造方法，用于初使化Smarty对象中的成员属性
		 *
		 */
		function __construct(){
			parent::__construct();         //调用父类被覆盖的构造方法
			$this->setTemplateDir(APP_PATH."views/".TPLSTYLE);  //模板目录
			$this->setCompileDir(PROJECT_PATH."runtime/comps/".TPLSTYLE."/".TMPPATH);    //里的文件是自动生成的，合成的文件
			$this->auto_literal = false;
			$this->caching = CSTART;     //设置缓存开启
			$this->setCacheDir(PROJECT_PATH."runtime/cache/".TPLSTYLE);  //设置缓存的目录
			$this->cache_lifetime = CTIME;  //设置缓存的时间 
			$this->left_delimiter = "<{";   //模板文件中使用的“左”分隔符号
			$this->right_delimiter = "}>";   //模板文件中使用的“右”分隔符号
		}

		/*
		 * 重载父类Smarty类中的方法
		 * @param	string	$resource_name	模板的位置
		 * @param	mixed	$cache_id	缓存的ID
		 */
		public function display($resource_name = null, $cache_id = null, $compile_id = null, $parent = null) {

			//将部分全局变量直接分配到模板中使用	
			$this->assign("root", B_ROOT);
			$this->assign("app",B_APP);
			$this->assign("url", B_URL);
			$this->assign("public", B_PUBLIC);
			$this->assign("res", B_RES);
		
			if(is_null($resource_name)){
				$resource_name="{$_GET["m"]}/{$_GET["a"]}.".TPLPREFIX;
			}else if(strstr($resource_name,"/")){
				$resource_name=$resource_name.".".TPLPREFIX;
			}else{
				$resource_name=$_GET["m"]."/".$resource_name.".".TPLPREFIX;
			}
			Debug::addmsg("使用模板 <b> $resource_name </b>");
			parent::display($resource_name, $cache_id, $compile_id, $parent);	
		}

		/* 
		 * 重载父类的Smarty类中的方法
		 * @param	string	$tpl_file	模板文件
		 * @param	mixed	$cache_id	缓存的ID
		 */
		public function isCached($tpl_file=null, $cache_id = null, $compile_id = null, $parent = null) {
			if(is_null($tpl_file)){
				$tpl_file="{$_GET["m"]}/{$_GET["a"]}.".TPLPREFIX;
			}else if(strstr($tpl_file,"/")){
				$tpl_file=$tpl_file.".".TPLPREFIX;
			}else{
				$tpl_file=$_GET["m"]."/".$tpl_file.".".TPLPREFIX;
			}
			return parent::isCached($tpl_file, $cache_id, $compile_id, $parent);
		}

		/* 
		 * 重载父类的Smarty类中的方法
		 *  @param	string	$tpl_file	模板文件
		 * @param	mixed	$cache_id	缓存的ID
		 */

		function clearCache($tpl_file = null, $cache_id = null, $compile_id = null, $exp_time = null){
			if(is_null($tpl_file)){
				$tpl_file="{$_GET["m"]}/{$_GET["a"]}.".TPLPREFIX;
			}else if(strstr($tpl_file,"/")){
				$tpl_file=$tpl_file.".".TPLPREFIX;
			}else{
				$tpl_file=$_GET["m"]."/".$tpl_file.".".TPLPREFIX;
			}
			return parent::clearCache($tpl_file = null, $cache_id = null, $compile_id = null, $exp_time = null);
		}
	}
