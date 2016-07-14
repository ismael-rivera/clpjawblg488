<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Coming Soon Countdown - Awesome Blogger</title>
<style type="text/css">
</style>
<link href="css/counter.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner"></div>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
<!--

dateFuture = new Date(2011,7,15,9,47,37);

function GetCount(){

        dateNow = new Date();                                                                        //grab current date
        amount = dateFuture.getTime() - dateNow.getTime();                //calc milliseconds between dates
        delete dateNow;

        // time is already past
        if(amount < 0){
                document.getElementById('countbox').innerHTML="Now!";
        }
        // date is still good
        else{
                days=0;hours=0;mins=0;secs=0;out="";

                amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs

                days=Math.floor(amount/86400);//days
                amount=amount%86400;

                hours=Math.floor(amount/3600);//hours
                amount=amount%3600;

                mins=Math.floor(amount/60);//minutes
                amount=amount%60;

                secs=Math.floor(amount);//seconds

                if(days != 0){out += days +" :"+((days!=1)?"":"")+" ";}
                if(days != 0 || hours != 0){out += hours +" :"+((hours!=1)?"":"")+" ";}
                if(days != 0 || hours != 0 || mins != 0){out += mins +" :"+((mins!=1)?"":"")+" ";}
                out += secs +" ";
                document.getElementById('countbox').innerHTML=out;

                setTimeout("GetCount()", 1000);
        }
}

window.onload=function(){GetCount();}//call when everything has loaded

//-->
</script>
<div id="countbox"></div>
    <div id="awesome">
    	<!--<span>He's Just..I don't know...Awesome!!</span>-->
        <!--<span>Ninner! Ninner!</span>-->
        <!--<span>I Shit You Not!</span>-->
    </div>
</body>
</html>