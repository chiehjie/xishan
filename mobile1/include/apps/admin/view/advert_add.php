{include file="pageheader"}
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{$ur_here}</h3>
  </div>
  <div class="panel-body">
    <form action="{url('add')}" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
      <table id="general-table" class="table table-hover ectouch-table">
        <tr>
          <td width="200">{$lang['position_name']}</td>
          <td><div class="col-md-4">
              <input type='text' name='data[position_name]' maxlength="20"  class="form-control input-sm" />
            </div></td>
        </tr>
        <tr>
          <td>{$lang['ad_width']}</td>
          <td>
            <div class="col-md-3">
              <input type='text' name='data[ad_width]' maxlength="10"  class="form-control input-sm" />
            </div>
            <span>{$lang['px']}</span>
            </td>
        </tr>
        <tr>
          <td>{$lang['ad_height']}</td>
          <td>
            <div class="col-md-3">
              <input type='text' name='data[ad_height]' maxlength="10"  class="form-control input-sm" />
            </div>
            <span>{$lang['px']}</span>
          </td>
        </tr>
        <tr>
          <td>{$lang['position_desc']}</td>
          <td><div class="col-md-5">
              <input type='text' name='data[position_desc]' maxlength="100" class="form-control input-sm" />
            </div>
          </td>
        </tr>
        <tr>
          <td>{$lang['position_style']}</td>
          <td><div class="col-md-6">
              <textarea name='data[position_style]' rows="6" class="form-control input-sm">{$posit_arr['position_style']}</textarea>
            </div></td>
        </tr>

        <tr>
          <td></td>
          <td><div class="col-md-4">
              <input type="submit" value="{$lang['button_submit']}" class="btn btn-primary" />
              <input type="reset" value="{$lang['button_reset']}" class="btn btn-default" />
            </div></td>
        </tr>
      </table>
    </form>
  </div>
</div>

{include file="pagefooter"}