
@extends("layouts.index_backend")
@section('product_backend')


<table class="table mt-5 w-75 container ">
    <thead align="middle">
        <tr>

            <th scope="col">ville</th>
            <th scope="col">Adresse</th>
            <th scope="col">Telephone</th>
            <th scope="col">Emploi</th>
            <th scope="col">Email</th>
            <th scope="col">Title</th>
            <th scope="col">Update</th>

        </tr>
    </thead>
    <tbody align="middle">
        @foreach ($infos as $info)
            <tr >
            <td>{{$info->ville}}</td>
            <td>{{$info->adrs}}</td>
            <td>{{$info->phone}}</td>
            <td>{{$info->emploi}}</td>
            <td>{{$info->email}}</td>
            <td>{{$info->title}}</td>
            <td>
                @foreach ($infos as $info)

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalaa">
                Modifiez les infos
                </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalaa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route("info.update",$info->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div>
                                    <label class="text-start" for="ville"> ville : </label>
                                    <input class="form-control" type="text" name="ville" id="ville" required value="{{old("ville",$info->ville)}}">
                                </div>
                                <div>
                                    <label class="text-start" for="adrs"> adrs : </label>
                                    <input class="form-control" type="text" name="adrs" id="adrs" required value="{{old("adrs",$info->adrs)}}">
                                </div>
                                <div>
                                    <label class="text-start" for="phone"> phone : </label>
                                    <input class="form-control" type="text" name="phone" id="phone" required value="{{old("phone",$info->phone)}}">
                                </div>
                                <div>
                                    <label class="text-start" for="emploi"> emploi : </label>
                                    <input class="form-control" type="text" name="emploi" id="emploi" required value="{{old("emploi",$info->emploi)}}">
                                </div>
                                <div>
                                    <label class="text-start" for="email"> email : </label>
                                    <input class="form-control" type="text" name="email" id="email" required value="{{old("email",$info->email)}}">
                                </div>
                                <div>
                                    <label class="text-start" for="title"> title : </label>
                                    <input class="form-control" type="title" name="title" id="title" required value="{{old("title",$info->title)}}">
                                </div>

                                <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                            </form>
                        </div>

                      </div>
                    </div>
                  </div>

                @endforeach

            </td>
            </tr>

        @endforeach
@endsection
