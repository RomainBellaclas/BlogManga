@extends("_includes.template")

@section("card")
    @component("components.card")
        @slot('title')
            @lang('Nouveau Post')
        @endslot

            <form action="/posts" method="POST">
                <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
                <script>
                        tinymce.init({
                            selector: "textarea",
                            plugins: [
                                "advlist autolink lists link image charmap print preview anchor",
                                "searchreplace visualblocks code fullscreen",
                                "insertdatetime media table contextmenu paste"
                            ],
                            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                        });
                </script>

                {{ csrf_field() }}

                    <!--<form>
                        <div class="form-group">
                        <label for="exampleFormControlFile1">Ajouter une image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>-->

                    <hr>

                    <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" class="form-control" type="text" name="title" placeholder="title">
                    </div>
                    
                    <hr>
                  
                                  <!-- the comment box -->

                                      <label for="content">Contenu</label>
                                      <form role="form">
                                          <div class="form-group">
                                              <textarea id="content" class="form-control" rows="3"></textarea>
                                          </div>
                                      </form>


                <button type="submit" class="btn btn-primary">Submit</button>    

            </form>

    @endcomponent
  
@endsection