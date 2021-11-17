
function ajax(){

	let name = document.getElementById('name').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', 'handler.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('table').innerHTML = this.responseText;		
		}
	}
}