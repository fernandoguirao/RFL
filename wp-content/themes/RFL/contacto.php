<?php /* ?><?php Template Name: Contacto  ?><?php */ ?><?php get_header(); ?>
<div id="contacto">
  <div id="title" class="block">
    <div class="row">
      <div class="col-sm-12">
        <div class="spacing sp-md"></div>
        <h3 class="main-color">Contacto</h3>
      </div>
    </div>
  </div>
  <div id="map" class="block block-full light-color center container-fluid background-full">
    <iframe width="600" height="450" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Calle%20Gasco%20Oliag%2C%2010%2C%20Valencia%2C%20Espa%C3%B1a&amp;key=AIzaSyA2krBchnBxATGkN8XjD-F3qlYh-wR0-m8&amp;"></iframe>
  </div>
  <div class="block">
    <div class="row">
      <div class="col-sm-6">
        <p class="text-sm">Calle del Dr. Lluch<br/>16, bajo<br/>Valencia, Spain</p><br/>
        <p class="text-sm">Teléfono<br/>92323131</p><br/>
        <p class="text-sm">Correo electrónico<br/><a href="">info@adasd.cpm</a></p>
      </div>
      <div class="col-sm-6 dark-color">
        <form>
          <div class="form-group">
            <label class="main-color">Nombre<span class="main-color">*</span></label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label class="main-color">Empresa</label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label class="main-color">Teléfono<span class="main-color">*</span></label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label class="main-color">Email<span class="main-color">*</span></label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label class="main-color">Mensaje</label>
            <textarea placeholder="" rows="9" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <div class="spacing sp-sm"></div>
            <button class="btn-accent btn-block btn-lg uppercase">Enviar</button>
          </div>
        </form>
      </div>
      <div class="spacing sp-md"></div>
    </div>
  </div>
</div><?php get_footer(); ?>