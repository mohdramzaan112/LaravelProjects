@extends('layouts.front')

@section('content')
 <!-- Start gallery  -->
 <section id="mu-gallery">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-gallery-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>Some Moments</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ut laboriosam corporis doloribus, officia, accusamus illo nam tempore totam alias!</p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top">              
              <ul>
                <li class="filter active" data-filter="all">All</li>
                <li class="filter" data-filter=".lab">Lab</li>
                <li class="filter" data-filter=".classroom">Class Room</li>
                <li class="filter" data-filter=".library">Library</li>
                <li class="filter" data-filter=".cafe">Cafe</li>
                <li class="filter" data-filter=".others">Others</li>
              </ul>
            </div>
            <!-- End gallery menu -->
            <div class="mu-gallery-body">
              <ul id="mixit-container" class="row">
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="{{ asset('public/img/gallery/small/1.jpg') }}"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>Web Design</p>
                          <a href="{{ asset('public/img/gallery/big/1.jpg') }}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>                  
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
               <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="{{ asset('public/img/gallery/small/2.jpg') }}"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>Animation</p>
                          <a href="{{ asset('public/img/gallery/big/2.jpg') }}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div> 
                    </div>
                  </div>
               </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="{{ asset('public/img/gallery/small/3.jpg') }}"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>Math</p>
                          <a href="{{ asset('public/img/gallery/big/3.jpg') }}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix classroom">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="{{ asset('public/img/gallery/small/4.jpg') }}"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>English</p>
                          <a href="{{ asset('public/img/gallery/big/4.jpg') }}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="{{ asset('public/img/gallery/small/5.jpg') }}"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>Graphics</p>
                          <a href="{{ asset('public/img/gallery/big/5.jpg') }}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix cafe">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="{{ asset('public/img/gallery/small/6.jpg') }}"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>Health</p>
                          <a href="{{ asset('public/img/gallery/big/6.jpg') }}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix others">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="{{ asset('public/img/gallery/small/7.jpg') }}"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>Sports</p>
                          <a href="{{ asset('public/img/gallery/big/7.jpg') }}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>             
                    </div>
                  </div> 
                </li>
                 <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix library">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="{{ asset('public/img/gallery/small/8.jpg') }}"></a>
                      </div>
                       <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>Health</p>
                          <a href="{{ asset('public/img/gallery/big/8.jpg') }}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                        <a href="#"><img alt="img" src="{{ asset('public/img/gallery/small/9.jpg') }}"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Image Title</h4>
                          <p>Sports</p>
                          <a href="{{ asset('public/img/gallery/big/9.jpg') }}" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                        </div>
                      </div>             
                    </div>
                  </div> 
                </li>
              </ul>            
            </div>
          </div>
          <!-- end gallery content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End gallery  -->
 @endsection