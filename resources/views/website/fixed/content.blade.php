<style>
    #controls{
      margin-top: 13px !important;
    }
  </style>
  <div class="fullscreen-slider">
    <div class="fs-slider-bg">
      <div class="fs-slider fs-wrapper">
        <div id="slider" class="sl-slider-wrapper">
          <div class="sl-slider">
            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-38" data-slice2-rotation="-38" data-slice1-scale="2" data-slice2-scale="2">
              <div class="sl-slide-inner">
                <div class="bg-img1" style="background-image:url('Frontend/slider/another.jpg');"></div>
                <div class="sl-shadow"></div>
                <div class="sl-content-top">
                  <div class="sl-slide-title">WELCOME TO EXPLORE SAILOR WORLD</div>                               
                </div>
              </div>
            </div>
            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-38" data-slice2-rotation="-38" data-slice1-scale="2" data-slice2-scale="2">
              <div class="sl-slide-inner">
                <div class="bg-img1" style="background-image:url('Frontend/slider/war.jpg');"></div>
                <div class="sl-shadow"></div>
                <div class="sl-content-top">
                  <div class="sl-slide-title">WELCOME TO EXPLORE SAILOR WORLD</div>                               
                </div>
              </div>
            </div>
            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-38" data-slice2-rotation="-38" data-slice1-scale="2" data-slice2-scale="2">
              <div class="sl-slide-inner">
                <div class="bg-img1" style="background-image:url('Frontend/slider/istockphoto.jpg');"></div>
                <div class="sl-shadow"></div>
                <div class="sl-content-top">
                  <div class="sl-slide-title">WELCOME TO EXPLORE SAILOR WORLD</div>                               
                </div>
              </div>
            </div>
          </div>
          <div id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev">Previous</span>
            <span class="nav-arrow-next">Next</span>
          </div>
        </div>
        <div class="sl-slider shadow-top"></div>
        <div class="sl-slider shadow-bottom"></div>
        <div id="nav-dots" class="nav-dots hidden-xs">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
        </div >
      </div>
    </div>
  </div>
  
  
  <section class="section section-bg" style="background: #d8f0f3;">
    <div id="sheckmojibimagediv">
      <a href="http://mujib100.gov.bd/" target="_blank"><img  src="{{url('Frontend/avatars/juan.jpg')}}" style="display: inline-block; width: 100%"></a>
      
    </div>
    <div>
      <div id="countdown_block"></div>
    </div>
  </section>
  <script type="text/javascript">
    var cur_lang = 'bn';
  </script>
  <style>
    .flip-clock {
      text-align: center;
      -webkit-perspective: 400px;
      perspective: 400px;
      margin: 67px 20px 0px 150px;
      float: left;
    }
    .flip-clock *,
    .flip-clock *:before,
    .flip-clock *:after {
      box-sizing: border-box;
    }
    .flip-clock__piece {
      display: inline-block;
      margin: 0 5px;
    }
    .flip-clock__slot {
      font-size: 1.5vw;
      display: block;
      margin-top: 10px;
      color: #3e006d !important;
      font-weight: bold;
    }
    .cardarsel {
      display: block;
      position: relative;
      padding-bottom: 0.72em;
      font-size: 3vw;
      line-height: 0.95;
    }
    .cardarsel__top,
    .cardarsel__bottom,
    .cardarsel__back::before,
    .cardarsel__back::after {
      display: block;
      height: 0.72em;
      color: #ec1e25;
      background: #70de2d;
      padding: 0.25em 0.25em;
      border-radius: 0.15em 0.15em 0 0;
      backface-visiblity: hidden;
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d;
      width: 1.8em;
      -webkit-transform: translateZ(0);
      transform: translateZ(0);
    }
    .cardarsel__bottom {
      color: #ec1e25;
      position: absolute;
      top: 50%;
      left: 0;
      border-top: solid 1px #70de2d;
      background: #70de2d;
      border-radius: 0 0 0.15em 0.15em;
      pointer-events: none;
      overflow: hidden;
    }
    .cardarsel__bottom::after {
      display: block;
      margin-top: -0.72em;
    }
    .cardarsel__back::before,
    .cardarsel__bottom::after {
      content: attr(data-value);
    }
    .cardarsel__back {
      position: absolute;
      top: 0;
      height: 100%;
      left: 0%;
      pointer-events: none;
    }
    .cardarsel__back::before {
      position: relative;
      z-index: -1;
      overflow: hidden;
    }
    .flip .cardarsel__back::before {
      -webkit-animation: flipTop 0.3s cubic-bezier(0.37, 0.01, 0.94, 0.35);
      animation: flipTop 0.3s cubic-bezier(0.37, 0.01, 0.94, 0.35);
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      -webkit-transform-origin: center bottom;
      transform-origin: center bottom;
    }
    .flip .cardarsel__back .card__bottom {
      -webkit-transform-origin: center top;
      transform-origin: center top;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      -webkit-animation: flipBottom 0.6s cubic-bezier(0.15, 0.45, 0.28, 1);
      animation: flipBottom 0.6s cubic-bezier(0.15, 0.45, 0.28, 1);
    }
    @-webkit-keyframes flipTop {
      0% {
        -webkit-transform: rotateX(0deg);
        transform: rotateX(0deg);
        z-index: 2;
      }
      0%,
      99% {
        opacity: 0.99;
      }
      100% {
        -webkit-transform: rotateX(-90deg);
        transform: rotateX(-90deg);
        opacity: 0;
      }
    }
    @keyframes  flipTop {
      0% {
        -webkit-transform: rotateX(0deg);
        transform: rotateX(0deg);
        z-index: 2;
      }
      0%,
      99% {
        opacity: 0.99;
      }
      100% {
        -webkit-transform: rotateX(-90deg);
        transform: rotateX(-90deg);
        opacity: 0;
      }
    }
    @-webkit-keyframes flipBottom {
      0%,
      50% {
        z-index: -1;
        -webkit-transform: rotateX(90deg);
        transform: rotateX(90deg);
        opacity: 0;
      }
      51% {
        opacity: 0.99;
      }
      100% {
        opacity: 0.99;
        -webkit-transform: rotateX(0deg);
        transform: rotateX(0deg);
        z-index: 5;
      }
    }
    @keyframes  flipBottom {
      0%,
      50% {
        z-index: -1;
        -webkit-transform: rotateX(90deg);
        transform: rotateX(90deg);
        opacity: 0;
      }
      51% {
        opacity: 0.99;
      }
      100% {
        opacity: 0.99;
        -webkit-transform: rotateX(0deg);
        transform: rotateX(0deg);
        z-index: 5;
      }
    }
    button,input,optgroup,select,textarea {
      font-size: 11px!important; 
      line-height: normal!important;
    }
    .mojib_countdown > img{
      height: 160px;
      margin: 0px 0px 0px 100px;
    }
    .mojib_countdown > a > img{
      height: 160px;
      margin: 0px 0px 0px 100px;
    }
    #sheckmojibimagediv{
      width: 30%;
      float: left;
    }
    @media(max-width: 480px){
      #sheckmojibimagediv{
        width: 100%;
      }
      #countdown_block{
        width: 100%;
      }
      .mojib_countdown > img{
        height: 140px;
      }
      .mojib_countdown > a > img{
        height: 140px;
      }
      .cardarsel{
        font-size: 10vw;
      }
      .flip-clock__slot{
        font-size: 6vw;
        margin: 10px 0 15px 0;
      }
      .flip-clock {
        position: relative;
        left: 15px;
        margin: 0px 0px 0px 0px;
      }
    }
  </style>
  
  
  
  <section class="section section-bg section-bg-style4">
    <div class="section-bg-style4--bg-image_chief"></div>
    <img class="tagline__accent-line--topleft" src="{{url('Frontend/frontend/template/graphics/tagline__accent-line--topleft.png')}}" alt="">
    <img class="tagline__accent-line--bottomright" src="{{url('Frontend/frontend/template/graphics/tagline__accent-line--bottomright.png')}}" alt="">
    <div class="col-lg-12 col-lg-offset-0 section-bg-style4--bg-light">
      <div class="row">
        <div class="col-md-12">
          <div class="thumb news">  
            <div class="news-btn">
              <div class="news-btn-hover">
              </div>
              <div class="news-btn-inner">
                <img alt="news" src="{{url('Frontend/chief_about_gallery/3156aea06e3d7c9ce4a26afb78b6a417.jpg')}}" width="180px"> 
              </div>
            </div>
            <h3 class="article-numbered--title1">CHIEF OF NAVAL STAFF</h3>
            <h4 class="article-numbered--title2">ADMIRAL M SHAHEEN IQBAL, NBP, NUP, ndc, afwc, psc</h4>
            <p class="article-numbered-content">
              <div style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 8; -webkit-box-orient: vertical; text-align: justify; max-height: 180px;">
                CHIEF OF NAVAL STAFF
                
                Admiral M Shaheen Iqbal, NBP, NUP, ndc, afwc, psc assumed the command of Bangladesh Navy as the 16th Chief of Naval Staff on 25th July 2020. Prior to his appointment, Admiral Shaheen was serving as Assistant Chief of Naval Staff (Operations) at Naval Headquarters. Throughout his long and illustrious 40-year career, he has demonstrated exemplary military acumen and has commanded all major Navy ships, establishments and HQ appointments with utmost success. He is highly regarded for his dedication, professionalism and honesty amongst officers and sailors at all levels.
                
                The Admiral received numerous Commendations from the Chief of Naval Staff and Administrative Authorities in recognition of his outstanding professional excellence in Bangladesh Navy. He was adorned with the highest achievement awards in Navy namely &ldquo;Nou Bahini Padak&rdquo; (NBP)- for outstanding contribution for BN development, &ldquo;Nou Utkorsho Padak&rdquo; (NUP) &ndash; for his outstanding academic and professional course performance.
                
                Admiral Shaheen has attained extensive education and training in military strategies, combat and tactics both at home and abroad. Some of his major courses include &quot;International Surface Warfare Course&quot; in USA, &quot;Officers Weapon &amp; Tactics Course&quot; with Bangladesh Army and specialized on &quot;Anti-Submarine Warfare&quot; from India. He is a graduate of &quot;Naval Staff College&quot;, USA. Later, he completed &quot;Armed Forces War Course&quot; (AFWC), &quot;National Defence Course&quot; (NDC) and Capstone Course from National Defence College, Bangladesh. He has also successfully completed &quot;Combined Force Maritime Component Commander Flag Officers Course&quot; (CFMCC) in USA.
                
                The Admiral, a passionate seafarer, proved himself worthy of being entrusted with the command responsibilities from the very early stage of his career in the Navy. He has successfully commanded ships of all sizes including Frigates, Offshore Patrol Vessel (OPV), Large Patrol Craft (LPC), Minesweeper, Patrol Craft (PC), Fast Attack Crafts including - Missile and Torpedo Boats. He has also held Navy&rsquo;s top command posts as Assistant Chief of Naval Staff (Operations), Assistant Chief of Naval Staff (Personnel), Commander Chattogram Naval Area (COMCHIT), Commodore Commanding Khulna (COMKHUL) as well as commanded major administrative and training bases including BNS TITUMIR and School of Maritime Warfare and Tactics (SMWT). Besides, he has served as Director Naval Operations (DNO) and Director Naval Intelligence (DNI) at the Naval Headquarters. Additionally, he was also appointed as Director, National Security Intelligence (NSI), where he successfully fulfilled a number of important national responsibilities.
                
                On behalf of Bangladesh Navy, Admiral Shaheen spearheaded the entire Bhasan Char project to rehabilitate Forcibly Displaced Myanmar Nationals (FDMNs) during their influx in 2017 and played an instrumental role in its implementation. Besides, he also played a significant role in facilitating the overall visit of the Permanent Court of Arbitration (PCA) delegation regarding maritime boundary delimitation in 2013.
                
                Admiral Shaheen has extensively represented Bangladesh Navy (BN) overseas, including several international seminars. He led many high-level operational and training delegations. He has also led the BN delegation during several international naval exercises and headed the BN team during the ship acceptance of Corvettes and Frigates. He is a proud &quot;Blue Flag&quot; bearer as a member of the UN in Iraq.
                
                Admiral Shaheen Iqbal is married to Mrs Monira Rowshan Akhter, who is serving as President, Bangladesh Navy Family Welfare Association and Ladies Club. Their only son Muntasir Mamun Iqbal, is presently serving as Director (Institutional Ranking Cell) &amp; Senior Lecturer in the Department of Economics at North South University and his wife, Nabila Hossain Purno, as a Programme Analyst at UNFPA. Admiral Shaheen Iqbal is fond of travelling, gardening and reading books. He appreciates good music and enjoys golf and tennis.
                
                &nbsp;            </div>
                <a class="submitmyform">Read More</a>
                <form method="post" action="https://www.navy.mil.bd/ADMIRAL-M-SHAHEEN-IQBAL,-NBP,-NUP,-ndc,-afwc,-psc">
                  <input type="hidden" name="url_link" value="Y2hpZWZfYWJvdXRleHBsb2RlMQ%3D%3D" /> 
                  <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">            </form>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="maxmilu">
        <section class="section section-grayscale_news ">   
          <div class="containerrr" style="background-color: white;">
            <div class="ticker-container" style="width: 90%; margin: auto;">
              <div class="ticker-caption">
                <p>Flash News|</p>
              </div>
              <div class="ticker" style="margin-top: 0px; font-size: 16px;">
                <ul id="ticker">
                  <li>
                    <p>
                      <form method="post" action="https://www.navy.mil.bd/REQUEST-FOR-EXPRESSION-OF-INTEREST,-SHOPNIL-SHINDHU" target="_blank">
                        <input type="hidden" name="url_link" value="bm90aWNlZXhwbG9kZTEyMg%3D%3D" /> 
                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                  <button type="submit" style="border-width: 0px; background-color: transparent;"><a>REQUEST FOR EXPRESSION OF INTEREST, SHOPNIL SHINDHU</a></button>
                      </form>
                    </p>
                  </li>
                  <li>
                    <p>
                      <form method="post" action="https://www.navy.mil.bd/Written-Exam-Result---Officer-Cadet-Batch-2022-B" target="_blank">
                        <input type="hidden" name="url_link" value="bm90aWNlZXhwbG9kZTEyMQ%3D%3D" /> 
                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                  <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Written Exam Result - Officer Cadet Batch 2022-B</a></button>
                      </form>
                    </p>
                  </li>
                  <li>
                    <p>
                      <form method="post" action="https://www.navy.mil.bd/Written-Exam-Result---Direct-Entry-Artificer-Batch-2022-A" target="_blank">
                        <input type="hidden" name="url_link" value="bm90aWNlZXhwbG9kZTEyMA%3D%3D" /> 
                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                  <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Written Exam Result - Direct Entry Artificer Batch 2022-A</a></button>
                      </form>
                    </p>
                  </li>
                  <li>
                    <p>
                      <form method="post" action="https://www.navy.mil.bd/LT-CDR-Q-EXAM-RESULT---OCT-2021" target="_blank">
                        <input type="hidden" name="url_link" value="bm90aWNlZXhwbG9kZTExNA%3D%3D" /> 
                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                  <button type="submit" style="border-width: 0px; background-color: transparent;"><a>LT CDR Q EXAM RESULT - OCT 2021</a></button>
                      </form>
                    </p>
                  </li>
                  <li>
                    <p>
                      <form method="post" action="https://www.navy.mil.bd/কোভিড-১৯-ভ্যাকসিনের-জন্য-সকল-কর্মকর্তা-ও-কর্মচারীগণ-ওয়েব-পোর্টালের-মাধ্যমে-রেজিস্ট্রেশন-করুন" target="_blank">
                        <input type="hidden" name="url_link" value="bm90aWNlZXhwbG9kZTUx" /> 
                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                  <button type="submit" style="border-width: 0px; background-color: transparent;"><a>কোভিড-১৯ ভ্যাকসিনের জন্য সকল কর্মকর্তা ও কর্মচারীগণ ওয়েব পোর্টালের মাধ্যমে রেজিস্ট্রেশন করুন</a></button>
                      </form>
                    </p>
                  </li>
                </ul>
              </div>
            </div>           
          </div>
        </section>
      </div>
      <section class="section section-split-parallax">
        <div class="row row-eq-height">
          <div class="col-lg-3 section-split-parallax--left section-split-parallax--left-column">
            <div class="section-inner">
              <div class="content-left wow fadeInUp">
                <p class="single-word" style="text-align:center; color:rgb(219, 228, 231); font-size:25px ;">
                  MILITARY SAILOR VS RECREATIONAL SAILOR
                </p>                   
              </div>
            </div>
          </div>
          <div class="col-lg-9 section-split-parallax--right">
            <div class="section-inner">
              <ul class="demo2" style="list-style: none;">
                <li class="news-item">
                  <h1 style="color:#fff;">MILITARY SAILOR</h1>
                  <p class="small">
                    <div style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; text-align: justify; background: #031031; color: #fff !important; font-size: 16px;">The military hires sailors to work on Navy frigates. In most countries, people who captain military vessels are required to have college degrees as well as several years of military service. Navigators, machinists, and engineers play a role in keeping the boat moving, while other sailors work as chefs, janitors, and deckhands. On military vessels, large numbers of the crew are assigned to heavy weaponry, and some boats carry airplanes and pilots who have no actual role in operating or navigating the ship.</div>
                    <form method="post" action="https://www.navy.mil.bd/Mission">
                      <input type="hidden" name="url_link" value="bWVudV9wb3N0ZXhwbG9kZTI%3D" /> 
                      <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Read More</a></button>
                    </form>
                  </p>
                </li>
                <li class="news-item">
                  <h1 style="color:#fff;">RECREATIONAL SAILOR</h1>
                  <p class="small">
                    <div style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; text-align: justify; background: #031031; color: #fff !important; font-size: 16px;">A recreational sailor does not typically have to undergo any formal training, and many sailors learn how to row small boats before moving on to motor powered boats and yachts. Many nations require sailors who operate boats beyond a certain size to obtain licenses, although in some countries these sailors do not have to undergo any kind of examination in order to receive a license. Highly skilled sailors take part in competitive races, some of which involve traveling long distances across major oceans. Many sailors spend months at sea and sail as a means of traveling between nations rather than for competitive or business reasons.</div>
                    <form method="post" action="https://www.navy.mil.bd/Vision">
                      <input type="hidden" name="url_link" value="bWVudV9wb3N0ZXhwbG9kZTI%3D" /> 
                      <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Read More</a></button>
                    </form>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section> 
      <section class="section section-bg section-bg-style4">
        <div class="section-bg-style4--bg-imagemilumax hidden-xs"></div>
        <div class="col-lg-3">
          <h1 style="color:#fff;" class="wow fadeInUp">LIFE IN THE SEA</h1>
          <div class="row wow fadeInUp">
            <p class="small_gallery hidden-xs" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 10; -webkit-box-orient: vertical; text-align: justify;">Life at sea is full of both hardships and rewards.For one thing, while at sea, you will be putting all your skills and determination to actual test. You will be given responsibility and will be doing an important job for which you have been uniquely trained.</p>
            <a class="submitmyform">Read More</a>
            <form method="post" action="https://www.navy.mil.bd/LIFE-IN-THE-NAVY">
              <input type="hidden" name="url_link" value="bmF2eV9saWZlc2V4cGxvZGUx" /> 
              <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">      </form>
              <hr class="hr-small">
            </div>
          </div>
          <div class="col-lg-8 col-lg-offset-1 section-bg-style4--bg-light">
            <div class="row" style="padding: 19px; padding-bottom: 29px;">
              <div class="col-md-6">
                {{-- <article class="article-numbered wow fadeInUp">
                  <h3 class="article-numbered--title1">JOIN AS OFFICER CADET</h3>
                  <p class="article-numbered-content" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical; text-align: justify;">If you are a young gentleman passed HSC exam with required qualification and aspiration to build up a challenging career then Bangladesh Navy is the right place for you. Bangladesh Naval Academy is waiting for you to support fulfilling your dreams. </p>
                  <a style="padding-left: 16px;" class="submitmyform">Read More</a>
                  <form method="post" action="https://www.navy.mil.bd/JOIN-AS-OFFICER-CADET">
                    <input type="hidden" name="url_link" value="bmF2eV9saWZlc2V4cGxvZGUy" /> 
                    <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">          </form>
                  </article> --}}
                </div>
                <div class="col-md-6">
                   <article class="article-numbered wow fadeInUp"> 
                    {{-- <h3 class="article-numbered--title1">JOIN AS DIRECT ENTRY OFFICER</h3>
                    <p class="article-numbered-content" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical; text-align: justify;">A fresh post graduate or graduate can select the career in Bangladesh if he/she is looking for an exciting career with lots of opportunities to see the world. No other service in the nation can offer you this opportunity offered by Bangladesh Navy, why don&amp;rsquo;t you take a chance? </p>
                    <a style="padding-left: 16px;" class="submitmyform">Read More</a>
                    <form method="post" action="https://www.navy.mil.bd/JOIN-AS-DIRECT-ENTRY-OFFICER">
                      <input type="hidden" name="url_link" value="bmF2eV9saWZlc2V4cGxvZGUz" /> 
                      <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">          </form> --}}
                    </article> 
                  </div>
                  <div class="col-md-6">
                    <article class="article-numbered wow fadeInUp">
                      <h3 class="article-numbered--title1">JOIN AS SAILOR</h3>
                      <p class="article-numbered-content" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical; text-align: justify;">As a sailor someone can work on passenger ships, freighters, and tanker ships, navigating sea-going vessels and assisting with the maintenance, operation, and service of these vessels. The term sailor was derived from the fact that all water-borne vessels were once powered by sails. </p>
                      <a style="padding-left: 16px;" class="submitmyform">Read More</a>
                      <form method="post" action="https://www.navy.mil.bd/JOIN-AS-SAILOR">
                        <input type="hidden" name="url_link" value="bmF2eV9saWZlc2V4cGxvZGU0" /> 
                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">          </form>
                      </article>
                    </div>
                    <div class="col-md-6">
                      <article class="article-numbered wow fadeInUp text-center">
                        <a class="submitmyform"><h3 class="article-numbered--title1 text-center btn btn-primary" style="margin-top:75px;margin-bottom: 65px;box-shadow: 0 2px 5px 0px rgba(0,0,0,0.2);">EXPLORE YOUR CAREER </h3></a>
                        <form method="post" action="https://www.navy.mil.bd/EXPLORE-YOUR-CAREER" target="_blank">
                          <input type="hidden" name="url_link" value="aHR0cDovL2pvaW5uYXZ5Lm5hdnkubWlsLmJk" /> 
                          <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">          </form>
                        </article> 
                      </div>
                    </div>
                  </div>
                </section>
                <section class="section section-default">
                  <div  class="section-inner">
                    <div class="container">
                      <div class="row">
                        <div class="parallax-slider">         
                          <div class="parallax-container">
                            <h1 data-wow-delay=".5s" class="wow fadeInDown animated animated" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown; color:#fff;">NAVAL OPERATIONS</h1>                
                            <hr>
                            <div id="da-slider" class="da-slider">
                              <div class="da-slide">
                                <h2>JHATKA OPERATION</h2>
                                <p class="article-numbered-content"><jjjj style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 9; -webkit-box-orient: vertical; text-align: justify;">Hilsha is our national fish. It provides us necessary protein. Hilsha below 23 cm in length is called Jatka. Catching Jatka is illegal image descriptionaccording to the law. But fishermen catch Jhatka indiscriminately thus creating scarcity of Hilsha in peak season. Bangladesh Navy ships had been operating from 2001 to stop Jhatka catch in Bhola, Haita, Ramgati, Barisal, Pathaghata and adjacent area.</jjjj></p>
                                <a class="submitmyform da-link" style="margin-top: 25px;">...Read more</a>
                                <form method="post" action="https://www.navy.mil.bd/JHATKA-OPERATION" target="_blank">
                                  <input type="hidden" name="url_link" value="Ym5fYWlkZXhwbG9kZTE%3D" /> 
                                  <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                </form>
                                  <div class="da-img">
                                    <img alt="image01" src="{{url('Frontend/bn_aid_gallery/b5e61c610e6d6fdb44aefb2c8a700325.png')}}">
                                    <div class="da-img-cover"></div>
                                  </div>
                                </div>
                                <div class="da-slide">
                                  <h2>General Operation</h2>
                                  <p class="article-numbered-content"><jjjj style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 9; -webkit-box-orient: vertical; text-align: justify;">Bangladesh Navy (BN)operates to safeguard the sovereignty over the internal waters &amp; territorial sea, and to ensure sovereign rights over the Contiguous Zone, Exclusive Economic Zone (EEZ) and Continental Shelf of Bangladesh while supporting riverine and maritime economic activities including free flow of riverine &amp; sea borne trade. Since its inception BN has carried out many operations which includes both operations of liberation war and peace time operations. The war time operation involved conventional as well as unconventional operation. The peace time operation was mainly related to anti-smuggling, anti-piracy, fishery protection, disaster management, pollution control, Search &amp; Rescue (SAR), policing &amp;marshaling duties for important/sensitive cargo carrying merchant vessels and many others involved in aid to civil power.</jjjj></p>
                                  <a class="submitmyform da-link" style="margin-top: 25px;">...Read more</a>
                                  <form method="post" action="https://www.navy.mil.bd/General-Operation" target="_blank">
                                    <input type="hidden" name="url_link" value="Ym5fYWlkZXhwbG9kZTI%3D" /> 
                                    <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                </form>
                                    <div class="da-img">
                                      <img alt="image01" src="{{url('Frontend/backend/images/bn_aid_gallery/1533024908.png')}}">
                                      <div class="da-img-cover"></div>
                                    </div>
                                  </div>
                                  <div class="da-slide">
                                    <h2>ASHRAYAN-2 PROJECT</h2>
                                    <p class="article-numbered-content"><jjjj style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 9; -webkit-box-orient: vertical; text-align: justify;">To rehabilitate the homeless and landless people of the rural area a project named &amp;quot;ASRAYAN-2 PROJECT&amp;quot; was launched by the govt in 1997. This was entirely image description materialized by Bangladesh Army and Bangladesh Navy. Since Bangladesh is a country of low land and it has approx 700 KM of coastline, a good number of people live in the coastal area. Bangladesh Navy took all the initiative to build low cost houses In the process of construction of low cost houses. BN uses its ships, various types of small and medium boats, mechanized country boats, trucks and many other means. The total effort of the navy personnel, local administration and the local people makes the Project successful.
                                      
                                      So far Bangladesh Navy has constructed lots of low cost houses in the districts of Cox&amp;#39;s Bazar, Chattogram, Noakhali, Laxmipur, Bhola, Barguna, Bagerhat etc. At present Bangladesh Navy has been given with the responsibility of constructing huge low cost houses in coastal areas under the project called &amp;quot;ASHRAYAN-2&amp;quot;. Total handed over and under constructed &amp;quot;ASHRAYAN-2&amp;quot; are shown below:
                                      
                                      
                                      
                                      
                                      S. No. 
                                      YEARS
                                      WORK ORDER OF BARRACK HOUSE 
                                      HAND OVER &amp;amp; UNDER CONSTRUCTION 
                                      
                                      
                                      
                                      
                                      1.
                                      1997-1998
                                      4
                                      Handed over
                                      
                                      
                                      2.
                                      1999-2000
                                      55
                                      Handed over
                                      
                                      
                                      3.
                                      2003-2004
                                      64
                                      Handed over
                                      
                                      
                                      4.
                                      2000-2001
                                      39
                                      Handed over
                                      
                                      
                                      5.
                                      2004-2005
                                      250
                                      Handed over
                                      
                                      
                                      6.
                                      2005-2006
                                      655
                                      Handed over
                                      
                                      
                                      7.
                                      2006-2007
                                      373
                                      Handed over
                                      
                                      
                                      8.
                                      2007-2008
                                      206
                                      Handed over
                                      
                                      
                                      9.
                                      2008-2009
                                      208
                                      Handed over
                                      
                                      
                                      10.
                                      2009-2010
                                      16
                                      Handed over
                                      
                                      
                                      11.
                                      2010-2011
                                      196
                                      Handed over
                                      
                                      
                                      12.
                                      2011-2012
                                      161
                                      Handed over
                                      
                                      
                                      13.
                                      2012-2013
                                      207
                                      Handed over
                                      
                                      
                                      14
                                      2013-2014
                                      244
                                      Handed over
                                      
                                      
                                      15
                                      2014-2015
                                      52
                                      Handed over
                                      
                                      
                                      16
                                      2015-2016
                                      314
                                      Handed over
                                      
                                      
                                      17
                                      2016-2017
                                      101
                                      Handed over
                                      
                                      
                                      18
                                      2017-2018
                                      181
                                      Handed over
                                      
                                      
                                      19
                                      2018-2019
                                      192
                                      Handed over = 112, Under Construction = 80
                                      
                                      
                                      20
                                      2019-2020
                                      101
                                      Under Construction
                                      
                                      
                                      
                                      
                                      &amp;nbsp;
                                      
                                      &amp;nbsp;
                                      
                                      &amp;nbsp;
                                      &amp;nbsp;
                                      &amp;nbsp;
                                      
                                    </jjjj></p>
                                    <a class="submitmyform da-link" style="margin-top: 25px;">...Read more</a>
                                    <form method="post" action="https://www.navy.mil.bd/ASHRAYAN-2-PROJECT" target="_blank">
                                      <input type="hidden" name="url_link" value="Ym5fYWlkZXhwbG9kZTM%3D" /> 
                                      <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                </form>
                                      <div class="da-img">
                                        <img alt="image01" src="{{url('Frontend/bn_aid_gallery/3d8fd50ebafe3374e691524f01db273a.jpg')}}">
                                        <div class="da-img-cover"></div>
                                      </div>
                                    </div>
                                    <div class="da-img-bg-cover"></div>
                                    <div class="da-arrows">
                                      <span class="da-arrows-prev">
                                        <img alt="previous" src="{{url('Frontend/frontend/template/graphics/car-arrow-prev.png')}}">
                                      </span>
                                      <span class="da-arrows-next">
                                        <img alt="next" src="{{url('Frontend/frontend/template/graphics/car-arrow-next.png')}}"> 
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="section section-default">
                        <div class="section-inner">
                          <div class="section-heading wowed margin-bottom-50">
                            <h1 data-wow-delay=".5s" class="wow fadeInDown animated animated" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown; color: rgb(255, 255, 255);"> 
                              Recent Publications</h1>
                              <hr>
                              <a class="left carousel-control" href="#bs-testimonials" role="button" data-slide="prev">
                                <span>
                                  <img alt="previous" src="{{url('Frontend/frontend/template/graphics/car-arrow-prev.png')}}"> </span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#bs-testimonials" role="button" data-slide="next">
                                  <span>
                                    <img alt="next" src="{{url('Frontend/frontend/template/graphics/car-arrow-next.png')}}"> </span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                                <section class="container wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                  <div id="bs-testimonials" class="bs-animate carousel slide" data-interval="25000">
                                    <div class="carousel-indicators" style="display:  none;">
                                      <li data-target="#bs-testimonials" data-slide-to="0" class="active"></li>
                                      <li data-target="#bs-testimonials" data-slide-to="1"></li>
                                      <li data-target="#bs-testimonials" data-slide-to="2"></li>
                                      <li data-target="#bs-testimonials" data-slide-to="3"></li>
                                    </div>
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active bs-testimonials-slide1">
                                        <div class="carousel-caption">
                                          <div class="row">
                                            <div class="col-sm-6 services2-left">
                                              <div class="col-sm-6">
                                                <div class="article-left">
                                                  <div class="thumb color">
                                                    <div class="thumb-hover">
                                                    </div>
                                                    <div class="thumb-inner">
                                                      <div class="">
                                                        <a href="#">
                                                          <div class="thm-img">
                                                            <img class="img-responsive" alt="thm-img" src="{{url('Frontend/achievement_gallery/d84dcd8f59d9ff4846175291f643ef9d.jpg')}}">
                                                          </div>
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6">
                                                <article class="article-right">
                                                  <div class="article-heading">
                                                    <div> 
                                                      <h3 style="color:#fff;">Nou Parikkroma, Oct 2019</h3>
                                                    </div>
                                                    <p><div style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; text-align: justify; margin-top: 5px; color: #fff; max-height: 165px;">In order to find talented swimmers, Bangladesh Swiming Federation initiative and in cooperation with the Bangladesh Navy, on May 19, 2016, Bangladesh is the competition giant for the search of the best swimmer. On May 25, 2017, the Prime Minister Sheikh Hasina presented the prize to the swimmers from the presence of Navy Headquarters at the concluding ceremony of Swimming Pool Complex.</div>
                                                      <a class="btn btn-outline-warning submitmyform">Read more</a>
                                                      <form method="post" action="https://www.navy.mil.bd/Nou-Parikkroma,-Oct-2019" target="_blank">
                                                        <input type="hidden" name="url_link" value="YWNoaWV2ZW1lbnRleHBsb2RlNA%3D%3D" /> 
                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                              </form>
                                                      </p>
                                                    </div>
                                                  </article>
                                                </div>
                                              </div>    
                                              <div class="col-sm-6 services2-left">
                                                <div class="col-sm-6">
                                                  <div class="article-left">
                                                    <div class="thumb color">
                                                      <div class="thumb-hover">
                                                      </div>
                                                      <div class="thumb-inner">
                                                        <div class="">
                                                          <a href="#">
                                                            <div class="thm-img">
                                                              <img class="img-responsive" alt="thm-img" src="{{url('Frontend/achievement_gallery/65838034979012188d94c01bf168f0ee.png')}}">
                                                            </div>
                                                          </a>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <article class="article-right">
                                                    <div class="article-heading">
                                                      <div> 
                                                        <h3 style="color:#fff;">Nau Parikrama, OCT 2020</h3>
                                                      </div>
                                                      <p><div style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; text-align: justify; margin-top: 5px; color: #fff; max-height: 165px;">Nau Parikrama, OCT 2020</div>
                                                        <a class="btn btn-outline-warning submitmyform">Read more</a>
                                                        <form method="post" action="https://www.navy.mil.bd/Nau-Parikrama,-OCT-2020" target="_blank">
                                                          <input type="hidden" name="url_link" value="bWVudV9wb3N0ZXhwbG9kZTc3" /> 
                                                          <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                              </form>
                                                        </p>
                                                      </div>
                                                    </article>
                                                  </div>
                                                </div>    
                                              </div>
                                            </div>
                                          </div>
                                        </div> 
                                      </div>
                                    </section>
                                  </div>
                                </section>
                                <section class="section section-parallax">
                                  <div class="section-inner">
                                    <div class="container">
                                      <div class="row wow fadeInUp">
                                        <h1 style="color:#fff;">NOTICE BOARD</h1>                                 
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="tab" role="tabpanel">
                                            <ul class="nav nav-tabs" role="tablist">
                                              <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Notice</a></li>
                                              <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">CIRCULAR</a></li>
                                            </ul>
                                            <div class="tab-content tabs">
                                              <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                                <div style="background: rgba(34, 194, 34, 0.37);">
                                                  <div class="ideaboxNews in-easing" id="idx1">
                                                    <ul>                       <li>
                                                      <div class="in-image">
                                                        <img src="{{url('Frontend/notice_gallery/notice.png')}}">
                                                        <span class="in-red">
                                                          <h6>Read more</h6>
                                                        </span>
                                                      </div>
                                                      <div class="in-content">
                                                        <h2>REQUEST FOR EXPRESSION OF INTEREST, SHOPNIL SHINDHU</h2>
                                                        <span>01 Dec 2021, Wednesday</span>
                                                        <div>
                                                          <a download href="{{url('Frontend/public/notice_gallery/9e191fecb67520d0d494c01188437c46.pdf')}}"><p style="font-weight: bold; color: #023300">Download Notice</p></a>
                                                          <pppppp></pppppp>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li>
                                                      <div class="in-image">
                                                        <img src="{{url('Frontend/notice_gallery/notice.png')}}">
                                                        <span class="in-blue">
                                                          <h6>Read more</h6>
                                                        </span>
                                                      </div>
                                                      <div class="in-content">
                                                        <h2>Written Exam Result - Officer Cadet Batch 2022-B</h2>
                                                        <span>28 Nov 2021, Sunday</span>
                                                        <div>
                                                          <a download href="{{url('Frontend/public/notice_gallery/63ef3be003c0b926219aa62d74dd1757.pdf')}}"><p style="font-weight: bold; color: #023300">Download Notice</p></a>
                                                          <pppppp></pppppp>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li>
                                                      <div class="in-image">
                                                        <img src="{{url('Frontend/notice_gallery/notice.png')}}">
                                                        <span class="in-purple">
                                                          <h6>Read more</h6>
                                                        </span>
                                                      </div>
                                                      <div class="in-content">
                                                        <h2>Written Exam Result - Direct Entry Artificer Batch 2022-A</h2>
                                                        <span>27 Nov 2021, Saturday</span>
                                                        <div>
                                                          <a download href="{{url('Frontend/public/notice_gallery/98b46f19ecaaf84b312eb3b70797d51a.pdf')}}"><p style="font-weight: bold; color: #023300">Download Notice</p></a>
                                                          <pppppp></pppppp>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li>
                                                      <div class="in-image">
                                                        <img src="{{url('Frontend/notice_gallery/notice.png')}}">
                                                        <span class="in-yellow">
                                                          <h6>Read more</h6>
                                                        </span>
                                                      </div>
                                                      <div class="in-content">
                                                        <h2>LT CDR Q EXAM RESULT - OCT 2021</h2>
                                                        <span>11 Nov 2021, Thursday</span>
                                                        <div>
                                                          <a download href="{{url('Frontend/public/notice_gallery/1e4cf5045457f21ac45b350de535180c.pdf')}}"><p style="font-weight: bold; color: #023300">Download Notice</p></a>
                                                          <pppppp></pppppp>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li>
                                                      <div class="in-image">
                                                        <img src="{{url('Frontend/notice_gallery/notice.png')}}">
                                                        <span class="in-green">
                                                          <h6>Read more</h6>
                                                        </span>
                                                      </div>
                                                      <div class="in-content">
                                                        <h2>কোভিড-১৯ ভ্যাকসিনের জন্য সকল কর্মকর্তা ও কর্মচারীগণ ওয়েব পোর্টালের মাধ্যমে রেজিস্ট্রেশন করুন</h2>
                                                        <span>01 Feb 2021, Monday</span>
                                                        <div>
                                                          <a download href="{{url('Frontend/public/notice_gallery/7a88f95131dcb6918086f7caf42c3a0f.pdf')}}"><p style="font-weight: bold; color: #023300">Download Notice</p></a>
                                                          <pppppp><h2><b>ওয়েব পোর্টাল</b><strong> লিংকঃ <a href="http://www.surokkha.gov.bd/">www.surokkha.gov.bd</a></strong></h2></pppppp>
                                                        </div>
                                                      </div>
                                                    </li>
                                                  </ul>
                                                  <div class="in-viewer">
                                                    <div class="in-viewer-header">
                                                      <img src="{{url('Frontend/frontend/template/Notice/img/img1.jpg')}}">
                                                      <div>
                                                        <h2>no title...</h2>
                                                        <span style="color: black !important;">no date...</span>
                                                      </div>
                                                    </div>
                                                    <div class="in-viewer-content">
                                                      no content...
                                                    </div>
                                                    <span class="in-viewer-close"></span>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                              <div style="margin-top: 0px;">
                                                <div class="container">
                                                  <div class="row">
                                                    <div class="col-md-12">
                                                      <div class="fadeInUp animated">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div id="nt-example1-container">
                                                        <i class="fa fa-arrow-up" id="nt-example1-prev"></i>
                                                        <ul class="miluzx" id="nt-example1">
                                                          <li>
                                                            <table>
                                                              <thead>
                                                                <tr>
                                                                  <th>Published Date</th>
                                                                  <th>Circular Title</th>
                                                                  <th>Submission Deadline</th>
                                                                  <th>Download</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                              </tbody>
                                                            </table>
                                                          </li>
                                                        </ul>
                                                        <i class="fa fa-arrow-down" id="nt-example1-next"></i>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                              <section class="section section-default ">
                                <div class="container">
                                  <div class="section-inner"></br>
                                    <h1 style="color:#fff;">UN Mission - Bangladesh Navy</h1><hr>
                                    <div id="owl-home-info" class="home-info owl-carousel">
                                      <div class="item">
                                        <div class="thumb dark thumb-social">
                                          <div class="thumb-hover">
                                          </div>
                                          <div class="thumb-inner">
                                            <div class="thm content thm-hover1">
                                              <div class="thm-img">
                                                <img alt="thm-img" src="{{('Frontend/un_mission_gallery/52098e8bddd4a1e484ee99b5b6ef5b6b.png')}}">
                                              </div>
                                              <div class="thm-btn">
                                                <span>
                                                  <a class="theme-btn submitmyform">Read more</a>
                                                  <form method="post" action="https://www.navy.mil.bd/Republic" target="_blank">
                                                    <input type="hidden" name="url_link" value="dW5fbWlzc2lvbnNleHBsb2RlMQ%3D%3D" /> 
                                                    <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                    </form>
                                                  </span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="item">
                                          <div class="thumb dark thumb-social">
                                            <div class="thumb-hover">
                                            </div>
                                            <div class="thumb-inner">
                                              <div class="thm content thm-hover1">
                                                <div class="thm-img">
                                                  <img alt="thm-img" src="{{url('Frontend/un_mission_gallery/26777c6e0b98ce450b17a847c0020e8e.png')}}">
                                                </div>
                                                <div class="thm-btn">
                                                  <span>
                                                    <a class="theme-btn submitmyform">Read more</a>
                                                    <form method="post" action="https://www.navy.mil.bd/Unitary-Semi-presidential-republic" target="_blank">
                                                      <input type="hidden" name="url_link" value="dW5fbWlzc2lvbnNleHBsb2RlMg%3D%3D" /> 
                                                      <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                    </form>
                                                    </span>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="item">
                                            <div class="thumb dark thumb-social">
                                              <div class="thumb-hover">
                                              </div>
                                              <div class="thumb-inner">
                                                <div class="thm content thm-hover1">
                                                  <div class="thm-img">
                                                    <img alt="thm-img" src="{{url('Frontend/un_mission_gallery/1cc0295461e7c4d55fb594ac396b0920.png')}}">
                                                  </div>
                                                  <div class="thm-btn">
                                                    <span>
                                                      <a class="theme-btn submitmyform">Read more</a>
                                                      <form method="post" action="https://www.navy.mil.bd/Republic-of-Haiti" target="_blank">
                                                        <input type="hidden" name="url_link" value="dW5fbWlzc2lvbnNleHBsb2RlMw%3D%3D" /> 
                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                    </form>
                                                      </span>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="item">
                                              <div class="thumb dark thumb-social">
                                                <div class="thumb-hover">
                                                </div>
                                                <div class="thumb-inner">
                                                  <div class="thm content thm-hover1">
                                                    <div class="thm-img">
                                                      <img alt="thm-img" src="{{url('Frontend/un_mission_gallery/c95cbeca14b4115982f2a4932f5f1713.png')}}">
                                                    </div>
                                                    <div class="thm-btn">
                                                      <span>
                                                        <a class="theme-btn submitmyform">Read more</a>
                                                        <form method="post" action="https://www.navy.mil.bd/State-of-Kuwait" target="_blank">
                                                          <input type="hidden" name="url_link" value="dW5fbWlzc2lvbnNleHBsb2RlNA%3D%3D" /> 
                                                          <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                    </form>
                                                        </span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="item">
                                                <div class="thumb dark thumb-social">
                                                  <div class="thumb-hover">
                                                  </div>
                                                  <div class="thumb-inner">
                                                    <div class="thm content thm-hover1">
                                                      <div class="thm-img">
                                                        <img alt="thm-img" src="{{url('Frontend/un_mission_gallery/e1ffb988371655687c5cf410444d42fa.png')}}">
                                                      </div>
                                                      <div class="thm-btn">
                                                        <span>
                                                          <a class="theme-btn submitmyform">Read more</a>
                                                          <form method="post" action="https://www.navy.mil.bd/Republic-of-Liberia" target="_blank">
                                                            <input type="hidden" name="url_link" value="dW5fbWlzc2lvbnNleHBsb2RlNQ%3D%3D" /> 
                                                            <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                    </form>
                                                          </span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="item">
                                                  <div class="thumb dark thumb-social">
                                                    <div class="thumb-hover">
                                                    </div>
                                                    <div class="thumb-inner">
                                                      <div class="thm content thm-hover1">
                                                        <div class="thm-img">
                                                          <img alt="thm-img" src="{{url('Frontend/un_mission_gallery/939421052327abf48681117c0facc836.png')}}">
                                                        </div>
                                                        <div class="thm-btn">
                                                          <span>
                                                            <a class="theme-btn submitmyform">Read more</a>
                                                            <form method="post" action="https://www.navy.mil.bd/Republic-of-Rwanda" target="_blank">
                                                              <input type="hidden" name="url_link" value="dW5fbWlzc2lvbnNleHBsb2RlNg%3D%3D" /> 
                                                              <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                    </form>
                                                            </span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="item">
                                                    <div class="thumb dark thumb-social">
                                                      <div class="thumb-hover">
                                                      </div>
                                                      <div class="thumb-inner">
                                                        <div class="thm content thm-hover1">
                                                          <div class="thm-img">
                                                            <img alt="thm-img" src="{{url('Frontend/un_mission_gallery/4d4175a301203f5806e821f8918bdaf5.png')}}">
                                                          </div>
                                                          <div class="thm-btn">
                                                            <span>
                                                              <a class="theme-btn submitmyform">Read more</a>
                                                              <form method="post" action="https://www.navy.mil.bd/Sahwari-Arab-Democratic-Republic" target="_blank">
                                                                <input type="hidden" name="url_link" value="dW5fbWlzc2lvbnNleHBsb2RlNw%3D%3D" /> 
                                                                <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                    </form>
                                                              </span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="item">
                                                      <div class="thumb dark thumb-social">
                                                        <div class="thumb-hover">
                                                        </div>
                                                        <div class="thumb-inner">
                                                          <div class="thm content thm-hover1">
                                                            <div class="thm-img">
                                                              <img alt="thm-img" src="{{url('Frontend/un_mission_gallery/b1b1d0d5a50a71252ac71f1a0d99b420.png')}}">
                                                            </div>
                                                            <div class="thm-btn">
                                                              <span>
                                                                <a class="theme-btn submitmyform">Read more</a>
                                                                <form method="post" action="https://www.navy.mil.bd/Republic-of-Tajikistan" target="_blank">
                                                                  <input type="hidden" name="url_link" value="dW5fbWlzc2lvbnNleHBsb2RlOA%3D%3D" /> 
                                                                  <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                    </form>
                                                                </span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </section>
                                              <section class="section section-bg section-bg-style4">
                                                <div class="section-bg-style4--bg-image"></div>
                                                <div class="col-lg-4">
                                                  <h1 class="wow fadeInUp" style="color:#fff;">News and Events</h1>
                                                  <div class="row wow fadeInUp">
                                                    <hr class="hr-small">
                                                  </div>
                                                </div>
                                                <div class="col-lg-8 col-lg-offset-0 section-bg-style4--bg-light">
                                                  <div class="row">
                                                    <div class="panel panel-default">
                                                      <div class="panel-body">
                                                        <div class="row">
                                                          <div class="col-xs-12">
                                                            <ul class="demo1">
                                                              <li class="news-item">
                                                                <table cellpadding="4">
                                                                  <tr>
                                                                    <td rowspan="3" style="width:112px;">
                                                                      <img src="{{url('Frontend/news_gallery/news.png')}}"  width="" class="img-circle"/>
                                                                    </td>
                                                                    <td colspan="3">
                                                                      <span style="font-weight:bold; font-size: 16px; color: black !important;">INAUGURATION OF JOINT TRAINING AND EXERCISE &#039;CARAT-2021&#039; OF BN AND US NAVY</span>
                                                                      <div style="width: 100%"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px;"></i>01-Dec-2021 04:56 am</div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="3"><p class="small"><dddd style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-align: justify; font-size: 16px; text-align: justify; padding-right: 8px;"></dddd>
                                                                      <form method="post" action="https://www.navy.mil.bd/INAUGURATION-OF-JOINT-TRAINING-AND-EXERCISE-%27CARAT-2021%27-OF-BN-AND-US-NAVY" target="_blank">
                                                                        <input type="hidden" name="url_link" value="bmV3c2V4cGxvZGUyNDE%3D" /> 
                                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                        <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Download</a></button>
                                                                      </form>
                                                                    </p></td>
                                                                  </tr>
                                                                </table>
                                                              </li>
                                                              <li class="news-item">
                                                                <table cellpadding="4">
                                                                  <tr>
                                                                    <td rowspan="3" style="width:112px;">
                                                                      <img src="{{url('Frontend/news_gallery/news.png')}}"  width="" class="img-circle"/>
                                                                    </td>
                                                                    <td colspan="3">
                                                                      <span style="font-weight:bold; font-size: 16px; color: black !important;">TURKISH CHIEF OF NAVAL STAFF PAID A COURTESY CALL ON CHIEF OF NAVAL STAFF OF BANGLADESH</span>
                                                                      <div style="width: 100%"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px;"></i>29-Nov-2021 09:24 pm</div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="3"><p class="small"><dddd style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-align: justify; font-size: 16px; text-align: justify; padding-right: 8px;"></dddd>
                                                                      <form method="post" action="https://www.navy.mil.bd/TURKISH-CHIEF-OF-NAVAL-STAFF-PAID-A-COURTESY-CALL-ON-CHIEF-OF-NAVAL-STAFF-OF-BANGLADESH" target="_blank">
                                                                        <input type="hidden" name="url_link" value="bmV3c2V4cGxvZGUyMzk%3D" /> 
                                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                        <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Download</a></button>
                                                                      </form>
                                                                    </p></td>
                                                                  </tr>
                                                                </table>
                                                              </li>
                                                              <li class="news-item">
                                                                <table cellpadding="4">
                                                                  <tr>
                                                                    <td rowspan="3" style="width:112px;">
                                                                      <img src="{{url('Frontend/news_gallery/news.png')}}"  width="" class="img-circle"/>
                                                                    </td>
                                                                    <td colspan="3">
                                                                      <span style="font-weight:bold; font-size: 16px; color: black !important;">NAVY RESCUES 14 FISHERMAN FROM BOAT FLOATING IN THE BAY OF BENGAL</span>
                                                                      <div style="width: 100%"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px;"></i>29-Nov-2021 11:57 am</div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="3"><p class="small"><dddd style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-align: justify; font-size: 16px; text-align: justify; padding-right: 8px;"></dddd>
                                                                      <form method="post" action="https://www.navy.mil.bd/NAVY-RESCUES-14-FISHERMAN-FROM-BOAT-FLOATING-IN-THE-BAY-OF-BENGAL" target="_blank">
                                                                        <input type="hidden" name="url_link" value="bmV3c2V4cGxvZGUyMzc%3D" /> 
                                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                        <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Download</a></button>
                                                                      </form>
                                                                    </p></td>
                                                                  </tr>
                                                                </table>
                                                              </li>
                                                              <li class="news-item">
                                                                <table cellpadding="4">
                                                                  <tr>
                                                                    <td rowspan="3" style="width:112px;">
                                                                      <img src="{{url('Frontend/news_gallery/news.png')}}"  width="" class="img-circle"/>
                                                                    </td>
                                                                    <td colspan="3">
                                                                      <span style="font-weight:bold; font-size: 16px; color: black !important;">EXHIBITION OF RARE PHOTOGRAPHS TAKEN DURING THE LIBERATION WAR</span>
                                                                      <div style="width: 100%"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px;"></i>26-Nov-2021 06:48 am</div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="3"><p class="small"><dddd style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-align: justify; font-size: 16px; text-align: justify; padding-right: 8px;"></dddd>
                                                                      <form method="post" action="https://www.navy.mil.bd/EXHIBITION-OF-RARE-PHOTOGRAPHS-TAKEN-DURING-THE-LIBERATION-WAR" target="_blank">
                                                                        <input type="hidden" name="url_link" value="bmV3c2V4cGxvZGUyMzU%3D" /> 
                                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                        <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Download</a></button>
                                                                      </form>
                                                                    </p></td>
                                                                  </tr>
                                                                </table>
                                                              </li>
                                                              <li class="news-item">
                                                                <table cellpadding="4">
                                                                  <tr>
                                                                    <td rowspan="3" style="width:112px;">
                                                                      <img src="{{url('Frontend/news_gallery/news.png')}}"  width="" class="img-circle"/>
                                                                    </td>
                                                                    <td colspan="3">
                                                                      <span style="font-weight:bold; font-size: 16px; color: black !important;">Old Pictures Regarding Liberation war 1971</span>
                                                                      <div style="width: 100%"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px;"></i>23-Nov-2021 02:51 am</div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="3"><p class="small"><dddd style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-align: justify; font-size: 16px; text-align: justify; padding-right: 8px;"></dddd>
                                                                      <form method="post" action="https://www.navy.mil.bd/Old-Pictures-Regarding-Liberation-war-1971" target="_blank">
                                                                        <input type="hidden" name="url_link" value="bmV3c2V4cGxvZGUyMzM%3D" /> 
                                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                        <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Download</a></button>
                                                                      </form>
                                                                    </p></td>
                                                                  </tr>
                                                                </table>
                                                              </li>
                                                              <li class="news-item">
                                                                <table cellpadding="4">
                                                                  <tr>
                                                                    <td rowspan="3" style="width:112px;">
                                                                      <img src="{{url('Frontend/news_gallery/news.png')}}"  width="" class="img-circle"/>
                                                                    </td>
                                                                    <td colspan="3">
                                                                      <span style="font-weight:bold; font-size: 16px; color: black !important;">ARMED FORCES DAY 2021</span>
                                                                      <div style="width: 100%"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px;"></i>22-Nov-2021 01:19 am</div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="3"><p class="small"><dddd style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-align: justify; font-size: 16px; text-align: justify; padding-right: 8px;"></dddd>
                                                                      <form method="post" action="https://www.navy.mil.bd/ARMED-FORCES-DAY-2021" target="_blank">
                                                                        <input type="hidden" name="url_link" value="bmV3c2V4cGxvZGUyMzI%3D" /> 
                                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                        <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Download</a></button>
                                                                      </form>
                                                                    </p></td>
                                                                  </tr>
                                                                </table>
                                                              </li>
                                                              <li class="news-item">
                                                                <table cellpadding="4">
                                                                  <tr>
                                                                    <td rowspan="3" style="width:112px;">
                                                                      <img src="{{url('Frontend/news_gallery/news.png')}}"  width="" class="img-circle"/>
                                                                    </td>
                                                                    <td colspan="3">
                                                                      <span style="font-weight:bold; font-size: 16px; color: black !important;">Bangladesh Navy Rescued 17 Fisherman from Bay of Bengal 12-11-2021</span>
                                                                      <div style="width: 100%"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px;"></i>12-Nov-2021 11:11 am</div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="3"><p class="small"><dddd style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-align: justify; font-size: 16px; text-align: justify; padding-right: 8px;"></dddd>
                                                                      <form method="post" action="https://www.navy.mil.bd/Bangladesh-Navy-Rescued-17-Fisherman-from-Bay-of-Bengal-12-11-2021" target="_blank">
                                                                        <input type="hidden" name="url_link" value="bmV3c2V4cGxvZGUyMzE%3D" /> 
                                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                        <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Download</a></button>
                                                                      </form>
                                                                    </p></td>
                                                                  </tr>
                                                                </table>
                                                              </li>
                                                              <li class="news-item">
                                                                <table cellpadding="4">
                                                                  <tr>
                                                                    <td rowspan="3" style="width:112px;">
                                                                      <img src="{{url('Frontend/news_gallery/news.png')}}"  width="" class="img-circle"/>
                                                                    </td>
                                                                    <td colspan="3">
                                                                      <span style="font-weight:bold; font-size: 16px; color: black !important;">Swimming Competition at Norail</span>
                                                                      <div style="width: 100%"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px;"></i>07-Nov-2021 05:33 am</div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="3"><p class="small"><dddd style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-align: justify; font-size: 16px; text-align: justify; padding-right: 8px;"></dddd>
                                                                      <form method="post" action="https://www.navy.mil.bd/Swimming-Competition-at-Norail" target="_blank">
                                                                        <input type="hidden" name="url_link" value="bmV3c2V4cGxvZGUyMzA%3D" /> 
                                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                        <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Download</a></button>
                                                                      </form>
                                                                    </p></td>
                                                                  </tr>
                                                                </table>
                                                              </li>
                                                              <li class="news-item">
                                                                <table cellpadding="4">
                                                                  <tr>
                                                                    <td rowspan="3" style="width:112px;">
                                                                      <img src="{{url('Frontend/news_gallery/news.png')}}"  width="" class="img-circle"/>
                                                                    </td>
                                                                    <td colspan="3">
                                                                      <span style="font-weight:bold; font-size: 16px; color: black !important;">National Standard Ceremony of BNS Shaheed Moazzam 04-11-2021</span>
                                                                      <div style="width: 100%"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px;"></i>04-Nov-2021 08:02 am</div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="3"><p class="small"><dddd style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-align: justify; font-size: 16px; text-align: justify; padding-right: 8px;"></dddd>
                                                                      <form method="post" action="https://www.navy.mil.bd/National-Standard-Ceremony-of-BNS-Shaheed-Moazzam-04-11-2021" target="_blank">
                                                                        <input type="hidden" name="url_link" value="bmV3c2V4cGxvZGUyMjk%3D" /> 
                                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                        <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Download</a></button>
                                                                      </form>
                                                                    </p></td>
                                                                  </tr>
                                                                </table>
                                                              </li>
                                                              <li class="news-item">
                                                                <table cellpadding="4">
                                                                  <tr>
                                                                    <td rowspan="3" style="width:112px;">
                                                                      <img src="{{url('Frontend/news_gallery/news.png')}}"  width="" class="img-circle"/>
                                                                    </td>
                                                                    <td colspan="3">
                                                                      <span style="font-weight:bold; font-size: 16px; color: black !important;">BANGLADESH NAVY SEIZED OVER 1 CRORE 13 LACS METER ILLEGAL FISHING NET</span>
                                                                      <div style="width: 100%"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px;"></i>26-Oct-2021 10:24 pm</div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="3"><p class="small"><dddd style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-align: justify; font-size: 16px; text-align: justify; padding-right: 8px;"></dddd>
                                                                      <form method="post" action="https://www.navy.mil.bd/BANGLADESH-NAVY-SEIZED-OVER-1-CRORE-13-LACS-METER-ILLEGAL-FISHING-NET" target="_blank">
                                                                        <input type="hidden" name="url_link" value="bmV3c2V4cGxvZGUyMjg%3D" /> 
                                                                        <input type="hidden" name="_token" value="Ue8hmbFiO7IdIv4NcscRsNiEmf4VLIsLtP6PpSyW">                        <button type="submit" style="border-width: 0px; background-color: transparent;"><a>Download</a></button>
                                                                      </form>
                                                                    </p></td>
                                                                  </tr>
                                                                </table>
                                                              </li>
                                                            </ul>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="panel-footer"> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </section>
                                              <div class="modal" id="modal-audio-now" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title"></h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <audio controls style="width: 100%;">
                                                        Your browser does not support the audio element.
                                                      </audio>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <section class="section-dark parallax-image-a">
                                                <div class="section-inner" style="padding: 0px;">
                                                  <div class="section-heading wowed margin-bottom-50">
                                                    <h1 data-wow-delay=".5s" class="wow fadeInDown animated" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown; color:#fff; font-size:28px;">BN Links</h1>
                                                  </div>
                                                  <div class="container">
                                                    <div class="slider-items-products">
                                                      <div id="brand-logo-slider" class="product-flexslider">
                                                        <div class="slider-items slider-width-col6 "> 
                                                          <div class="item"> 
                                                            <a href="https://bna.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend//bn_link_gallery/ff90a98872440d7970ac75350d1291cd.png')}}" alt="Bangladesh Naval Academy" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="https://www.youtube.com/channel/UC7fsm_alAk9FKG6sho5pKsw/featured" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/9285dddf58168f401f89de627904b8de.jpg')}}" alt="BN YouTube" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="https://dewbn.com/index.php" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/b508c7c08f2039321122d7c9393317cd.png')}}" alt="Dockyard and Engineering Works Ltd." style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="https://csd.navy.mil.bd/" target="_blank"><img class="img-responsive" src="Frontend/bn_link_gallery/66cfb0fd33972834beff6d67ab1eebb8.png" alt="Commodore Superintendent Dockyard" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="https://joinnavy.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/7534a629412a10f4f176565fc6283556.png')}}" alt="join navy" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="https://www.facebook.com/bangladeshnavy.mil.bd" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/6674b235a2fa3859f4ee4aa37122edea.jpg')}}" alt="Bangladesh Navy Official Facebook Page" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="http://www.nssd.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/4ccd4a1160a37de7fe6557d1fc88f80f.png')}}" alt="NSSD dhaka" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="http://www.nsdctg.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/1be3731a9340a8606cfd18dba168f6b0.png')}}" alt="Naval Stores Depot Chattogram" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="http://www.bnppams.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/b1212e0ed10ceb6f2b7cfdb85ad9bb5c.png')}}" alt="BN Pay" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="index.html" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/eaaa438df20c03b031d9b97b1ca9cb64.png')}}" alt="un mission" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="https://bms.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/536c7fa885bdc532d9bca79143633342.png')}}" alt="Budget Management System (BMS) Bangladesh Navy" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="http://bnveteran.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/eec16150caab77abec9b505579c1ab59.jpg')}}" alt="BN Veterans" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="https://www.khulnashipyard.com/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/4ef4f924741508b614641f6c61b6d042.png')}}" alt="KHULNA SHIPYARD" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="http://bnhoc.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/00460804b63d5e8ae978adb03dbabf36.png')}}" alt="Bangladesh Navy Hydrographic and Oceanographic Centre" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="http://bncl.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/6a5b5ba7429c5bb9c634ecc2a6687742.jpg')}}" alt="BNCL" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="http://bnalms.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/86deedeb352a07b58f18134e1c21c6d8.jpg')}}" alt="BNA LMS" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                          <div class="item"> 
                                                            <a href="http://smlms.navy.mil.bd/" target="_blank"><img class="img-responsive" src="{{url('Frontend/bn_link_gallery/c384a054e28cb75f7a091309202c4368.jpg')}}" alt="SM LMS" style="border: 5px solid #fff;"></a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </section>
                                              <section class="section section-split-parallax_gallery">
                                                <div class="row row-eq-height">
                                                  <div class="col-md-4  wow fadeInUp section-split-parallax--left">
                                                    <div class="section-inner">
                                                      <h1 style="color:#fff;">Gallery</h1>
                                                      <div class="row wow fadeInUp">
                                                        <div class="divider-sm"></div>
                                                        <p class="small_gallery ">Liberation war, Birth of BN and present activities of BN are projected in this section with several photography’s and videos</p>
                                                      </div>
                                                      <hr class="hr-small">
                                                    </div>
                                                  </div>
                                                  <div class="col-md-8  wow fadeInUp section-split-parallax--right">
                                                    <div class="section-inner">
                                                      <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                                        <div class="btn-group" role="group">
                                                          <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><i class="fa fa-photo"></i>
                                                            <div class="hidden-xs">PHOTO GALLERY</div>
                                                          </button>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                          <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><i class="fa fa-video-camera"></i>
                                                            <div class="hidden-xs">VIDEO GALLERY</div>
                                                          </button>
                                                        </div>
                                                      </div>
                                                      <div class="well">
                                                        <div class="tab-content">
                                                          <div class="tab-pane fade in active" id="tab1">
                                                            <div id="fullscreen-portfolio" class="anchor">
                                                              <div class="">
                                                                <div class="filters">
                                                                  <ul>
                                                                    <li class="active">
                                                                      <a data-filter=".group9" href="#">Ceremony</a>
                                                                    </li>
                                                                    <li class="">
                                                                      <a data-filter=".group1" href="#">Liberation War</a>
                                                                    </li>
                                                                    <li class="">
                                                                      <a data-filter=".group2" href="#">Rise of BD Navy</a>
                                                                    </li>
                                                                  </ul>
                                                                </div>
                                                                <div class="divider-lg"></div>
                                                              </div>
                                                              <div class="fsp-wrapper">
                                                                <div class="fsp-container">
                                                                  <div class="fsp-content">
                                                                    <div class="fsp-content-inner">
                                                                      <ul>
                                                                        <!-- slide -->
                                                                        <li class="group9">
                                                                          <div class="fsp-image">
                                                                            <img alt="image" src="{{url('Frontend/photo_gallery/rsz_4_1595824198.jpg')}}" />
                                                                          </div>
                                                                          <div class="fsp-cover">
                                                                            <div class="fsp-info">
                                                                              <div class="fsp-fancy">
                                                                                <a class="fancybox" data-fancybox-group="group9" href="{{url('Frontend/photo_gallery/rsz_4_1595824198.jpg')}}">
                                                                                  <i class="fa fa-picture-o fa-1x"></i>
                                                                                </a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </li>
                                                                        <li class="group9">
                                                                          <div class="fsp-image">
                                                                            <img alt="image" src="{{url('Frontend/photo_gallery/rsz_5_1595824139.jpg')}}" />
                                                                          </div>
                                                                          <div class="fsp-cover">
                                                                            <div class="fsp-info">
                                                                              <div class="fsp-fancy">
                                                                                <a class="fancybox" data-fancybox-group="group9" href="{{url('Frontend/photo_gallery/rsz_5_1595824139.jpg')}}">
                                                                                  <i class="fa fa-picture-o fa-1x"></i>
                                                                                </a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </li>
                                                                        <li class="group9">
                                                                          <div class="fsp-image">
                                                                            <img alt="image" src="{{url('Frontend/photo_gallery/rsz_3_1595824234.jpg')}}" />
                                                                          </div>
                                                                          <div class="fsp-cover">
                                                                            <div class="fsp-info">
                                                                              <div class="fsp-fancy">
                                                                                <a class="fancybox" data-fancybox-group="group9" href="{{url('Frontend/photo_gallery/rsz_3_1595824234.jpg')}}">
                                                                                  <i class="fa fa-picture-o fa-1x"></i>
                                                                                </a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </li>
                                                                        <li class="group1">
                                                                          <div class="fsp-image">
                                                                            <img alt="image" src="{{url('Frontend/photo_gallery/1_1567313738.jpg')}}" />
                                                                          </div>
                                                                          <div class="fsp-cover">
                                                                            <div class="fsp-info">
                                                                              <div class="fsp-fancy">
                                                                                <a class="fancybox" data-fancybox-group="group1" href="{{url('Frontend/photo_gallery/1_1567313738.jpg')}}">
                                                                                  <i class="fa fa-picture-o fa-1x"></i>
                                                                                </a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </li>
                                                                        <li class="group1">
                                                                          <div class="fsp-image">
                                                                            <img alt="image" src="{{url('Frontend/photo_gallery/2_1567313749.jpg')}}" />
                                                                          </div>
                                                                          <div class="fsp-cover">
                                                                            <div class="fsp-info">
                                                                              <div class="fsp-fancy">
                                                                                <a class="fancybox" data-fancybox-group="group1" href="{{url('Frontend/photo_gallery/2_1567313749.jpg')}}">
                                                                                  <i class="fa fa-picture-o fa-1x"></i>
                                                                                </a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </li>
                                                                        <li class="group1">
                                                                          <div class="fsp-image">
                                                                            <img alt="image" src="{{url('Frontend/photo_gallery/3_1567313762.png')}}" />
                                                                          </div>
                                                                          <div class="fsp-cover">
                                                                            <div class="fsp-info">
                                                                              <div class="fsp-fancy">
                                                                                <a class="fancybox" data-fancybox-group="group1" href="{{url('Frontend/photo_gallery/3_1567313762.png')}}">
                                                                                  <i class="fa fa-picture-o fa-1x"></i>
                                                                                </a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </li>
                                                                        <li class="group2">
                                                                          <div class="fsp-image">
                                                                            <img alt="image" src="{{url('Frontend/photo_gallery/1_1567401407.jpg')}}" />
                                                                          </div>
                                                                          <div class="fsp-cover">
                                                                            <div class="fsp-info">
                                                                              <div class="fsp-fancy">
                                                                                <a class="fancybox" data-fancybox-group="group2" href="{{url('Frontend/photo_gallery/1_1567401407.jpg')}}">
                                                                                  <i class="fa fa-picture-o fa-1x"></i>
                                                                                </a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </li>
                                                                        <li class="group2">
                                                                          <div class="fsp-image">
                                                                            <img alt="image" src="{{url('Frontend/photo_gallery/2_1567401414.jpg')}}" />
                                                                          </div>
                                                                          <div class="fsp-cover">
                                                                            <div class="fsp-info">
                                                                              <div class="fsp-fancy">
                                                                                <a class="fancybox" data-fancybox-group="group2" href="{{url('Frontend/photo_gallery/2_1567401414.jpg')}}">
                                                                                  <i class="fa fa-picture-o fa-1x"></i>
                                                                                </a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </li>
                                                                        <li class="group2">
                                                                          <div class="fsp-image">
                                                                            <img alt="image" src="{{url('Frontend/photo_gallery/3_1567401422.jpg')}}" />
                                                                          </div>
                                                                          <div class="fsp-cover">
                                                                            <div class="fsp-info">
                                                                              <div class="fsp-fancy">
                                                                                <a class="fancybox" data-fancybox-group="group2" href="{{url('Frontend/photo_gallery/3_1567401422.jpg')}}">
                                                                                  <i class="fa fa-picture-o fa-1x"></i>
                                                                                </a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </li>
                                                                        <!-- slide -->
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="tab-pane fade in" id="tab2">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                              <figure>
                                                                <div class="hovereffect3">
                                                                  <img class="img-responsive" src="{{url('Frontend/video_gallery/Capture_1597144767.png')}}">
                                                                  <div class="overlay">
                                                                    <p>
                                                                      <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/lYA-PsJhNV8">
                                                                        <i class="fa fa-youtube"></i>
                                                                      </a>
                                                                    </p>
                                                                  </div>
                                                                </div>
                                                              </figure>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                              <figure>
                                                                <div class="hovereffect3">
                                                                  <img class="img-responsive" src="{{url('Frontend/video_gallery/20180506123617.jpg')}}">
                                                                  <div class="overlay">
                                                                    <p>
                                                                      <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/M8x_O0j8eOI">
                                                                        <i class="fa fa-youtube"></i>
                                                                      </a>
                                                                    </p>
                                                                  </div>
                                                                </div>
                                                              </figure>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </section>        
                             