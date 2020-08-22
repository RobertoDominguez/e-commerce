<footer id="footer">
    <div class="footer-bot">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-6">
                    <p class="font-weight-bold" style="color: #ffa500;">@yield('ubicacion')</p>
                </div>
                <div class="col-md-6 col-6">
                    <p class="font-weight-bold" style="color: #ffa500;">@yield('email')</p>
                </div>
                <div class="col-md-6 col-6">
                    <p class="font-weight-bold" style="color: #ffa500;">@yield('telefono')</p>
                </div>
                <div class="col-md-6 col-6">
                    <p class="font-weight-bold" style="color: #ffa500;">@yield('horario')</p>
                </div>
            </div>
        </div>
    </div>
  
    
  </footer>
  
  <style>
  #footer .footer-bot {
    background: #151515;
    border-bottom: 1px solid #222222;
    padding: 60px 0 30px 0;
  }    
  </style>