<div id="site">
  <div id="content_2_column">
    <?php $this->load->view('admin/2nd_menu'); ?>
    <div id="channel_full">
      <div id="manager_header">
        <h1 id="lblPageName">Reports</h1>
      </div>

      <?php $this->load->view('admin/report_left'); ?>

      <div id="ManagerWorkArea">
        <div style="overflow: hidden;" id="leftchannel_customer">
          <?php echo form_open('reports/sales_by_date'); ?>
          <table border="0" width="300" cellpadding="2" cellspacing="2" style="margin-left: 250px; margin-top: 40px;">
            <tr>
              <td width="120"><b>Start Date :</b></td>
              <td><input type="text" name="sdate" class="selector" /></td>
            </tr>
            <tr>
              <td><b>End Date :</b></td>
              <td><input type="text" name="edate" class="selector" /></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="submit" value="Show Report" /></td>
            </tr>
          </table>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>