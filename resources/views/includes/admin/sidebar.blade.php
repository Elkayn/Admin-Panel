<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-header">АДМИН ПАНЕЛЬ</li>
        <li class="nav-item">
            <a href="{{route('admin.promo.index')}}" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                    ПРОМО
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.service.index')}}" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                    IT-УСЛУГИ ДЛЯ БИЗНЕС
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.work.index')}}" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                    НАШИ РАБОТЫ
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.price.index')}}" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                    СТОИМОСТЬ УСЛУГ
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.review.index')}}" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                    ОТЗЫВЫ
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.vacancy.index')}}" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                    ВАКАНСИИ
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
                <i class="nav-icon fas fa-arrow-right"></i>
                <p>
                    Выйти
                </p>
            </a>
        </li>
    </ul>
</nav>
