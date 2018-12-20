<div class="uk-section uk-section-small uk-section-default uk-margin-medium-top uk-margin-mediumm-bottom bgcolor-wrapper">
  <div class="uk-container">
    <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
        <div>
            <h2 class=" uk-text-center  uk-text-center uk-margin-mediumm-bottom"><span>Review</span></h2>
            @for($c=1; $c<=3; $c++) 
            <div class="uk-text-left uk-margin-medium-top" uk-grid>
                <div class="uk-width-1-4">
                   <img src="https://source.unsplash.com/150x150/?face" alt="" >
               </div>
               <div class="uk-width-3-4">
                    <span style="font-weight:bold">Title</span>
                    <p class="review-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                   
                    <i class="fas fa-flag"></i>
                    <span style="font-weight:bold">CLient name</span>
                   
                </div>
            </div> 
            @endfor 
                
</div>

<div>
   <h2 class=" uk-text-center  uk-text-center"><span>Follow</span></h2> 
        <table class="uk-table uk-table-divider uk-table-table-bordered uk-margin-medium-top">
            <tbody>
                <tr>
                    <td><a href="" uk-icon="folder"></a></td>
                    <td>
                        <li>Title</li>
                        <li>First Line</li>
                        <li>Second Line</li>
                    </td>

                    <td><a href="" uk-icon="star"  style="color:blue"></a></td>
                </tr>
                <tr>
                    <td><a href="" uk-icon="folder"></a></td>
                    <td>
                        <li>Title</li>
                        <li>First Line</li>
                        <li>Second Line</li>
                    </td>
                    <td><a href="" uk-icon="star"  style="color:blue";></a></td>
                </tr>

                <tr>
                    <td><a href="" uk-icon="folder"></a></td>
                    <td>
                        <li>Title</li>
                        <li>First Line</li>
                        <li>Second Line</li>
                    </td>
                    <td><a href="" uk-icon="star"  style="color:blue"></a></td>
                </tr>
                <tr>
                    <td><a href="" uk-icon="play-circle"></a></td>
                    <td>
                        <li>Title</li>
                        <li>First Line</li>
                        <li>Second Line</li>
                    </td>
                    <td><a href="" uk-icon="star"  style="color:blue"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>