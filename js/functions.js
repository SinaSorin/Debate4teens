function schimba(nr){
   var vb = [""," <li>anunta motiunea</li><li>identifica si defineste elementele cheie ale motiunii</li><li>contextualizeaza motiunea</li><li>anunta starea de fapt(status-quo) si filozofia de caz</li><li>anunta diviziunea argumentelor intre vorbitori</li><li>prezinta partea sa de caz</li>", "<li>contraargumenteaza cazul opozitiei</li><li>realizeaza o resustinere a cazului</li><li>prezinta partea sa de caz</li>", "<li>identifica si analizeaza ariile de conflict(momentele cand echipele s-au ciocnit)</li><li>contraargumenteaza cazul opozitie</li><li>realizeaza o resustinere a cazului echipei</li>","<li>contraargumenteaza cazul guvernului</li><li>contextualizeaza motiunea anunta starea de fapt(status-quo) si filozofia de caz</li><li>anunta diviziunea </li><li>argumentelor intre vorbitori</li><li>prezinta partea sa de caz</li>"]; 
    document.getElementById("vorbitor").innerHTML=vb[nr];
}

$(document).ready(function(){
	
    $("#btn1").click(function(){
	i++;
	var str1 = "<input id='id";
    var str2 = i;
	var str3 = "' type='text' class='date' autocomplete='off' name='data";
    var str4 = "' required>";
    var text = str1.concat(str2,str3,str2,str4);
        $("#span").append(text);
	document.getElementById("imp").value = i;
    });
});

$(document).ready(function(){
    $("#btn2").click(function(){
		if(i>0)
		{var str1 ="#id";
		var str2 = i;
		var text = str1.concat(str2);
        $(text).remove();
		i--;
		document.getElementById("imp").value = i;}
    });
});


var l=1;
var s=1;
var e=0;
var x=0;
var i=0;
var p;
function sexi(type){
	l++;
	if(type=="s")
	{
		s++;
		p="Statement";
	}
	else
		if(type=="e")
		{
			e++;
			p="Example";
		}
			else
				if(type=="x")
				{
					x++;
					p="Explanation";
				}
					else 
						if(type=="i")
						{
							i++;
							p="Impact";
						}
	
	var text = "<textarea class='c"+type+"' id='id"+l+"' placeholder='"+p+"' name='"+type+l+"' required ></textarea>";
	$("#span").append(text);
	document.getElementById("numar").value=l;
	if(s>0 && e>0 && x>0 && i>0)
		document.getElementById("submit").innerHTML = "<button class='v' name='submit'>Submit</button>";
	
}
function sterge() {
	if(l>0)
	{
		
		var id = 'id'+l;
		var c = document.getElementById(id).className;
		if(c == 'cs')
			s--;
			else
				if(c == 'ce')
					e--;
					else
						if(c == 'cx')
							x--;
						else
							if(c == 'ci')
								i--;
		id = "#" + id;
		$(id).remove();
		l--;
		if(s==0 || e==0 || x==0 || i==0)
		document.getElementById("submit").innerHTML = "";
	document.getElementById("numar").value=l;
	}
		
}


/*s1
e2
x3
s4
e5

for(i=1,i<=n,i++)
{
	if(isset(si))
		......
	else
		if(isset(ei))
			else
				
}

*/