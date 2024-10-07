@extends('layout')


@section('content')

    <div class="content">
        <div class="container text-drag">
            <div class="row justify-content-center mt-3">
                <img src="../../images/artemis-and-the-animals/domestic-and-wild-animals.svg" class="img-fluid">
            </div>

            <div class="row mt-3">
                <div class="col">
                    <h4 class="text-center">Some domestic animals has been given rise by their ancestors "the wild ones".</h4>
                    <div id="imgMapContainer" class="mx-auto">
                        <img src="../../images/artemis-and-the-animals/artemis-002.png" usemap="#Map" alt="Domestic and wild animals" height=600 class="d-block rounded panel"/>
                        <div id="p03-1" class="text-center">Dog</div>
                        <div id="p03-2" class="text-center">Wolf</div>
                        <div id="p03-3" class="text-center">Bezoar</div>
                        <div id="p03-4" class="text-center">Goat</div>
                        <div id="p03-5" class="text-center">Domestic Cat</div>
                        <div id="p03-6" class="text-center">Wild Cat</div>
                    </div>
                    <h5 class="text-center">click on the animals to see their names</h5>
                </div>
            </div>

         
            <map name="Map" id="Map">
                <area id="p03-1" shape="rect" coords="0, 0, 400, 200" href="" onclick="doThis(this.id);return false;" />
                <area id="p03-2" shape="rect" coords="400, 0, 800,200" href="" onclick="doThis(this.id);return false;" />
                <area id="p03-3" shape="rect" coords="0, 200, 400, 400" href="" onclick="doThis(this.id);return false;" />
                <area id="p03-4" shape="rect" coords="400, 200, 800, 400" href="" onclick="doThis(this.id);return false;" />
                <area id="p03-5" shape="rect" coords="0, 400, 400, 600" href="" onclick="doThis(this.id);return false;" />
                <area id="p03-6" shape="rect" coords="400, 400, 800, 600" href="" onclick="doThis(this.id);return false;" />
            </map>
        
           

            <div class="row mt-2">
                <a class="btn btn-outline-dark mx-auto" href="04" role="button">next</a>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function doThis(str){
            document.getElementById(str).style.display='block';
        }

       
    </script>

    
    

 
@endsection




  
  


