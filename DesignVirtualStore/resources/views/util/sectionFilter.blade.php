<div class="col-lg-3">
    <div class="filter-widget">
        <h4 class="fw-title"> {{__('words.AllCategories')}}</h4>
        <ul class="filter-catagories">
            @foreach($data["categories"] as $category)
            <li><a href="#"> {{ $category->getName() }} </a></li>
            @endforeach            
        </ul>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title"> {{__('words.Precio')}} </h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount">
                    <input type="text" id="maxamount">
                </div>
            </div>
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>
        <a href="#" class="filter-btn"> {{__('words.Filtrar')}} </a>
    </div>
</div>