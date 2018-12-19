
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get2Nepal</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="uk-card uk-card-default ">
   <div class=" uk-navbar-container uk-remove-padding uk-remove-margin" id="nav-wrapper"> 
   <div uk-sticky="  cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
        <nav class="uk-navbar-container parent" uk-navbar style="position: relative; z-index: 980;"  id="navbar">      
           <div class="uk-navbar-left "> 
           
           <span class="">@include('frontend.svg.logo',['style' =>'height: 90px;width: 180px;'])</span> <a class="uk-navbar-toggle uk-hidden@l" href="#" uk-toggle="target: #offcanvas-nav">
             </a>
            </div>
            <div class="uk-navbar-right">
                 <span class="uk-hidden@l uk-hidden@m" uk-toggle="target: #offcanvas-nav" uk-navbar-toggle-icon></span>
                <ul id="menu1" class="uk-navbar-nav">
                    <li class="uk-active scroll-link"><a href="/">Home</a></li>
                </ul>
            </div>
        </nav>
    </div>
    </div>
</div>


<div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="min-height: 400; max-height: 800; animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                <img src="https://source.unsplash.com/1024x768/?momo" class="scroll-link" alt="" uk-cover>
            </div>
            <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
            <div class="uk-position-center uk-position-medium uk-text-center">
                <div uk-slideshow-parallax="scale: 1,1,0.8">
                    <h2 uk-slideshow-parallax="x: 200,0,0">Heading</h2>
                    <p uk-slideshow-parallax="x: 400,0,0;">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </li>
        <li>
           <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                <img src="https://source.unsplash.com/1024x768/?pizza" class="scroll-link" alt="" uk-cover>
            </div>
            <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
            <div class="uk-position-center uk-position-medium uk-text-center">
                <div uk-slideshow-parallax="scale: 1,1,0.8">
                    <h2 uk-slideshow-parallax="x: 200,0,0">Heading</h2>
                    <p uk-slideshow-parallax="x: 400,0,0;">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </li>
        <li>
            <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                <img src="https://source.unsplash.com/1024x768/?chicken" class="scroll-link" alt="" uk-cover>
            </div>
            <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
            <div class="uk-position-center uk-position-medium uk-text-center">
                <div uk-slideshow-parallax="scale: 1,1,0.8">
                    <h2 uk-slideshow-parallax="x: 200,0,0">Heading</h2>
                    <p uk-slideshow-parallax="x: 400,0,0;">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
  <a id="section04" class="ghost"><span></span>Scroll</a>
