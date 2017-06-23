<div class="form-group">
    {!! Form::label('title', 'Title *',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::text('title', @$Article->title,['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('subtitle', 'Subtitle *',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::text('subtitle', @$Article->subtitle,['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('htmlcontent', 'Html content *',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {{Form::textarea('htmlcontent',@$Article->htmlcontent,array('class' => 'form-control summernote', 'required', 'placeholder'=>'Htmlcontent'))}}
    </div>
</div>

<div class="form-group">
    {!! Form::label('excerpt', 'Excerpt (150 chars) *',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::text('excerpt', @$Article->excerpt,['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('htmlquote', 'Html quote',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {{Form::textarea('htmlquote',@$Article->htmlquote,array('class' => 'form-control summernote', 'placeholder'=>'Htmlquote'))}}
    </div>
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Published at',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::text('published_at', @$Article->published_at ? $Article->published_at->format('d/m/Y h:i A') : '',['class' => 'form-control single_cal3', 'data-timepicker' => 'true','data-format' => 'DD/MM/YYYY hh:mm A']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('expired_at', 'Expired at',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::text('expired_at', @$Article->expired_at ? $Article->expired_at->format('d/m/Y h:i A') : '',['class' => 'form-control single_cal3', 'data-timepicker' => 'true','data-format' => 'DD/MM/YYYY hh:mm A']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('author_id', 'Author *',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::select('author_id', $Authors, @$Article->author_id, ['class' => 'form-control', 'required', 'placeholder' => 'Select']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('imageurl', 'Image (1920x1080 min)',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::file('imageurl', ['accept' => 'image/*']) !!}
        {!! Form::hidden('removeimageurl', 0, ['id' => 'removeimageurl'])!!}

        @if($Article->exists && $Article->imageurl)
            <br /><img src="{{ $Article->imageurl }}" class="img-responsive" id="currentimage" width="250"/>
            <button class="btn-danger btn" id="removeimageurlbtn">Remove </button>
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::label('videourl', 'Video Id',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::text('videourl', @$Article->videourl,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('article_tags', 'Tags *',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::select('article_tags[]', $TagsIOSource, @$ArticleTags, ['class' => 'form-control', 'multiple', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('seo_title', 'Seo & Social Title',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::text('seo_title', @$Article->seo_title,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('seo_description', 'Seo & Social Description',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::textarea('seo_description', @$Article->seo_description,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('seo_imageurl', 'Seo & Social Image',['class' => 'control-label col-md-2 col-sm-3 col-xs-12'])!!}
    <div class="col-md-10 col-sm-9 col-xs-12">
        {!! Form::file('seo_imageurl', ['accept' => 'image/*']) !!}
        {!! Form::hidden('removeseo_imageurl', 0, ['id' => 'removeseo_imageurl']) !!}

        @if($Article->exists && $Article->seo_imageurl)
            <br /><img src="{{ $Article->seo_imageurl }}" class="img-responsive" id="currentseo_image" width="250"/>
            <button class="btn-danger btn" id="removeseo_imageurlbtn">Remove </button>
        @endif
    </div>
</div>

<!--Bottom Buttons -->
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-10 col-sm-9 col-xs-12 col-md-offset-3">
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>

@section('scripts')
    @parent
    <!-- Summernote-->
    <link href="{!!asset('/css/summernote.css')!!}" rel="stylesheet">
    <script src="{!!asset('/js/summernote.js')!!}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('select[name="author_id"]').select2();

            $('select[name^="article_tags"]').select2({
                tags: true,
                tokenSeparators: [',']
            });

            $('.summernote').summernote({
                height: 300,
            });

            $('#removeimageurlbtn').click(function () {
                $('#removeimageurl').val(1);
                $('#currentimage').remove();
                $('#removeimageurlbtn').remove();

                return false;
            });

            $('#removeseo_imageurlbtn').click(function () {
                $('#removeseo_imageurl').val(1);
                $('#currentseo_image').remove();
                $('#removeseo_imageurlbtn').remove();

                return false;
            });
        });
    </script>
@stop