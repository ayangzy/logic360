<div class="techmarket-sticky-wrap">
    <div class="row">
        <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
            <button class="btn navbar-toggler" type="button">
                <i class="tm tm-departments-thin"></i>
                <span>Menu</span>
            </button>
            <div class="handheld-navigation-menu">
                <span class="tmhm-close">Close</span>
                <ul id="menu-departments-menu-1" class="nav">
                    @foreach ($locations as $location)
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                        <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#"> {{ $location->name }} <span class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                <div class="yamm-content">
                                   
                                    <!-- .bg-yamm-content -->
                                    <div class="row yamm-content-row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    @foreach ($location->markets as $market)
                                        <ul>

                                            <li><a href="{{ route('market_product', ['id' => Crypt::encrypt($market->id)]) }}">{{ $market->name }}</a></li>

                                            <li class="nav-divider"></li>

                                        </ul>
                                        @endforeach
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                       
                                    </div>
                                    <!-- .kc_row -->
                                </div>
                                <!-- .yamm-content -->
                            </li>
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- .handheld-navigation-menu -->
        </nav>
      
        <div class="site-search">
            <div class="widget woocommerce">
                <form role="search" method="get" class="woocommerce-product-search" action="{{ route('market_product', ['id' => Crypt::encrypt($market->id)]) }}">
                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                    <div class="input-group">
                        <input type="text" class="form-control input-text" placeholder="Enter market name to see available products" value="{{ request()->get('search') }}" name="search">
                    <input type="submit" value="Search" />
                    </div>
                </form>
            </div>
            <!-- .widget -->
        </div>

    </div>
    <!-- /.row -->
</div>