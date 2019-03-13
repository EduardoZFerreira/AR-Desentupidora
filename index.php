<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/png" href="resources/img/favicon.png"/>
        <title> AR DESENTUPIDORA </title>
        <link rel="stylesheet" type="text/css" href="resources/css/desktop/main.css" />
        <link rel="stylesheet" type="text/css" href="resources/css/desktop/slider.css" />  
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
		integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">		
		
    </head>
    <body>
        <div class="container">
            <div class="header">
			
			<div class="email">
			<img class="imgemail" src="email.png" alt="email" width=20 height=20>
			<p> ardesentupidora@hotmail.com</p>
			</div>
			
			
			<div class="telefone">
			<img class="imgtel" src="tel.jpg" alt="telefone" width=25 height=23>
			<p>(47) 3432-9438 | (47) 9636-1848</p>
			
			</div>
			

            </div>
            <div class="menu">
			
			<div class="logo">
			<h1 class="ar"> A R </h1>
			</div>
			
			<div class="itens-menu">
			
			<img class="img" src="inicio.jpg" alt="inicio" width=60 height=60>
			
		
			
			<img class="img" src="contato.png" alt="contato" width=75 height=75>
			
		
			
			<img class="img" src="serviços.jpg" alt="servicos" width=60 height=63>
			
			
			</div>
            </div>
            <div class="content" id="loader">

                <div class="slider">
                    <div class="sliderimg">
                        <div id="1"  class="visible">
                            <div class="desc">
                               <p class="titleslider1">Trabalhos em </br> Estruturas </br> Metálicas</p>
                            </div>
                            <img src="resources/img/slider/1.jpg" alt="" />
                        </div>
                        <div id="2"  class="hidden">
                            <div class="desc2">
                                <center><p class="titleslider">Construção </br> & </br>Reformas</br>  </p></center>
                            </div>
                            <img src="resources/img/slider/2.jpg" alt="" />
                        </div>
                        <div id="3"  class="hidden">
                            <div class="desc3">
							<center><p class="titleslider">Serviços </br> De </br> Hidrojateamento</p></center>
                            </div>
                            <img src="resources/img/slider/3.jpg" alt="" />
                        </div>
                    </div>
                    <div class="slidercontrollers">
                        <div class="circles">
                            <div class="circle" id="slider-btn-1"></div>
                            <div class="circle" id="slider-btn-2"></div>
                            <div class="circle" id="slider-btn-3"></div>
                        </div>
                        <div class="arrows">
                            <div class="prev arrow"> <i class='fas fa-chevron-left' style='font-size:54px;color:white'></i> </div>
                            <div class="next arrow" > <i class='fas fa-chevron-right' style='font-size:54px;color:white'></i> </div>
                        </div>
                    </div>
                </div>

            </div>

			<div class="title">
				<center></br><h1> Solicite um Orçamento </h1></center>
			</div>
            <div class="Contato">	
			<div class="form">
			<input type="text"  placeholder="Nome" required="required" name="nome" /></br>
			<input type="text"  placeholder="Email" required="required" name="email" /></br>
			<input type="text"  placeholder="Telefone" required="required" name="telefone" /></br>
			<textarea placeholder="Como podemos te ajudar"></textarea>
			<p class="submit">
			<input type="submit" onclick="Enviar();" value="Enviar" />
        </p>
			
			</div>
			
			<div class="mapa">
	 <img src="map.png" alt="inicio" width=310 height=275>
	 
	 <div class="dadosemail">
	 <img src="email1.png" alt="inicio" width=27 height=27>
	 <p> ardesentupidora@hotmail.com</p>
	  </div>
	   <div class="dadostel">
	  <img src="whats.png" alt="inicio" width=27 height=27>
	 <p>(47) 3432-9438 | (47) 9636-1848</p>
	 </div>	  	 
	 </div>
    </div>
  
			<div class="servicos">
				<div class="slider">
                    <div class="sliderimg">
                        <div id="desentupidora"  class="visible">
                            <div class="desc4">
							<center><h1 class="titleserv"> Serviços</h1></center></br></br></br>
							<div class="conteudoserv">
							<h3 class="hdesc">- Desentupimento</h3>
							<p class="pdesc">(Ralo,Pia,Vaso Sanitario,Tanque,Encanamento em Geral)</p></br>
							<h3 class="hdesc">- Limpeza</h3>
							<p class="pdesc">(Fossa Filtro,Esgoto e Estação de Tratamento com Caminhão Hidrojato)</p></br>
							<h3 class="hdesc">- Ligação de Esgoto</h3></br>
							
							<h3 class="hdesc">- Detetização</h3>
							</div>
							
                            </div>
                            <img src="resources/img/slider/reforma.jpg" alt="" />
                        </div>
                        <div id="construcao">
                            <div class="desc5">
                                <center><h1 class="titleserv"> Serviços</h1></center></br></br></br>
							<div class="conteudoserv">
							<h3 class="hdesc">- Construção Civil</h3></br>
							
							<h3 class="hdesc">- Elétrica</h3></br>
							
							<h3 class="hdesc">- Hidráulica</h3></br>
							
							<h3 class="hdesc">- Pintura</h3></br>
							
							<h3 class="hdesc">- Reformas em Geral</h3>
							</div>
							
                            
                            </div>
                            
                        </div>
                    </div>
                    
                    </div>
                </div>
			</div>
			<div class="footer">

            </div>
        </div>
    </body>
</html>
<script src="resources/js/jquery-3.3.1.min.js"></script>
<script src="resources/js/slider.js"></script>
