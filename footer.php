<div class="modal fade" id="registration-form" tabindex="-1" role="dialog" aria-labelledby="registration-form">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="blur-bkg"></div>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <img class="img-responsive" src="images/final-logo.svg" alt="logo">
            </div>
            <div class="modal-body">
                <form name="registration" method="POST" name="myForm" id="submit-form" action="http://tooryanaad.in/includes/registrationavahan.php">
                    <div class="form-group">
                        <input type="text" id="even" class="form-control" placeholder="event" name="" value="आह्वान'21" disabled />
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                    </div>
                    <div class="form-group">
                    <input value="" type="text" id="myname" class="form-control" placeholder="नाम (User Name)" name="uname"  required />
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="form-group">
                        <input value="" type="email" id="myemail" class="form-control" placeholder="अणुडाक (Email)" name="email" required />
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="form-group">
                        <input value="" type="tel" id="mymob" class="form-control" placeholder="संपर्क सूत्र (Mobile No.)" name="mobileno" required />
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <!--<div class="form-group">
                       <input type="text" id="mycol" class="form-control" placeholder="आयु (Age)" name="age" value="" />
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </div>-->
                    <div class="form-group">
                       <input type="text" id="mycol" class="form-control" placeholder="अनुक्रमांक (Scholar No.)" name="scholar" value="" />
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" id="mycol" class="form-control" placeholder="विभाग (Department)" name="department" value="" />
                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" id="mycol" class="form-control" placeholder="महाविद्यालय (College)" name="college" value="" required />
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>

                    <!--<div class="form-group">
                        <input type="text" id="mycol" class="form-control" placeholder="स्थान (Place)" name="place" value="" />
                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                    </div> -->
                    
                    <div class="form-group">
                        <div class="checkbox-list col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <span>हिन्दी सम्पादक</span>
                            <input type="checkbox" class="si" name="hindi_sampadak" value="1" />
                            <span>प्रबन्धक</span>
                            <input type="checkbox" class="si" name="prabhandak" value="1" />
                            <span>अभिकल्पक (डिज़ाइनर)</span>
                            <input type="checkbox" class="si" name="designer" value="1" />
                            <span>वेब अभिकल्पक (वेब डिजाइनर)</span>
                            <input type="checkbox" class="si" name="web_developer" value="1" />
                            

                        </div>
                        <div class="checkbox-list col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <span>हिन्दीतर भाषी</span>
                            <input type="checkbox" class="si" name="hinditar" value="1" />
                            <span>वीडियो सम्पादक</span>
                            <input type="checkbox" class="si" name="video" value="1" />
                            <span>छायाकार</span>
                            <input type="checkbox" class="si" name="chayakar" value="1" />

                        </div>
                    </div>
                    
                    <!-- <div class="form-group">
                        <div class="checkbox-list col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <span>विवेक मंथन : प्रश्नोत्तरी</span>
                            <input type="checkbox" class="si" name="hindi_quiz" value="1" />
                            <span>भावोद्गार : भाषण</span>
                            <input type="checkbox" class="si" name="bhashan" value="1" />
                            <span>एक पत्र स्वामी जी के नाम</span>
                            <input type="checkbox" class="si" name="patra" value="1" />


                        </div>
                    </div> -->

                    <!-- <div class="form-group">
            <div class="checkbox-list col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <span>स्वलिखित कहानी</span>
      				<input type="checkbox" id="mycheck" class="si" name="kahane" value="1"/>
              <span>अभिव्यक्ति(open mic)</span>
      				<input type="checkbox" class="si" name="abhivyakti" value="1"/>
              <span>पुस्तक समीक्षा</span>
      				<input type="checkbox" class="si" name="pustak" value="1"/>
              <span>खिचड़ी</span>
      				<input type="checkbox" class="si" name="khichdi" value="1"/>
      			
            </div>
            <div class="checkbox-list col-lg-6 col-md-6 col-sm-6 col-xs-6">
      				
      				<span>कवि सम्मेलन</span>
      				<input type="checkbox" class="si" name="kavi" value="1"/>
      				<span>चक्रव्यूह</span>
      				<input type="checkbox" class="si" name="chakravyuh" value="1"/>
      				
      				<span>सृजन</span>
      				<input type="checkbox"  class="si" name="srijan" value="1"/> -->
                    <!-- PRECOMMENTED -->
                    <!--	<span>तकनीकी कार्यशाला</span>
      				<input type="checkbox" class="si" name="workshop" value="1"/> -->
                    <!-- /PRECOMMENTED -->

                    <!--	<span>सभी प्रतियोगिताएँ</span>
      				<input type="checkbox" id="all" name="all" value="1"/> 
            </div>
			</div> -->
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">बंद करें</button>
                <button name="submit" id="submit" value="submit" type="submit" class="btn btn-primary" onclick="form_submit()">पंजीयन करें</button>
            </div>
        </div>
    </div>
