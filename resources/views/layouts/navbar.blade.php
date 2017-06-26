<a href="{{ action('MainController@index') }}"  class="logo">IIIDM</a>
<nav class="maian_mnu clearfix">
    <button class="main_mnu_button hidden-md hidden-lg "><i class="fa fa-bars"></i></button>
    <ul>
        <li class="active"><a href="{{ action('CompanyController@index') }}" >О компании</a></li>
        <li><a href="{{ action('PartnerShipController@index') }}" >Партнёрство</a></li>
        <li><a href="{{ action ('PortfolioController@index') }}">Портфолио</a></li>
        <li><a href="{{ action('LineController@index') }}" >Бегущие строки</a></li>
        <li><a href="{{ action('CrossController@index') }}" >Аптечные кресты</a></li>
        <li><a href="{{ action('ScreenController@index') }}" >Полноцветные экраны</a></li>
        <li><a href="{{action('ReviewController@index')}}" >Отзывы</a></li>
    </ul>
</nav>