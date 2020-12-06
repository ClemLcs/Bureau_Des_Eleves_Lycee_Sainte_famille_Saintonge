@extends('layouts.app')
@section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="https://www.lyceesaintefamille.com/wp-content/uploads/sites/115/2018/06/Logo-2016.jpg" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="/login_task" method="post">
                            @csrf
                                <div class="form-group">
                                    <label>Adresse email: </label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Adresse email">
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe:</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Mot de passe">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Se souvenir de moi
                                    </label>
                                    <label>
                                        <a href="#">Mot de passe oublié ?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Connexion</button>
                
                            </form>
                            <div class="register-link">
                                <p>
                                    Vous n'avez pas de compte ?
                                    <a href="/register">Crée un compte</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection