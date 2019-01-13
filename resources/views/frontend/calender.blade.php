@extends('layouts.frontend') @section('content')
<section class="uk-container-expand">
    <div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="https://source.unsplash.com/1200x800/?calender" uk-img>
        <h1 class="main-heading">Event Calender</h1>
        <div class="breadcrumb ">
            <ul class="uk-breadcrumb  " id="breadcrumb">
                <li>
                    <a href="/" uk-icon="icon: home"></a>
                </li>
                <li class="uk-disabled"><a href="{{url()->current()}}">What's on</a></li>
            </ul>
        </div>
    </div>
</section>

<div id="responsiveTabsDemo" class="r-tabs ">
    <ul class="r-tabs-nav">
        <li class="r-tabs-tab"><a href="#all" class="r-tabs-anchor"> All </a></li>
        @for($i=1;$i<=12;$i++)
        <li class="r-tabs-tab"><a href="#{{ date('M', mktime(0, 0, 0, $i, 1)) }}" class="r-tabs-anchor"> {{ date('F', mktime(0, 0, 0, $i, 1)) }} </a></li>
        @endfor
    </ul>
    <div id="all" class="r-tabs-accordion-title r-tabs-tab">
        <div class="uk-container uk-container-small">
            @for($i=1;$i
            <=2; $i++) <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
                <div class="uk-card-media-left  article-body">
                    <img src="https://source.unsplash.com/1200x800/?holi" alt="">

                </div>

                <div class="uk-card-body article-inner">
                    <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
                    <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
                        <li><span>color festival</span></li>
                    </ul>

                    <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
                </div>

        </div>
        @endfor
    </div>
</div>
<div id="jan" class="r-tabs-accordion-title r-tabs-tab">
    <h3>jan</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quia tempora laborum, ducimus sequi voluptas, debitis quis a praesentium architecto! Esse, aliquam, cum. Ducimus quis cum inventore similique voluptatem perferendis maiores, iure accusamus consequatur.
    </p>
</div>

<div id="feb" class="r-tabs-tab">
    <h3>feb</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dicta cupiditate qui animi, mollitia porro expedita voluptatum neque eius reprehenderit vero explicabo, non beatae cum? Atque dolorem sint earum saepe odio. Quia laudantium, ipsa.
    </p>
</div>

<div id="march" class="r-tabs-tab">
    <h3>march</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cumque est, illum, et voluptatum provident ab velit voluptate laboriosam aliquid id perferendis. Cupiditate nulla mollitia alias tempore, similique libero hic? Est distinctio sed, sit!
    </p>
</div>
<div id="april" class="r-tabs-tab">
    <h3>april</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est amet animi illo blanditiis ratione vero doloremque consectetur, vel quo alias corrupti aut! Natus animi, atque facere non error qui, consequatur quidem enim fugiat!
    </p>
</div>

<div id="may" class="r-tabs-tab">
    <h3>may</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias repellat unde ab a. Ad possimus impedit explicabo, provident dolor animi cumque maxime dolores sunt beatae dolore mollitia sint facere eaque recusandae, eveniet, perspiciatis sequi.
    </p>
</div>

<div id="june" class="r-tabs-tab">
    <h3>june</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro deleniti numquam quos? Maxime unde ut debitis, praesentium laboriosam minima, voluptates esse tenetur. Soluta vitae ad harum architecto optio odio, nulla magni facere rem perspiciatis.
    </p>
</div>
<div id="july" class="r-tabs-tab">
    <h3>july</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eaque, veniam optio tempore possimus aut, sapiente unde nostrum ab ad quaerat autem. Consectetur dolorum cupiditate quas et consequuntur id architecto totam iusto, eaque dolorem.
    </p>
</div>

<div id="aug" class="r-tabs-tab">
    <h3>august</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex qui natus officiis quos repudiandae ab voluptas ipsum reprehenderit eum est distinctio excepturi ducimus, hic fugiat vero cumque laudantium doloremque iusto totam ipsam nihil! Quaerat!
    </p>
</div>

<div id="sep" class="r-tabs-tab">
    <h3>sep</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt similique placeat ipsam esse aliquid, impedit magnam quasi, quam vel nihil optio ipsa qui hic reprehenderit, dolores, tempore perspiciatis veniam ab mollitia. Odio, nulla vitae.
    </p>
</div>
<div id="oct" class="r-tabs-tab">
    <h3>oct</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, quasi sint dicta consequatur iusto quia alias, nesciunt doloremque perspiciatis ullam ut illum dolore sunt, magni laborum, cupiditate omnis veritatis aut dolorem voluptatum? Asperiores, voluptas.
    </p>
</div>

<div id="nov" class="r-tabs-tab">
    <h3>nov</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur possimus dolores, dolorem itaque ullam veritatis placeat, laudantium quisquam, accusamus nemo ipsam consequuntur quia earum aliquam dolor. Quam accusamus, neque repellendus autem aspernatur, ipsum molestias.
    </p>
</div>

<div id="dec" class="r-tabs-tab">
    <h3>dec</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi amet velit possimus error sunt cupiditate, repudiandae excepturi similique, ipsam asperiores. Neque veritatis repellat sapiente magni debitis, sequi ducimus cum possimus facere repellendus commodi!
    </p>
</div>
</div>

@stop @section('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/responsive-tabs@1.6.3/css/responsive-tabs.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/responsive-tabs@1.6.1/js/jquery.responsiveTabs.min.js"></script>
<script>
    $('#responsiveTabsDemo').responsiveTabs({
        startCollapsed: 'accordion'
    });
</script>
@stop