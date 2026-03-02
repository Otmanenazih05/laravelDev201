<header>
    <div class="header-content">
        <div class="logo">
            <a href="{{ route('accueil') }}" style="color: white; text-decoration: none;">MegaShop</a>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li><a href="{{ route('categorie', 'informatique') }}">Informatique</a></li>
                <li><a href="{{ route('categorie', 'petit-electromenager') }}">Petit Électroménager</a></li>
                <li><a href="{{ route('categorie', 'grand-electromenager') }}">Grand Électroménager</a></li>
                <li><a href="{{ route('cgv') }}">CGV</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>