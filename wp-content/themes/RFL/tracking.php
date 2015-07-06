<?php /* ?><?php Template Name: Tracking ?><?php */ ?><?php get_header(); ?>
<div id="servicios">
  <div class="block light-color center container-fluid">
    <div class="bg-fixed">
      <div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/misc/10-cantisa/web/home.jpg')" class="background-full zoomClass bg-alpha-main">
        <div class="bg"></div>
      </div>
    </div>
    <div class="row">
      <div class="spacing sp-lg"></div>
      <div class="col-sm-10 col-sm-offset-1 text-left anim from-left anim-far anim-slow">
        <h1 class="text-sm lighter">Tracking</h1>
      </div>
      <div class="spacing sp-lg"></div>
      <div class="spacing sp-md"></div>
    </div>
  </div>
  <div class="block">
    <div class="row">
      <div class="col-sm-6 dark-color">
        <p class="bolder">Acceso Tracking</p>
        <p>Sed posuere consectetur est at lobortis.</p>
        <form>
          <div class="form-group">
            <label>ID<span class="main-color">*</span></label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label>PID</label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="col-sm-12 text-center">
            <div class="spacing sp-sm"></div>
            <button class="btn dark-btn">OK</button>
          </div>
        </form>
      </div>
      <div class="spacing sp-md"></div>
    </div>
  </div>
</div><?php get_footer(); ?>