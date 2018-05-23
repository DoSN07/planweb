@extends('layouts.principal')
    @section('content')
	<div class="banner">
   	  <div class="container_wrap">
   		<h1>¿Que estás buscando?</h1>
   	       <div class="dropdown-buttons">   
            		  <div class="dropdown-button">           			
					  <select>
							<option selected="" tabindex="9" style="display:none;color:#eee;">San José</option>
							<option>Alajuela</option>
							<option>Heredia</option>
							<option>Cartago</option>
							<option>Puntarenas</option>
							<option>Guanacaste</option>
							<option>Limón</option>
			          </select>
					</div>
				     <div class="dropdown-button">
					   <select>
							<option selected="" tabindex="9" style="display:none;color:#eee;">Limpieza</option>
							<option>Jardinería</option>
							<option>Informática</option>
							<option>Belleza</option>
							<option>Salud</option>
							<option>Moda</option>
			          </select>
					 </div>
				   </div>  
		    <form>
				<input style="background-color:#f4f3ef;color:#66615B" type="text" value="Palabra clave, nombre, fecha, ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Palabra clave, nombre, fecha, ...';}">
			    <div class="contact_btn">
	               <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Buscar"></label>
	            </div>
			</form>        		
   		    <div class="clearfix"></div>
         </div>
   </div>
   <div class="content_top">
   	  <div class="container">
   		<div class="col-md-4 bottom_nav">
   		   <div class="content_menu">
				<ul>
					<li class="active"><a href="#">Recomendado</a></li> 
					<li><a href="#">Lo último</a></li> 
					<li><a href="#">Más importante</a></li> 
				</ul>
			</div>
		</div>
		<div class="col-md-4 filter_grid">
			<ul class="filter">
				<li class="fil">Filter :</li>
				<li><a href=""> <i class="icon1"> </i> </a></li>
				<li><a href=""> <i class="icon2"> </i> </a></li>
				<li><a href=""> <i class="icon3"> </i> </a></li>
				<li><a href=""> <i class="icon4"> </i> </a></li>
				<li><a href=""> <i class="icon5"> </i> </a></li>
			</ul>
		</div>
   	</div>
   </div>
   <div class="content_middle">
   	  <div class="container">
   	    <div class="content_middle_box">
          <div class="top_grid">
   			<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="images/pic1.jpg" class="img-responsive" alt=""/></div>
   				    <div class="sale">$2.980</div>
   			          <div class="mask">
                        <div class="info"><i class="search"> </i> Ver más</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                       </div>
                   </div> 
                   <i class="home"></i>
   				 <div class="inner_wrap">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1"><img src="images/pic6.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home1"> </i>
   				 <div class="inner_wrap">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="yellow">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img2"><img src="images/pic2.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home2"> </i>
   				 <div class="inner_wrap">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="blue">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="images/pic3.jpg" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="home"></i>
   				  <div class="inner_wrap">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="clearfix"> </div>
   		</div>
   	    <div class="middle_grid wow fadeInUp" data-wow-delay="0.4s">
   			<div class="col-md-6">
   			   <div class="grid1">
   			     <div class="index_img"><img src="images/pic4.jpg" class="img-responsive" alt=""/></div>
   				  <i class="m_home"> </i>
                  <ul class="vision">
                  	 <li>Vision Agency</li>
                  	 <li class="desc"><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
                  </ul>
   				  <div class="inner_wrap1">
   				 	<ul class="item_module">
   				 	 	<li class="module_left"><img src="images/m1.jpg" class="img-responsive" alt=""/></li>
   				 	 	<li class="module_right">
   				 	 		<img src="images/m_star.png" class="img-responsive" alt=""/>
   				 	 		<h5>Lucy-p</h5>
   				 	 		<p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
   				 	 		<a href="#" class="content_btn">....read more</a>
   				 	 	</li>
   				 	 	<div class="clearfix"> </div>
   				 	 </ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="col-md-6">
   			   <div class="grid1">
   			     <div class="index_img1"><img src="images/pic5.jpg" class="img-responsive" alt=""/></div>
   				  <i class="m_home1"> </i>
                  <ul class="vision">
                  	 <li>Vision Agency</li>
                  	 <li class="desc"><a href="#"> <img src="images/star2.png" alt="">(236)</a></li>
                  </ul>
   				  <div class="inner_wrap1">
   				 	<ul class="item_module">
   				 	 	<li class="module_left"><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
   				 	 	<li class="module_right">
   				 	 		<img src="images/m_star1.png" class="img-responsive" alt=""/>
   				 	 		<h5>Lucy-p</h5>
   				 	 		<p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
   				 	 		<a href="#" class="content_btn">....read more</a>
   				 	 	</li>
   				 	 	<div class="clearfix"> </div>
   				 	 </ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="clearfix"> </div>
   		</div>
   		<div class="top_grid wow fadeInRight" data-wow-delay="0.4s">
   			<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="images/pic1.jpg" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                       <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                        </div>
                    </div> 
                    <i class="home"></i>
   				 <div class="inner_wrap">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1"><img src="images/pic2.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home1"> </i>
   				 <div class="inner_wrap">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="yellow">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img2"><img src="images/pic6.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="home2"> </i>
   				 <div class="inner_wrap">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="blue">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="images/pic3.jpg" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="home"></i>
   				  <div class="inner_wrap">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="clearfix"> </div>
   		</div>
   		<div class="bottom_grid wow bounce" data-wow-delay="0.4s">
   		  <div class="col-md-6">
   			   <div class="grid1">
   			     <div class="index_img1"><img src="images/pic5.jpg" class="img-responsive" alt=""/></div>
   				  <i class="m_home1"> </i>
                  <ul class="vision">
                  	 <li>Vision Agency</li>
                  	 <li class="desc"><a href="#"> <img src="images/star2.png" alt="">(236)</a></li>
                  </ul>
   				  <div class="inner_wrap1">
   				 	<ul class="item_module">
   				 	 	<li class="module_left"><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
   				 	 	<li class="module_right">
   				 	 		<img src="images/m_star.png" class="img-responsive" alt=""/>
   				 	 		<h5>Lucy-p</h5>
   				 	 		<p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat."</p>
   				 	 		<a href="#" class="content_btn">....read more</a>
   				 	 	</li>
   				 	 	<div class="clearfix"> </div>
   				 	 </ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="images/pic3.jpg" class="img-responsive" alt=""/></div>
   				     <div class="sale">$2.980</div>
   			          <div class="mask">
                      <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                  <i class="b_home"></i>
   				  <div class="inner_wrap2">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				  </div>
   			   </div>
   			</div>
   			<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img1"><img src="images/pic2.jpg" class="img-responsive" alt=""/></div>
   				     <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="images/star.png" alt=""/></li>
                        	<li class="set"><img src="images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                      </div>
                  </div> 
                 <i class="b_home1"> </i>
   				 <div class="inner_wrap2">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="yellow">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="images/star2.png" alt="">(136)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="clearfix"></div>
   			</div>
   		  </div>
   		  <div class="offering">
   		  	  <h2>¿Que le podemos ofrecer?</h2>
   		  	  <h3>Ut wisi enim ad minim veniam, quis</h3>
   		  	  <ul class="icons wow fadeInUp" data-wow-delay="0.4s">
   		  	  	 <li><i class="icon1"> </i><span class="one"> </span></li>
   		  	  	 <li><i class="icon2"> </i><span class="two"> </span></li>
   		  	  	 <li><i class="icon3"> </i><span class="three"> </span></li>
   		  	  	 <li><i class="icon4"> </i><span class="four"> </span></li>
   		  	  	 <li><i class="icon5"> </i></li>
   		  	  </ul>
   		  	  <div class="real">
   		  	  	<h4>Reality</h4>
   		  	  	<div class="col-sm-6">
   		  	  	  <ul class="service_grid">
   	   				<i class="s1"> </i>
   	   				 <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
   	   				   <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
   	   				 </li>
   	   				 <div class="clearfix"> </div>
   	   			   </ul>
   	   			 </div>
   	   			 <div class="col-sm-6">
   		  	  	  <ul class="service_grid">
   	   				<i class="s2"> </i>
   	   				 <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
   	   				   <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
   	   				 </li>
   	   				 <div class="clearfix"> </div>
   	   			   </ul>
   	   			 </div>
   	   			 <div class="clearfix"> </div>
   	   			 </div>
   		  	  </div>
   		  </div>
   	  </div>
   </div>
@endsection	

