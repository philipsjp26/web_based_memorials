   <!-- offcanvas search form start -->
   <div class="offcanvas-search-wrapper">
       <div class="offcanvas-search-inner">
           <div class="offcanvas-close">
               <i class="lnr lnr-cross"></i>
           </div>
           <div class="container">
               <div class="offcanvas-search-box">
                   <form method="GET" action="{{ route('search') }}" class="d-flex bdr-bottom w-100">
                       <input type="text" name="q" placeholder="Search your memorial" autocomplete="off">
                       <button class="submit"><i class="lnr lnr-magnifier"></i>search</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
   <!-- offcanvas search form end -->
