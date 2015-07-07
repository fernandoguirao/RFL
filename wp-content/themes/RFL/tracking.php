<?php /* ?><?php Template Name: Tracking ?><?php */ ?><?php get_header(); ?>
<div id="traking">
  <div class="block light-color center container-fluid">
    <div class="bg-fixed">
      <div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/misc/demo02/section-01b.jpg')" class="background-full zoomClass">
        <div class="bg"></div>
      </div>
    </div>
    <div class="row">
      <div class="spacing sp-lg"></div>
      <div class="col-sm-10 col-sm-offset-1 text-left anim from-left anim-far anim-slow">
        <h2 class="uppercase bolder text-shadow">Traking</h2>
      </div>
      <div class="spacing sp-md"></div>
    </div>
  </div>
  <div class="block">
    <div class="row">
      <div class="col-sm-6 dark-color">
        <div class="spacing sp-sm"></div>
        <p class="bolder main-color">Acceso Tracking</p>
        <p class="main-color text-sm">Introduzca su nombre de usuario en la casilla ID y la contraseña en la casilla PID y pulse OK para comenzar a utilizar el consultor.</p>
        <div class="spacing sp-sm"></div>
        <form>
          <div class="form-group">
            <label class="main-color">ID<span class="main-color">*</span></label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label class="main-color">PID</label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <div class="spacing sp-sm"></div>
            <button class="btn-accent btn-block btn-lg uppercase">OK</button>
          </div>
        </form>
      </div>
      <div class="spacing sp-md"></div>
    </div>
  </div>
</div><?php get_footer(); ?>