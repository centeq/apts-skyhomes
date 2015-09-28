<div class="row listing-row"> 
  <!-- listing -->
  <div id="<?=$lotid?>" class="col-md-7 col-lg-6 images expand_view">
    <div class="ev_toggle"> </div>
    <span class="slideCount"  id="slideCount_<?=$lotid?>"></span>
   
            <div id="cycle_<?=$lotid?>" class="cycle-slideshow"             	
    			data-cycle-swipe="true"
   				data-cycle-swipe-fx="scrollHorz"
                data-cycle-speed="600" 
                data-cycle-timeout="0"  
    			data-cycle-slides="> div" 
                data-cycle-prev="#<?=$lotid?>_p" 
                data-cycle-next="#<?=$lotid?>_n">
              
              <div class="slide_item"><div style="" class="disclaim">Indicative view.</div><img src="listings/<?=$lotid?>/SBC_Day_EarlyDusk_East.jpg" class="img-responsive"></div>
              <div class="slide_item"><img src="listings/<?=$lotid?>/SBC-Foyer.jpg" class="img-responsive"></div>
              <div class="slide_item"><img src="listings/<?=$lotid?>/SBC-Pool-Hi-Res.jpg" class="img-responsive"></div>
                                     
              <div class="slide_item mapslide" id="map_<?=$lotid?>">
                <div id="<?=$lotid?>-map" class="mapcanvas" style="width:100%; height:100%;" data-address="199 City Rd, Southbank, VIC Australia" data-title="location"> </div>
              </div>
              
              <div class="slide_item" id="fp_<?=$lotid?>"><img src="listings/<?=$lotid?>/floorplan.gif" class="img-responsive"></div>
            </div>
            <div class="heroslides_controlls sm_heroslides_controlls">
              <div id="<?=$lotid?>_n" class="listing_next"><span class="glyphicons glyphicons-chevron-right"></span></div>
              <div id="<?=$lotid?>_p" class="listing_prev"><span class="glyphicons glyphicons-chevron-left"></span></div>
            </div>
  </div>
  <div class="col-md-5 col-lg-6 copy">
    <div class="row">
      <div class="col-xs-12">
        <h1>Live life at the top</h1>
        <p class="lead">199 City Rd, Southbank </p>
        <p>Enjoy amazing panoramas from this bright and spacious top floor apartment. Stylish resident facilities include a glass roofed indoor pool, gym, landscaped BBQ areas, resident lounge, excellent security and concierge services. Architecturally stunning Southbank Central is now under construction - act now to save approx $78,000 Stamp Duty.  </p>
      </div>
    </div>
    <div class="row button-row">
      <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
        <ol class="info-icon">
          <li class="icons"><span class="glyphicons glyphicons-bed"></span> 3</li>
          <li class="icons"><span class="glyphicons glyphicons-shower"></span>2</li>
          <li class="icons"><span class="glyphicons glyphicons-car"></span> 1</li>
        </ol>
        <h3 class="pricey"><span>$</span>1,490,000</h3>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
        <button class="btn btn-smoke btn-floorplan" id="btn_<?=$lotid?>">Floorplan <span class="glyphicons glyphicons-bring-forward"></span></button>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-6 col-lg-4">
        <button class="btn btn-smoke btn-map" id="btn_map_<?=$lotid?>">Google Map <span class="glyphicons glyphicons-google-maps"></span></button>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5"> <a href="#contact" class="btn btn-rounded btn-solid-enq pull-right enq_this">ENQUIRE <span class="glyphicons glyphicons-iphone-shake"></span></a> </div>
    </div>
  </div>
  <!-- /listing --> 
</div>
