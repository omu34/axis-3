<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/scroll-down.css">
<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<!-- <section class="fill-inner"></section> -->
<!-- <section class="inside-pages-topper">
   <h2 class="centre"><?php echo the_title(); ?></h2>
</section> -->
<!-- <section class="products-cases padding-top-bottom">
   <div class="wrapper">
      <h2 class="centre"> Affordable pricing, Easy scaling
         <span>Our app works for business of all sizes and shapes. <b>Start for free and upgrade anytime</b> 
         </span>
      </h2>
   </div>
</section> -->
<!-- <section id="pricingnew">
   <div class="content"> -->
      <?php
         // Assuming you are within a WordPress template file
         $args = array(
             'post_type' => 'packages', // Your custom post type name
             'posts_per_page' => -1,    // Display all packages
         	'order' => 'ASC', 
         );
         
         $packages_query = new WP_Query($args);
         
         if ($packages_query->have_posts()) :
             while ($packages_query->have_posts()) : $packages_query->the_post();
         ?>
      <div class="basic box">
         <div style="width: 100%;display: flex;/*! position: relative; *//*! right: 30; */">
			 <div style="width: 60%;">
				 <h2 class="title" ><?php the_title(); ?></h2>
			 </div>
			 <div style="width: 40%;">
				<?php
               $popular_field_value = get_field('popular'); // Replace 'popular' with the actual field name
               
               if ($popular_field_value) {
                   echo '<p class="button-small" style="width: 100%;position: relative;right: 69px;bottom: -43px;width: 129px;">Most Popular</p>';
               }
               ?>
			 </div>
            
            
         </div>
         <div class="view">
            <div class="cost">
               <h2 class="amount"><?php echo get_field('price'); ?></h2>
            </div>
         </div>
         <p class="button-small-2" style="margin: 0px 0px 0px 35px !important;">
            Billed Monthly
         </p>
         <p class="pricing-p">
            <?php echo get_field('description'); ?>
         </p>
         <p class="pricing-p" style="font-style: italic; font-size: 15px;">
            <?php echo get_field('italic_description'); ?>
         </p>
         <?php
            $fields = array(
                'Campaigns' => 'campaigns',
            'Unified Inbox' => 'unified_inbox',
                'Users' => 'users',
                
            //                 'Setup Cost' => 'setup_costs',
            );
            
            foreach ($fields as $field_label => $field_name) :
                $repeater_items = get_field($field_name);
                if ($repeater_items) :
            ?>
         <div class="description">
            
			 <div class="trigger" style="display: flex; align-items: center;">
   <div style="width: 70%;">
      <p class="button-small-2">
         <?php echo $field_label; ?>
      </p>
   </div>
   <div style="width: 30%; text-align: right;">
      
        
         <span class="chevron">❯</span>
      
   </div>
</div>
            <ul class="hidden">
               <?php
                  foreach ($repeater_items as $repeater_item) :
                      $status = $repeater_item['status'];
                  ?>
               <li>
                  <img src="<?php echo $status === 'inactive' ? 'https://axis.africa/wp-content/uploads/2023/08/Tick-1.svg' : 'https://axis.africa/wp-content/uploads/2023/08/Tick.svg'; ?>" style="position: relative; top: 10px; width: 30px; display: inline;" alt="Icon">
                  <?php echo esc_html($repeater_item['item']); ?>
               </li>
               <?php
                  endforeach;
                  ?>
            </ul>
         </div>
         <?php
            endif;
            endforeach;
            ?>
         <div class="description">
            <div class="trigger" style="display: flex; align-items: center;">
   <div style="width: 70%;">
      <p class="button-small-2">
         SetUp Costs
      </p>
   </div>
   <div style="width: 30%; text-align: right;">
      
        
         <span class="chevron">❯</span>
      
   </div>
