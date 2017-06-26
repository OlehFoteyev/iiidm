<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="list-group">
        <a href="{{ action('MainController@show') }}" class="list-group-item " target="_self">
            Главная страница<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('CompanyController@show') }}" class="list-group-item " target="_self">
            О компании<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{action('PartnerShipController@show')}}" class="list-group-item " target="_self">
            Партнёрство<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('PortfolioController@show') }}" class="list-group-item " target="_self">
            Наши проекты<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('PartContactsController@show') }}" class="list-group-item " target="_self">
            Контакты для партнёрства<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('LineController@show') }}" class="list-group-item " target="_self">
            Бегушие строки<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('RedLineController@show') }}" class="list-group-item " target="_self">
            Таблица цен для красных строк<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('AnotherColorController@show') }}" class="list-group-item " target="_self">
            Таблица цен  для другого цвета строк<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('FullColorController@show') }}" class="list-group-item " target="_self">
            Таблица цен для полноцветных строк<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('CrossController@show') }}" class="list-group-item " target="_self">
            Аптечные кресты<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('TypeCrossController@show') }}" class="list-group-item " target="_self">
            Характеристики аптеч. крестов<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('ScreenController@show') }}" class="list-group-item " target="_self">
            Полноцветные экраны<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('ReviewController@show') }}" class="list-group-item " target="_self">
            Сожержание "Отзывы"<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('CommentController@show') }}" class="list-group-item " target="_self">
            Комментарии<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
        <a href="{{ action('UserController@show') }}" class="list-group-item " target="_self">
            Пользователи<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i></a>
    </div>