</div>

<div class="footer-section">
    <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
    <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-logo col-lg-4 col-md-4 col-sm-12 col-xs-12 text-left">
                    <img src="images/tooryanaad2022white.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-link">
                        <ul>
                            <li> <a href="gallery-events.php">चित्र प्रदर्शनी</a></li>
                            <!--<li><a data-toggle="modal" data-target="#registration-form" href="#registration-form">पंजीयन करें</a></li>-->
                          <!--<li><a href="hindiday21-reg.php">पंजीयन करें</a></li>-->
                            <li><a href="contact.php">संपर्क करें</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-left">
                    <p>© Copyright 2022 Tooryanaad. All rights reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-icons">
                        <ul>
                            <li><a href="https://twitter.com/tooryanaad_nitb"><i class="icon ion-logo-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/tooryanaad/"><i class="icon ion-logo-instagram"></i></a></li>
                            <li><a href="https://facebook.com/tooryanaad"><i class="icon ion-logo-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC6BTM_NYKT7RdY254dG_WCA"><i class="icon ion-logo-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo
"<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script> " ?>

<?php echo "<script>
function form_submit() {
  var f = document.getElementById('submit-form');
             f.submit();
             
  } </script>" ?>
<?php echo "<script>
function form_submit() {
  var f = document.getElementById('submit-form');
        if( f.uname.value == '' ) {
            alert( 'कृपया अपना नाम (User Name) भरें!' );
            f.uname.focus() ;
             return 0;
         }
         if ( f.email.value == '' ) {
            alert( 'कृपया अपना अणुडाक (Email) भरे ! ' );
            f.email.focus
              return 0;
         }
        var emailID = f.email.value;
         atpos = emailID.indexOf('@');
         dotpos = emailID.lastIndexOf('.');
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert( 'कृपया सही अणुडाक (Email) भरे ! ' );
            f.email.focus() ;
              return 0;
         }
         if ( f.mobileno.value == '' || isNaN( f.mobileno.value ) ||
            f.mobileno.value.length != 10 ) {
            
            alert( 'कृपया कंट्री कोड के बिना भरे');
            f.mobileno.focus() ;
              return 0;
         }
        //  if ( f.age.value == ''|| isNaN( f.age.value ) ||
        //     f.age.value.length != 2 ) {
        //     alert( 'कृपया सही आयु (age) भरे ! ' );
        //     f.age.focus() ;
        //       return 0;
        //  }
        if ( f.scholar.value == ''|| isNaN( f.scholar.value ) ||
            f.scholar.value.length > 10 ) {
            alert( 'कृपया सही अनुक्रमांक (Scholar No.) भरे ! ' );
            f.scholar.focus() ;
              return 0;
         }
         if( f.college.value == '' ) {
            alert( 'कृपया अपना महाविद्यालय (college/school) भरें!' );
            f.department.focus() ;
             return 0;
         }
        //   if( f.place.value == '' ) {
        //     alert( 'कृपया अपना जगह (place) भरें!' );
        //     f.place.focus() ;
        //      return 0;
        //  }
         if( f.department.value == '' ) {
            alert( 'कृपया अपना विभाग (Department) भरें!' );
            f.department.focus() ;
             return 0;
         }
          else {
             f.submit();
             }
  }

</script>"; ?>
<?php echo '<script>
$(document).ready(function(){
   $(window).scroll(function() { // check if scroll event happened
     if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
       $("nav.navbar.navbar-default").css("background", "rgb(33, 37, 41)"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
     } else {
       $("nav.navbar.navbar-default").css("background", "transparent"); // if not, change it back to transparent
     }
   });
 });</script>
 <script>
   $("#all").change(function() {
        if (this.checked) {
            $(".si").each(function() {
                this.checked=true;
            });
        } else {
            $(".si").each(function() {
                this.checked=false;
            });
        }
    });
    </script>'; ?>