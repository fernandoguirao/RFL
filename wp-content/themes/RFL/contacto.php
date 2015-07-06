<?php /* ?><?php Template Name: Contacto  ?><?php */ ?><?php get_header(); ?>
<div id="contacto">
  <div class="block">
    <div class="row">
      <div class="col-sm-12">
        <div class="spacing sp-md"></div>
        <h3>Contacto</h3>
      </div>
    </div>
  </div>
  <div id="map" class="block block-full light-color center container-fluid background-full">
    <iframe width="600" height="450" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Calle%20Gasco%20Oliag%2C%2010%2C%20Valencia%2C%20Espa%C3%B1a&amp;key=AIzaSyA2krBchnBxATGkN8XjD-F3qlYh-wR0-m8&amp;"></iframe>
  </div>
  <div class="block">
    <div class="row">
      <div class="col-sm-6">
        <p>Calle del Dr. Lluch</p>
        <p>16, bajo</p>
        <p>Valencia, Spain</p><br/>
        <p>Teléfono</p>
        <p>92323131</p><br/>
        <p>Correo electrónico</p>
        <p>info@adasd.cpm</p>
      </div>
      <div class="col-sm-6 dark-color">
        <form>
          <div class="form-group">
            <label>Nombre<span class="main-color">*</span></label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Empresa</label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Teléfono<span class="main-color">*</span></label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Email<span class="main-color">*</span></label>
            <input type="text" placeholder="" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Mensaje</label>
            <textarea placeholder="" rows="9" class="form-control"></textarea>
          </div>
          <div class="col-sm-12 text-center">
            <div class="spacing sp-sm"></div>
            <button class="btn dark-btn">Enviar</button>
          </div>
        </form>
      </div>
      <div class="spacing sp-md"></div>
    </div>
  </div>
</div><?php get_footer(); ?>