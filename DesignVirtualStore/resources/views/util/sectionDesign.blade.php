<div class="col-lg-4 col-sm-6">
    <div class="product-item">
        <div class="pi-pic">
            <img src="{{ asset('/img/designs/'.$design->getImage()) }}" width="400" height="300">
            <!--<div class="sale pp-sale">Sale</div> -->
            <div class="icon">
                <i class="icon_heart_alt"></i>
            </div>
            <ul>
                <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                <li class="quick-view"><a href="{{ route('design.showDesign', ['language'=>app()->getLocale(),'id'=>$design->getId()]) }}"> + Ver </a></li>
                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
            </ul>
        </div>
        <div class="pi-text">
            <div class="catagory-name"> {{ $design->getCategoryId() }} </div>
            <a href="{{ route('design.showDesign', [ 'language'=>app()->getLocale(),'id'=>$design->getId()]) }}">
                <h5> {{ $design->getName() }}</h5>
            </a>
            <div class="product-price">
                {{ $design->getPrice() }}
                <span> {{ $design->getPrice() }} </span>
            </div>
        </div>
    </div>
</div>