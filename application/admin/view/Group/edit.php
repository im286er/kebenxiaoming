<?php
require dirname(dirname(__FILE__))."/Public/header.php";
require dirname(dirname(__FILE__))."/Public/navibar.php";
require dirname(dirname(__FILE__))."/Public/sidebar.php";
?>

<form id="tab" method="post" action="">
    <div class="wzgl_czjl">

        <table width="855" border="0" cellspacing="0" cellpadding="0" class="right_nr_zhzgl">
            <tr>
                <td height="45" colspan="2" style="font-size:18px">请填写账号组资料</td>
            </tr>
            <tr>
                <td width="117" height="53">账号组名称</td>
                <td width="738"><input name="group_name" type="text" required="true"  value="<?php echo $this->vars['group']['group_name'];?>" class="right_nr_zhzgl_sr"></td>
            </tr>
            <tr>
                <td height="212">描述</td>
                <td><textarea name="group_desc" cols="" rows="" class="right_nr_zhzgl_xl"><?php echo $this->vars['group']['group_desc'];?></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
</form>

<div class="dsjj_nr_menu">
    <input name="" type="submit" value="提交">
</div>

    <!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<?php
require dirname(dirname(__FILE__))."/Public/footer.php";
?>