<?php 


<h1> Upload your poem </h1>



<!-- body -->
<div id="login" align="right">
<a href="">[Login]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div id="titlebg" align="center">
<br/>
<img src="../css/headerbk.png" align="center"></img>

<div align="center">
<form  class="f1" action="./index.php?c=addRecord" method="post" enctype="" onsubmit="return 
checkSubmit()">
    <b>Login </b>
    <br />
    <input type="hidden" name="ac" value="log">
    <label for="userName">Username</label>
    <input type="text" name="userName" size="12" maxlength="20"/><br />
    <label for="password">Password&nbsp; </label>
    <input type="text"  name="password" size="12"/>
    <br />
    <input type="submit" value="login"/>    
</form>
</div>
<!-- end body -->



