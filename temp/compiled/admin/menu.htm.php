<!DOCTYPE html>
<!-- saved from url=(0055)http://115.29.176.130/restaurant/Admin/Admin/index.html -->
<html lang="zh-cn">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="styles/pintuer.css">
    <link rel="stylesheet" href="styles/admin.css">
    <script src="js/jquery.js"></script>
  <script src="js/pintuer.js"></script> 
</head>
<body style="background-color:#f2f9fd;">
<div class="leftnav">
  <div class="leftnav-title"><strong>菜单列表</strong></div>
  <?php $_from = $this->_var['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'menu');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['menu']):
?>
<?php if ($this->_var['menu']['action']): ?>
  <li class="explode"><a href="<?php echo $this->_var['menu']['action']; ?>" target="main-frame"><?php echo $this->_var['menu']['label']; ?></a></li>
<?php else: ?>
  <li class="explode" key="<?php echo $this->_var['k']; ?>" name="menu">
    <h2><?php echo $this->_var['menu']['label']; ?></h2>
    <?php if ($this->_var['menu']['children']): ?>
  
      <ul >
    <?php $_from = $this->_var['menu']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
        <li><a href="<?php echo $this->_var['child']['action']; ?>" class="icon-caret-right" target="main-frame"><?php echo $this->_var['child']['label']; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <?php endif; ?>
  </li>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
    $(this).next().slideToggle(200);  
    $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
      $("#a_leader_txt").text($(this).text());
      $(".leftnav ul li a").removeClass("on");
    $(this).addClass("on");
  })
});
</script>

<script type="text/javascript">

//搜索
function changesearch(){  
    
}

//单个删除
function del(id,mid,iscid){
  if(confirm("您确定要删除吗?")){
    
  }
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
    if (this.checked) {
      this.checked = false;
    }
    else {
      this.checked = true;
    }
  });
})

//批量删除
function DelSelect(){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){
    var t=confirm("您确认要删除选中的内容吗？");
    if (t==false) return false;   
    $("#listform").submit();    
  }
  else{
    alert("请选择您要删除的内容!");
    return false;
  }
}

//批量排序
function sorts(){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){  
    
    $("#listform").submit();    
  }
  else{
    alert("请选择要操作的内容!");
    return false;
  }
}


//批量首页显示
function changeishome(o){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){
    
    $("#listform").submit();  
  }
  else{
    alert("请选择要操作的内容!");    
  
    return false;
  }
}

//批量推荐
function changeisvouch(o){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){
    
    
    $("#listform").submit();  
  }
  else{
    alert("请选择要操作的内容!");  
    
    return false;
  }
}

//批量置顶
function changeistop(o){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){    
    
    $("#listform").submit();  
  }
  else{
    alert("请选择要操作的内容!");    
  
    return false;
  }
}


//批量移动
function changecate(o){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){    
    
    $("#listform").submit();    
  }
  else{
    alert("请选择要操作的内容!");
    
    return false;
  }
}

//批量复制
function changecopy(o){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){  
    var i = 0;
      $("input[name='id[]']").each(function(){
        if (this.checked==true) {
        i++;
      }   
      });
    if(i>1){ 
        alert("只能选择一条信息!");
      $(o).find("option:first").prop("selected","selected");
    }else{
    
      $("#listform").submit();    
    } 
  }
  else{
    alert("请选择要复制的内容!");
    $(o).find("option:first").prop("selected","selected");
    return false;
  }
}

</script>

</div>


</body></html>