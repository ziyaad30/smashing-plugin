  <div><br />
  <form method="post" action="options.php">
  <?php settings_fields( 'smashing_options_group' ); ?>
  <table cellpadding="3" cellspacing="3">
  <tr valign="top">
  <th scope="row"><label for="smashing_option_apikey" class="commentlabels ">
    <div align="left">Adsterra API Key</div>
  </label></th>
  <td><input name="smashing_option_apikey" type="text" id="smashing_option_apikey" value="<?php echo get_option('smashing_option_apikey'); ?>" size="32" maxlength="32" /></td>
  </tr>
  <tr valign="top">
    <th scope="row"><label for="smashing_option_check" class="commentlabels ">
      <div align="left">Delete all data on Uninstall</div>
    </label></th>
    <td><input name="smashing_option_check" type="checkbox" value="1" <?php checked( '1', get_option( 'smashing_option_check' ) ); ?> /></td>
  </tr>
  <tr valign="top">
    <th scope="row"><div align="left"></div></th>
    <td>&nbsp;</td>
  </tr>
  <tr valign="top">
    <th colspan="2" scope="row"><div align="left">Don't have an API Key? Get one <a href="https://publishers.adsterra.com/api-token/" target="_blank">here.</a></div></th>
    </tr>
  </table>
  <?php  submit_button(); ?>
  </form>
  </div>