</div>
<div id="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quasi, distinctio nostrum porro adipisci aliquid architecto omnis, repudiandae consequuntur. Veniam ratione facilis ullam, vitae ipsam saepe possimus. Quo necessitatibus porro praesentium earum nesciunt, ratione quidem adipisci esse eos placeat dolorem est nulla asperiores hic labore non, voluptatem soluta, unde aliquam modi. Repudiandae ipsa, quae iure facere laborum ad a blanditiis rerum eligendi iste voluptatum omnis commodi nihil, provident eaque eveniet dolorum aut magni nam! Quia sapiente consequuntur enim quasi. Excepturi in sunt perferendis quam repellendus animi sit quidem aspernatur sed ipsum. Quam illum nihil ipsum impedit doloribus culpa unde, deleniti similique et obcaecati, a dolorum! Hic sed quam tempora autem accusamus sapiente ullam sequi expedita similique, provident itaque. Quibusdam blanditiis eum earum praesentium accusamus amet laboriosam dolorem. Eveniet consectetur, placeat quos non veniam sunt vitae distinctio eligendi porro. Quidem quisquam, architecto earum vitae inventore maiores voluptatem. Magnam eum vitae ducimus aspernatur doloribus. Optio itaque accusantium et, tempora mollitia est ex blanditiis eligendi sequi. Harum mollitia sit, ab dolorum inventore blanditiis praesentium dolorem a voluptatum earum impedit qui explicabo ipsam sint! Quae dolor optio explicabo, dolores quia ipsam maiores, nobis facere necessitatibus excepturi velit, perspiciatis in! Quia alias repudiandae, ea adipisci nisi facere quaerat nam eligendi illum accusantium architecto, velit iusto natus ducimus aspernatur voluptates excepturi, autem reiciendis esse! Laborum, accusamus! Nesciunt quasi, pariatur, officiis suscipit assumenda nulla non vitae veritatis atque perspiciatis explicabo. Dignissimos nam dicta, quod aperiam ut tenetur quia consequuntur ipsum dolores iure? Error dignissimos corporis commodi natus quisquam molestias aut, alias ex optio quis minima, saepe deserunt dolorum voluptatibus asperiores quo possimus totam quod dolores, ipsam ratione excepturi ut. Blanditiis pariatur, illum repudiandae similique ullam voluptates, facilis, voluptate quibusdam consequuntur eaque laborum esse corporis dignissimos tempora vel perferendis. Earum iure quod at maiores sequi, quaerat magnam iste sit sint! Iste perspiciatis cum repudiandae aliquid, maxime delectus fuga tempore cupiditate quibusdam rem voluptates repellendus reprehenderit obcaecati, illum minus non quae modi! Mollitia voluptatibus fugit iure porro fuga, impedit temporibus ab, dolore inventore. Facere, natus laudantium? Earum nulla cumque voluptates iure sint, repudiandae a consequuntur magnam delectus officiis magni. Necessitatibus quaerat enim, sit dolore libero quibusdam molestias explicabo, facere iusto qui ut voluptatem aspernatur harum magni non, velit laboriosam nihil perferendis debitis officia voluptate in reiciendis quae unde. Obcaecati officia corporis suscipit nesciunt quibusdam soluta facilis, amet earum vel, itaque dicta deleniti molestias temporibus consequatur voluptatum dolorum totam quod quasi nulla blanditiis repellat error culpa eaque? Nihil cupiditate minima neque eaque cum sed quia eveniet sit numquam ex id, beatae, adipisci maxime nemo? Accusamus numquam iste provident omnis quaerat dolores facere, quia pariatur optio soluta dolorem id, autem odio rem! Modi ipsum, deleniti sunt ratione distinctio nihil quod fuga natus sed, enim id obcaecati magni assumenda aliquid. Repellat iste pariatur similique consequuntur totam architecto tempore nisi cum asperiores quidem autem eveniet quia, impedit facere eaque doloremque harum, magni quisquam ducimus ab aliquid obcaecati sit, libero tenetur. Sunt deleniti dignissimos officiis quasi minus magnam esse repudiandae, quia nobis, illo dolorum odio at harum tempora illum qui rerum voluptatem! Numquam velit amet, adipisci nulla quaerat, nostrum sapiente sit eaque, vitae natus accusantium aperiam assumenda voluptate doloremque. Minima ad minus, repudiandae rem optio harum ullam aliquid possimus nobis labore hic laborum error modi eligendi alias inventore dolores, sunt! Quae autem totam nam cupiditate nostrum quibusdam, perferendis culpa, corporis fuga ex libero eligendi voluptatem. Quia nisi labore soluta error, numquam libero consequuntur aperiam veniam ad dolor similique facilis incidunt, quod voluptate illum sed possimus odit porro reiciendis voluptas! Similique culpa, iusto. Modi magni nesciunt natus laboriosam numquam, atque tempore error ratione iure maxime. Pariatur necessitatibus accusamus quaerat labore rerum ad quidem at ipsa, veritatis harum ut, quia animi, iusto! Delectus labore id pariatur, qui vero ad, quaerat suscipit unde porro deleniti repellendus soluta odio, similique. Maxime hic doloribus molestiae eveniet in odio voluptas! Ipsum illo commodi magni dignissimos omnis eum ea, rerum quibusdam iusto enim in facilis voluptatem. Officiis provident nihil qui facere perspiciatis accusamus mollitia eum, consequuntur, illum in ipsa, voluptatibus obcaecati similique facilis cupiditate saepe repudiandae ipsam autem numquam nam animi? Suscipit sequi esse explicabo eius magnam sed fuga dolorum alias obcaecati, eaque atque similique architecto temporibus nobis totam itaque. Libero, odit laudantium dolores alias enim ut non eum aspernatur, ad repudiandae dignissimos sit in vero obcaecati et iure possimus quas id eius illum, ipsam ratione, tempore commodi voluptatibus reprehenderit? Voluptatem, illo, cupiditate consectetur facilis quae optio aut ex exercitationem natus provident tempora aliquid tempore facere magnam, nesciunt doloribus quidem, totam incidunt nobis ipsum. Cumque numquam, eum! Repellat velit totam consequuntur inventore quas, est veniam unde ipsam consectetur ab hic vitae, quibusdam ratione explicabo nam, esse ullam, vero. Ducimus pariatur neque earum reiciendis sequi nesciunt ipsa minima beatae, reprehenderit dolorem eveniet quam commodi nihil laboriosam! Sed mollitia animi qui, cupiditate rem nam praesentium id voluptatem necessitatibus asperiores perferendis incidunt ut numquam, soluta nisi et! Odio molestiae neque cumque, illum fugit ratione laboriosam earum quod consequatur. Dolore porro amet ex sequi error rerum eaque accusamus non. Delectus maxime, quasi consectetur eaque veritatis eligendi temporibus rerum atque alias quae, distinctio, quam, laudantium. Ullam cum repellendus distinctio, voluptatem dolore molestias totam vel numquam libero blanditiis tempora minima, fuga deserunt! Quos, saepe quo nostrum! Quo minus, asperiores, suscipit voluptatum delectus nihil consectetur perferendis, temporibus ratione modi cupiditate possimus voluptas, molestias dolore odio iste quos. Deleniti eaque laborum nam harum cum ratione, a exercitationem, natus. Omnis perspiciatis ea assumenda velit esse, aliquid repellat magnam accusamus et obcaecati in at, incidunt unde ut ratione excepturi eum debitis illo ipsum beatae sit dicta, dignissimos a perferendis quas. Officia impedit ratione blanditiis beatae, quas minima iste distinctio, doloribus, aspernatur quis corporis sequi quos quibusdam dolorum dolorem. Nisi ut quae aspernatur nobis perferendis veritatis, quod necessitatibus provident dolorum fuga nesciunt assumenda! Eius, autem ab natus aut vitae maxime porro dolorem voluptate labore obcaecati atque, facere earum. Possimus sequi aliquid quidem eaque praesentium impedit officia maiores debitis consequatur cumque. Debitis saepe aspernatur unde et dolore quia quo nostrum assumenda reprehenderit alias rem molestias inventore nihil quibusdam, odio culpa, quas, amet deleniti? Nulla aut iusto aliquid voluptates a quidem nobis neque, consequatur voluptatibus cupiditate soluta velit distinctio, asperiores beatae? Ad id quasi explicabo nesciunt non, minima, accusantium facilis, totam tempora quam necessitatibus odit consequatur cumque est. Aliquam ratione iusto ipsum voluptates, sapiente consectetur sunt molestiae, incidunt, ea architecto magni omnis quibusdam esse enim molestias aspernatur soluta labore deleniti ut harum corporis et perferendis. Dolor pariatur nihil eaque ab iusto voluptatem, veniam neque, error eveniet similique debitis molestiae dolorum obcaecati enim, quidem nobis porro. Error suscipit reprehenderit iure et unde eaque eius sapiente ipsum, dignissimos temporibus tempora minus facere quos numquam, repudiandae ullam. Dicta cumque ratione similique quis ipsum molestias ipsa nihil. Accusamus iure neque eveniet ab adipisci sequi, quos magni unde nulla facilis reiciendis reprehenderit possimus quisquam consectetur sunt tempora doloribus, assumenda! Blanditiis dignissimos, sapiente quasi, aliquid laborum eaque impedit? A eius ipsa iusto ullam tenetur maxime aliquid, consequatur nesciunt tempore aperiam eligendi labore quisquam. Ipsa nam, quas architecto voluptatem, unde in non, dolorum dolor doloremque impedit sit consequatur iusto recusandae! Id iure ex cumque temporibus ipsam commodi sed quisquam nesciunt, quas officiis maxime expedita voluptate a, praesentium veniam at libero harum dolore, sunt, perspiciatis unde et nemo placeat! Asperiores, voluptatibus nam iusto? Pariatur distinctio possimus fuga, alias laudantium cupiditate ratione exercitationem ab magni consequatur. A optio eius quam accusamus ad id dicta, sapiente enim reiciendis!</div>
  <section class="animation-box">
 
    <div class="second-text">This is another example text</div>

  </section>


</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{asset('js/app.js')}}">   </script>
@yield('scripts')
</html>
