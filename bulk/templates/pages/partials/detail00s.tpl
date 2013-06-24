<!-- Header van de 00s -->
    <section id="banner-00s">
        <header>
            <h1>THE PRESENT</h1>
            <h2>With <span id="rood">contemporary</span> ingredients we&#8217;ll define the <span>future</span>.</h2>
        </header>
    </section>

<!-- Alle hamburgers -->
<div id="achtergrond00s">

    <!-- top venstertje met samenvatting over burger -->
    <section id="burgerSamenvatting">

        <header><h1>This burger is something special!</h1></header>

        <div id="hamburgerImage">
            <img src="assets/images/00s-detail-burger.png" />
        </div>

        <section id="list-things">
            <ul id="actios">
                <li><span>by</span> {$burger.creator}</li>
                <li><span id="votes"> {$burger.votes}</span> votes</li>
                <li><a href="{$burger.id}"><img src="assets/images/50s-detail-like.png" />Vote for this burger</a></li>
            </ul>
        </section>

        <div class="dummy">&nbsp;</div>

    </section>

    <section id="bottomInfo">
        <!-- Ingredienten -->
        <section id="ingredienten">
            <header><h1>In this burger</h1></header>

        <p>Includes</p>
        <ul>
        {foreach $burger.ingredienten as $ingredient}
            <li>{$ingredient}</li>
        {/foreach}
        </ul>

        <div class="dummy">&nbsp;</div>


        </section>

        <!-- Vote buttons -->
        <section id="voteBtns">
            <header><h1>I like this one!</h1></header>

        <ul>
            <li id="fb"><a href="{$burger.id}">Share it on Facebook<img src="assets/images/00s-detail-fb-share-btn.png"
            width="10"/></a></li>
            <li id="tw"><a href="https://twitter.com/share?text=I%20voted%20for%20{$burger.creator}%20%60s%20burger%2ECreate%20a%20burger%20yourself%20and%20win%20a%20car%2E%20More%20on%20burgerking%2Ecom">
                            Share it on Twitter<img src="assets/images/00s-detail-twitter-sharebtn.png" width="25px"  /></a></li>

        </ul>

        </section>

        <div class="dummy">&nbsp;</div>

    </section>


</div>