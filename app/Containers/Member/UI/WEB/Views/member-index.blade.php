@extends('home::layouts.app')

@section('content')

    <section class="grid-container">
        <div class="grid-x">
            <div class="medium-3 columns">
                <div style="text-align: left;">
                    <p style="margin-left: 20px;"><strong>MENU</strong></p>
                    <ul class="side-nav" >
                        <li><a href="/boards">View Members</a></li>
                        <li><a href="/boards/view">Create Member</a></li>
                    </ul>
                </div>
            </div>
            <div class="medium-9 columns" style="float: left">
                <div class="card" style="">
                    <h3 class="text-center"> Create A New Member</h3>
                    <p class="text-center"> please fill details below correctly</p>
                    <form method="post" action="" style="position: center; margin-top:30px;margin-left: 200px;">
                        <div class="grid-x grid-padding-x">
                            <div class="small-3 cell">
                                <label for="right-label" class="text-left">Name: </label>
                            </div>
                            <div class="small-9 cell">
                                <input type="text" id="right-label" v-model="name">
                            </div>
                            <br><br><br>
                            <div class="small-3 cell">
                                <label for="right-label" class="text-left">Email: </label>
                            </div>
                            <div class="small-9 cell">
                                <input type="email" id="right-label" v-model="email">
                            </div>
                            <br><br><br>
                            <input type="submit" style="margin-left: 185px;" class="button" value="Submit Member">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

