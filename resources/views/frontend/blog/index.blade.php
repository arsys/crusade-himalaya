@extends('layouts.frontend')
@section('content')
<section>
    <div class="uk-section uk-section-muted">
        <div class="uk-container uk-padding-large ">
            <div uk-grid>
                <div class="uk-width-1-5 uk-visible@m"></div>
                <div class="uk-width-expand uk-padding">
                    <div class="blogIndex-header">
                        <h1 class="blogIndex-header--title">Section Title</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolor, modi a dolores
                            vitae, necessitatibus beatae error sunt expedita neque ex incidunt repudiandae harum fugiat
                            aliquam. Illum, nulla consectetur. Nostrum!</p>
                    </div>
                    <div class="blogIndex-body">
                        <h4 class="blogIndex-body--title">Latest</h4>
                        <div class="blogPost-wrapper uk-margin-medium">
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-media-top">
                                    <img src="https://source.unsplash.com/1024x512/?food" alt="">
                                </div>
                                <div class="uk-card-body uk-padding-small">
                                    <h3 class="uk-card-title blogPost--title">Media Top</h3>
                                    <div class="uk-card-badge uk-label">Badge</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="blogPost-wrapper uk-margin-medium">
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-media-top">
                                    <img src="https://source.unsplash.com/1024x512/?travel" alt="">
                                </div>
                                <div class="uk-card-body uk-padding-small">
                                    <h3 class="uk-card-title blogPost--title">Media Top</h3>
                                    <div class="uk-card-badge uk-label">Badge</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="blogPost-wrapper uk-margin-medium">
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="uk-card-media-top">
                                    <img src="https://source.unsplash.com/1024x512/?object" alt="">
                                </div>
                                <div class="uk-card-body uk-padding-small">
                                    <h3 class="uk-card-title blogPost--title">Media Top</h3>
                                    <div class="uk-card-badge uk-label">Badge</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-5 uk-visible@m"></div>
            </div>
        </div>
    </div>
</section>
@stop