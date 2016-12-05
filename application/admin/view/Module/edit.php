<?php
require dirname(dirname(__FILE__))."/Public/header.php";
require dirname(dirname(__FILE__))."/Public/navibar.php";
require dirname(dirname(__FILE__))."/Public/sidebar.php";
?>
    <style>
        .thisform{
            margin:20px 0px;
            font-size:20px;
        }
        .thisform li{
            margin:10px 0px;
            list-style : none;
            height:50px;
        }
        .thisform li .wz_qxgl_xl{
            float:left;
            margin:0px;
        }
        .thisform li label{
            margin-right:20px;
            display:block;
            float:left;
        }
    </style>


    <div class="well">

        <div id="myTabContent" class="tab-content">
            <div class="tab-pane active in" id="home">

                <form id="tab" method="post" action="">
                    <input type="hidden" name="module_id" value="<?php echo $this->vars['currentmodule']['module_id'];?>"/>
                    <ul class="thisform">
                        <li>
                            <label>模块名称</label>
                            <input type="text" name="module_name" value="<?php echo $this->vars['currentmodule']['module_name'];?>" class="input-xlarge right_nr_zhzgl_sr" required="true" autofocus="true" >
                        </li>
                        <li>
                            <label>模块链接</label>
                            <input type="text" name="module_url" value="<?php if($this->vars['currentmodule']['module_url'] == ''){ echo 'Module/add';}else{echo $this->vars['currentmodule']['module_url'];?><?php } ?>" class="input-xlarge right_nr_zhzgl_sr" required="true">
                        </li>
                        <li>
                            <label>模块排序数字(数字越小越靠前)</label>
                            <input type="text" name="module_sort" value="<?php echo $this->vars['currentmodule']['module_sort'];?>" class="input-xlarge right_nr_zhzgl_sr" >
                        </li>
                        <li style="height:200px;">
                            <label>描述</label>
                            <textarea name="module_desc" rows="3" class="input-xlarge right_nr_zhzgl_xl"><?php echo $this->vars['currentmodule']['module_desc'];?></textarea>
                        </li>
                        <li>
                            <div class="dsjj_nr_menu">
                                <input name="" type="submit" value="提交">
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<?php
require dirname(dirname(__FILE__))."/Public/footer.php";
?>