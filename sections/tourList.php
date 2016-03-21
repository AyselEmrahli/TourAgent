<div class="container-fluid">
	<div class="row">
		<div class="top-banner" style="background-image: url('media/banner1.jpg');"></div>
	</div>
	<div class="container content-wrap">
		<div class="col-md-3">
			<div class="alert alert-info" role="alert">Сəmi 30 tur tapıldı!</div>
			<div class="panel-group">
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <a data-toggle="collapse" href="#searchCollapse"><i class="fa fa-search"></i> AXTARIŞ</a>
			        </h4>
			      </div>
			      <div id="searchCollapse" class="panel-collapse collapse">
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
			        			<label for="dateTour"><i class="fa fa-date"></i> Tarix</label>
			        			<input type="date" id="tourSearch" class="form-control">
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
			          <a data-toggle="collapse" href="#filtersCollapse"><i class="fa fa-filter"></i> FİLTERLƏR</a>
			        </h4>
			      </div>
			      <div id="filtersCollapse" class="panel-collapse collapse">
			        <div class="panel-body">
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
			        	<hr style="width: 220px; display: block;margin:10px auto;">
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
			        </div>
			      </div>
			    </div>
			  </div>
		</div>
		<div class="col-md-9" >
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
			<div class="col-md-12 tour-item">
				<div class="col-md-4 list-item-img">
					<a href="#">
						<img src="media/tour1.jpg" class="img-responsive" alt="">
					</a>					
				</div>
				<div class="col-md-6">
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
				</div>
				<div class="col-md-2 item-price">
					<h3>230 <i class="fa fa-euro"></i></h3>
					<!-- <small>* bir nəfər</small> -->
					<br>
					<a href="#" class="btn btn-primary item-btn-more">Ətraflı</a>
				</div>
			</div>
			<!-- ITEM 2 -->
			<div class="col-md-12 tour-item">
				<div class="col-md-4 list-item-img">
					<a href="#">
						<img src="media/tour2.jpg" class="img-responsive" alt="">
					</a>					
				</div>
				<div class="col-md-6">
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
				</div>
				<div class="col-md-2 item-price">
					<h3>345 <i class="fa fa-euro"></i></h3>
					<!-- <small>* bir nəfər</small> -->
					<br>
					<a href="#" class="btn btn-primary item-btn-more">Ətraflı</a>
				</div>
			</div>
			<!-- ITEM 3 -->
			<div class="col-md-12 tour-item">
				<div class="col-md-4 list-item-img">
					<a href="#">
						<img src="media/tour3.jpg" class="img-responsive" alt="">
					</a>					
				</div>
				<div class="col-md-6">
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
				</div>
				<div class="col-md-2 item-price">
					<h3>530 <i class="fa fa-euro"></i></h3>
					<!-- <small>* bir nəfər</small> -->
					<br>
					<a href="#" class="btn btn-primary item-btn-more">Ətraflı</a>
				</div>
			</div>
		</div>
	</div>
</div>