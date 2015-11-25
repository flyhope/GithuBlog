<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See https://github.com/mrclay/minify/blob/master/docs/CustomServer.wiki.md for other ideas
 **/

return array(
    //CSS
    'index.css'        => ['core/basic', 'index'],  //首页
    'core/basic.css'   => ['core/basic'],	//基础数据
    'manage/index.css' => ['core/basic', 'manage/index'], //管理首页
		
	//JS
	'core/basic.js' => ['core/basic'],	//基础数据
	'manage/basic.js'      => ['core/form', 'manage/basic'],	//管理首页
	'manage/category.js'   => ['core/form', 'manage/category'],	//分类管理页
	'manage/article/update.js'   => ['core/form', 'core/editor', 'manage/article/update'],	//分类管理页
	'manage/article/index.js'    => ['core/pager'],    //文章列表页
    
    'manage/theme/index.js'      => ['core/form', 'manage/theme/index'],   //模板列表页
    
    
);