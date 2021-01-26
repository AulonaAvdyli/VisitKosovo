 function showTime(){

var date= new Date();
var h=date.getHours();
var m=date.getMinutes();
var s=date.getSeconds();

          var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
          var month;
         switch(date.getMonth())
             {
				case 0: month="January";
				break;
				case 1: month="February";
				break;
				case 2: month="March";
				break;
				case 3: month="April";
				break;
				case 4: month="May";
				break;
				case 5: month="June";
				break;
				case 6: month="July";
				break;
				case 7: month="August";
				break;
				case 8: month="September";
				break;
				case 9: month="October";
				break;
				case 10: month="November";
				break;
				case 11: month= "December";
				break;
			}
if(h<10){
h= "0"+h;
}
if(m<10){
m="0"+m;
}
s=(s<10) ? "0"+s : s;
var time=h+":" +m+":"+s+"   "+days[date.getDay()]+"   "+date.getDate()+"   "+month+"   "+date.getFullYear();
document.getElementById("Clock").innerHTML=time;
setTimeout(showTime,1000);
}
showTime();