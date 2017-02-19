	
var itemsType;
function getItemsId()	{
	var aKeyValue = window.location.search.substring(1).split("&");
	var itemsId = aKeyValue[0].split("=")[1];
	return itemsId;
};

$(document).ready(function()	{
	var itemsId = getItemsId();	//get data by url params
	$.getJSON("includes/menu.json", function(data)	{
		$.each(data, function(k, v)	{
			if(v.id == itemsId)	{
				$('#subktgr').append("<a href='manu2.html?itemsId=" + this.id + "' id='CurrSubktgr'>"+this.name+"</a>");
				$.each(v.items, function()	{
					$('#items').append("<section>" + this.name + "<span>"+ this.price + "</span></section>");
				});	
			}
			else	{
				$('#subktgr').append("<a href='manu2.html?itemsId=" + this.id + "'>"+this.name+"</a>");
			}
		});	
		$('#items').append("<section></section>");
	});
	
})
