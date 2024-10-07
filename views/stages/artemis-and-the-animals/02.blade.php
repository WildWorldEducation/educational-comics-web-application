@extends('layout')


@section('content')


    <div class="content">
        <div class="container text-drag">
            <div class="row justify-content-center mt-3">
                <img src="../../images/artemis-and-the-animals/domestic-and-wild-animals.svg" class="img-fluid">
            </div>

            <div class="row mt-3">
                <div class="col">
                    <div id="imgMapContainer" class="mx-auto">
                        <img src="../../images/artemis-and-the-animals/artemis-001.png" usemap="#Map" height=600 class="mx-auto d-block rounded panel">
                        <div id="p02-1" class="text-center">A cat is a domestic feline</div>
                        <div id="p02-2" class="text-center">A leopard is a wild cat</div>
                        <div id="p02-3" class="text-center"><p>Domestic animals live close to us, either in a house or farms.</p> Wild animals live in the wild nature, and they are able to survive on their own.</div>
                    </div>
                    <h5 class="text-center">click on the animals to see their names</h5>
                </div>
            </div>
          
            <map name="Map" id="Map">
                <area id="p02-1" shape="rect" coords="0, 0, 400, 200" href="" onclick="doThis(this.id);return false;" />
                <area id="p02-2" shape="rect" coords="400, 0, 800,200" href="" onclick="doThis(this.id);return false;" />
                <area id="p02-3" shape="rect" coords="300, 170, 400, 500" href="" onclick="doThis(this.id);return false;" />
              
            </map>
   
            <div class="row mt-2">
                <a class="btn btn-outline-dark mx-auto" href="03" role="button">next</a>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function doThis(str){
            document.getElementById(str).style.display='block';
        }

       
    </script>
 
@endsection