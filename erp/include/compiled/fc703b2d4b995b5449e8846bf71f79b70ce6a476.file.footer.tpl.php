<?php /* Smarty version Smarty-3.1.15, created on 2018-09-28 13:24:38
         compiled from "D:\WWW\ttjxc\erp\include\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:327605badbb16049f93-65868021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc703b2d4b995b5449e8846bf71f79b70ce6a476' => 
    array (
      0 => 'D:\\WWW\\ttjxc\\erp\\include\\template\\footer.tpl',
      1 => 1538098950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327605badbb16049f93-65868021',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5badbb16050bf2_09210231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5badbb16050bf2_09210231')) {function content_5badbb16050bf2_09210231($_smarty_tpl) {?>                    
	
					<footer>
                        <hr>

                        <p></p>
                    </footer>
				</div>
			</div>
		</div>
    <script src="<?php echo @constant('ADMIN_URL');?>
/assets/lib/bootstrap/js/bootstrap.js"></script>
	
<!--- + -快捷方式的提示 --->
	
<script type="text/javascript">	
	
alertDismiss("alert-success",3);
alertDismiss("alert-info",10);
	
listenShortCut("icon-plus");
listenShortCut("icon-minus");
doSidebar();
</script>
  </body>
</html><?php }} ?>
