@extends("_includes.template")

@section("card")
    @component("components.card")
        @slot('title')
            @lang('Nouveau Post')
        @endslot

            <form action="/posts" method="POST" enctype="multipart/form-data">
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

                        <div class="form-group">
                            <label for="image">Ajouter une image</label>
                            <input type="file" class=" form-control-file " id="image" name="image">
                        </div>

                        <div class="form-group">
                            <img id="preview" class="img-fluid" src="#" alt="">
                        </div>

                    <hr>

                    <div class="form-group ">
                    <label for="title">Title</label>
                    <input id="title" class="form-control col-md-6 mx-auto" type="text" name="title" placeholder="title">
                    </div>
                    
                    <hr>
                  
                    <!-- the comment box -->
                    <div class="form-group">
                        <label for="content">Contenu</label>
                        <textarea id="content" class="form-control" name="content" rows="15"></textarea>
                    </div>
                    


                <button type="submit" class="btn btn-primary">Submit</button>    

            </form>

    @endcomponent
  
@endsection

@section('script')
    <script>
        $(() => {
            $('input[type="file"]').on('change', (e) => {
                let that = e.currentTarget
                if (that.files && that.files[0]) {
                    $(that).next('.custom-file-label').html(that.files[0].name)
                    let reader = new FileReader()
                    reader.onload = (e) => {
                        $('#preview').attr('src', e.target.result)
                    }
                    reader.readAsDataURL(that.files[0])
                }
            })
        })
    </script>
@endsection