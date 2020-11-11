<div class="col-lg-3">
    <div class="filter-widget">
        <h4 class="fw-title"> {{__('words.AllCategories')}}</h4>
        <ul class="filter-catagories">
            @foreach($data["categories"] as $category)
            <li><a href="{{route('design.show', ['cat' => $category->getName(), app()->getLocale()] )}}"> {{ $category->getName() }} </a></li>
            @endforeach            
        </ul>
    </div>
</div>