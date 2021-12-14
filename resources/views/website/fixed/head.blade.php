<div class="main">
    <div class="themed-bg"></div>
    <div id="skrollr-body">
      <div class="skroll-container">
        <div class="header__wrapper">
          <div class="header__content">
            <div class="website-name">
              <h1>
                <a href="index.html">
                <img class="img-responsive graphic-logo-img" src="{{url('Frontend/frontend/template/img/logo.png')}}"
                style="width: 100px;"/>
              </a>
            </h1>
            <img style="width: 100%;margin-top: -110px;margin-bottom: -10px;height: 150px;" class="img-responsive" src="{{url('Frontend/frontend/template/img/banner.jpg')}}">
          </div>
          <div class="tagline">
            <h1 class="website-name">
              <a href="index.html">Sailor Life</a>
             
            </h1>
            <p>In War and Peace Invincible at Sea</p>
            
          </div>
          <div>


            {{-- notification of  successful registration--}}
            @if(session()->has('notification'))
            <p class="alert alert-success">{{session()->get('notification')}}</p>
        @endif
        
        @if(session()->has('error'))
            <p class="alert alert-danger">{{session()->get('error')}}</p>
        @endif
         </div>