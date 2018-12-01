@extends("_includes.template")

@section("card")
    @component("components.card")
        @slot('title')
            @lang('Connexion')
        @endslot

            <form action="/users/login" method="POST">

                {{ csrf_field() }}

                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input id="mail" class="form-control" type="email" name="mail" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>    

            </form>

    @endcomponent
  
@endsection