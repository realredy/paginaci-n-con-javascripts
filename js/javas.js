
      
       // var limite_permitido = paginas -5;//desaparece si llega al limite 
                	    
		  
//                console.log(urlParams.has('post')); // true
// console.log(urlParams.get('action')); // "edit"
// console.log(urlParams.getAll('action')); // ["edit"]
// console.log(urlParams.toString()); // "?post=1234&action=edit"
// console.log(urlParams.append('active', '1')); // "?post=1234&action=edit&active=1"
         


window.onload = function(){

	                var k = document.querySelector('.back'); 
     var s = document.querySelector('.mina'); 
    var content = document.getElementById("contenido");
   var back = document.querySelector('.back'); //selecciona el back
    var next = document.querySelector('.next'); //selecciona el next
    //back.addEventListener("click", pasoatras, true);
    next.addEventListener("click", pasodelante, true);
     var urlParams = new URLSearchParams(window.location.search);//buscador de param 
    var addback = urlParams.get('pagina') -1;
    var restone = urlParams.get('pagina');
    restone++;
    var actual_url = '';
    var cant_tt = '';
         var limiteff = '';

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

   

     // <--
  k.addEventListener("click", pasoatras, true);
                        function pasoatras(e){
                        e.preventDefault();
                

                           if(actual_url != 5){
                           k.style.display = 'block';
                           }else{
                              k.style.display = 'none';
                           }

                       
                           var rest = actual_url -5;
                            

                            actual_url = rest;
                                content.innerHTML = "";
                         fetch('json2.php?pagina='+rest).then(datos=> datos.json())
                        .then( datos=>{
                               
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
                            
                              actual_url = resta;
                                content.innerHTML = "";
                         fetch('json2.php?pagina='+resta).then(datos=> datos.json())
                        .then( datos=>{
                               for(let jimi of datos){
                                content.innerHTML += `
                                    <h1>${jimi.nomb}</h1>
                                `}
                               });
                          

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


     
}//load function
 
                  
       
             



                   
                 

	 