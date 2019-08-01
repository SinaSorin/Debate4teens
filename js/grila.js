var i=0;
$(document).ready(function(){
	
    $("#btn1").click(function(){
	i++;
	var str1 = "<p id='p";
	var str = "'><input id='id";
    var str2 = i;
	var str3 = "' type='text' class='date' placeholder='"+"Întrebarea "+i+"' autocomplete='off' name='data"
    var str4 = "' required>"
	
	var str5 = "<button type='button' id='bp";
	var str6 = "' class='btn' onclick='adauga(";
	var str7 = ")'>+</button>";
	
	var str8 = "<input id='nr";
	var str9 = "' name='nr";
	var str10= "' type='text' value='0' style='display:none;'>";
	
	var str11= "<button type='button' id='bm";
	var str12= "' class='btn' onclick='sterge(";
	var str13= ")'>-</button></p>";
	
	var text5 = str11.concat(str2,str12,str2,str13);
	var text4 = str8.concat(str2,str9,str2,str10);
	var text2 = str5.concat(str2,str6,str2,str7);
    var text1 = str1.concat(str2,str,str2,str3,str2,str4);
	var text3 = text1.concat(text2,text4,text5);
	
	
        $("#span").append(text3);
	document.getElementById("imp").value = i;
    });
});

$(document).ready(function(){
    $("#btn2").click(function(){
		if(i>0)
		{var str1 ="#p";
		var str2 = i;
		var text = str1.concat(str2);
        $(text).remove();
		i--;
		document.getElementById("imp").value = i;}
    });
});

function adauga(i) {
	
	var j=document.getElementById('nr'+i).value;
	j++;
	var str1 ="#p";
	var str2 = i;
	var text1 = str1.concat(str2);
	
	var str1 = "<p id='pm"+i+j+"'><input id='r";
    var str2 = i;
	var str3 = "' type='radio' value='" +j+"'  class='date' autocomplete='off' name='radio"
    var str4 = "' required>"
	
	var str5 = "<input id='r";
    var str6 = j;
	var str7 = "' type='text' "+"placeholder='Răspuns "+j +"' class='date' autocomplete='off' name='raspuns"
    var str8 = "' required></p>"
	
    var text2 = str1.concat(str2,str6,str3,str2,str4);
	var text3 = str5.concat(str2,str6,str7,str2,str6,str8)
	text2+=text3;
	$(text1).append(text2);
	document.getElementById('nr'+i).value = j;
	
}

function sterge(i) {
	var j=document.getElementById('nr'+i).value;
	if(j>0)
	{
		var text = '#pm'+i+j;
		$(text).remove();
		j--;
		document.getElementById('nr'+i).value = j;
	}
	
	
}












