@extends('layout')

@section('content')

    <h1>سحگه</h1>
    <h4>طش سحگة صديقك وأفضحه .. أو افضح روحك شكو بيها؟ 😂</h4>
    <form action="{{ route('form') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="red-text">
                    {{ $errors->first('sahga') }}
                    </div>
                    <div class="input-field col s11">

                        <label for="input"> شنو جانت السحگه؟</label>
                        <input type="text" id="input" name="sahga" value="" placeholder="اكتبها حبي اكتبها xD">
                    </div>
                    <div class="input-field col s1">
                        <i class="material-icons prefix">textsms</i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="red-text">
                            {{ $errors->first('nosahga') }}
                        </div>
                        <div class="input-field col s11">

                            <label for="input">شنو الكلمة الأصليه؟</label>
                            <input type="text" id="input" name="nosahga" value="" placeholder="حتى نضحك زين xD">
                        </div>
                        <div class="input-field col s1">
                            <i class="material-icons prefix">done</i>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="red-text">
                            {{ $errors->first('name') }}
                        </div>
                        <div class="input-field col s11">

                            <label for="input">منو الي سحگها؟</label>
                            <input type="text" id="input" name="name" value="" placeholder="منو هالمفضوح؟ xD">
                        </div>
                        <div class="input-field col s1">
                            <i class="material-icons prefix">face</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h5>حبي ميحتاج تحط اسمك .. خليه يلطم بهالمفاجأة الحلوة xD</h5>
        </div>
        <div class="row">
            <button class="btn waves-effect brand" type="submit" name="submit">طش عيني طش
                <i class="material-icons right">send</i>
            </button>
        </div>

    </form>



@endsection
