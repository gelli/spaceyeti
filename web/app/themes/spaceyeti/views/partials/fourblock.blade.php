  <!-- 4 artikel nebeneinander -->

  <section class="container section">
    <h2 class="title fancy is-2  has-text-centered">Never stop exploring</h2>
    <h3 class="title is-4 has-text-centered" style="color: #8c919b;">Kostenlose Foto CheckListe zum Download</h3>

      <div class="columns is-multiline">
      <div class="column is-3-desktop is-full-tablet flexon">
        @include('partials.postpanel', ['extended' => false, 'showCategory' => false])
      </div>
      <div class="column is-3-desktop is-full-tablet flexon">
        @include('partials.postpanel', ['extended' => false, 'showCategory' => false])
      </div>
      <div class="column is-3-desktop is-full-tablet flexon">
        @include('partials.postpanel', ['extended' => false, 'showCategory' => false])
      </div>
      <div class="column is-3-desktop is-full-tablet flexon">
        @include('partials.postpanel', ['extended' => false, 'showCategory' => false])
      </div>
    </div>
</section>
