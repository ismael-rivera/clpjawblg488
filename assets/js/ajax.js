

window.onload = function() {
  //------------------------------------------------------------------	
  //BREAKPOINT 1: TESTING ONLOAD 
  //console.log("onload: good");	
  //------------------------------------------------------------------
  getPostsFromAjax();

};

function getPostsFromAjax(){

    var success = function(){console.log('success')};
    var fail = function(){console.log('fail')};
	var url = 'mydata.json';
	var postarr = [];


	function htmlOut(tit, lnk, img){

	    htmlout =  '<div class="grid-item">';
		htmlout += '<a class="item-image" href="'+lnk+'">';
		htmlout += '<img src="'+img+'" alt="" />';
		htmlout += '</a>';
		htmlout += '<a class="item-title-link" href="index.html">'+tit+'</a>';
		htmlout += '</div>';

		//------------------------------------------------------------------	
  		//BREAKPOINT 2: TEST HTML OUTPUT 
  		//console.log(htmlout);	
  		//------------------------------------------------------------------
		
		return htmlout;
	}	
	

	$.ajax({
	    dataType: "json",
	    method: 'GET',
		url: url,
		success: success,
		fail: fail,
	}).then(function(data) {

		  //------------------------------------------------------------------	
  		  //BREAKPOINT 3: CHECK JSON DATA 
  		  //console.log(data.p2);	
  		  //------------------------------------------------------------------

	  	  for(var i in data){

	  	  	 //------------------------------------------------------------------	
  		     //BREAKPOINT 4: SAMPLE LOOP AND TEST SPEED 
	  	  	 //postarr = data[i];
	  	     //console.log(data[i].title);
	  	     //------------------------------------------------------------------
	  	     

	  	     $('#postDiv').append(htmlOut(data[i].title, data[i].href, data[i].image));
	  	  }
	  });


}
/* END getPostsFromAjax */


