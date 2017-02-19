
window.onload = function () {
	var main = document.getElementsByTagName("main")[0];	   // Get the main element 
	var clear = main.getElementsByTagName("span")[0];
	var img1 = document.createElement("img");
	img1.src = "images/home.PNG";
	var a1 = document.createElement('a');
	a1.href= 'index.html';
	a1.appendChild(img1);
	var text3 = document.createTextNode("התחברות משתמש");
	var a2 = document.createElement('a');
	a2.href= 'login.html';
	a2.appendChild(text3);
	var img2 = document.createElement("img");
	img2.src = "images/cart.PNG";
	var img3 = document.createElement("img");
	img3.src = "images/star.PNG";
	var text1 = document.createTextNode("ההזמנות שלי");
	var text2 = document.createTextNode("זמינות מקומות");
	var array = [a1, img2, img3, a2, text1, text2];
	
	var chngcolor = 0;
	var orange =  document.getElementsByClassName("orange");
	for (var i=1; i<orange.length; i++)	{
		orange[i].addEventListener("click",bacgroundColor);
	}
	
    function createDiv() {
        var newDiv = document.createElement("div");       // Create a div node
		main.insertBefore(newDiv, clear);   
		for (var i=0; i<array.length; i++)	{
			var small = document.createElement("section"); 
			small.appendChild(array[i]);
			newDiv.appendChild(small);
		}   
    }	

	if(document.getElementById("menu")){
	    document.getElementById("menu").onclick = function() {
	        if (main.childNodes[0] != clear)	{
	        	main.removeChild(main.childNodes[0]);
	        }
	        else	{
	            var newDiv = new createDiv();
	        }
	    };
	}
		function bacgroundColor()	{
		if(this.className == 'orange')	{
			if (chngcolor == 0) {
		 		chngcolor++;
        	    this.className = 'green';
       		}
       	}
       	else if (this.className == 'green')	{
      		chngcolor = 0;
            this.className = 'orange';
		}
	}
};
$( function() {
    $( "#dialog" ).dialog();
    
    $('.sendToButton').bind('click',function(event){
    	$(event.target).text('נשלח');
    })
    
  } );
  
  function addLine(){
  	$( "#dialog" ).dialog( "close" );

  	$($('tr#dataContainer').children('td')[0]).text('צבי');
  	$($('tr#dataContainer').children('td')[1]).text('19/2/17');
  	$($('tr#dataContainer').children('td')[2]).text('15:15');
  	$($('tr#dataContainer').children('td')[3]).text('22');
  	$($('tr#dataContainer').children('td')[5]).html('<a class="sendToButton" >שלח להכנה</a>');
  	
  	$('.sendToButton').bind('click',function(event){
    	$(event.target).text('נשלח');
    })
  }
