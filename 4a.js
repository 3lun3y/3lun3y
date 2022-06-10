fetch("viernes.json")
.then(function(response){
	return reponse.json();
})
.then(function(reponse){
	letplaceholder=document.querySelector("#data-output");
	let out="";
	for (let dia of viernes){
		out=`
		<tr>
			<td>${dia.id}</td>
			<td>${dia.nombre}</td>
			<td>${dia.edad}</td>
			<td>${dia.identidadsecreta}</td>
			<td>${dia.poderes}</td>
			<td><img src='${dia.imagen}' width="200px" height="200px"></td>
		</tr> ` ;
		
	}
	placeholder.innerHTML=out;		
})
