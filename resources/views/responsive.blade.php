
@extends('layouts.header')

@section('content')

<body>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a href="https://bootstrap.jumpseller.com" title="Bootstrap" class="navbar-brand">
              
              <img src="https://images.jumpseller.com/store/bootstrap/logo/logo-bootstrap.jpg?1438701518" class="store-image" alt="Bootstrap">
              
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarContainer" aria-controls="navbarContainer" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarContainer">
              <form id="search_mini_form" class="d-lg-none d-md-block" method="get" action="/search">
                <div class="input-group mb-3">
                  <input type="text" value="" name="q" class="form-control form-control-sm" onfocus="javascript:this.value=''" placeholder="Search for products">
                  <button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
                </div>
              <input type="hidden" value="qD+PJ+Hcbgc0XvUOBDxWuiOrI4CYFBal3y6OVsGKUl4=" name="authenticity_token"></form>
              <ul id="navbarContainerMobile" class="navbar-nav d-lg-none">
                
                <li class="nav-item  ">
                  <a href="/" title="Inicio" class="level-1 trsn nav-link">Inicio</a>
                </li>
    
                
    
    
                
                <li class="nav-item  ">
    <a href="/about-us" title="About Us" class="level-1 trsn nav-link">About Us</a>
    
    </li>
    
                
                <li class="nav-item  ">
    <a href="/blog" title="Blog" class="level-1 trsn nav-link">Blog</a>
    
    </li>
    
                
                <li class="nav-item  ">
    <a href="/contact" title="Contact" class="level-1 trsn nav-link">Contact</a>
    
    </li>
    
                
              </ul>
              <ul class="nav navbar-nav float-right nav-top">
                
    
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle trsn nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span><i class="fas fa-globe"></i></span>
                    <span>English</span>
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    
                    <li><a href="https://bootstrap.jumpseller.com/" class="trsn nav-link" title="English">English</a></li>
                    
                    <li><a href="https://bootstrap.jumpseller.com/cl/" class="trsn nav-link" title="Español (Chile)">Español (Chile)</a></li>
                    
                    <li><a href="https://bootstrap.jumpseller.com/co/" class="trsn nav-link" title="Español (Colombia)">Español (Colombia)</a></li>
                    
                    <li><a href="https://bootstrap.jumpseller.com/br/" class="trsn nav-link" title="Português (Brasil)">Português (Brasil)</a></li>
                    
                    <li><a href="https://bootstrap.jumpseller.com/pt/" class="trsn nav-link" title="Português (Portugal)">Português (Portugal)</a></li>
                    
                    <li><a href="https://bootstrap.jumpseller.com/mx/" class="trsn nav-link" title="Español (Mexico)">Español (Mexico)</a></li>
                    
                    <li><a href="https://bootstrap.jumpseller.com/es/" class="trsn nav-link" title="Español">Español</a></li>
                    
                  </ul>
                </li>
                
    
                <li>
                  <a id="cart-link" href="https://bootstrap.jumpseller.com/cart" class="trsn nav-link" title="View/Edit Cart">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="nav-bar-cart"><span class="cart-size">0</span> Product(s) | $0</span>
                  </a>
                </li>
    
                
                <li>
                  <a href="/customer/login" id="login-link" class="trsn nav-link" title="Login toBootstrap">
                    <i class="fas fa-user"></i>
                    <span class="customer-name">
                      Login
                    </span>
                  </a>
                </li>
                
                
              </ul>
              <form id="search_mini_form" class="navbar-form float-right form-inline d-none d-lg-flex" method="get" action="/search">
                <input type="text" value="" name="q" class="form-control form-control-sm" onfocus="javascript:this.value=''" placeholder="Search for products">
                <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-search"></i></button>
              <input type="hidden" value="qD+PJ+Hcbgc0XvUOBDxWuiOrI4CYFBal3y6OVsGKUl4=" name="authenticity_token"></form>
              <ul class="social list-inline d-lg-none text-center">
              </ul>
            </div>
          </div>
        </nav>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-none d-lg-block">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarsContainer-2">
              <ul class="navbar-nav mr-auto">
                
                <li class="nav-item  ">
    <a href="/" title="Inicio" class="level-1 trsn nav-link">Inicio</a>
    
    </li>
    
                
                <li class="nav-item  ">
    <a href="/techno" title="Techno" class="level-1 trsn nav-link">Techno</a>
    
    </li>
    
                
                <li class="nav-item  ">
    <a href="/about-us" title="About Us" class="level-1 trsn nav-link">About Us</a>
    
    </li>
    
                
                <li class="nav-item  ">
    <a href="/blog" title="Blog" class="level-1 trsn nav-link">Blog</a>
    
    </li>
    
                
                <li class="nav-item  ">
    <a href="/contact" title="Contact" class="level-1 trsn nav-link">Contact</a>
    
    </li>
    
                
              </ul>
    
              <ul class="social navbar-toggler-right list-inline">
                
    
              </ul>
            </div>
          </div>
        </nav>
      </div>
 <!-- -->



