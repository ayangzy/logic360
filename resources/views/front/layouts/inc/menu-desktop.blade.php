<div class="row align-items-center">
    <div id="departments-menu" class="dropdown departments-menu">
        <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="tm tm-departments-thin"></i>
            <span>All Locations</span>
        </button>
        <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
            @foreach ($locations as $location)
            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">


                <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">
                    {{ $location->name }}
                    <span class="caret"></span></a>

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

    
    
    <!-- .departments-menu -->
    <form class="navbar-search" method="get" action="{{ route('market_product', ['id' => Crypt::encrypt($market->id)]) }}">
        <label class="sr-only screen-reader-text" for="search">Search for:</label>
        <div class="input-group">
            <input type="text" id="search" name="search" value="{{ request()->get('search') }}" class="form-control search-field product-search-field" dir="ltr"  placeholder="Enter market name to see available products" />
            <div class="input-group-addon search-categories popover-header">
                <select name='product_cat' id='product_cat' class='postform resizeselect'>
                    <option value='0' selected='selected'>All Categories</option>
                    @foreach ($categories as $category)
                    <option class="level-0" value="television">{{ $category->name }}</option>
                    @endforeach
                    

                </select>
            </div>
            <!-- .input-group-addon -->
            <div class="input-group-btn input-group-append">
                
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                    <span class="search-btn">Search</span>
                </button>
            </div>
            <!-- .input-group-btn -->
        </div>
        <!-- .input-group -->
    </form>
    <!-- .navbar-search -->
</div>