</div>

            <ul class="hidden">
               <li>
                  <img src="https://axis.africa/wp-content/uploads/2023/08/Tick.svg" style="position: relative; top: 10px; width: 30px; display: inline;" alt="Icon">
                  Safaricom : KES 9,900
               </li>
               <li>
                  <img src="https://axis.africa/wp-content/uploads/2023/08/Tick.svg" style="position: relative; top: 10px; width: 30px; display: inline;" alt="Icon">
                  Airtel : KES 9,900
               </li>
               <li>
                  <img src="https://axis.africa/wp-content/uploads/2023/08/Tick.svg" style="position: relative; top: 10px; width: 30px; display: inline;" alt="Icon">
                  Both Saf and Airtel : KES 17,000
               </li>
               <li>
                  <img src="https://axis.africa/wp-content/uploads/2023/08/Tick.svg" style="position: relative; top: 10px; width: 30px; display: inline;" alt="Icon">
                  Telkom : KES 6, 000
               </li>
               <li>
                  <img src="https://axis.africa/wp-content/uploads/2023/08/Tick.svg" style="position: relative; top: 10px; width: 30px; display: inline;" alt="Icon">
                  Equitel: KES 10,000
               </li>
               <li>
                  <img src="https://axis.africa/wp-content/uploads/2023/08/Tick.svg" style="position: relative; top: 10px; width: 30px; display: inline;" alt="Icon">
                  All Kenyan Telcos : sh. 32,000
               </li>
               <li>
                  <img src="https://axis.africa/wp-content/uploads/2023/08/Tick.svg" style="position: relative; top: 10px; width: 30px; display: inline;" alt="Icon">
                  Whatsapp : 50,000
               </li>
            </ul>
         </div>
      </div>
      <?php
         endwhile;
         wp_reset_postdata(); // Reset the post data after the loop
         else :
         echo 'No packages found.';
         endif;
         ?>
   </div>
</section>
<!-- <section class="products-cases py-3">
   <div class="wrapper">
      <h2 class="centre"> Message Costs
         <span>These apply to emails, SMS and WhatsApp messages 
         </span>
      </h2>
   </div>
