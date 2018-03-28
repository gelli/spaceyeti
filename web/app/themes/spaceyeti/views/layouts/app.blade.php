<!doctype html>
<html @php(language_attributes())>
@include('partials.head')
<body @php(body_class())>
  <nav class="navbar is-white topNav" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
      </a>
      <button class="button navbar-burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    <div id="navMenu" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item">Home</a>
      </div>
      <div class="navbar-end">
        <a class="navbar-item">Test</a>
      </div>
    </div>
  </nav>

<!--   <section class="container">
    <div class="columns">
      <div class="column is-two-" style="background-color: blue">
      </div>
      <div class="column" style="background-color: yellow">
      </div>
    </div>
  </section> -->


  <!-- ganz oben -->
  <section class="container">
    <div class="card post-module columns is-multiline">
      <div class="thumbnail column is-two-thirds-widescreen is-full-desktop is-full-mobile is-full-tablet">
          <img class="image" src="https://www.littlebluebag.de/app/uploads/2017/03/4.7.10-Langzeitbelichtung-bei-Tag_NYC_littlebluebag_0005.jpg"/>
          <div class="date">
              <div class="day">27</div>
              <div class="month">Mar</div>
          </div>
          <div class="category">Fotografie-Tipps</div>
      </div>
      
      <div class="post-content column is-one-third-widescreen is-full-desktop is-full-mobile is-full-tablet">
        <!-- <div class="card__share">
          <div class="card__social">
            <a class="share-icon facebook" href="#">
                <span class="fa fa-facebook"></span>
            </a>
            <a class="share-icon twitter" href="#">
                <span class="fa fa-twitter"></span>
            </a>
            <a class="share-icon pinterest" href="#">
                <span class="fa fa-pinterest"></span>
            </a>
          </div>
          <a id="share" class="share-toggle share-icon" href="#"></a>
        </div> -->

        <h1 class="title">Deine Fotos nach der Reise Lorem Ipsum</h1>
        <h2 class="sub_title">Kostenlose Foto CheckListe zum Download</h2>
        <p class="description">Es ist Herbst. Regen, Nebel, Sonne, bunter Blätter… es gibt jede Menge toller herbstlicher Fotomotive, daher gibt es für dich eine kostenlose Herbst Foto Checkliste für den Herbst von uns!

        </p>
        <i class="fa fa-share-alt"></i>
        <i class="fa fa-share"></i>


        <div class="post-meta">
          <span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span>
          <span class="comments">
            <i class="fa fa-comments"></i>
            <a href="#"> 39 comments</a>
          </span>
        </div>
      </div>
    </div>
  </section>


  <!-- ganz oben -->
  <!-- <section class="container">
    <div class="card post-module">
      <div class="thumbnail">
          <div class="date">
              <div class="day">27</div>
              <div class="month">Mar</div>
          </div>
          <img src="https://www.littlebluebag.de/app/uploads/2017/03/4.7.10-Langzeitbelichtung-bei-Tag_NYC_littlebluebag_0005.jpg"/>
      </div>
      <div class="category">Fotografie-Tipps</div>
      <div class="post-content">
        <div class="card__share">
          <div class="card__social">
            <a class="share-icon facebook" href="#">
                <span class="fa fa-facebook"></span>
            </a>
            <a class="share-icon twitter" href="#">
                <span class="fa fa-twitter"></span>
            </a>
            <a class="share-icon pinterest" href="#">
                <span class="fa fa-pinterest"></span>
            </a>
          </div>
          <a id="share" class="share-toggle share-icon" href="#"></a>
        </div>

        <h1 class="title">Deine Fotos nach der Reise Lorem Ipsum</h1>
        <h2 class="sub_title">Kostenlose Foto CheckListe zum Download</h2>
        <p class="description">Es ist Herbst. Regen, Nebel, Sonne, bunter Blätter… es gibt jede Menge toller herbstlicher Fotomotive, daher gibt es für dich eine kostenlose Herbst Foto Checkliste für den Herbst von uns!

        </p>
        <i class="fa fa-share-alt"></i>
        <i class="fa fa-share"></i>


        <div class="post-meta">
          <span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span>
          <span class="comments">
            <i class="fa fa-comments"></i>
            <a href="#"> 39 comments</a>
          </span>
        </div>
      </div>
    </div>
  </section> -->

  <section class="container" >
    <div class="columns" >
      <div class="column is-4" style="align-items: stretch;display: flex;">
        <section class="articles">

          <div class="card post-module">
            <div class="thumbnail">
                <div class="date">
                    <div class="day">27</div>
                    <div class="month">Mar</div>
                </div>
                <!-- <img src="https://www.littlebluebag.de/app/uploads/2017/03/4.7.10-Langzeitbelichtung-bei-Tag_NYC_littlebluebag_0005.jpg"/> -->
                <img src="https://www.littlebluebag.de/app/uploads/2017/10/Nachtfotografie-Workshop-Mannheim_LittleBlueBag_Reiseblog-5.jpg"/>
            </div>
            <div class="category">Fotografie-Tipps</div>
            <div class="post-content">
              <div class="card__share">
                <div class="card__social">
                  <a class="share-icon facebook" href="#">
                      <span class="fa fa-facebook"></span>
                  </a>
                  <a class="share-icon twitter" href="#">
                      <span class="fa fa-twitter"></span>
                  </a>
                  <a class="share-icon pinterest" href="#">
                      <span class="fa fa-pinterest"></span>
                  </a>
                </div>
                <a id="share" class="share-toggle share-icon" href="#"></a>
              </div>

                <h1 class="title">Deine Fotos nach der Reise Lorem Ipsum</h1>
              <h2 class="sub_title">Kostenlose Foto CheckListe zum Download</h2>
              <p class="description">Es ist Herbst. Regen, Nebel, Sonne, bunter Blätter… es gibt jede Menge toller herbstlicher Fotomotive, daher gibt es für dich eine kostenlose Herbst Foto Checkliste für den Herbst von uns!

              </p>
              <i class="fa fa-share-alt"></i>
              <i class="fa fa-share"></i>


              <div class="post-meta">
                <span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span>
                <span class="comments">
                  <i class="fa fa-comments"></i>
                  <a href="#"> 39 comments</a>
                </span>
              </div>
            </div>
          </div>

        </section>
      </div>

      <!-- side bar -->
     <div class="column is-4" style="align-items: stretch;display: flex;">

        <!-- <div class="post-module">
            <div class="thumbnail">
                <div class="date">
                    <div class="day">27</div>
                    <div class="month">Mar</div>
                </div>
                <img src="https://www.littlebluebag.de/app/uploads/2017/10/Nachtfotografie-Workshop-Mannheim_LittleBlueBag_Reiseblog-5.jpg"/>
            </div>
            <div class="post-content">

                <div class="card__share">
                    <div class="card__social">
                        <a class="share-icon facebook" href="#">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a class="share-icon twitter" href="#">
                            <span class="fa fa-twitter"></span>
                        </a>
                        <a class="share-icon pinterest" href="#">
                            <span class="fa fa-pinterest"></span>
                        </a>
                    </div>
    
                    <a id="share" class="share-toggle share-icon" href="#"></a>
                </div>
    
                <div class="category">Fotografie-Tipps</div>
                <h1 class="title">Deine Fotos nach der Reise Lorem Ipsum</h1>
                <h2 class="sub_title">Kostenlose Foto CheckListe zum Download</h2>
                <p class="description">Es ist Herbst. Regen, Nebel, Sonne, bunter Blätter… es gibt jede Menge toller herbstlicher Fotomotive, daher gibt es für dich eine kostenlose Herbst Foto Checkliste für den Herbst von uns!</p>
                <div class="post-meta">
                    <span class="timestamp">
                        <i class="fa fa-clock-">o</i> 6 mins ago</span>
                    <span class="comments">
                        <i class="fa fa-comments"></i>
                        <a href="#"> 39 comments</a>
                    </span>
                </div>
            </div>
