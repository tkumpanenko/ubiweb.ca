<?php if( $page != "index" ): ?>
<header class="app-bar promote-layer">
  <div class="app-bar-container">
    <button class="menu"><img src="assets/images/hamburger.svg" alt="Menu"></button>
  </div>
</header>
<?php endif ?>

<nav id="navbar" class="navdrawer-container promote-layer">
  <a href="index.php<?php if($lang == "fr") echo '?lang=fr' ?>"><h1>Ubiweb</h1></a>
  <ul>
    <li<?php if($page == "packages") echo ' class="active"'; ?>><a href="packages.php<?php if($lang == "fr") echo '?lang=fr' ?>"><?php _e('Packages') ?></a></li>
    <li<?php if($page == "templates") echo ' class="active"'; ?>><a href="templates.php<?php if($lang == "fr") echo '?lang=fr' ?>"><?php _e('Templates') ?></a></li>
    <li<?php if($page == "contact") echo ' class="active"'; ?>><a href="contact.php<?php if($lang == "fr") echo '?lang=fr' ?>"><?php _e('Contact') ?></a></li>
    <li><?php switch_language() ?></li>
  </ul>
</nav>
