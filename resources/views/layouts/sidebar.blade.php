<div class="col-lg-2">
    <div class="d-flex flex-wrap align-content-start h-100 w-100">
        <div class="position-sticky content-wrapper sticky-top rbt-sticky-top-adjust-three w-100">
            <ul class="nav tab-navigation-button tab-smlg flex-column nav-pills me-3" id="v-pills-tab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link rn-nav active" id="v-pills-home-tab" data-toggle="tab" href="#v-pills-Javascript" role="tab" aria-selected="true">Hakkımda</a>
                </li>

                @if(!empty(\App\Models\Work::all()))
                <li class="nav-item">
                    <a class="nav-link rn-nav" id="v-pills-wordpress-tab" data-toggle="tab" href="#v-pills-Wordpress" role="tab" aria-selected="true">Projeler</a>
                </li>
                @endif
                @if(!empty(\App\Models\Blog::all()))
                <li class="nav-item">
                    <a class="nav-link rn-nav" id="v-pills-settings-tabs" data-toggle="tab" href="#v-pills-settings" role="tab" aria-selected="true">Blog</a>
                </li>
                @endif
                @if(!empty(\App\Models\Contact::all()))
                <li class="nav-item">
                    <a class="nav-link rn-nav" id="v-pills-python-tabs" data-toggle="tab" href="#v-pills-python" role="tab" aria-selected="true">İletişim</a>
                </li>
                @endif

            </ul>
        </div>
    </div>
</div>
