<ul>
    @foreach($items as $menu_item)
        <li><a href="<?= LaravelLocalization::localizeUrl($menu_item->link()); ?>">{{ $menu_item->getTranslatedAttribute('title', 'locale', app()->getLocale()) }}</a></li>
    @endforeach
</ul>