</section> -->
<section class="inside-pages-text  faqs py-3 ">
   <div class="wrapper">
      <div class="">
         <div class="tabs">
            <div class="tab">
               <input type="radio" id="rd1" name="rd">
               <label class="tab-label" for="rd1">Email Messaging Pricing</label>
               <div class="tab-content">
                  <?php echo do_shortcode('[ninja_tables id="663"]'); ?>
               </div>
            </div>
            <div class="tab">
               <input type="radio" id="rd2" name="rd">
               <label class="tab-label" for="rd2">Whatsapp Messaging Pricing</label>
               <div class="tab-content">
                  <?php echo do_shortcode('[ninja_tables id="271"]'); ?>
               </div>
            </div>
            <div class="tab">
               <input type="radio" id="rd3" name="rd">
               <label class="tab-label" for="rd3">Bulk SMS Pricing</label>
               <div class="tab-content">
                  <?php echo do_shortcode('[ninja_tables id="270"]'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="products-cases padding-top-bottom">
   <div class="wrapper">
      <h2 class="centre"> 
         <span>For business that need more than the plans above, <a href="/contact-us" style="color:#FBA800 !important;">contact us</a>
         </span>
      </h2>
   </div>
</section>
<style>
   #pricingnew .hidden, .table_title, .table_description {
   display: none;
   }
   input {
   position: absolute;
   opacity: 0;
   z-index: -1;
   }
   /* Accordion styles */
   .tabs {
   overflow: hidden;
   }
   .tab {
   width: 100%;
   color: black;
   overflow: hidden;
   font-family: Unbounded !important;
   border-bottom: 2px solid var(--colors-orange, #FBA800);
   }
   .tab-label {
   display: flex;
   justify-content: space-between;
   padding: 1em;
   background: white;
   font-weight: bold;
   cursor: pointer;
   font-family: Unbounded !important;
   /* Icon */
   }
   .tab-label:hover {
   background: white;
   }
   .tab-label::after {
   content: "❯";
   width: 1em;
   height: 1em;
   text-align: center;
   transition: all 0.35s;
   }
   .tab-content {
   max-height: 0;
   padding: 0 1em;
   color: black;
   background: white;
   transition: all 0.35s;
   }
   .tab-close {
   display: flex;
   justify-content: flex-end;
   padding: 1em;
   font-size: 0.75em;
   background: #2c3e50;
   cursor: pointer;
   }
   .tab-close:hover {
   background: #fff;
   }
   input:checked + .tab-label {
   background: #fff;
   }
   input:checked + .tab-label::after {
   transform: rotate(90deg);
   }
   input:checked ~ .tab-content {
   max-height: 100vh;
   padding: 1em;
   }
   #pricingnew section{
   display: flex;
   justify-content: center;
   align-items: center;
   min-height: 100vh;
   background: #fff;
   }
   #pricingnew .button-small{
   border-radius: 27.197px;
   background: #FBA800;
   color:#fff;
   display: flex;
   /* height: 32.636px; */
   padding: 6px 20px;
   width: fit-content;
   justify-content: center;
   align-items: center;
   margin: 0px 0px 0px 35px;
   font-size: 13px;
   }
   .py-3{
   padding:30px;}
   #pricingnew .button-small-2{
   border-radius: 27.197px;
   background: rgba(144, 145, 156, 0.15);
   display: flex;
   /* height: 32.636px; */
   padding: 6px 20px;
   width: fit-content;
   justify-content: center;
   align-items: center;
   margin: 0px 0px 0px 0px;
   font-size: 13px;
   }
   #pricingnew .button-small-2:hover{
   background: #FBA800;
   color:white;
   }
   #pricingnew .content{
   display: flex;
   justify-content: center;
   /*     width: 1200px; */
   margin: 0 133px;
   background: white;
   }
   .pricing-p{
   margin: 0px 20px 0px 35px;
   margin-top:14px;
   }
   #pricingnew .box{
   display: flex;
   flex-direction: column;
   /*     height: 586px; */
   width: 313px;
   border-radius: 20px;
   margin-left: 4px;
   margin-right: 4px;
   border-radius: 15px;
   border: 2px solid var(--colors-orange, #FBA800);
   background: #fff;
   box-shadow: 3px 10px 20px 0px rgba(0, 0, 0, 0.02);
   }
   #pricingnew .title{
   width: 100%;
   font-size: 1.2em;
   font-weight: lighter;
   /*     text-align: center; */
   border-top-left-radius: 20px;
   border-top-right-radius: 20px;
   /* padding-top: 40px; */
   text-align: left;
   padding: 40px 0px 0px 35px;
   }
   #pricingnew .basic .title{
   background: var(--pinkish-red);
   }
   #pricingnew .standard .title{
   background: var(--medium-blue);
   }
   #pricingnew .business .title{
   background: var(--greenish-blue);
   }
   #pricingnew .view{
   }
   #pricingnew .cost{
   display: flex;
   justify-content:start;
   flex-direction: row;
   margin-top: 10px;
   padding-left: 35px;
   }
   #pricingnew .amount{
   font-size: 24px;
   font-weight: lighter;
   }
   #pricingnew .detail{
   margin: auto 0 auto 5px;
   width: 70px;
   font-size: 0.7em;
   font-weight: bold;
   line-height: 15px;
   color: #7D7C7C;
   }
   #pricingnew .description{
   margin: 10px 35px;
   font-size: 0.8em;
   color: #7D7C7C;
   }
   #pricingnew ul{
   list-style: none;
   }
   #pricingnew li{
   margin-top: 10px;
   line-height: 25px;
   }
   #pricingnew .button{
   margin: 0 auto 30px;
   }
   #pricingnew button{
   height: 40px;
   width: 250px;
   font-size: 0.7em;
   font-weight: bold;
   letter-spacing: 0.5px;
   color: #7D7C7C;
   border: 2px solid var(--dark-gray);
   border-radius: 50px;
   background: transparent;
   }
   #pricingnew button:hover{
   color: var(--white-smoke);
   transition: 0.5s;
   border: none;
   background: var(--bright-orange);
   }
   /* Responsiveness:Start */
   @media screen and (max-width:970px) {
   #pricingnew .content{
   display: flex;
   align-items: center;
   flex-direction: column;
   margin: 50px auto;
   }
   .py-3{
   padding:0px;}
   #pricingnew .standard, .business{
   margin-top: 25px;
   }
   #pricingnew .box{
   margin-top: 25px;
   }
   #pricingnew li{
   font-size:13px;
   }
   }
	.rotate {
      transform: rotate(90deg);
   }


   /* Responsiveness:End */
