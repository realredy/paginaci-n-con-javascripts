<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <style type="text/css">
        h1 {  display:block; width:90%; 
   background: lightblue; }
    
#initial{width: 90%; overflow: hidden;
  list-style:none;}
li:hover, a:hover{background: darkgray;}
*:active{background: darkgray;}

 .back, .next{display: block;  color: white; line-height:30px;
float: left;height: 30px; padding: 2px; 
background: gray; padding:2px 8px; margin-right:1px; cursor:pointer; }
 

#initial ul li{display: block;
float: left; height: 30px; padding: 2px; 
background: gray; margin-right:2px; 
color: white;}

#initial ul li a{color: white; padding: 10px; text-decoration: none;
font-weight: 600; line-height: 30px; }
    </style>
</head>
<body>
    <div id="contenido">
    
</div>
<ul id="initial">
	<li class="back">back</li>
	<ul class="mina">
	 	
	 </ul>
	<li class="next">next</li>
</ul>


	 
	<script>
        var k = document.querySelector('.back'); 
		 var s = document.querySelector('.mina'); 
		var content = document.getElementById("contenido");
		var back = document.querySelector('.back'); //selecciona el back
		var next = document.querySelector('.next'); //selecciona el next
		back.addEventListener("click", pasoatras);
		next.addEventListener("click", pasodelante);
		 var urlParams = new URLSearchParams(window.location.search);//buscador de param 
		var addback = urlParams.get('pagina') -1;
		var restone = urlParams.get('pagina');
		restone++;
		var actual_url = '';
		var cant_tt = '';
         var limiteff = '';
       // var limite_permitido = paginas -5;//desaparece si llega al limite 
                	    
		  
//                console.log(urlParams.has('post')); // true
// console.log(urlParams.get('action')); // "edit"
// console.log(urlParams.getAll('action')); // ["edit"]
// console.log(urlParams.toString()); // "?post=1234&action=edit"
// console.log(urlParams.append('active', '1')); // "?post=1234&action=edit&active=1"
         


window.onload = function(){
	              

	                       if(actual_url != 0){
                           k.style.display = 'block';
                           }else{
                           		k.style.display = 'none';
                           }

                         
	fetch('json2.php').then(datos=> datos.json())
    .then( datos=>{
    let cant =datos[0].total;
    cant_tt = cant;
    actual_url = '0';
     
 for(let m =0; m < cant; m++){
			    

             s.innerHTML  += `<li class="lst">
              <a href=?pagina=${m*5}>${m+1}</a>
			</li>`}
    cant = datos;
   for(let jimi of datos){ 
    content.innerHTML += `<h1>${jimi.nomb}</h1>`}//for        
});

   
     
}
 
                       // <--
  k.addEventListener("click", pasoatras, false);
                        function pasoatras(e){
                      	e.preventDefault();
                

                           if(actual_url != 5){
                           k.style.display = 'block';
                           }else{
                           		k.style.display = 'none';
                           }

                         // console.log(actual_url);
                           var rest = actual_url -5;
                            console.log(rest)

                            actual_url = rest;
                                content.innerHTML = "";
                         fetch('json2.php?pagina='+rest).then(datos=> datos.json())
                        .then( datos=>{
                               // console.log(datos);
                               for(let jimi of datos){
                                content.innerHTML += `
                                    <h1>${jimi.nomb}</h1>
                                `}
                               });
                         var resta =  parseInt(actual_url)  + 5;
                              var lmt = (cant_tt *5) -5;
                               limiteff = lmt;

                      	  if(actual_url != lmt){
                           next.style.display = 'block';
                           }else{
                           		next.style.display = 'none';
                           }
                            
                           }
       
                            //-->    NEXT   // -->
                 function pasodelante(e){
                	e.preventDefault(); 
                	       
                           console.log("valor de la url es: " + actual_url);
                           
                           var resta =  parseInt(actual_url)  + 5;
                              var lmt = (cant_tt * 5) - 5;
                               limiteff = lmt;
                            console.log("la suma de la actual url mas 5 es: " + resta);
                            console.log('6 x 5 = 30 - 5 =25 :' + lmt);
                            
                              actual_url = resta;
                                content.innerHTML = "";
                         fetch('json2.php?pagina='+resta).then(datos=> datos.json())
                        .then( datos=>{
                               for(let jimi of datos){
                                content.innerHTML += `
                                    <h1>${jimi.nomb}</h1>
                                `}
                               });
                         console.log('url actual ahora es: ' + actual_url)

                               if(actual_url != 0){
                           k.style.display = 'block';
                           }else{
                           		k.style.display = 'none';
                           }

                        if(actual_url != lmt){
                           next.style.display = 'block';
                           }else{
                           		next.style.display = 'none';
                           }

                           
                }



                   
                 // funcion de la listas
                 s.addEventListener("click", searchout, false);
                      function searchout(e){
                           
                      	e.preventDefault();
                         content.innerHTML = "";
		                 
                         let url = e.target.href;
                        
                         var los = url.split("?pagina=");
                            actual_url = los[1];
							  console.log('actual_url ' +actual_url);

							   var resta =  parseInt(actual_url)  + 5;
                              var lmt = (cant_tt *5) -5;
                               limiteff = lmt;

                      	  if(actual_url != lmt){
                           next.style.display = 'block';
                           }else{
                           		next.style.display = 'none';
                           }
                                
                           if(actual_url != 0){
                           k.style.display = 'block';
                           }else{
                           		k.style.display = 'none';
                           }
                           //  if(actual_url != limite_permitido){
                           // next.style.display = 'block';
                           // }else{
                           // 		next.style.display = 'none';
                           // }
                         // console.log(los[1]);
                        fetch('json2.php?pagina=' + los[1]).then(datos=> datos.json())
                        .then( datos=>{
                               // console.log(datos);
                               for(let jimi of datos){
                                content.innerHTML += `
                                    <h1>${jimi.nomb}</h1>
                                `
                               }
                               

                        });
                      }

		        // console.log(urlParams.get('pagina')); //imprime el resultado
		        // console.log(window.location.search); //imprime ?pagina=1





        const e = [{
        	ana : "milca",
        	jess : "ana",
        	mimi : "jese"

        },
        {
        		ana : "milkalla",
        	jess : "ana",
        	mimi : "jese"

        }
        

        ]; 
            const p = [];
            console.log(p)
               for(es of e){
                if(es.ana.indexOf("k") !== -1) {
                 p.push(es);
                 console.log(es)
               }} 
             let vita = ()=>{
           	console.log('dfsd');
           }


                           // obtener variables 

//            function getQueryVariable(variable)
// {
//        var query = window.location.search.substring(1);
//        var vars = query.split("&");
//        for (var i=0;i<vars.length;i++) {
//                var pair = vars[i].split("=");
//                if(pair[0] == variable){return pair[1];}
//        }
//        return(false);
// }
// Example URL:
// http://www.example.com/index.php?id=1&image=awesome.jpg

// Calling getQueryVariable("id") - would return "1".
// Calling getQueryVariable("image") - would return "awesome.jpg".

	</script>
</body>
</html>