<section id="footer">
  <div class="container imagenMuestra3">
    
    <div class="row contact-wrap"> 
        <div class="status alert alert-success" style="display: none"></div>
        <form id="main-contact-form" class="contact-form textocontacto" name="contact-form" method="post" action="{{route('sendsForms.store')}}">
            <input class="form-control" name="_token" value="{{csrf_token()}}" type="hidden">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="form-group">
                    <label>Nombre *</label>
                    <input type="text" name="name" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Telefono *</label>
                    <input type="number" name="number" class="form-control" required="required">
                </div>                       
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Mensaje *</label>
                    <textarea name="mensaje" id="message" required="required" class="form-control" rows="8"></textarea>
                </div>                        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg" required="required">Enviar mensaje</button>
                </div>
            </div>
        </form>
    </div><!--/.row-->
  </div><!--/.container-->
</section>