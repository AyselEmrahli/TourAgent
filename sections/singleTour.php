<div id="singletour-wrap">
  <div class="container-fuild" id="top-banner">
    <img src="media/paristour.jpg" class="banner-img">
    <div id="tourinfo">
      <div class="container">
         <!-- <div class="row"> -->
            <div id="tourname" >
              <p>PARIS TURU <span id="price"><small>*bir nəfər üçün</small> 230 <i class="fa fa-euro"></i></span></p>
              <p class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
                <small>(3.5)</small>
              </p>
            </div>
        <!-- </div> -->
      </div>         
    </div>
  </div>
  <!-- Top banner end here -->
  <div class="container" id="content-wrap">
    <div class="col-md-8">
      <div class="row" >
        <div class="page-header">
          <h1>Tur Haqqında</h1>
        </div>
        <div class="tour-feat col-md-3 col-sm-3 col-xs-6">
          <img class="center-block" src="media/tour-duration.png">
          <span>Tur müddəti</span>
          <p>7 gecə / 8 gün</p>
        </div>
        <div class="tour-feat col-md-3 col-sm-3 col-xs-6">
          <img class="center-block" src="media/lang.png">
          <span>Dil</span>
          <p>Azərbaycan / Rus</p>
        </div>
        <div class="tour-feat col-md-3 col-sm-3 col-xs-6">
          <img class="center-block" src="media/tour-type.png">
          <span>Turun tipi</span>
          <p>Wedding turu</p>
        </div>
        <div class="tour-feat col-md-3 col-sm-3 col-xs-6">
          <img class="center-block" src="media/last-date.png">
          <span>Son Qeydiyyat tarixi</span>
          <p>16 Mart, 2016</p>
        </div>          
      </div>
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-body">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td><b>Ölkə</b></td>
                  <td>Fransa</td>
                </tr>
                <tr>
                  <td><b>Şəhər / Region</b></td>
                  <td>Paris</td>
                </tr>
                <tr>
                  <td><b>Tarix</b></td>
                  <td>30 Mart, 2016 - 7 Aprel, 2016</td>
                </tr>
                <tr>
                  <td><b>Nəqliyyat</b></td>
                  <td>Təyyarə</td>
                </tr>
                <tr>
                  <td><b>Otel / Geceləmə</b></td>
                  <td>Hotel Saint German</td>
                </tr>
              </tbody>
            </table>
            <a class="btn btn-primary pull-right"><i class="fa fa-sun-o"></i> Hava haqqında</a>
            <a class="btn btn-primary pull-right"><i class="fa fa-thumb-tack"></i> Turun proqramı</a>
          </div>
        </div>
      </div>
      <div class="tour-note">
        <div class="page-header">
          <h1>Qeydlər</h1>
        </div>
        
        <ul class="list-group col-md-6">
          <p><i class="fa fa-check"></i> Ödənişə daxildir</p>
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>

        <ul class="list-group col-md-6">
          <p><i class="fa fa-exclamation-triangle"></i> Diqqət</p>
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>          
    </div>
    <!-- Reservation section start here -->
    <div class="col-md-4" id="booking-wrap">
      <div class="page-header panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Reservasiya</h3>
        </div>
        <div class="panel-body">               
          <div class="row">
            <div class="col-md-6">
              <label>Böyüklər</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="dec-count btn btn-default" type="button"><i class="fa fa-minus"></i></button>
                </span>
                <input type="number" id="count" value="1" min="1" class="form-control" >
                <span class="input-group-btn">
                  <button class="inc-count btn btn-default" type="button"><i class="fa fa-plus"></i></button>
                </span>
              </div>
            </div>
            <div class="col-md-6">
              <label>Uşaqlar</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="dec-count btn btn-default" type="button"><i class="fa fa-minus"></i></button>
                </span>
                <input type="number" id="count" value="0" min="0" class="form-control" >
                <span class="input-group-btn">
                  <button class="inc-count btn btn-default" type="button"><i class="fa fa-plus"></i></button>
                </span>
              </div>
            </div>
          </div>
          <hr>
          <table class="table"> 
            <tr>
              <td>Böyüklər</td>
              <td id="adult-count">1</td>
            </tr>
            <tr>
              <td>Uşaqlar</td>
              <td id="child-count">0</td>
            </tr>
            <tr>
              <td>Cəmi</td>
              <td id="result">1</td>
            </tr>
            <tr>
              <td>Ümumi məbləğ</td>
              <td id="total-price">1</td>
            </tr>
          </table>  
          <a href="#" disabled class="btn btn-lg btn-block btn-primary">SİFARİŞ ET</a> 
          <br>
          <label><small>* Xidmətlərimizdən yararlanmaq üçün daxil olun</small></label>         
          <a href="#" class="btn btn-lg btn-block btn-primary">DAXİL OL</a>          
        </div>
      </div>
    </div>
    <!-- Reservation section end here -->
  </div>
</div>
