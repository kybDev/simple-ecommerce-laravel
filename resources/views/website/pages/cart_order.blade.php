@extends('website.layouts.index')
@section('title', 'Homepage')
@section('body')
    <div class="py-5">
        <div class="container"> 
          <div class="row">
              
            <table>

                @foreach ([1,2, 3, 4, 5] as $item)
                    <tr class="cart-order" style="border-bottom: 2px solid #000">
                        <td style="width: 300px"><img src="http://127.0.0.1:8000/storage/product/18481_1620345600.jpg" class="img-thumbnail" width="50%"></td>
                        <td>
                            <input type="hidden" name="price" value="9999">
                            P 9999
                        </td>
                        <td>
                            <input type="hidden" name="price" value="1">
                            <h3><span>1</span> pcs</h3>
                        </td>

                        <td>
                            <button id="plus">+</button>
                            <button id="minus">-</button>
                        </td>

                        <td>
                            <h3>9999</h3>
                        </td>
                        <td>
                            DELETE
                        </td>
                    </tr>
                @endforeach
                
            </table>

            <script>
                $('.cart-orde').find('.plus').on('click', function(){
                    console.log("test");
                });
            </script>
           
          </div>
        </div>
    </div>
@endsection