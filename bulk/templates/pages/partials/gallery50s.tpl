<!-- Header van de 50s -->
    <section id="banner-50s">
        <div id="logo">&nbsp;</div>
        <header>
            <h1>50<span>s</span></h1>
            <h2>Rock a burger</h2>
        </header>
    </section>

<!-- Alle hamburgers -->
<div id="achtergrond50s">

    <section id="top3">
        <header>
            <h1>these burgers are rocking our world</h1>
        </header>

        <div id="burgers">
            <!-- Top burger -->
            <section id="topBurger">
                <image src="assets/images/50s-top-burger.png" />
                <div id="voteCountFirst">{$besteBurger.likes}</div>

                <p>{$besteBurger.user_name}</p>
                <ul class="actions">
                    <li> <a href="{$besteBurger.id}">Vote for this burger</a></li>
                    <li> <a href=index.php?page=detail&decade={$besteBurger.decade}&burgerId={$besteBurger.id}>View details</a></li>
                </ul>

            </section>

            <!-- Tweede beste burger -->
           <section id="secondBurger">
               <image src="assets/images/50s-top-burger.png" />
               <div id="voteCountSecond">{$tweedeBurger.likes}</div>

               <p>{$tweedeBurger.user_name}</p>
               <ul class="actions">
                   <li> <a href="{$tweedeBurger.id}">Vote for this burger</a></li>
                   <li> <a href=index.php?page=detail&decade={$tweedeBurger.decade}&burgerId={$tweedeBurger.id}>View details</a></li>
               </ul>

           </section>

            <!-- DERDE burger -->
             <section id="thirdBurger">
                 <image src="assets/images/50s-top-burger.png" />
                 <div id="voteCountThird">{$derdeBurger.likes}</div>

                 <p>{$derdeBurger.user_name}</p>
                 <ul class="actions">
                     <li> <a href="{$derdeBurger.id}">Vote for this burger</a></li>
                     <li> <a href=index.php?page=detail&decade={$derdeBurger.decade}&burgerId={$derdeBurger.id}>View details</a></li>
                 </ul>

             </section>
            <div class="dummy">&nbsp;</div>

        </div>

    </section>

    <!-- All the burgers -->
    <section id="allTheBugers50s">
        <header>
            <h1>View all the fifties burgers</h1>
        </header>

        <section id="searchField">
            <form>
                <div><input type="text" name="search" value="search for a creator">
                <ul id="zoekresultaten">

                </ul></div>
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
                        <li> <a href=index.php?page=detail&decade={$burger.decade}&burgerId={$burger.id}>View details</a></li>
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