<!--<form method="post" action="#">
    <div id="custom-search-input">
        <div class="input-group">
            <input type="text" class=" search-query" placeholder="Your Address or postal code">
            <span class="input-group-btn">
            <input type="submit" class="btn_search" value="submit">
            </span>
        </div>
    </div>
</form>-->
<?php

$this->renderPartial('/store/home/_advanced-search', 
        array(
                        
                'home_search_text'               => $home_search_text,
                'kr_search_adrress'              => $kr_search_adrress,
                'placholder_search'              => $placholder_search,
                'home_search_subtext'            => $home_search_subtext,
                'theme_search_merchant_name'     => getOptionA('theme_search_merchant_name'),
                'theme_search_street_name'       => getOptionA('theme_search_street_name'),
                'theme_search_cuisine'           => getOptionA('theme_search_cuisine'),
                'theme_search_foodname'          => getOptionA('theme_search_foodname'),
                'theme_search_merchant_address'  => getOptionA('theme_search_merchant_address'),
        ));
?>