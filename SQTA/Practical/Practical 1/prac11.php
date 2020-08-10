<?php
$user=$_POST["user"];
$gift=$_POST["gift"];
if(($user=="0")||($gift=="0"))
{
echo "INVALID DATA";
}
if($user=="1")
{
	if($gift==1)
	{
		echo "KEEP IT UP";
	}
	if($gift==2)
	{
		echo "WORK HARD";
	}
}
if($user=="2")
{
	if($gift==1)
	{
		echo "KEEP IT UP GUEST";
	}
	if($gift==2)
	{
		echo "WORK HARD GUEST";
	}
}
?>