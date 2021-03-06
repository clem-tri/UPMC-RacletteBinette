<div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
    <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
        <div class="card-header" style="background-color:#68B42F; border-color:white;"><span class="title_auth"><p style="color:white">Vos détails personnels</p></span> </div> </div>

    <div class="card-body" style="background-color:white;">
        @php
        $firstName = $lastName = $phone = "";
        if (Auth::check()) {
            $firstName = Auth::user()->first_name;
            $lastName = Auth::user()->last_name;
            $phone = Auth::user()->phone;
        }
        @endphp

        <div class="row">
            <div class="form-group  col-6">
                <label style="color:#68B42F; font-weight: bold;" class="control-label" for="input-user-first-name">Prénom :</label>
                <input type="text" name="billing[first_name]"
                       value="{{ $firstName }}" placeholder="Prénom"
                       id="input-user-first-name"
                       @if($errors->has('billing.first_name'))
                       class="is-invalid form-control"
                       @else
                       class="form-control"
                        @endif
                />
                @if ($errors->has('billing.first_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('billing.first_name') }}
                    </div>
                @endif

            </div>

            <div class="form-group  col-6">
                <label style="color:#68B42F; font-weight: bold;" class="control-label" for="input-user-last-name">Nom :</label>
                <input type="text" name="billing[last_name]"
                       value="{{ $lastName }}" placeholder="Nom"
                       id="input-user-last-name"
                       @if($errors->has('billing.last_name'))
                       class="is-invalid form-control"
                       @else
                       class="form-control"
                        @endif
                />
                @if ($errors->has('billing.last_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('billing.last_name') }}
                    </div>
                @endif
            </div>
        </div>

        @if(!Auth::check())

            <div style="color:#68B42F; font-weight: bold;" class="form-group">
                <label class="control-label" for="input-user-email">E-Mail :</label>
                <input
                        type="text"
                        name="user[email]" placeholder="E-Mail"
                        id="input-user-email"

                        @if($errors->has('user.email'))
                        class="is-invalid form-control"
                        @else
                        class="form-control"
                        @endif
                >
                @if ($errors->has('user.email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user.email') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label style="color:#68B42F; font-weight: bold;">
                    <input type="checkbox" name="register"
                           onclick="if (this.checked == true) jQuery('.register-form').css('display','block');
                                                      else jQuery('.register-form').css('display','none');">
                    &nbsp;M'inscrire
                </label>
            </div>


            <div class="register-form" style="display: none;">
                <div class="row">
                    <div class="form-group  col-6">
                        <label style="color:#68B42F" class="control-label"
                               for="input-billing-password">Mot de passe :</label>
                        <input type="password" name="user[password]" placeholder="Mot de passe"
                               id="input-billing-password"

                               @if($errors->has('user.password'))
                               class="is-invalid form-control"
                               @else
                               class="form-control"
                                @endif
                        />
                        @if ($errors->has('user.password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('user.password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group  col-6">
                        <label style="color:#68B42F; font-weight: bold;" class="control-label" for="input-billing-confirm">Confirmer mot de passe :</label>
                        <input type="password" name="user[confirm_password]"
                               placeholder="Password Confirm"
                               id="input-billing-confirm"
                               @if($errors->has('user.confirm_password'))
                               class="is-invalid form-control"
                               @else
                               class="form-control"
                                @endif
                        />

                        @if ($errors->has('user.confirm_password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('user.confirm_password') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        @endif

        <div class="form-group">
            <label style="color:#68B42F; font-weight: bold;" class="control-label" for="input-billing-phone">Téléphone :</label>
            <input type="text" name="billing[phone]" value="{{ $phone }}" placeholder="Téléphone"
                   id="input-billing-phone"
                   @if($errors->has('billing.phone'))
                   class="is-invalid form-control"
                   @else
                   class="form-control"
                    @endif
            />
            @if ($errors->has('billing.phone'))
                <div class="invalid-feedback">
                    {{ $errors->first('billing.phone') }}
                </div>
            @endif
        </div>
    </div>
</div>