
@extends('main')

@section('content') 
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Jenn's Blog</h1>
                <p class="lead">Thank you for visiting. This is my test website built with Laravel, Please read my latest post! </p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
            </div>
        </div> 
    </div>                 <!-- end of header row -->
        
<!-- end of header container -->


<div class="row">
    <div class="col-md-8">
        <div class="post">
            <h3>Post Title</h3> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolorum voluptatibus, fugiat sit, ipsam incidunt mollitia repellat suscipit quam similique amet quas eligendi eum rem molestias tempora ducimus qui. Repellendus.</p> 
            <a href="#" class="btn btn-primary">Read more</a>
        </div>

        <hr>
        
        <div class="post">
            <h3>Post Title</h3> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolorum voluptatibus, fugiat sit, ipsam incidunt mollitia repellat suscipit quam similique amet quas eligendi eum rem molestias tempora ducimus qui. Repellendus.</p> 
            <a href="#" class="btn btn-primary">Read more</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolorum voluptatibus, fugiat sit, ipsam incidunt mollitia repellat suscipit quam similique amet quas eligendi eum rem molestias tempora ducimus qui. Repellendus.</p> 
            <a href="#" class="btn btn-primary">Read more</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolorum voluptatibus, fugiat sit, ipsam incidunt mollitia repellat suscipit quam similique amet quas eligendi eum rem molestias tempora ducimus qui. Repellendus.</p> 
            <a href="#" class="btn btn-primary">Read more</a>
        </div>

    </div>

    <div class="col-md-3 col-md-offset-1">Sidebar</div>

</div>
    
@endsection


