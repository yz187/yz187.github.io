
     
	 var enabled = 0;  //��ֹ������ʾ
	 var dateString = "";
	 var current = new Date();
	 var year = current.getFullYear();
	 var month = (parseInt(current.getMonth())+1);
	 var today = current.getDate();
	 var week = current.getDay();
	 switch (week)
	 {
	   case 0 : week = "������"; break;
	   case 1 : week = "����һ"; break;
	   case 2 : week = "���ڶ�"; break;
	   case 3 : week = "������"; break;
	   case 4 : week = "������"; break;
	   case 5 : week = "������"; break;
	   case 6 : week = "������"; break;
	 }
	 dateString += year +"-";
	 dateString += ((month<10) ? "0" : "") + month +"-";
	 dateString += ((today<10) ? "0" : "") + today;
	 dateString += " "+week + " ";
	 document.write(dateString);
	 
	 //Insert a tag span its id=clock into  the html source code
	 document.write("<span id='clock'></span>");
	 
	 //Define a function showTime() for showing time 
	 function showTime() 
	 {
		 var timeString = "";
		 var now = new Date();
		 var hour = now.getHours();
		 var minute = now.getMinutes();
		 var second = now.getSeconds();
		 try
		 {
			 timeString += ((hour<10) ? "0" : "") + hour;
			 timeString += ((minute<10) ? ":0" : ":") + minute;
			 timeString += ((second<10) ? ":0" : ":") + second;
			 //Insert current time into the place in the source code which its id=clock 
			 clock.innerHTML = timeString;
			 window.setTimeout("showTime()", 1000);
		 }
		 catch(e){ }
	 }
	 showTime();
