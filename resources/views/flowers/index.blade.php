@extends('app')

@section('content')

    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Flowers</h1>
                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <div class="product-section section mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0 mt-5">
        <div class="container">

            <div class="row justify-content-end">
                <div class="col-">
                    <select id="occasion-filter" name="occasion" class="form-control">
                        <option value="">Occasion</option>
                        @foreach($occasions as $occasion)
                            <option value="{{$occasion->id}}" @if(request()->input('occasion') == $occasion->id) selected @endif>{{$occasion->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                @foreach($flowers as $flower)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="{{asset('storage/flowers/' . $flower->image)}}" alt="{{$flower->name}}">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button onclick="orderFlower({{$flower->id}})">Order</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title">{{$flower->name}}</h4>

                                        <h5>{{$flower->branch->name}} - {{$flower->occasion->name}}</h5>

                                        <div style="width: 50px; white-space: nowrap">
                                            {{$flower->description}}
                                        </div>
                                    </div>

                                    <div class="content-right">
                                        <span class="price">${{$flower->price}}</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </div><!-- Product Section End -->
@endsection

@section('scripts')
    <script>
        function orderFlower(flowerId){
            let baseUrl = $('#base-url').attr('href');
            window.location.href = `${baseUrl}/flowers/${flowerId}/order`;
        }
        $('#occasion-filter').change(function(){
            let baseUrl = $('#base-url').attr('href');
            window.location.href = `${baseUrl}?occasion=${$(this).val()}`;
        });
    </script>
@endsection