<div class="container">
  

  
    <!-- Products Section -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">Featured Products</h2>
      </div>
  
      
      <!-- Featured Products -->
      
        <div class="col-md-3 col-6 product-block">
        
            <a href="/wacom-tablet"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1439529365" srcset="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1439529365 1x, https://cdnx.jumpseller.com/bootstrap/image/429444/resize/510/640?1439529365 2x" alt="Wacom Bamboo Tablet"></a>
  
            <div class="caption">
                 <h3><a href="/wacom-tablet">Wacom Bamboo Tablet</a></h3>
            <div class="price-mob">
                $100.000
            </div>
            <div class="clearfix"></div>
                <p class="product-block-description d-none d-md-block">  
                </p>
            </div>
  
        </div>
    
      <div class="col-md-3 col-6 product-block">
        
        <a href="/smartphone-mtk6572"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548" srcset="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548 1x, https://cdnx.jumpseller.com/bootstrap/image/429445/resize/510/640?1439529548 2x" alt="Smartphone MTK6572 "></a>
  
        <div class="caption">
            <h3><a href="/smartphone-mtk6572">Smartphone MTK6572 </a></h3>
            <div class="price-mob">
                $500.000
            </div>
            <div class="clearfix"></div>
                <p class="product-block-description d-none d-md-block">
                </p>
            </div>
  
        </div>
    
      <div class="col-md-3 col-6 product-block"> 
        <a href="/imac-desktop-computer"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839" srcset="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839 1x, https://cdnx.jumpseller.com/bootstrap/image/429446/resize/510/640?1439529839 2x" alt="iMac Desktop Computer"></a>
  
        <div class="caption">
    <h3><a href="/imac-desktop-computer">iMac Desktop Computer</a></h3>
    <div class="price-mob">
      
      
      $1.200.000
      
      
    </div>
    <div class="clearfix"></div>
    <p class="product-block-description d-none d-md-block">
  
      
    </p>
  </div>
  
      </div>
    
      <div class="col-md-3 col-6 product-block">
        
  <a href="/ps4"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709" srcset="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709 1x, https://cdnx.jumpseller.com/bootstrap/image/429450/resize/510/640?1439530709 2x" alt="DualShock Controller for PlayStation 4"></a>
  
        <div class="caption">
            <h3><a href="/ps4">DualShock Controller for PlayStation 4</a></h3>
            <div class="price-mob">
            $20.000
            </div>
             <div class="clearfix">

             </div>
                <p class="product-block-description d-none d-md-block">
  
                </p>
        </div>
        </div>
    
    </div><!-- /.row -->
    
  
    
    <!-- Products Section -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">Latest Products</h2>
      </div>
  
      
      <!-- Featured Products -->
      
      <div class="col-md-3 col-6 product-block">
        
  <a href="/camara-nikon-reflex-d7200-lente-18-140"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/6221140/resize/255/320?1564681025" srcset="https://cdnx.jumpseller.com/bootstrap/image/6221140/resize/255/320?1564681025 1x, https://cdnx.jumpseller.com/bootstrap/image/6221140/resize/510/640?1564681025 2x" alt="Camara Nikon Reflex D7200 + Lente 18-140"></a>
  
  <div class="caption">
    <h3><a href="/camara-nikon-reflex-d7200-lente-18-140">Camara Nikon Reflex D7200 + Lente 18-140</a></h3>
    <div class="price-mob">
      
      
      $1.290.000
      
      
    </div>
    <div class="clearfix"></div>
    <p class="product-block-description d-none d-md-block">
  
      
    </p>
  </div>
  
      </div>
    
      <div class="col-md-3 col-6 product-block">
        
  <a href="/notebook-asus-x507ua-intel-core-i3-4gb-ram"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/6221126/resize/255/320?1564681003" srcset="https://cdnx.jumpseller.com/bootstrap/image/6221126/resize/255/320?1564681003 1x, https://cdnx.jumpseller.com/bootstrap/image/6221126/resize/510/640?1564681003 2x" alt="Notebook Asus X507UA Intel Core i3 4GB RAM "></a>
  
  <div class="caption">
    <h3><a href="/notebook-asus-x507ua-intel-core-i3-4gb-ram">Notebook Asus X507UA Intel Core i3 4GB RAM </a></h3>
    <div class="price-mob">
      
      
      $900.000
      
      
    </div>
    <div class="clearfix"></div>
    <p class="product-block-description d-none d-md-block">
  
      
    </p>
  </div>
  
      </div>
    
      <div class="col-md-3 col-6 product-block">
        
  <a href="/dualshock-controller-for-playstation-4"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429451/resize/255/320?1439530880" srcset="https://cdnx.jumpseller.com/bootstrap/image/429451/resize/255/320?1439530880 1x, https://cdnx.jumpseller.com/bootstrap/image/429451/resize/510/640?1439530880 2x" alt="Dualshock Controller for PlayStation 4"></a>
  
  <div class="caption">
    <h3><a href="/dualshock-controller-for-playstation-4">Dualshock Controller for PlayStation 4</a></h3>
    <div class="price-mob">
      
      <span class="product-block-not-available">Out of Stock</span>
      
    </div>
    <div class="clearfix"></div>
    <p class="product-block-description d-none d-md-block">
  
      
    </p>
  </div>
  
      </div>
    
      <div class="col-md-3 col-6 product-block">
        
  <a href="/keyboarded-tablet"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429448/resize/255/320?1439530289" srcset="https://cdnx.jumpseller.com/bootstrap/image/429448/resize/255/320?1439530289 1x, https://cdnx.jumpseller.com/bootstrap/image/429448/resize/510/640?1439530289 2x" alt="Asus Transformer Pad Tablet"></a>
  
  <div class="caption">
    <h3><a href="/keyboarded-tablet">Asus Transformer Pad Tablet</a></h3>
    <div class="price-mob">
      
      
      $200.000
      
      
    </div>
    <div class="clearfix"></div>
    <p class="product-block-description d-none d-md-block">
  
      
    </p>
  </div>
  
      </div>
    
      <div class="col-md-3 col-6 product-block">
        
  <a href="/ps4"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709" srcset="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709 1x, https://cdnx.jumpseller.com/bootstrap/image/429450/resize/510/640?1439530709 2x" alt="DualShock Controller for PlayStation 4"></a>
  
  <div class="caption">
    <h3><a href="/ps4">DualShock Controller for PlayStation 4</a></h3>
    <div class="price-mob">
      
      
      $20.000
      
      
    </div>
    <div class="clearfix"></div>
    <p class="product-block-description d-none d-md-block">
  
      
    </p>
  </div>
  
      </div>
    
      <div class="col-md-3 col-6 product-block">
        
  <a href="/imac-desktop-computer"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839" srcset="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839 1x, https://cdnx.jumpseller.com/bootstrap/image/429446/resize/510/640?1439529839 2x" alt="iMac Desktop Computer"></a>
  
  <div class="caption">
    <h3><a href="/imac-desktop-computer">iMac Desktop Computer</a></h3>
    <div class="price-mob">
      
      
      $1.200.000
      
      
    </div>
    <div class="clearfix"></div>
    <p class="product-block-description d-none d-md-block">
  
      
    </p>
  </div>
  
      </div>
    
      <div class="col-md-3 col-6 product-block">
        
  <a href="/smartphone-mtk6572"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548" srcset="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548 1x, https://cdnx.jumpseller.com/bootstrap/image/429445/resize/510/640?1439529548 2x" alt="Smartphone MTK6572 "></a>
  
  <div class="caption">
    <h3><a href="/smartphone-mtk6572">Smartphone MTK6572 </a></h3>
    <div class="price-mob">
      
      
      $500.000
      
      
    </div>
    <div class="clearfix"></div>
    <p class="product-block-description d-none d-md-block">
  
      
    </p>
  </div>
  
      </div>
    
      <div class="col-md-3 col-6 product-block">
        
  <a href="/wacom-tablet"><img class="img-fluid img-portfolio img-hover mb-3" src="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1439529365" srcset="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1439529365 1x, https://cdnx.jumpseller.com/bootstrap/image/429444/resize/510/640?1439529365 2x" alt="Wacom Bamboo Tablet"></a>
  
  <div class="caption">
    <h3><a href="/wacom-tablet">Wacom Bamboo Tablet</a></h3>
    <div class="price-mob">
      
      
      $100.000
      
      
    </div>
    <div class="clearfix"></div>
    <p class="product-block-description d-none d-md-block">
  
      
    </p>
  </div>
  
      </div>
    
    
    </div><!-- /.row -->
  
    
  </div>
</body>
@endsection