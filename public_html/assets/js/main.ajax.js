

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

	    htmlout =  '<article class="grid-item">';
		htmlout += '<a class="item-image" href="'+lnk+'">';
		htmlout += '<img src="'+img+'" alt="" />';
		htmlout += '</a>';
		htmlout += '<a class="item-title-link" href="index.html">'+tit+'</a>';
		htmlout += '</article>';

	
	test2 = '<li style="width: 10%; height: 20px;" class="voyelle"  data-foo="5">A</li>';
	test2 += '<li style="width: 10%; height: 40px;" class="consonne" data-foo="6">B</li>';
	test2 += '<li style="width: 10%; height: 40px;" class="consonne" data-foo="3">C</li>';
	test2 += '<li style="width: 10%; height: 20px;" class="consonne" data-foo="2">D</li>';
	test2 += '<li style="width: 10%; height: 60px;" class="voyelle"  data-foo="4">E</li>';
	test2 += '<li style="width: 10%; height: 60px;" class="consonne" data-foo="1">F</li>';
	test2 += '<li style="width: 10%; height: 20px;" class="consonne" data-foo="7">G</li>';
	

		test = '<article class="myredbox">'+tit+'</article>';
		//------------------------------------------------------------------	
  		//BREAKPOINT 2: TEST HTML OUTPUT 
  		//console.log(htmlout);	
  		//------------------------------------------------------------------

		$('#dylay').append(test2);
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
	  	     
             htmlOut(data[i].title, data[i].href, data[i].image)
	  	     
	  	  }
	  });


}
/* END getPostsFromAjax */


