
window.onload = function () {
	var main = document.getElementsByTagName("main")[0];	   // Get the main element 
	var clear = main.getElementsByTagName("span")[0];
	var img1 = document.createElement("img");
	img1.src = "images/home.PNG";
	var a1 = document.createElement('a');
	a1.href= 'index.html';
	a1.appendChild(img1);
	var img2 = document.createElement("img");
	img2.src = "images/cart.PNG";
	var img3 = document.createElement("img");
	img3.src = "images/star.PNG";
	var text1 = document.createTextNode("ההזמנות שלי");
	var text2 = document.createTextNode("זמינות מקומות");
	var array = [a1, img2, img3, text1, text2];
	
	var chngcolor = 0;
	var orange =  document.getElementsByClassName("orange");
	for (var i=1; i<orange.length; i++)	{
		orange[i].addEventListener("click",bacgroundColor);
	}
	
    function createDiv() {
        var newDiv = document.createElement("div");       // Create a div node
		main.insertBefore(newDiv, clear);   
		for (var i=0; i<5; i++)	{
			var small = document.createElement("section"); 
			small.appendChild(array[i]);
			newDiv.appendChild(small);
		}   
    }	

    document.getElementById("menu").onclick = function() {
        if (main.childNodes[0] != clear)	{
        	main.removeChild(main.childNodes[0]);
        }
        else	{
            var newDiv = new createDiv();
        }
    };

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

