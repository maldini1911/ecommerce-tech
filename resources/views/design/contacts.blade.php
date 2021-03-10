@extends('design/index')

@section('info')
	
    <section class="contact">
    
                <!--div carry all-->    
        <div class="parent">
            
            <header>
                
            </header>
            
            <div class="morbatfildset">

                <div class="container">
                    <div class="row">
                         <div class="col-md-4 col-sm-12">
                               <div class="a">
                                   <fieldset id="a1">
                                     <legend><img src="{{url('/')}}/design/design/img/p.png" width="100px"></legend>

                                     <div class="info">
                                           <span class="tele">Telephone</span><br>
                                           <span>Tell/01065200839</span><br>
                                           <span >cell/01065200839</span>
                                      </div>

                                   </fieldset>
                               </div>
                          </div> 

                          <div class="col-md-4 col-sm-12">
                               <div class="a" >
                                    <fieldset id="b">
                                        <legend><img src="{{url('/')}}/design/design/img/t.png"></legend>
                                        <div class="info">
                                            <span class="tele">Orari</span><br>
                                            <span>Lunedi/Venerdia</span><br>
                                            <span>Dalle 9:00 alle 19:00</span>
                                        </div>
                                   </fieldset>
                               </div>
                           </div>
                           <div class="col-md-4 col-sm-12">    
                            <div class="a" >
                                <fieldset id="c">
                                    <legend><img src="{{url('/')}}/design/design/img/l.png"></legend>
                                    <div class="info">
                                        <span class="tele">Location</span><br>
                                        <span>Via Caduti di Nassirya,158/D,Via</span>
                                        
                                    </div>
                                </fieldset>
                            </div>
                           </div> 
                    </div>
                  </div>  
               </div> 
    <!--end div carried fieldsets-->  

       <div class="regsterdiv">
           <div class="container">
                 <div class="contact-form">
                     <div class="heading-message">
                         <h3>contact us</h3>
                         <p>fill in the form bellow to contact us</p>
                         <i class="fa fa-envelope"></i>
                     </div>

                     <form action="{{url('contact/create')}}" method="POST">
                        {!! csrf_field() !!}
                            <input type="name" name="name" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <textarea placeholder="Message" name="message"></textarea>
                            <button type="submit"> Send</button>
                     </form>
                 </div>
           </div> 
            
       </div>
    </div>
    <!-- end div carried all-->  
        
    </section>
    
    <section class="map">
        
        <div class="conatiner">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13822.338730071322!2d31.256913700000002!3d29.9913636!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1521405732382" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            
        </div>
        
    </section>




@endsection