<body>
    <div class="container">
        <div class="mt-4">
            <h1>{{__('words.Factura')}}</h1>
            @foreach($data["design"] as $product)
                <h4>{{__('words.Nombredeldiseño')}}: {{ $product->getName() }}</h4>
                <h5></h5>
                <h4>{{__('words.Precio')}}: {{ $product->getPrice() }}</h4>
                <h5></h5>
                <h4>{{__('words.Cantidad')}}: {{ Session::get('pdfData')[$product->getId()] }}</h4>
                <h5></h5>
                <h4>{{__('words.Subtotal')}}: {{ Session::get('subPrice')[$product->getId()] }}</h4>
                <h6>____________________________________________________________________</h6>
            @endforeach
            <h9>----------------------------------------------------------------------------------------</h9>
            <h9>----------------------------------------------------------------------------------------</h9>
            <h2>{{__('words.Total')}}: </h2>
        </div>
    </div>
</body>

