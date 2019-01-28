<?php
if(isset($_POST['pass1']))
{
    if( $_POST['pass1']!=NULL && $_POST['pass2']!=NULL)
    {
        if($_POST['pass1']==$_POST['pass2'])
        {
            echo '<p style="color:white">password matched</p>';
        }
        else{
            echo '<p style ="color:white">password does not match</p>';
        }
    }
    else{
        echo '<p style ="color:white">password required!</p>';
    }
}