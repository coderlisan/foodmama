<?php global $my_theme ?>

<?php /** Template Name: Home */ ?>
<?php get_header() ?>

  <div class="master-slider ms-skin-default" id="masterslider"> 
    <div class="ms-slide slide-1" data-delay="14"> 
      <img src="<?= $my_theme['sld1']['url'] ?>" data-src="<?= $my_theme['sld1']['url'] ?>"/>
      <img src="<?= $my_theme['sld1']['url'] ?>" data-src="<?= $my_theme['sld1']['url'] ?>" style="left:430px; top:260px;" class="ms-layer badge-logo" data-type="image" data-delay="1000" data-duration="2500" data-effect="top(480,false)" data-ease="easeOutExpo"/>

      <h3 class="ms-layer text1 one full-wid text-center font-white uppercase" style="left:0; top:440px;" data-type="text" data-delay="2000" data-duration="2000" data-ease="easeOutExpo" data-effect="rotate3dtop(-100,0,0,40,t)"><?= $my_theme['tsl1'] ?></h3>
      <h3 class="ms-layer title2 one font-sbold font-white uppercase text-center" style="left:0;top: 500px;" data-type="text" data-delay="2500" data-duration="2500" data-ease="easeOutExpo" data-effect="rotate3dtop(-100,0,0,40,t)"><?= $my_theme['ssl1'] ?></h3>
    </div>

    <div class="ms-slide slide-2" data-delay="14"> 
      <img src="<?= $my_theme['sld2']['url'] ?>" data-src="<?= $my_theme['sld2']['url'] ?>"/>
      <img src="<?= $my_theme['sld2']['url'] ?>" data-src="<?= $my_theme['sld2']['url'] ?>" style="left:430px; top:260px;" class="ms-layer badge-logo" data-type="image" data-delay="1000" data-duration="2500" data-effect="top(480,false)" data-ease="easeOutExpo"/>
      
      <h3 class="ms-layer text1 one full-wid text-center font-white uppercase" style="left:0; top:440px;" data-type="text" data-delay="2000" data-duration="2000" data-ease="easeOutExpo" data-effect="rotate3dtop(-100,0,0,40,t)"><?= $my_theme['tsl2'] ?></h3>
      <h3 class="ms-layer title2 one font-sbold font-white uppercase text-center" style="left:0;top: 500px;" data-type="text" data-delay="2500" data-duration="2500" data-ease="easeOutExpo" data-effect="rotate3dtop(-100,0,0,40,t)"><?= $my_theme['ssl2'] ?></h3>
    </div>

    <div class="ms-slide slide-3" data-delay="14"> 
      <img src="<?= $my_theme['sld3']['url'] ?>" data-src="<?= $my_theme['sld3']['url'] ?>"/>
      <img src="<?= $my_theme['sld3']['url'] ?>" data-src="<?= $my_theme['sld3']['url'] ?>" style="left:430px; top:260px;" class="ms-layer badge-logo" data-type="image" data-delay="1000" data-duration="2500" data-effect="top(480,false)" data-ease="easeOutExpo"/>
      
      <h3 class="ms-layer text1 one full-wid text-center font-white uppercase" style="left:0; top:440px;" data-type="text" data-delay="2000" data-duration="2000" data-ease="easeOutExpo" data-effect="rotate3dtop(-100,0,0,40,t)"><?= $my_theme['tsl3'] ?></h3>
      <h3 class="ms-layer title2 one font-sbold font-white uppercase text-center" style="left:0;top: 500px;" data-type="text" data-delay="2500" data-duration="2500" data-ease="easeOutExpo" data-effect="rotate3dtop(-100,0,0,40,t)"><?= $my_theme['ssl3'] ?></h3>
    </div>
  </div>

  
  <div class="section-lg m-top8">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 m-top4">
          <div class="section-titles text-center uppercase">
            <h4 class="font-grey-light font15 font-bold">Welcome to</h4>
            <h2 class="font-color font40 font-bold">The Butter</h2>
          </div>
          <p class="font-grey font18 font-thin italic line-height30 text-center">Pellentesque mi purus, eleifend sedt commodo vel, sagittis elts vesti  ulum dui sagittis mlste sagittis elts. Exercitation photo booth that is end stumptown tote bag Banksy, elit small batch freegan sed craft a  beer elit seitan exercitation, photo booth et kale chips hillwave deep laborum mlste sagittis sunt culpa only oficia.</p>
        </div>
        <div class="col-md-6 col-sm-6">
          <img src="<?= $my_theme['bit_banner']['url'] ?>" alt="" class="img-responsive">
        </div>
      </div>
    </div>
  </div>
  
  <div class="section-lg bg-parallax one m-top8">
    <div class="container">
      <div class="row">
      <div class="col-md-10 sec-auto-margin">
        <div class="section-titles text-center uppercase m-bottom4">
          <h4 class="font-white font15 font-bold">Book a table</h4>
          <h2 class="font-white font40 font-bold">Reservation</h2>
        </div>
        <form action="demo-order-process.php" method="post" enctype="multipart/form-data" id="sky-form" class="sky-form">
          <fieldset>
            <div class="row">
              <div class="col col-6 m-bottom2">
                <label class="input"> <i class="icon-append fa fa-user"></i>
                  <input type="text" name="name" placeholder="Name">
                </label>
              </div>
              <div class="col col-6 m-bottom2">
                <label class="input"> <i class="icon-append fa fa-phone"></i>
                  <input type="tel" name="phone" placeholder="Phone">
                </label>
              </div>
            </div>
            <div class="row">
            <div class="col col-6 m-bottom2">
                <label class="input"> <i class="icon-append fa fa-users"></i>
                  <input type="text" name="name" placeholder="Number of Guests">
                </label>
              </div>
              <div class="col col-6 m-bottom2">
                <label class="input"> <i class="icon-append fa fa-calendar"></i>
                  <input type="text" name="start" id="start" placeholder="Date">
                </label>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <div class="m-bottom2">
              <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                <input type="email" name="email" placeholder="E-mail">
              </label>
            </div>
            <div class="m-bottom2">
              <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                <textarea rows="5" name="comment" placeholder="Tell us about your self"></textarea>
              </label>
            </div>
          </fieldset>
          <footer>
            <button type="submit" class="button">RESERVE NOW!</button>
            <div class="progress"></div>
          </footer>
          <div class="message"> <i class="fa fa-check"></i>
            <p>Thanks for your order!<br>
              We'll contact you very soon.</p>
          </div>
        </form>
      </div>
      </div>
    </div>
  </div>
  
  <div class="section-lg m-top8">
    <div class="container">
      <div class="row">
        <div class="section-titles text-center uppercase m-bottom4">
          <h4 class="font-grey-light font15 font-bold">Special Offers</h4>
          <h2 class="font-color font40 font-bold">Our Menu</h2>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="menu-card">
            <div class="menu-items">
              <h3>Chicken Soup</h3>
              <span class="price">$4.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>A traditional chicken soup delicately spiced.</p>
          </div>
          <div class="menu-card">
            <div class="menu-items">
              <h3>Tomato Soup</h3>
              <span class="price">$3.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>Tomato soup prepared tomato and herbs.</p>
          </div>
          <div class="menu-card">
            <div class="menu-items">
              <h3>Hot and Sour Soup</h3>
              <span class="price">$3.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>VEG. An exotic soup of chopped mixed vegetables.</p>
          </div>
          <div class="menu-card">
            <div class="menu-items">
              <h3>Sweet Corn Soup</h3>
              <span class="price">$4.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>VEG. Fresh vegetable stock with kernel corn.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="menu-card">
            <div class="menu-items">
              <h3>Samosa Choley</h3>
              <span class="price">$4.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>A traditional chicken soup delicately spiced.</p>
          </div>
          <div class="menu-card">
            <div class="menu-items">
              <h3>Chicken "65"</h3>
              <span class="price">$3.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>Chicken cubes are well marinated in secret spices.</p>
          </div>
          <div class="menu-card">
            <div class="menu-items">
              <h3>Chicken Chop</h3>
              <span class="price">$3.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>Chicken pieces made in Tandoor Oven.</p>
          </div>
          <div class="menu-card">
            <div class="menu-items">
              <h3>Chicken Tikka</h3>
              <span class="price">$4.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>Boneless juicy chunks of chicken in aromatic.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="menu-card">
            <div class="menu-items">
              <h3>Butter Chicken</h3>
              <span class="price">$4.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>Shreded tandoori chicken smothered in tomato.</p>
          </div>
          <div class="menu-card">
            <div class="menu-items">
              <h3>Lamb/Goat Curry</h3>
              <span class="price">$3.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>Lamb/Goat cooked in authentic Indian curry.</p>
          </div>
          <div class="menu-card">
            <div class="menu-items">
              <h3>Lamb Do Piaza</h3>
              <span class="price">$3.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>Tender juicy lamb pieces cooked.</p>
          </div>
          <div class="menu-card">
            <div class="menu-items">
              <h3>Lamb/Goat Kadai</h3>
              <span class="price">$4.95</span>
              <div class="dotted-lines"></div>
            </div>
            <p>Tender pieces of lamb/goat, bell peppers.</p>
          </div>
        </div>
        <div class="button full-wid left text-center m-top2"><a href="#" class="btn boxed-color-lg red uppercase font-bold font20">View full menu</a></div>
      </div>
    </div>
  </div>
  
  <div class="section-lg bg-parallax-1 m-top8">
    <div class="container">
      <div class="row">
        <div class="section-titles text-center uppercase m-bottom4">
          <h4 class="font-white font15 font-bold">Experience</h4>
          <h2 class="font-white font40 font-bold">Our Services</h2>
        </div>
        <div class="button ser-list text-center m-top5"><a href="#" class="btn boxed-color uppercase"><i class="fa fa-cutlery font25"></i><br>
          Online Order</a> <a href="#" class="btn boxed-color uppercase"><i class="fa fa-car font25"></i><br>
          Free Parking</a> <a href="#" class="btn boxed-color uppercase"><i class="fa fa-wifi font25"></i><br>
          free wifi </a> <a href="#" class="btn boxed-color uppercase"><i class="fa fa-bicycle font25"></i><br>
          Home Delivery </a> <a href="#" class="btn boxed-color uppercase"><i class="fa fa-briefcase font25"></i><br>
          conference halls </a></div>
        <h2 class="font-thin font-white text-center font15 m-top5">Pellentesque mi purus, eleifend sedt commodo vel, sagittis elts vestibulum dui</h2>
      </div>
    </div>
  </div>
  
  <div class="section-lg m-top8">
    <div class="container">
      <div class="row">
        <div class="section-titles text-center uppercase">
          <h4 class="font-grey-light font15 font-bold">Latest News</h4>
          <h2 class="font-color font40 font-bold">Our Blog</h2>
        </div>
        <div class="col-md-12 m-top3">
          <?php $clnts = new WP_Query(['post_type' => 'post', 'posts_per_page' => 4]) ?>
          <?php while ($clnts->have_posts()) : $clnts->the_post() ?>
          <div class="col-md-6 team-list nopadding">
            <div class="col-md-6 imgbox team-image nopadding">
            <?php the_post_thumbnail() ?>
            </div>
            <div class="col-md-6 text-center">
              <h2 class="font-black uppercase font20 m-top3"><a href="#"><?php the_title() ?></a></h2>
              <p class="line-height30 m-top2"><?php the_excerpt() ?></p>
              <a href="<?php the_permalink() ?>" class="font-color m-top2 m-bottom3"><?php the_author() ?></a>
            </div>
          </div>
          <?php endwhile ?>
        </div>
      </div>
    </div>
  </div>
  
  <div class="section-lg m-top10">
    <div id="js-grid-lightbox-gallery" class="cbp">
      <div class="cbp-item graphic identity"> <a class="cbp-caption cbp-lightbox" data-title="Our Gallery<br>by UXLiner"
               href="https://placeholdit.imgix.net/~text?txtsize=80&txt=900%C3%97600&w=900&h=600">
        <div class="cbp-caption-defaultWrap"><img src="https://placeholdit.imgix.net/~text?txtsize=50&txt=380%C3%97360&w=380&h=360" alt=""> </div>
        <div class="cbp-caption-activeWrap">
          <div class="cbp-l-caption-alignCenter">
            <div class="cbp-l-caption-body">
              <div class="cbp-l-caption-title uppercase">Our Gallery</div>
            </div>
          </div>
        </div>
        </a> </div>
      <div class="cbp-item graphic identity"> <a class="cbp-caption cbp-lightbox" data-title="Our Gallery<br>by UXLiner"
               href="https://placeholdit.imgix.net/~text?txtsize=80&txt=900%C3%97600&w=900&h=600">
        <div class="cbp-caption-defaultWrap"><img src="https://placeholdit.imgix.net/~text?txtsize=50&txt=380%C3%97360&w=380&h=360" alt=""> </div>
        <div class="cbp-caption-activeWrap">
          <div class="cbp-l-caption-alignCenter">
            <div class="cbp-l-caption-body">
              <div class="cbp-l-caption-title uppercase">Our Gallery</div>
            </div>
          </div>
        </div>
        </a> </div>
      <div class="cbp-item graphic identity"> <a class="cbp-caption cbp-lightbox" data-title="Our Gallery<br>by UXLiner"
               href="https://placeholdit.imgix.net/~text?txtsize=80&txt=900%C3%97600&w=900&h=600">
        <div class="cbp-caption-defaultWrap"><img src="https://placeholdit.imgix.net/~text?txtsize=50&txt=380%C3%97360&w=380&h=360" alt=""> </div>
        <div class="cbp-caption-activeWrap">
          <div class="cbp-l-caption-alignCenter">
            <div class="cbp-l-caption-body">
              <div class="cbp-l-caption-title uppercase">Our Gallery</div>
            </div>
          </div>
        </div>
        </a> </div>
      <div class="cbp-item graphic identity"> <a class="cbp-caption cbp-lightbox" data-title="Our Gallery<br>by UXLiner"
               href="https://placeholdit.imgix.net/~text?txtsize=80&txt=900%C3%97600&w=900&h=600">
        <div class="cbp-caption-defaultWrap"><img src="https://placeholdit.imgix.net/~text?txtsize=50&txt=380%C3%97360&w=380&h=360" alt=""> </div>
        <div class="cbp-caption-activeWrap">
          <div class="cbp-l-caption-alignCenter">
            <div class="cbp-l-caption-body">
              <div class="cbp-l-caption-title uppercase">Our Gallery</div>
            </div>
          </div>
        </div>
        </a> </div>
    </div>
  </div>


<?php get_footer(); ?>