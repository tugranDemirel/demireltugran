
<nav class="sidebar-nav">
    <ul class="nav in side-menu">
        <li class="current-page menu-item-has-children"><a href="{{route('home.home')}}"><i class="list-icon feather feather-command"></i> <span class="hide-menu">Anasayfa</span></a></li>
        <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-book"></i> <span class="hide-menu">Bloglar</span></a>
            <ul class="list-unstyled sub-menu">
                <li><a href="{{ route('home.blog.index') }}">Blog Listesi</a>
                </li>
                <li><a href="{{ route('home.blog.create') }}">Yeni BLog Ekle</a>
                </li>

            </ul>
        </li>
        <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-award"></i> <span class="hide-menu">Referanslar</span></a>
            <ul class="list-unstyled sub-menu">
                <li><a href="{{ route('home.reference.index') }}">Referans Listesi</a>
                </li>
                <li><a href="{{ route('home.reference.create') }}">Yeni Referans Ekle</a>
            </ul>
        </li>
        <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-radio"></i> <span class="hide-menu">Sosyal Medya</span></a>
            <ul class="list-unstyled sub-menu">
                <li><a href="{{ route('home.media.index') }}">Sosyal Medya Listesi</a>
                </li>
                <li><a href="{{ route('home.media.create') }}">Yeni Sosyal Medya Ekle</a>
                </li>
            </ul>
        </li>
        <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-package"></i> <span class="hide-menu">Projeler</span></a>
            <ul class="list-unstyled sub-menu">
                <li><a href="{{ route('home.work.index') }}">Proje Listesi</a>
                </li>
                <li><a href="{{ route('home.work.create') }}">Yeni Proje Ekle</a>
                </li>
            </ul>
        </li>
        <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-message-circle"></i> <span class="hide-menu">Mesajlar</span></a>
            <ul class="list-unstyled sub-menu">
                <li><a href="{{ route('home.contact.index') }}">Mesaj Listesi</a>
                </li>
            </ul>
        </li>
        <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-settings"></i> <span class="hide-menu">Site Ayarları</span></a>
            <ul class="list-unstyled sub-menu">
                <li><a href="{{ route('home.setting.index') }}">Site Ayarları</a>
                </li>
            </ul></li>
    </ul>
    <!-- /.side-menu -->
</nav>
