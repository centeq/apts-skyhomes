<div class="row listing-row"> 
  <!-- listing -->
  <div id="<?=$lotid?>" class="col-md-7 col-lg-6  images expand_view">
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
              
              <div class="slide_item"><img src="listings/<?=$lotid?>/M1-Penthouse-Bedroom.jpg" class="img-responsive"></div>
              <div class="slide_item"><img src="listings/<?=$lotid?>/M1-Penthouse-Kitchen-Dining.jpg" class="img-responsive"></div>
              <div class="slide_item"><img src="listings/<?=$lotid?>/M1-Penthouse-Living.jpg" class="img-responsive"></div>
              <div class="slide_item"><img src="listings/<?=$lotid?>/M1-Penthouse-Bathroom.jpg" class="img-responsive"></div>
                                     
              <div class="slide_item mapslide" id="fp_<?=$lotid?>">
                <div id="<?=$lotid?>-map" class="mapcanvas" style="width:100%; height:100%;" data-address="618 Lonsdale St, Melbourne" data-title="location"> </div>
              </div>
              
              <div class="slide_item" id="map_<?=$lotid?>"><img src="listings/<?=$lotid?>/floorplan.gif" class="img-responsive"></div>
            </div>
            <div class="heroslides_controlls sm_heroslides_controlls">
              <div id="<?=$lotid?>_n" class="listing_next"><span class="glyphicons glyphicons-chevron-right"></span></div>
              <div id="<?=$lotid?>_p" class="listing_prev"><span class="glyphicons glyphicons-chevron-left"></span></div>
       
    </div>
  </div>
  <div class="col-md-5 col-lg-6 copy">
    <div class="row">
      <div class="col-xs-12">
        <h1>        Double storey penthouse with 2 terraces</h1>
        <p class="lead">618 Lonsdale St, Melbourne</p>
        <p>High up on the 45th floor overlooking the city below, this truly exceptional penthouse features a spectacular master bedroom with 5 metre ceiling and glamorous ensuite, formal living/dining area with a gas fireplace set over a marble hearth, deluxe Miele kitchen with adjoining second living area, private study, 2 large terraces and a lock-up double garage. The current Stamp Duty savings on this residence are in excess of $100,000.</p>
      </div>
    </div>
    <div class="row button-row">
      <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
        <ol class="info-icon">
          <li class="icons"><span class="glyphicons glyphicons-bed"></span> 3</li>
          <li class="icons"><span class="glyphicons glyphicons-shower"></span>3.5</li>
          <li class="icons"><span class="glyphicons glyphicons-car"></span> 2</li>
        </ol>
        <h3 class="pricey"><span>$</span>2,490,000</h3>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
        <button class="btn btn-smoke btn-floorplan" id="btn_fp_<?=$lotid?>">Floorplan <span class="glyphicons glyphicons-bring-forward"></span></button>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-6 col-lg-4">
        <button class="btn btn-smoke btn-map" id="btn_map_<?=$lotid?>">Google Map <span class="glyphicons glyphicons-google-maps"></span></button>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5"> <a href="#contact" class="btn btn-rounded btn-solid-enq pull-right enq_this">ENQUIRE <span class="glyphicons glyphicons-iphone-shake"></span></a> </div>
    </div>
  </div>
  <!-- /listing --> 
</div>

