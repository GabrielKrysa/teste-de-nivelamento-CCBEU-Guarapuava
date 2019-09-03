@extends('layouts.placement')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">Basic Two Questions</div>
                    <div class="col-md-8" name="question1" id="question1">
                        <br>
                        <br>
                        <form method="post" action="{{route('bacistwoverification')}}">
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
                            <label class="col-md-8 text-md-left">1) Choice the correct answers. </label>
                            <div class="col-md-10 text-md-right">
                                <label class="col-md-11 text-md-left">
                                    <p>a) Do you like <strong>Ecuador</strong> / <strong>Ecuadorian</strong>
                                        food?</p>
                                    <select class="" id="question11" name="question11" required>
                                        <option id="0">Ecuador</option>
                                        <option id="1">Ecuadorian</option>
                                    </select>
                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>b) Is your grandfather from
                                        <strong>Vietnam</strong> / <strong>Vietnamese</strong>?</p>
                                    <select class="" id="question12" name="question12" required>
                                        <option id="0">Vietnam</option>
                                        <option id="1">Vietnamese</option>
                                    </select>
                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>c) My sister spoke <strong>Italy </strong>/
                                        <strong>Italian</strong> when she was on vacation.</p>
                                    <select class=""
                                            id="question13"
                                            name="question13" required>
                                        <option id="0">Italy</option>
                                        <option id="1">Italian</option>
                                    </select>
                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>d) Did you see the pyramids in
                                        <strong>Egypt </strong> / <strong>Egyptian?</strong>
                                        <br>
                                        <select class=""
                                                id="question14"
                                                name="question14" required>
                                            <option id="0">Egypt</option>
                                            <option id="1">Egyptian</option>
                                        </select>
                                    </p>
                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>e) I <strong>do</strong> / <strong>play</strong> /
                                        <strong> go</strong> karate.
                                    </p>
                                    <select class=""
                                            id="question15"
                                            name="question15" required>
                                        <option id="0">do</option>
                                        <option id="1">play</option>
                                        <option id="1">go</option>
                                    </select>
                                </label>

                            </div>
                            <br>
                            <br>
                            <label class="col-md-12 text-md-left">2) Look at the picture. Choice the correct words in
                                the
                                questions.
                                Then write the answers with It’s or They’re and the price. </label>


                            <div class="col-md-10 text-md-right">
                                <img src="{{asset('/images/img1.png')}}">
                                <br>
                                <br>
                                <label class="col-md-11 text-md-left">
                                    <p>a) How much <strong>is this </strong>/ <strong>are
                                            these</strong>
                                        bracelet?
                                    </p>
                                    <select class="" id="question21" name="question21" required>
                                        <option id="0"> is this</option>
                                        <option id="1"> are these</option>
                                    </select>
                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>b) How much <strong>is that</strong> / <strong>are those</strong>
                                    </p>
                                    <select class="" id="question22" name="question22" required>
                                        <option id="0"> is that</option>
                                        <option id="1"> are those</option>
                                    </select>
                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>c) A How much <strong>is that </strong>/ <strong>
                                            are these</strong> earrings?
                                    </p>
                                    <select class="" id="question23" name="question23" required>
                                        <option id="0"> is that</option>
                                        <option id="1"> are these</option>
                                    </select>
                                </label>

                                <label class="col-md-11 text-md-left">
                                    <p>d) A How much <strong>is that </strong>/ <strong>
                                            are those</strong> briefcase?
                                    </p>
                                    <select class="" id="question24" name="question24" required>
                                        <option id="0"> is that</option>
                                        <option id="1"> are those</option>
                                    </select>
                                </label>
                                <br>
                                <br>
                                <label class="col-md-12 text-md-left">3) Complete the paragraph. Use the <strong> SIMPLE
                                        PAST</strong> and
                                    the words in parentheses.
                                </label>

                                <div class="col-md-12 text-md-right">
                                    <label class="col-md-14 text-md-left">
                                        <p>a) Liz <input placeholder="your answer" type="text" id="question31"
                                                         name="question31" autocomplete="off"> (go) to the
                                            movies last evening.
                                            She
                                            <input placeholder="your answer" type="text" id="question32"
                                                   name="question32" autocomplete="off">(want)
                                            to go to an
                                            outdoor concert, but it <input placeholder="your answer" type="text"
                                                                           id="question33"
                                                                           name="question33" autocomplete="off">(rain),
                                            so
                                            she <input placeholder="your answer" type="text" id="question34"
                                                       name="question34" autocomplete="off">
                                            (change) her plans. After the movies, she <input placeholder="your answer"
                                                                                             type="text" id="question35"
                                                                                             name="question35">(eat) a
                                            sandwich,
                                            <input placeholder="your answer" type="text" id="question36"
                                                   name="question36" autocomplete="off">
                                            (study)
                                            for a couple of hours. Then, it
                                            <input placeholder="your answer" type="text" id="question37"
                                                   name="question37" autocomplete="off">
                                            (be) time to go to
                                            bed. She <input placeholder="your answer" type="text" id="question38"
                                                            name="question38" autocomplete="off"> (sleep) for 8
                                            hours.
                                        </p>
                                    </label>
                                </div>

                                <br>
                                <br>
                                <label class="col-md-12 text-md-left">4) Complete the paragraph. Use
                                    <strong>WAS </strong>,
                                    <strong>WASN’T </strong>, <strong>WERE </strong>or
                                    <strong>WEREN’T</strong>.
                                </label>

                                <div class="col-md-12 text-md-right">
                                    <label class="col-md-14 text-md-left">
                                        <p>a) I remember my first swimming lesson. I
                                            <input placeholder="your answer" type="text" id="question41"
                                                   name="question41" autocomplete="off"> very old – only five – and I
                                            <input
                                                placeholder="your answer" type="text" id="question42" name="question42"
                                                autocomplete="off">

                                            very scared. I think the other kids <input placeholder="your answer"
                                                                                       type="text" id="question43"
                                                                                       name="question43"
                                                                                       autocomplete="off"> nervous, too.
                                            But the teacher,
                                            Julie,

                                            <input placeholder="your answer" type="text" id="question44"
                                                   name="question44" autocomplete="off"> very nice. We loved her, but
                                            the swimming didn’t
                                            go very well. We

                                            <input placeholder="your answer" type="text" id="question45"
                                                   name="question45" autocomplete="off"> very good students, but Julie
                                            <input
                                                placeholder="your answer" type="text" id="question46" name="question46"
                                                autocomplete="off">
                                            a wonderful
                                            teacher.

                                        </p>
                                    </label>
                                </div>

                                <br>
                                <br>
                                <label class="col-md-12 text-md-left">5) Complete the sentences with
                                    <strong>GOT</strong> or
                                    <strong>WENT</strong>.
                                </label>

                                <div class="col-md-12 text-md-right">
                                    <label class="col-md-11 text-md-left">
                                        <p>a) Yesterday, I <input placeholder="your answer" type="text" id="question51"
                                                                  name="question51" autocomplete="off">. hiking with my
                                            friends.
                                            It was great, but it was really hot and sunny. I
                                            <input placeholder="your answer" type="text" id="question52"
                                                   name="question52" autocomplete="off"> a bad sunburn.
                                        </p>
                                        <p>
                                            b) I <input placeholder="your answer" type="text" id="question53"
                                                        name="question53" autocomplete="off"> on a road trip across the
                                            U.S. with my
                                            brother. It was
                                            awful.
                                            We both
                                            <input placeholder="your answer" type="text" id="question54"
                                                   name="question54" autocomplete="off"> sick! We had to stop and stay
                                            in bed for three
                                            days.
                                        </p>
                                    </label>
                                </div>

                                <br>
                                <br>
                                <label class="col-md-12 text-md-left">6) Write the questions for the answers
                                </label>

                                <div class="col-md-12 text-md-right">
                                    <label class="col-md-11 text-md-left">
                                        <p>Example: A: <strong> </strong> How was your vacation ?<br>
                                            B: My vacation? It was fun!

                                        </p>

                                        <p>
                                            <strong>Options: </strong><br>
                                            <strong>Where did you go? </strong> <br>
                                            <strong>Who did you go with?<br> </strong>
                                            <strong> What was the weather like?<br> </strong>
                                            <strong>How long were you there?<br> </strong>
                                        </p>

                                        <p>
                                            1. A: <select class="" id="question61" name="question61" required>
                                                <option id="0">Where did you go?</option>
                                                <option id="1">Who did you go with?</option>
                                                <option id="2">What was the weather like?</option>
                                                <option id="3">How long were you there?</option>
                                            </select>
                                            <br>
                                            B:We went to New York.
                                        </p>

                                        <p>
                                            2. A: <select class="" id="question62" name="question62" required>
                                                <option id="0">Where did you go?</option>
                                                <option id="1">Who did you go with?</option>
                                                <option id="2">What was the weather like?</option>
                                                <option id="3">How long were you there?</option>
                                            </select>
                                            <br>
                                            B: I went with my family.
                                        </p>

                                        <p>
                                            3. A: <select class="" id="question63" name="question63" required>
                                                <option id="0">Where did you go?</option>
                                                <option id="1">Who did you go with?</option>
                                                <option id="2">What was the weather like?</option>
                                                <option id="3">How long were you there?</option>
                                            </select>
                                            <br>
                                            B: It was rainy, but warm.
                                        </p>

                                        <p>
                                            4. A: <select class="" id="question64" name="question64" required>
                                                <option id="0">Where did you go?</option>
                                                <option id="1">Who did you go with?</option>
                                                <option id="2">What was the weather like?</option>
                                                <option id="3">How long were you there?</option>
                                            </select>
                                            <br>
                                            B: We were there for a week.
                                        </p>
                                    </label>
                                </div>
                                <br>
                                <br>
                                <label class="col-md-12 text-md-left">7) Choice the correct words
                                </label>

                                <div class="col-md-12 text-md-right">
                                    <label class="col-md-11 text-md-left">
                                        <label class="col-md-11 text-md-left">
                                            <p>a) A How <strong>much</strong> / <strong>many</strong>
                                                fruit do you eat a day?
                                                <select class="" id="question71" name="question71" required>
                                                    <option id="0">much</option>
                                                    <option id="1">many</option>
                                                </select>
                                            </p>

                                        </label>

                                        <label class="col-md-11 text-md-left">
                                            <p>b) Well, I have
                                                <strong>banana</strong> / <strong>a banana</strong> every day for
                                                breakfast.
                                                <select class="" id="question72" name="question72" required>
                                                    <option id="0">banana</option>
                                                    <option id="1">a banana</option>
                                                </select>
                                            </p>

                                        </label>

                                        <label class="col-md-11 text-md-left">
                                            <p>c) A How <strong>much</strong> / <strong>many</strong>
                                                times a week do your parents eat meat?
                                                <select class="" id="question73" name="question73" required>
                                                    <option id="0">much</option>
                                                    <option id="1">many</option>
                                                </select>
                                            </p>

                                        </label>

                                        <label class="col-md-11 text-md-left">
                                            <p>d) They eat
                                                <strong>beef </strong> / <strong>beefs</strong>
                                                almost every day.
                                                <select class="" id="question74" name="question74" required>
                                                    <option id="0">beef</option>
                                                    <option id="1">beefs</option>
                                                </select>
                                            </p>

                                        </label>

                                        <label class="col-md-11 text-md-left">
                                            <p>e) A Does your brother eat <strong> many</strong> / <strong>much</strong>
                                                eggs?

                                                <select class="" id="question75" name="question75" required>
                                                    <option id="0">many</option>
                                                    <option id="1">much</option>
                                                </select>
                                            </p>
                                        </label>

                                        <label class="col-md-11 text-md-left">
                                            <p>f) No, he doesn’t. I bet he eats <strong> egg </strong> /
                                                <strong>eggs</strong>
                                                about once a month.
                                                <select class="" id="question76" name="question76" required>
                                                    <option id="0">egg</option>
                                                    <option id="1">eggs</option>
                                                </select>
                                            </p>
                                        </label>
                                    </label>
                                </div>
                                <br>
                                <br>
                                <label class="col-md-12 text-md-left">8) Complete the questions and answers. Use SOME or
                                    ANY.
                                </label>

                                <div class="col-md-12 text-md-right">
                                    <label class="col-md-11 text-md-left">
                                        <label class="col-md-11 text-md-left">
                                            <p>a) A Do you have <input placeholder="your answer" type="text"
                                                                       id="question81"
                                                                       name="question81"> fruit or snacks? I’m starving.

                                        </label>

                                        <label class="col-md-11 text-md-left">
                                            <p>b) No, but I have <input placeholder="your answer" type="text"
                                                                        id="question82"
                                                                        name="question82"> milk. You can have that.
                                        </label>

                                        <label class="col-md-11 text-md-left">
                                            <p>c) A It’s so hot. Do you want to come to our house? We have <input
                                                    placeholder="your answer" type="text" id="question83"
                                                    name="question83">
                                                ice
                                                cream.

                                        </label>

                                        <label class="col-md-11 text-md-left">
                                            <p>d) Sure. Do you have <input
                                                    placeholder="your answer" type="text" id="question84"
                                                    name="question84"> sprinkles? I love sprinkles.

                                            </p>
                                        </label>


                                    </label>

                                    <button class="btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
