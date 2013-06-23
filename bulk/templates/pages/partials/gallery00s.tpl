<section id="banner-00s">
    <header>
        <h1>THE PRESENT</h1>
        <h2>With <span id="rood">contemporary</span> ingredients we&#8217;ll define the <span>future</span>.</h2>
    </header>
</section>

<!-- Alle hamburgers -->
<div id="achtergrond00s">

    <section id="top3">
        <header>
            <h1>these burgers have it!</h1>
        </header>

        <div id="burgers">
            <!-- Top burger -->
            <section id="topBurger">
                <image src="assets/images/50s-top-burger.png" />
                <div id="voteCountFirst">{$besteBurger.likes}</div>

                <p>{$besteBurger.user_name}</p>
                <ul class="actions">
                    <li> <a href="{$besteBurger.id}">Vote for this burger</a></li>
                    <li> <a href=index.php?page=detail&decade={$besteBurger.decade}s&burgerId={$besteBurger.id}>View details</a></li>
                </ul>

            </section>

            <!-- Tweede beste burger -->
           <section id="secondBurger">
               <image src="assets/images/50s-top-burger.png" />
               <div id="voteCountSecond">{$tweedeBurger.likes}</div>

               <p>{$tweedeBurger.user_name}</p>
               <ul class="actions">
                   <li> <a href="{$tweedeBurger.id}">Vote for this burger</a></li>
                   <li> <a href=index.php?page=detail&decade={$tweedeBurger.decade}s&burgerId={$tweedeBurger.id}>View details</a></li>
               </ul>

           </section>

            <!-- DERDE burger -->
             <section id="thirdBurger">
                 <image src="assets/images/50s-top-burger.png" />
                 <div id="voteCountThird">{$derdeBurger.likes}</div>

                 <p>{$derdeBurger.user_name}</p>
                 <ul class="actions">
                     <li> <a href="{$derdeBurger.id}">Vote for this burger</a></li>
                     <li> <a href=index.php?page=detail&decade={$derdeBurger.decade}s&burgerId={$derdeBurger.id}>View details</a></li>
                 </ul>

             </section>
            <div class="dummy">&nbsp;</div>

        </div>

    </section>

    <section id="allTheBugers00s">
        <header>
            <h1>View all the fifties burgers</h1>
        </header>

        <section id="searchField">
            <form>
                <div><input type="text" name="search" value="search for a creator"></div>
            </form>
        </section>

        <div class="dummy">&nbsp;</div>

        {foreach $alleBurgers as $burger}

        <!-- Alle burger in een rijtje -->
            {if $burger@index%3 == 0}
            <section class="burgerRow">
            {/if}
                <section class="burgerSummary">
                    <image src="assets/images/50s-overzicht-burger.png" />
                    <div class="voteCount"">{$burger.likes}</div>

                    <p>{$burger.user_name}</p>
                    <ul class="actions">
                        <li> <a href="{$burger.id}">Vote for this burger</a></li>
                        <li> <a href=index.php?page=detail&decade={$burger.decade}s&burgerId={$burger.id}>View details</a></li>
                    </ul>
                </section>

        {if $burger@index%3 == 2}
            <div class="dummy">&nbsp;</div>
            <div class="line">&nbsp;</div>
        </section>

        {/if}
        {/foreach}

        <div class="dummy">&nbsp;</div>


    </section>

</div>