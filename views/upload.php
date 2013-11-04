<?php

# Views: upload
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal


    include_once 'BaseView.php';

    class upload extends BaseView {

    public $upload = <<<UPLOAD
<form name="poem_data" method="POST" action="index.php?c=upload"> 
<!-- <?php echo action= . "\"" . BASEURL . "/controllers/upload_controller.php\"" ?> 
-->
<table> <!-- format table -->
<tr>
<th>Upload your Limerick</th></tr>
<tr><td>
        <label>
            Author:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="author" id="author" size="30" maxlength="100" required="required">
        </label> </td></tr>
        <br />
<tr><td><label>
            Poem Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="title" size="30" maxlength="100" required="required">
        </label>  </td></tr>
        <br />
<tr><td><label>  
            Poem Contents:
            <textarea rows="15" cols="40" id="poem_contents" name="poem_contents" required="required"></textarea>
        </label> </td></tr>

<tr><td>
	<input type="hidden" name="c" value="main">
	<input type="hidden" name="view" value="notloggedin">
	<input type="submit" value="Cancel">



<tr><td>
        <input type="submit" name="submit_poem">
    </fieldset></td></tr>
</table>
</form>  

UPLOAD;

        public function drawUploadView() {
            echo $this->upload;
        }
    }
?>
