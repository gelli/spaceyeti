<div class="post-module flexlayout">
    <div class="thumbnail">
        <div class="date">
            <div class="day">27</div>
            <div class="month">Mar</div>
        </div>
        <img class="image" src="https://www.littlebluebag.de/app/uploads/2018/03/Schweden-mit-Anja-17.-23.10.17-428.jpg"/>
    </div>
    @if (!isset($showCategory) or $showCategory !== false)
        <div class="category">Fotografie-Tipps</div>
    @endif
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

        
        @if (!isset($extended) or $extended !== false)
            <h2 class="title is-3">Deine Fotos nach der Reise Lorem Ipsum</h2>
            <h3 class="title is-4">Kostenlose Foto CheckListe zum Download</h3>
            <p class="description is-hidden-desktop-only">Es ist Herbst. Regen, Nebel, Sonne, bunter Blätter… es gibt jede Menge toller herbstlicher Fotomotive, daher gibt es für dich eine kostenlose Herbst Foto Checkliste für den Herbst von uns!</p>
            <i class="fa fa-share-alt"></i>
            <i class="fa fa-share"></i>

            <div class="post-meta">
                <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span>
                <span class="comments">
                    <i class="fa fa-comments"></i>
                    <a href="#"> 39 comments</a>
                </span>
            </div>
        @else
        <h2 class="title is-4">Deine Fotos nach der Reise Lorem Ipsum</h2>
        @endif
    </div>
</div>
