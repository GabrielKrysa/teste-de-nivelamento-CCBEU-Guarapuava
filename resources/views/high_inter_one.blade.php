@extends('layouts.placement')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">High Intermediate Questions</div>
                    <div class="col-md-8" name="question1" id="question1">
                        <br>
                        <br>
                        <form method="post" action="{{route('highinteroneverification')}}">
                            @csrf
                            @if(asset($students))
                                <div class="col-md-8 text-md-left">
                                    <select name="student" id="student">
                                        @foreach($students as $student)
                                            <option id="{{$student->id}}">{{$student->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                            <label class="col-md-11 text-md-left">1) Complete the sentences with the correct adjective
                                or
                                adverb form of the words in the box.
                            </label>
                            <div class="col-md-10 text-md-right">
                                <label class="col-md-11 text-md-left">
                                    <p>a) Some young people don’t write <select class="" id="question11"
                                                                                name="question11" required>
                                            <option id="0">correct</option>
                                            <option id="1">correctly</option>
                                        </select>. They make a lot of grammatical mistakes.
                                    </p>
                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>b) I heard a lot of <select class="" id="question12" name="question12" required>
                                            <option id="0">loud</option>
                                            <option id="1">loudly</option>
                                        </select> music last night. I guess our neighbors were having a
                                        party.
                                    </p>

                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>c) Why does Jerry always drive so <select class=""
                                                                                 id="question13"
                                                                                 name="question13" required>
                                            <option id="0">reckless</option>
                                            <option id="1">recklessly</option>
                                        </select>? If he doesn’t slow down, he’s going
                                        to have an accident.
                                    </p>

                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>John always works on weekends. He shouldn’t work so <select class=""
                                                                                                   id="question14"
                                                                                                   name="question14"
                                                                                                   required>
                                            <option id="0">hard</option>
                                            <option id="1">hardly</option>
                                        </select> .
                                    </p>
                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>e) We don’t like our new neighborhood. It doesn’t seem very <select class=""
                                                                                                           id="question15"
                                                                                                           name="question15"
                                                                                                           required>
                                            <option id="0">safe</option>
                                            <option id="1">safely</option>
                                        </select> to us.

                                    </p>

                                </label>

                            </div>
                            <br>
                            <br>

                            <label class="col-md-11 text-md-left">2) Complete the conversation with the present perfect
                                or the simple past.
                            </label>
                            <div class="col-md-10 text-md-right">
                                <label class="col-md-11 text-md-left">
                                    <p>a) A: <input placeholder="your answer" type="text" id="question211"
                                                    name="question211" autocomplete="off"> you ever <input
                                            placeholder="your answer" type="text" id="question212"
                                            name="question31" autocomplete="off"> be to Istambul? <br>
                                        B: No, I <input placeholder="your answer" type="text" id="question213"
                                                        name="question213" autocomplete="off"> . How about you?</p>

                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>b) A: Yes, <input placeholder="your answer" type="text" id="question221"
                                                         name="question221" autocomplete="off"> (be) there a couple of
                                        years ago. It’s really interesting.<br>
                                        B:What <input placeholder="your answer" type="text" id="question222"
                                                      name="question222" autocomplete="off"> you <input
                                            placeholder="your answer" type="text" id="question223"
                                            name="question223" autocomplete="off"> (do) there?
                                    </p>

                                </label>
                                <label class="col-md-11 text-md-left">
                                    <p>c) A: Oh, we <input placeholder="your answer" type="text" id="question231"
                                                           name="question231" autocomplete="off"> (see) the sights and
                                        <input placeholder="your answer" type="text" id="question232"
                                               name="question232" autocomplete="off"> (go) shopping for rugs and leather
                                        goods.<br>
                                        B: Sounds great. I <input placeholder="your answer" type="text"
                                                                  id="question233"
                                                                  name="question233" autocomplete="off"> always <input
                                            placeholder="your answer" type="text" id="question234"
                                            name="question234" autocomplete="off">
                                        (want) to see Turkey, but I <input placeholder="your answer" type="text"
                                                                           id="question235"
                                                                           name="question35" autocomplete="off"> never
                                        <input placeholder="your answer" type="text" id="question236"
                                               name="question236" autocomplete="off">
                                        (have) the chance.

                                    </p>

                                </label>


                            </div>
                            <br>
                            <br>

                            <label class="col-md-11 text-md-left">3) Choose the correct adjective and complete each
                                question and answer.
                            </label>
                            <div style="border-width: 2px;border-style: solid; height:35px; width:500px;"
                                 align="center">
                                <label> Hot - wide - long - tall
                                </label>
                            </div>
                            <br>
                            <div class="col-md-10 text-md-right">
                                <label class="col-md-11 text-md-left">
                                    <p>a) A: The Amazon is <input placeholder="your answer" type="text"
                                                                  id="question311"
                                                                  name="question311" autocomplete="off"> never
                                        river in South America.<br>
                                        B:How <input placeholder="your answer" type="text"
                                                     id="question312"
                                                     name="question312" autocomplete="off"> ?
                                    </p>

                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>b) A: Death Valley is <input placeholder="your answer" type="text"
                                                                    id="question321"
                                                                    name="question321" autocomplete="off"> place in
                                        North America. <br>

                                        B:How <input placeholder="your answer" type="text"
                                                     id="question322"
                                                     name="question322" autocomplete="off"> ?

                                    </p>

                                </label>
                                <label class="col-md-11 text-md-left">
                                    <p>c) The red woods are <input placeholder="your answer" type="text"
                                                                   id="question331"
                                                                   name="question331" autocomplete="off"> trees in the
                                        world.<br>
                                        B:How <input placeholder="your answer" type="text"
                                                     id="question332"
                                                     name="question332" autocomplete="off"> ?


                                    </p>

                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>d) A: The Grand Canyon is <input placeholder="your answer" type="text"
                                                                        id="question341"
                                                                        name="question341" autocomplete="off"> canyon in
                                        the world.<br>
                                        B:How <input placeholder="your answer" type="text"
                                                     id="question342"
                                                     name="question342" autocomplete="off"> ?


                                    </p>

                                </label>

                            </div>
                            <br>
                            <br>

                            <label class="col-md-11 text-md-left">4) Check the correct word or phrase for each person.
                            </label>

                            <div class="col-md-10 text-md-right">
                                <label class="col-md-11 text-md-left">
                                    <p>a) When Dan plays a sport, he wants to win.<br>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="materialChecked"
                                               name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">competitive</label><br>
                                        <input type="radio" class="form-check-input"
                                               id="materialChecked" name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">easygoing</label><br>
                                        <input
                                            type="radio" class="form-check-input" id="materialChecked"
                                            name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">friendly</label><br>
                                    </div>
                                    </p>

                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>b) Marta loves to be with people.<br>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="materialChecked"
                                               name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">arrogant</label><br>
                                        <input type="radio" class="form-check-input"
                                               id="materialChecked" name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">helpful</label><br>
                                        <input
                                            type="radio" class="form-check-input" id="materialChecked"
                                            name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">outgoing</label><br>
                                    </div>
                                    </p>

                                </label>
                                <label class="col-md-11 text-md-left">
                                    <p>c) Sally likes to give things to her friends.
                                        <br>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="materialChecked"
                                               name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">honest</label><br>
                                        <input type="radio" class="form-check-input"
                                               id="materialChecked" name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">generous</label><br>
                                        <input
                                            type="radio" class="form-check-input" id="materialChecked"
                                            name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">practical</label><br>
                                    </div>
                                    </p>

                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>d) Josh’s friends and co-workers can always count on him.<br>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="materialChecked"
                                               name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">reliable</label><br>
                                        <input type="radio" class="form-check-input"
                                               id="materialChecked" name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">talented</label><br>
                                        <input
                                            type="radio" class="form-check-input" id="materialChecked"
                                            name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">versatile</label><br>
                                    </div>
                                    </p>

                                </label>
                                <label class="col-md-11 text-md-left">
                                    <p>e) Rob is always thinking of new ways to do things.
                                        <br>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="materialChecked"
                                               name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">cool</label><br>
                                        <input type="radio" class="form-check-input"
                                               id="materialChecked" name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">serious</label><br>
                                        <input
                                            type="radio" class="form-check-input" id="materialChecked"
                                            name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">creative</label><br>
                                    </div>
                                    </p>

                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>f) Jennifer doesn’t know how to do her job.
                                        <br>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="materialChecked"
                                               name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">accomplished</label><br>
                                        <input type="radio" class="form-check-input"
                                               id="materialChecked" name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">humble</label><br>
                                        <input
                                            type="radio" class="form-check-input" id="materialChecked"
                                            name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">incompetent</label><br>
                                    </div>
                                    </p>

                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>
                                        g) You can always count on my brother.
                                        <br>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="materialChecked"
                                               name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">outgoing</label><br>
                                        <input type="radio" class="form-check-input"
                                               id="materialChecked" name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">reliable</label><br>
                                        <input
                                            type="radio" class="form-check-input" id="materialChecked"
                                            name="materialExampleRadios">
                                        <label class="form-check-label" for="materialChecked">laid-back</label><br>
                                    </div>
                                    </p>

                                </label>
                            </div>
                            <br>
                            <br>
                            <button class="btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
