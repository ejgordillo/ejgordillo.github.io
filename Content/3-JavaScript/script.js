		var divSize = ""; 
		var color = "";
		var radstring = ""; 
		var postop = "";
		var posleft = "";
		var delayt = "";
		var startTime = ""; 
		var stopTime = "";
		var timediff = "";



		function makeDiv() {
			divSize = Math.floor(Math.random()*300 + 50);
			color = "#"+((1<<24)*Math.random()|0).toString(16);

			document.getElementById('jumper').style.width = divSize+"px";
			document.getElementById('jumper').style.height = divSize+"px";
			document.getElementById('jumper').style.background = color; 
			var radius = Math.random() >= 0.5;
			var radstring
			if (radius == false) {
				radstring = "50%";
			} else{
				radstring = "0%";
			}
			document.getElementById('jumper').style.borderRadius = radstring;
			postop = Math.floor(Math.random() * 700)
			posleft = Math.floor(Math.random() * 1700)
			document.getElementById('jumper').style.top = postop + "px";
			document.getElementById('jumper').style.left = posleft + "px";
			document.getElementById('jumper').style.display = "block";
			startTime = new Date()
		}
		
		makeDiv()


		document.getElementById('jumper').onclick = function () {
			delayt = Math.floor(Math.random()*2000 + 10);
			stopTime = new Date()
			document.getElementById('jumper').style.display = "none";
			setTimeout(function(){makeDiv()} ,delayt);

			timediff = (stopTime-startTime)/1000;
			document.getElementById('yTime').innerHTML = "Your time was: " +timediff +"seconds";
			
		}