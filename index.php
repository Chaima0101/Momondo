<?php
require_once __DIR__. "/components/comp_header.php";
?>

<div class="page">
    <h1> <?= $dictionary[$language.'_index_h1']  ?> </h1>

    <div id="flights-search">
        <form>
            <div class="flights-container">


                <div id="from-container">
                    <input id="from-input" type="text" placeholder="from"
                           oninput="show_from_results()"
                           onblur="hide_from_results()"
                    >

                    <div id="from-results">

                    </div>
                </div>


                <div id="to-container">
                    <input id="to-input" type="text" placeholder="To"
                           oninput="show_to_results()"
                           onblur="hide_to_results()"
                    >

                    <div id="to-results">

                    </div>


                </div>
            </div>
        </form>
    </div>
</div>

<?php
require_once __DIR__. "/components/comp_footer.php";
?>