</style>

<!-- <script>
   document.addEventListener('DOMContentLoaded', function() {
     var descriptions = document.querySelectorAll('.description');
   
     descriptions.forEach(function(description) {
       var button = description.querySelector('.trigger');
       var list = description.querySelector('ul');
       var chevron = description.querySelector('.chevron'); // Select the chevron element

       button.addEventListener('click', function() {
         list.classList.toggle('hidden');
         chevron.textContent = list.classList.contains('hidden') ? '❯' : '▼';
       });
     });
   });
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
   jQuery(document).ready(function(){
   
    //hides dropdown content
    jQuery(".size_chart").hide();
    
    //unhides first option content
    jQuery("#option1").show();
    
    //listen to dropdown for change
    jQuery("#size_select").change(function(){
      //rehide content on change
      jQuery('.size_chart').hide();
      //unhides current item
      jQuery('#'+$(this).val()).show();
    });
   	
   	    /*--- Mobile Menu ---*/
      jQuery('.menu-icon').bind('touchstart mousedown', function(e){
          jQuery(".mobile-nav li").removeClass("open");
          jQuery(".sub-nav").slideUp(200);
          jQuery("body").toggleClass("menu-open");
          if(jQuery("body").hasClass("search-open")){
              jQuery("body").removeClass("search-open");
          }
          return false;
      });
   
   
      jQuery('body').on('touchstart mousedown', function(event){
          if(jQuery(event.target).is('body.menu-open') || jQuery(event.target).is('.menu-close')) {
              jQuery('body').removeClass('menu-open');
              jQuery('.mobile-nav .has-children ul').addClass('is-hidden');
              jQuery('.move-out').removeClass('move-out');
              event.preventDefault();
          }
      });
   
      jQuery('.mobile-nav .has-children').children('a').on('touchstart mousedown', function(event){
          event.preventDefault();
          var selected = jQuery(this);
          selected.next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('move-out');
          jQuery('.mobile-nav').scrollTop(0);
      });
   
      jQuery('.go-back').on('touchstart mousedown', function(event){
          event.preventDefault();
          var selected = jQuery(this);
          selected.parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('move-out');
          jQuery('.mobile-nav').scrollTop(0);
      });
   
      if(jQuery( window ).width() <= 820){
          jQuery(".footer-links .block").removeClass("open");
          jQuery(".footer-links .links-wrap").hide();
          jQuery(".footer-links h2").on('click',function() {
              var sub_nav = jQuery(this).closest(".block").children(".links-wrap");
              if(sub_nav.is(':visible'))
              {
                  jQuery(this).removeClass("open");
                  sub_nav.slideUp(200);
              }
              else
              {
                  jQuery(".footer-links h2").removeClass("open");
                  jQuery(this).addClass("open");
                  jQuery(".links-wrap").slideUp(200);
                  sub_nav.slideDown(200);
              }
              return false;
          });
      }
      else{
          jQuery(".footer-links h2").unbind();
          jQuery(".footer-links .links-wrap").show();
      }
   
   
      (function(){
          // Responsive Tabbed Navigation - by CodyHouse.co
          function TabbedNavigation( element ) {
              this.element = element;
              this.navigation = this.element.getElementsByTagName("nav")[0];
              this.navigationElements = this.navigation.getElementsByClassName("js-cd-navigation")[0];
              this.content = this.element.getElementsByClassName("js-cd-content")[0];
              this.activeTab;
              this.activeContent;
              this.init();
          };
   
          TabbedNavigation.prototype.init = function() {
              var self = this;
              //listen for the click on the tabs navigation
              this.navigation.addEventListener("click", function(event){
                  event.preventDefault();
                  if(event.target.tagName.toLowerCase() == "a" && !hasClass(event.target, "cd-selected")) {
                      self.activeTab = event.target;
                      self.activeContent = self.content.querySelectorAll("[data-content="+self.activeTab.getAttribute("data-content")+"]")[0];
                      self.updateContent();
                  }
              });
   
              //listen for the scroll in the tabs navigation
              this.navigation.addEventListener('scroll', function(event){
                  self.toggleNavShadow();
              });
          };
   
          TabbedNavigation.prototype.updateContent = function() {
              var actualHeight = this.content.offsetHeight;
              //update navigation classes
              removeClass(this.navigation.querySelectorAll("a.cd-selected")[0], "cd-selected");
              addClass(this.activeTab, "cd-selected");
              //update content classes
              removeClass(this.content.querySelectorAll("li.cd-selected")[0], "cd-selected");
              addClass(this.activeContent, "cd-selected");
              //set new height for the content wrapper
              (!window.requestAnimationFrame)
                  ? this.content.setAttribute("style", "height:"+this.activeContent.offsetHeight+"px;")
                  : setHeight(actualHeight, this.activeContent.offsetHeight, this.content, 200);
          };
   
          TabbedNavigation.prototype.toggleNavShadow = function() {
              //show/hide tabs navigation gradient layer
              this.content.removeAttribute("style");
              var navigationWidth = Math.floor(this.navigationElements.getBoundingClientRect().width),
                  navigationViewport = Math.ceil(this.navigation.getBoundingClientRect().width);
              ( this.navigation.scrollLeft >= navigationWidth - navigationViewport )
                  ? addClass(this.element, "cd-tabs--scroll-ended")
                  : removeClass(this.element, "cd-tabs--scroll-ended");
          };
   
          var tabs = document.getElementsByClassName("js-cd-tabs"),
              tabsArray = [],
              resizing = false;
          if( tabs.length > 0 ) {
              for( var i = 0; i < tabs.length; i++) {
                  (function(i){
                      tabsArray.push(new TabbedNavigation(tabs[i]));
                  })(i);
              }
   
              window.addEventListener("resize", function(event) {
                  if( !resizing ) {
                      resizing = true;
                      (!window.requestAnimationFrame) ? setTimeout(checkTabs, 250) : window.requestAnimationFrame(checkTabs);
                  }
              });
          }
   
          function checkTabs() {
              tabsArray.forEach(function(tab){
                  tab.toggleNavShadow();
              });
              resizing = false;
          };
   
          function setHeight(start, to, element, duration) {
              var change = to - start,
                  currentTime = null;
   
              var animateHeight = function(timestamp){
                  if (!currentTime) currentTime = timestamp;
                  var progress = timestamp - currentTime;
                  var val = Math.easeInOutQuad(progress, start, change, duration);
                  element.setAttribute("style", "height:"+val+"px;");
                  if(progress < duration) {
                      window.requestAnimationFrame(animateHeight);
                  }
              };
   
              window.requestAnimationFrame(animateHeight);
          }
   
          Math.easeInOutQuad = function (t, b, c, d) {
              t /= d/2;
              if (t < 1) return c/2*t*t + b;
              t--;
              return -c/2 * (t*(t-2) - 1) + b;
          };
   
          //class manipulations - needed if classList is not supported
          function hasClass(el, className) {
              if (el.classList) return el.classList.contains(className);
              else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|jQuery)'));
          }
          function addClass(el, className) {
              var classList = className.split(' ');
              if (el.classList) el.classList.add(classList[0]);
              else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
              if (classList.length > 1) addClass(el, classList.slice(1).join(' '));
          }
          function removeClass(el, className) {
              var classList = className.split(' ');
              if (el.classList) el.classList.remove(classList[0]);
              else if(hasClass(el, classList[0])) {
                  var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|jQuery)');
                  el.className=el.className.replace(reg, ' ');
              }
              if (classList.length > 1) removeClass(el, classList.slice(1).join(' '));
          }
      })();
    
   });
</script>-->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --> -->
<script>
   $(document).ready(function() {
       $(".scroll-d").click(function(event) {
           $('html, body').animate({ scrollTop: '+=300px'}, 500);
       });
   });
</script>