</div> -->

      <section class="articles">
          <div class="card post-module">
            <div class="thumbnail">
                <div class="date">
                    <div class="day">27</div>
                    <div class="month">Mar</div>
                </div>
                <img src="https://www.littlebluebag.de/app/uploads/2017/03/4.7.10-Langzeitbelichtung-bei-Tag_NYC_littlebluebag_0005.jpg"/>
                <!-- <img src="https://www.littlebluebag.de/app/uploads/2017/10/Nachtfotografie-Workshop-Mannheim_LittleBlueBag_Reiseblog-5.jpg"/>-->
            </div>
            <div class="category">Fotografie-Tipps</div>
            <div class="post-content">
              <div class="card__share">
                <div class="card__social">
                  <a class="share-icon facebook" href="#">
                      <span class="fa fa-facebook"></span>
                  </a>
                  <a class="share-icon twitter" href="#">
                      <span class="fa fa-twitter"></span>
                  </a>
                  <a class="share-icon pinterest" href="#">
                      <span class="fa fa-pinterest"></span>
                  </a>
                </div>
                <a id="share" class="share-toggle share-icon" href="#"></a>
              </div>

                <h1 class="title">Deine Fotos nach der Reise Lorem Ipsum</h1>
              <h2 class="sub_title">Kostenlose Foto CheckListe zum Download</h2>
              <p class="description">Es ist Herbst. Regen, Nebel, Sonne, bunter Blätter… es gibt jede Menge toller herbstlicher Fotomotive, daher gibt es für dich eine kostenlose Herbst Foto Checkliste für den Herbst von uns!

              </p>
              <i class="fa fa-share-alt"></i>
              <i class="fa fa-share"></i>


              <div class="post-meta">
                <span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span>
                <span class="comments">
                  <i class="fa fa-comments"></i>
                  <a href="#"> 39 comments</a>
                </span>
              </div>
            </div>
          </div>
</section>




      </div>
    </div
  </section>

  <!-- <section class="section">
    <div class="container">
      <h1 class="title">
        Hello World
      </h1>
      <p class="subtitle">
        My first website with <strong>Bulma</strong>!
      </p>
    </div>
  </section> -->

  @php(wp_footer())
    <noscript id="deferred-styles">
      <link rel="stylesheet" type="text/css" href="{!! App\Controllers\App::maincss() !!}"/>
    </noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
          window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
  </body>
</html>
