
@extends('layouts.frontend')
@section('content')
<section class="uk-container-expand about" uk-grid>
	<div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover uk-background-fixed" data-src="{{ asset($category->path) }}" uk-img>
		<h1 class="page-heading uk-margin-large-left">{{ $category->name }}</h1>
		<h3 class="page-subheading uk-margin-large-left uk-margin-top uk-margin-bottom">{{ $category->description }}</h3>
		<div class="breadcrumb ">
			<ul class="uk-breadcrumb" id="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="uk-disabled"><a href="{{url()->current()}}">{{ ucfirst($category->name) }}</li>
				</ul>
			</div>
		</div>
	</section>
	<div class="uk-section uk-section-small uk-section-default">
		<div class="uk-container">
			<div class="text-align-left uk-margin-medium-top" uk-grid>
				<div class="uk-width-1-1@m" >
					<div class="uk-child-width-1-3@m" uk-grid>

				</div>

			</div>
		</div>

	</div>
</div>
<div class="uk-container">
	<div class=" uk-grid-match uk-grid-small uk-text-center" uk-grid>
	    <div class="uk-width-1-2@s">
	       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati debitis, assumenda voluptate, velit quas impedit fugit, nisi odio dolor dolore incidunt dolorem nobis dolorum error laudantium perspiciatis necessitatibus dignissimos in quia! Ullam libero excepturi sapiente cum quos dolor porro minus mollitia asperiores hic placeat alias nobis nemo pariatur quasi similique minima, blanditiis non a accusamus architecto, omnis cupiditate! Sint consequuntur, repellat soluta suscipit molestiae fuga inventore laudantium id temporibus beatae cum dignissimos ipsa necessitatibus quasi accusamus neque reiciendis ratione voluptates. Facilis enim reiciendis porro ullam ea voluptates quae consequatur, voluptatem distinctio excepturi molestiae iste officiis est soluta molestias at rerum minus sit, animi rem perspiciatis asperiores obcaecati voluptatum ab. Sunt est omnis nostrum cum enim eveniet quia, vel dolorum cupiditate! Aspernatur, sed, quae.</p>
	    </div>
	    <div class="uk-width-1-2@s">
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat possimus quasi, voluptas, distinctio commodi omnis maxime voluptate sed quo rerum natus nisi debitis doloribus rem repudiandae at nemo corporis perferendis itaque. Itaque odit debitis illum. Nostrum necessitatibus, aliquid, nobis velit optio iste molestias, dignissimos in veniam nihil beatae dolor quas magnam soluta eos maiores perferendis rerum reprehenderit provident nulla odio, ducimus. Reiciendis quod officia omnis, fuga perspiciatis suscipit, corporis, nesciunt mollitia nobis repellendus excepturi alias aspernatur animi. Facilis minima impedit saepe, fuga veritatis nobis earum est commodi, itaque quod recusandae nesciunt aliquam officiis deleniti culpa id inventore error at et dolorem eveniet tempore laudantium libero rem! Voluptas, ad et delectus! Dolores alias minus asperiores ullam, earum quod veritatis, quasi. Inventore quidem, ut dicta.</p>
	    </div>
	</div>
</div>
@stop