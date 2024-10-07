@extends('layout')


@section('content')

    <div class="content">
        <div class="container text-drag">
            <div class="row mt-3">
                <div class="col">
                    <p class="text-center">Supply each sentence with one of the following missing words: in, on, of, from</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="../../images/message-in-a-bottle/lesson-page-4-2.jpg" class="img-fluid mx-auto d-block panel">
                </div>
            </div>

     
            <div class="row justify-content-center mt-4">
                <p>He draws lots of money</p>

                <select class="mr-2 ml-2" id="question">
                    <option selected>Choose...</option>
                    <option value="1">in</option>
                    <option value="2">on</option>
                    <option value="3">of</option>
                    <option value="4">from</option>
                </select>


                <p>the bank.</p>
            </div>

            <div class="row mt-2">
                <a class="btn btn-outline-dark mx-auto" href="10" role="button">next</a>
            </div>
        </div>
    </div>




@endsection
