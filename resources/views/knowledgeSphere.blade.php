@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')

<section class="knowledgeMain">
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-3 bg-warning {{-- circleKnowledgeForm --}}">
            <div class="textfieldKnowledge">CREATEBLOG</div>
        </div>
        
        <div class="col-sm-8 bg-danger {{-- circleKnowledge --}} mx-2">
            <div class="textfieldKnowledge">
                <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>

    </div>
</div>
</section>



@endsection