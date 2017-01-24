<!-- $Id -->
<?php echo $this->fetch('pageheader.htm'); ?>

<div class="main-div">
  <form name="theForm">
    <table width="100%">
      <tr>
        <td colspan="2"><?php echo $this->_var['lang']['user_guide']; ?></td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['label_old_string']; ?></td>
        <td><input name="old_string" type="text" id="old_string"></td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['label_new_string']; ?></td>
        <td><input name="new_string" type="text" id="new_string"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="button" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" onclick="start_change()" />
        </div></td>
      </tr>
    </table>
  </form>
</div>

<div class="list-div">
  <table id="change_log" cellpadding="3" cellspacing="1">
    <tr>
      <th><?php echo $this->_var['lang']['update_log']; ?></th>
    </tr>
  </table>
</div>

<script language="JavaScript" type="text/javascript">
<!--

    /**
     * 开始更新：检查原串和新串
     */
    function start_change()
    {
      var old_key = document.forms['theForm'].elements['old_string'].value;
      var new_key = document.forms['theForm'].elements['new_string'].value;

      Ajax.call("virtual_card.php?is_ajax=1&act=start_change", "old_key=" + old_key + "&new_key=" + new_key, start_change_response, "GET", "JSON");
    }

    function start_change_response(result)
    {
        if (result.error == 0)
        {
            var tbl = document.getElementById('change_log');
            var body = tbl.rows[0].parentNode;
            for (var i = body.childNodes.length - 1; i > 0; i--)
            {
                if (body.childNodes[i].tagName == 'TR')
                {
                    body.deleteRow(body.childNodes[i].rowIndex);
                }
            }

            var row = tbl.insertRow(-1);
            var cell = row.insertCell(-1);
            cell.innerHTML = result.content;

            var row = tbl.insertRow(-1);
            var cell = row.insertCell(-1);
            cell.id = 'updating';
            cell.innerHTML = updating_info;

            var row = tbl.insertRow(-1);
            var cell = row.insertCell(-1);
            //cell.innerHTML = updated_info;

            Ajax.call("virtual_card.php?is_ajax=1&act=on_change", "updated=0", on_change_response, "GET", "JSON");
        }

        if (result.message.length > 0)
        {
          alert(result.message);
        }
    }

    function on_change_response(result)
    {
      if (result.error == 0)
      {
          // 没出错
          if (result.message == '')
          {
              // 未结束
              Ajax.call("virtual_card.php?is_ajax=1&act=on_change", "updated=" + result.content, on_change_response, "GET", "JSON");
          }
          else
          {
              // 已结束
              var tbl = document.getElementById('change_log');
              var row = tbl.insertRow(-1);
              var cell = row.insertCell(-1);
              cell.innerHTML = result.message;
          }
      }
      else
      {
          // 出错了
          var tbl = document.getElementById('change_log');
          var row = tbl.insertRow(-1);
          var cell = row.insertCell(-1);
          cell.innerHTML = result.message;
      }
    }

-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>