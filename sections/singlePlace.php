<div class="container-fluid" id="single-place">
	<div class="row">
		<div class="top-banner" style="background-image: url('media/banner1.jpg');"></div>
		<div class="container-fluid path-wrap">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#"> <i class="fa fa-map-marker"></i> HOME </a></li>
				  <li class="active">Tours</li>
				</ol>
			</div>
		</div>
	</div>
	<div class="container content-wrap">
		<div class="col-md-3">
			<div class="alert alert-info" role="alert">Сəmi 30 tur tapıldı!</div>
			<div class="panel-group">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <a class="panel-link" data-toggle="collapse" href="#searchCollapse"><i class="fa fa-search"></i> AXTARIŞ <i class="fa fa-chevron-down pull-right"></i></a>
			        </h4>
			      </div>
			      <div id="searchCollapse" class="panel-collapse collapse in">
			        <div class="panel-body">
			        	<form action="">
			        		<div class="form-group col-md-12">
			        			<label for="tourSearch">Axtarış</label>
			        			<input type="search" id="tourSearch" class="form-control" placeholder="Daxil et..">
			        		</div>
			        		<div class="form-group col-md-12">
			        			<label for="categoryTours">Kategoriya</label>
			        			<select class="form-control" id="sortByPrice">
								  	<option value="" disabled selected hidden>Seçin</option>
								    <option>Bütün turlar</option>
								    <option>Ölkə daxili</option>
								    <option>Ölkə xarici</option>
								</select>
			        		</div>
			        		<div class="form-group col-md-12">
			        			<label ><i class="fa fa-calendar"></i> Tarix aralığı</label>
			        			<br>
			        			<small><label>Başlanğıc tarix</label></small>
			        			<input type="date" id="tourSartDate" class="form-control">
			        			<small><label>Son tarix</label></small>
			        			<input type="date" id="tourEndDate" class="form-control">
			        		</div>
			        		<div class="form-group col-md-12">
			        			<button type="submit" class="btn btn-search">AXTAR</button>
			        		</div>
			        	</form>
			        </div>
			      </div>
			    </div>
			  </div>
			  <!-- FILTERs -->
			  <div class="panel-group">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <a class="panel-link" data-toggle="collapse" href="#filtersCollapse"><i class="fa fa-filter"></i> FİLTERLƏR <i class="fa fa-chevron-down pull-right"></i></a>
			        </h4>
			      </div>
			      <div id="filtersCollapse" class="panel-collapse collapse ">
			        <div class="panel-body">
			        	<div class="col-md-12">
			        		<label for="">Səyahət növü</label>
				        	<div class="checkbox">
							  <label><input type="checkbox" value=""><i class="fa fa-tags"></i> Bütün turlar</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""><i class="fa fa-shopping-bag"></i> Shopping</label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value=""><i class="fa fa-history"></i> Tarixi</label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value=""><i class="fa fa-building"></i> Muzey</label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value=""><i class="fa fa-briefcase"></i> Business</label>
							</div>
			        	</div>
			        	<hr class="hr-seperate">	
			        	<div class="col-md-12">
			        		<label for="">Reytinq</label>
				        	<div class="checkbox">
							  <label><input type="checkbox" value=""><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value=""><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value=""><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value=""><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></label>
							</div>
			        	</div>	
			        	<hr class="hr-seperate">
			        	<div class="col-md-12">
			        		<label for="">Qiymət aralığı</label>
				        	<div class="checkbox">
							  <label><input type="checkbox" value="">0 - 50 AZN</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value="">50 - 150 AZN</label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value="">150 - 300 AZN</label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value="">300 - 500 AZN</label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value="">500+ AZN</label>
							</div>
			        	</div>
			        	<hr class="hr-seperate">
			        	<div class="col-md-12">
			        		<label for="">Transport növü</label>
				        	<div class="checkbox">
							  <label><input type="checkbox" value=""><i class="fa fa-plane"></i> Təyyarə</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""><i class="fa fa-bus"></i> Avtobus</label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value=""><i class="fa fa-ship"></i> Gəmi</label>
							</div>
							<div class="checkbox ">
							  <label><input type="checkbox" value=""><i class="fa fa-train"></i> Qatar</label>
							</div>
			        	</div>				        	
			        </div>
			      </div>
			    </div>
			  </div>
		</div>
		<div class="col-md-9" >
			<!-- TOOLS FOR SORTING AND VIEW  -->
			<div class="panel panel-default" id="tools">
			  <div class="panel-body">
			    <div class="form-group col-md-3 col-sm-3 col-xs-6">
				  <select class="form-control" id="sortByPrice">
				  	<option value="" disabled selected hidden>Qiymətə görə sırala</option>
				    <option>Ən ucuz</option>
				    <option>Ən baha</option>
				  </select>
				</div>
				<div class="form-group col-md-3 col-sm-3 col-xs-6">
				  <select class="form-control" id="sortByRating">
				  	<option value="" disabled selected hidden>Reytinqə görə sırala</option>
				    <option>Ən az</option>
				    <option>Ən çox</option>
				  </select>
				</div>
				<button class="btn btn-default pull-right "><i class="fa fa-th"></i></button>
				<button class="btn btn-default pull-right "><i class="fa fa-list"></i></button>
			  </div>
			</div>
			<!-- LIST START HERE -->
			<div class="col-md-12 post-item">
				<div class="col-md-4 col-sm-4 list-item-img">
					<a href="#">
						<img src="media/tour1.jpg" class="img-responsive" alt="">
					</a>
					<span class="tour-type"><i class="fa fa-tag"></i> Şəhər turu</span>						
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="item-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-o"></i>
						<small>(3.5)</small>
					</div>
					<h3>PARIS TURU</h3>
					<p>Paris in love Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit</p>
					<p class="company-name"><a href="#"><i class="fa fa-building"></i> Atlas Tour</a></p>
				</div>
				<div class="col-md-2 col-sm-2 item-price">
					<h3>230 <i class="fa fa-euro"></i></h3>
					<!-- <small>* bir nəfər</small> -->
					<br>
					<a href="#" class="btn btn-primary item-btn-more">Ətraflı</a>
				</div>
			</div>
			<!-- ITEM 2 -->
			<div class="col-md-12 post-item">
				<div class="col-md-4 col-sm-4 list-item-img">
					<a href="#">
						<img src="media/tour2.jpg" class="img-responsive" alt="">
					</a>
					<span class="tour-type"><i class="fa fa-tag"></i> Muzey turu</span>					
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="item-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-o"></i>
						<small>(3.5)</small>
					</div>
					<h3>LOUVRE MUZEYİ TURU</h3>
					<p>Paris in love Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit</p>
					<p class="company-name"><a href="#"><i class="fa fa-building"></i> InTour</a></p>
				</div>
				<div class="col-md-2 col-sm-2 item-price">
					<h3>345 <i class="fa fa-euro"></i></h3>
					<!-- <small>* bir nəfər</small> -->
					<br>
					<a href="#" class="btn btn-primary item-btn-more">Ətraflı</a>
				</div>
			</div>
			<!-- ITEM 3 -->
			<div class="col-md-12 post-item">
				<div class="col-md-4 col-sm-4 list-item-img">
					<a href="#">
						<img src="media/tour3.jpg" class="img-responsive" alt="">
					</a>
					<span class="tour-type"><i class="fa fa-tag"></i> Shopping turu</span>						
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="item-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-o"></i>
						<small>(3.5)</small>
					</div>
					<h3>LONDON TURU</h3>
					<p>London in love Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit</p>
					<p class="company-name"><a href="#"><i class="fa fa-building"></i> OK Tours</a></p>
				</div>
				<div class="col-md-2 col-sm-2 item-price">
					<h3>530 <i class="fa fa-euro"></i></h3>
					<!-- <small>* bir nəfər</small> -->
					<br>
					<a href="#" class="btn btn-primary item-btn-more">Ətraflı</a>
				</div>
			</div>
		</div>
	</div>
</div>