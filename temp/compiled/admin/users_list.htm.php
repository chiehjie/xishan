<?php if ($this->_var['full_page']): ?>
<!-- $Id: users_list.htm 17053 2010-03-15 06:50:26Z sxc_shop $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<div class="form-div">
  <form action="javascript:searchUser()" name="searchForm" >
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
   <?php echo $this->_var['lang']['label_user_name']; ?> &nbsp;<input type="text" name="keyword" /> <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" />
  </form>
</div>

<form method="POST" action="" name="listForm" onsubmit="return confirm_bath()">

<!-- start users list -->
<div class="list-div" id="listDiv">
<?php endif; ?>
<!--用户列表部分-->
<table cellpadding="3" cellspacing="1">
  <tr>
   
  <th><?php echo $this->_var['lang']['username']; ?></th>
  <th><?php echo $this->_var['lang']['user_head']; ?></th>
  <th><?php echo $this->_var['lang']['phone']; ?></th>
     <th><?php echo $this->_var['lang']['user_money']; ?></th>
    <th><?php echo $this->_var['lang']['frozen_money']; ?></th>
    <th><?php echo $this->_var['lang']['rank_points']; ?></th>
    <th><?php echo $this->_var['lang']['pay_points']; ?></th>
    <th><?php echo $this->_var['lang']['user_type']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  <tr>
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
  <tr> 
    <td ><?php echo $this->_var['user']['user_name']; ?></td>
    <td><img src="../data/user_head/<?php echo $this->_var['user']['user_head']; ?>" width="80" height="80" style="border-radius:40px"></td>
    <td><?php echo $this->_var['user']['phone']; ?></td>
     <td><?php echo $this->_var['user']['user_money']; ?></td>
    <td><?php echo $this->_var['user']['frozen_money']; ?></td>
    <td><?php echo $this->_var['user']['rank_points']; ?></td>
    <td><?php echo $this->_var['user']['pay_points']; ?></td>
    <td><?php echo $this->_var['user']['role']; ?></td>
        <td align="center"> 
      <a href="users.php?act=edit&id=<?php echo $this->_var['user']['user_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" border="0" height="16" width="16" /></a>
      <a href="users.php?act=delete&user_id=<?php echo $this->_var['user']['user_id']; ?>" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>
    </td>
  </tr>
  <?php endforeach; else: ?>
  <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
      <td colspan="2">
      <input type="hidden" name="act" value="batch_remove" />
      </td>
      <td align="right" nowrap="true" colspan="8">
      <?php echo $this->fetch('page.htm'); ?>
      </td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>
<!-- end users list -->
</form>
<script type="text/javascript" language="JavaScript">
<!--
listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


onload = function()
{
    document.forms['searchForm'].elements['keyword'].focus();
    // 开始检查订单
    startCheckOrder();
}

/**
 * 搜索用户
 */
function searchUser()
{
    listTable.filter['keywords'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter['rank'] = document.forms['searchForm'].elements['user_rank'].value;
    listTable.filter['pay_points_gt'] = Utils.trim(document.forms['searchForm'].elements['pay_points_gt'].value);
    listTable.filter['pay_points_lt'] = Utils.trim(document.forms['searchForm'].elements['pay_points_lt'].value);
    listTable.filter['page'] = 1;
    listTable.loadList();
}

function confirm_bath()
{
  userItems = document.getElementsByName('checkboxes[]');

  cfm = '<?php echo $this->_var['lang']['list_remove_confirm']; ?>';

  for (i=0; userItems[i]; i++)
  {
    if (userItems[i].checked && userItems[i].notice == 1)
    {
      cfm = '<?php echo $this->_var['lang']['list_still_accounts']; ?>' + '<?php echo $this->_var['lang']['list_remove_confirm']; ?>';
      break;
    }
  }

  return confirm(cfm);
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>