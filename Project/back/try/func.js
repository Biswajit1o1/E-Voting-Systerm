function clickCounter()
{
	var anchor=document.querySelector('a')
	anchor.addEventListener('click',function()
	{
		featch('linkResponse.php')
	})
}
clickCounter();