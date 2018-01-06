$(function()
{
	var listticker = function()
	{
		setTimeout(function(){
			$('.listticker li:first').animate( {marginTop: '-180px'}, 1300, function()
			{
				$(this).appendTo('div.listticker' ).removeAttr('style');	
			});
			listticker();
		}, 5000);
	};
	listticker();
});